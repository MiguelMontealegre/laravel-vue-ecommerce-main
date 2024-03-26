<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaginationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'per_page'     => ['integer'],
            'page' => ['integer'],
            'sort_field'  => ['string'],
            'sort_direction' => ['in:asc,desc'],
            'search'         => ['max:800'],
        ];
    }
}
