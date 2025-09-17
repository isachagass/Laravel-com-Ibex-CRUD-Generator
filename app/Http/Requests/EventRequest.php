<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'name' => 'string|max:80|required',
			'description' => 'string|required|min:200',
            'date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|after_or_equal:start_time|date_format:H:i:s',
            'type_id' => 'required',
            'latitude' => ['required',
                            'numeric',
                            'min:30.700000',
                            'max:31.530000',
                            'regex:/^\d{2}\.\d{6}$/'],
            'longitude' => ['required',
                            'numeric',
                            'min:120.850000',
                            'max:122.120000',
                            'regex:/^\d{3}\.\d{6}$/'],
            'district_id' => "required",

			'access_link' => '|required|string',
            'ticket_quantity' => 'numeric|min:20|nullable'
        ];
    }
}
