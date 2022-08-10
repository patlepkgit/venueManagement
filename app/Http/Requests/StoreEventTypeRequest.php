<?php

namespace App\Http\Requests;

use App\EventType;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEventTypeRequest extends FormRequest
{
    public function authorize()
    {
        // return Gate::allows('event_type_create');
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'slug' => [
                'string',
                'required',
            ],
        ];
    }
}