<?php

namespace App\Http\Requests;

class UpdateBoatRequest extends StoreBoatRequest
{
    public function rules(): array
    {
        return parent::rules();
    }
}
