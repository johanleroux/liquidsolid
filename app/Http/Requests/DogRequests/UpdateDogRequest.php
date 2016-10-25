<?php

namespace App\Http\Requests\DogRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDogRequest extends FormRequest
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

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    return [
      'gender' => 'required|boolean',
      'breed' => 'required|string',
      'location' => 'required|string',
      'price_range_low' => 'required|numeric',
      'price_range_high' => 'required|numeric',
      'notes' => 'string'
    ];
  }
}
