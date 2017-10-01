<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
             'name'=>'required|unique:projects|max:255',
             'thumbnail'=>'file|dimensions:min_width:261,min_height:98'
         ];
     }

     public function messages()
     {
         return[
           'name.required'=>'项目名称必填',
           'name.unique'=>'已存在项目名称'
         ];
     }
 }
