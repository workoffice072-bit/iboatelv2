<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Nnjeim\World\World;
use Stevebauman\Location\Facades\Location;

class CountryStateCity extends Component
{
    public $countries;
    public $selectedCountry;
    public $prefix;
    /**
     * Create a new component instance.
     */
    public function __construct($prefix = 'user')
    {
        $this->prefix = $prefix;

        // Correct
        $this->countries = World::countries([
            'fields' => 'id,name,iso2',
        ])->data;

          /**
         * Default Country = India
         */
        $this->selectedCountry = 102;

        /**
         * Detect User Country
         */
        $location = Location::get(request()->ip());

        if ($location && $location->countryCode) {

            $country = collect($this->countries)

                ->firstWhere(
                    'iso2',
                    strtoupper($location->countryCode)
                );

            if ($country) {

                $this->selectedCountry =
                    $country->id;
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.country-state-city');
    }
}
