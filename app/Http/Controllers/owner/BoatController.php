<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use App\Models\Boat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBoatRequest;
use App\Http\Requests\UpdateBoatRequest;

class BoatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('owner.boat_list');
    }

    public function yachtChater(){
       return view('owner.yacht_chater_add');
    }
    public function sleepBoat(){
        return view('owner.sleep_boat_add');
    }
    public function YachtStore(StoreBoatRequest $request)
    {
        DB::beginTransaction();

        try {

            $boat = Boat::create([
                'user_id' => Auth::user()->id,
                'support' => $request->support,
                'partner_name' => $request->partner_name,
                'partner_email' => $request->partner_email,
                'title' => $request->title,
                'description' => $request->description,
                'boat_type' => $request->boat_type,
                'harbour' => $request->harbour,
                'manufacturer' => $request->manufacturer,
                'model' => $request->model,
            ]);

            $insurancePath = null;

            if ($request->hasFile('insurance_document')) {
                $insurancePath = $request
                    ->file('insurance_document')
                    ->store('boats/insurance', 'public');
            }

            $boat->technicalDetail()->create([
                'onboard_capacity' => $request->onboard_capacity,
                'cabins' => $request->cabins,
                'sleeping_capacity' => $request->sleeping_capacity,
                'bathrooms' => $request->bathrooms,
                'year_built' => $request->year_built,
                'length_type' => $request->length_type,
                'length' => $request->length,
                'consumption' => $request->consumption,
                'speed' => $request->speed,
                'crew' => $request->crew,
                'engine' => $request->engine,
                'tender' => $request->tender,
                'cancellation_policy' => $request->cancellation_policy,
                'fuel_cost' => $request->fuel_cost,
                'captain' => $request->captain,
                'check_in' => $request->check_in,
                'check_out' => $request->check_out,
                'security_deposit' => $request->security_deposit,
                'insurance_document' => $insurancePath,
            ]);

            if ($request->filled('prices')) {

                foreach ($request->prices as $price) {

                    $boat->prices()->create([
                        'period' => $price['period'],
                        'price' => $price['price']
                    ]);
                }
            }

            if ($request->filled('unavailable_dates')) {

                foreach ($request->unavailable_dates as $date) {

                    $boat->unavailableDates()->create([
                        'date' => $date
                    ]);
                }
            }

            if ($request->filled('amenities')) {

                $boat->amenities()->sync(
                    $request->amenities
                );
            }

            if ($request->hasFile('photos')) {

                foreach ($request->file('photos') as $index => $photo) {

                    $path = $photo->store(
                        'boats/photos',
                        'public'
                    );

                    $boat->photos()->create([
                        'image' => $path,
                        'is_primary' => $index == 0
                    ]);
                }
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Boat created successfully',
                'data' => $boat->load([
                    'technicalDetail',
                    'prices',
                    'photos',
                    'amenities',
                    'unavailableDates'
                ])
            ], 201);

        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function YachtUpdate(
        UpdateBoatRequest $request,
        Boat $boat
    ) {
        DB::beginTransaction();

        try {

            $boat->update([
                'owner_id' => $request->owner_id,
                'support' => $request->support,
                'partner_name' => $request->partner_name,
                'partner_email' => $request->partner_email,
                'title' => $request->title,
                'description' => $request->description,
                'boat_type' => $request->boat_type,
                'harbour' => $request->harbour,
                'manufacturer' => $request->manufacturer,
                'model' => $request->model,
            ]);

            $technical = $boat->technicalDetail;

            $insurancePath = $technical?->insurance_document;

            if ($request->hasFile('insurance_document')) {

                $insurancePath = $request
                    ->file('insurance_document')
                    ->store('boats/insurance', 'public');
            }

            $boat->technicalDetail()->updateOrCreate(
                ['boat_id' => $boat->id],
                [
                    'onboard_capacity' => $request->onboard_capacity,
                    'cabins' => $request->cabins,
                    'sleeping_capacity' => $request->sleeping_capacity,
                    'bathrooms' => $request->bathrooms,
                    'year_built' => $request->year_built,
                    'length_type' => $request->length_type,
                    'length' => $request->length,
                    'consumption' => $request->consumption,
                    'speed' => $request->speed,
                    'crew' => $request->crew,
                    'engine' => $request->engine,
                    'tender' => $request->tender,
                    'cancellation_policy' => $request->cancellation_policy,
                    'fuel_cost' => $request->fuel_cost,
                    'captain' => $request->captain,
                    'check_in' => $request->check_in,
                    'check_out' => $request->check_out,
                    'security_deposit' => $request->security_deposit,
                    'insurance_document' => $insurancePath,
                ]
            );

            $boat->prices()->delete();

            if ($request->filled('prices')) {

                foreach ($request->prices as $price) {

                    $boat->prices()->create([
                        'period' => $price['period'],
                        'price' => $price['price']
                    ]);
                }
            }

            $boat->unavailableDates()->delete();

            if ($request->filled('unavailable_dates')) {

                foreach ($request->unavailable_dates as $date) {

                    $boat->unavailableDates()->create([
                        'date' => $date
                    ]);
                }
            }

            $boat->amenities()->sync(
                $request->amenities ?? []
            );

            if ($request->hasFile('photos')) {

                foreach ($request->file('photos') as $index => $photo) {

                    $path = $photo->store(
                        'boats/photos',
                        'public'
                    );

                    $boat->photos()->create([
                        'image' => $path,
                        'is_primary' => $index == 0
                    ]);
                }
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Boat updated successfully',
                'data' => $boat->fresh()->load([
                    'technicalDetail',
                    'prices',
                    'photos',
                    'amenities',
                    'unavailableDates'
                ])
            ]);

        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
