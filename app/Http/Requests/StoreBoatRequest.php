<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBoatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'user_id' => [
                'exists:users,id'
            ],

            'support' => [
                'required',
                'integer'
            ],

            'partner_name' => [
                'nullable',
                'string',
                'max:255'
            ],

            'partner_email' => [
                'nullable',
                'email'
            ],

            'title' => [
                'required',
                'string',
                'max:255'
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'boat_type' => [
                'nullable',
                'string',
                'max:100'
            ],

            'harbour' => [
                'nullable',
                'string',
                'max:255'
            ],

            'manufacturer' => [
                'nullable',
                'string',
                'max:255'
            ],

            'model' => [
                'nullable',
                'string',
                'max:255'
            ],

            'onboard_capacity' => [
                'nullable',
                'integer',
                'min:1'
            ],

            'cabins' => [
                'nullable',
                'integer',
                'min:0'
            ],

            'sleeping_capacity' => [
                'nullable',
                'integer',
                'min:0'
            ],

            'bathrooms' => [
                'nullable',
                'integer',
                'min:0'
            ],

            'year_built' => [
                'nullable',
                'integer',
                'digits:4'
            ],

            'length_type' => [
                'nullable',
                'in:feet,meter'
            ],

            'length' => [
                'nullable',
                'numeric'
            ],

            'consumption' => [
                'nullable',
                'numeric'
            ],

            'speed' => [
                'nullable',
                'numeric'
            ],

            'crew' => [
                'nullable',
                'integer'
            ],

            'engine' => [
                'nullable',
                'string'
            ],

            'tender' => [
                'nullable',
                'boolean'
            ],

            'cancellation_policy' => [
                'nullable',
                'integer'
            ],

            'fuel_cost' => [
                'nullable',
                'in:Included,Excluded'
            ],

            'captain' => [
                'nullable',
                'boolean'
            ],

            'check_in' => [
                'nullable',
                'date_format:H:i'
            ],

            'check_out' => [
                'nullable',
                'date_format:H:i'
            ],

            'security_deposit' => [
                'nullable',
                'numeric'
            ],

            'insurance_document' => [
                'nullable',
                'file',
                'mimes:pdf,jpg,jpeg,png',
                'max:5120'
            ],

            'photos' => [
                'nullable',
                'array'
            ],

            'photos.*' => [
                'image',
                'mimes:jpg,jpeg,png',
                'max:10240'
            ],

            'amenities' => [
                'nullable',
                'array'
            ],

            'amenities.*' => [
                'exists:amenities,id'
            ],

            'prices' => [
                'nullable',
                'array'
            ],

            'prices.*.period' => [
                'required_with:prices',
                'string'
            ],

            'prices.*.price' => [
                'required_with:prices',
                'numeric'
            ],

            'unavailable_dates' => [
                'nullable',
                'array'
            ],

            'unavailable_dates.*' => [
                'date'
            ]
        ];
    }
}
