<?php

namespace App\Http\Requests\UserProfile;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'firstname' => 'required|string|max:12',
            'lastname' => 'required | string | max:20',
            'phone' => 'required|numeric',
//            'photo' => 'image|sometimes|mimes:jpg,bmp,png,jpeg|max:512|dimensions:width=1024,height=600'
            'photo' => 'image|sometimes|mimes:jpg,bmp,png,jpeg|max:512|dimensions:ratio=5/3'

        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'ველი: "სახელი"-ის შევსება სავალდებულოა.',
            'firstname.max' => 'სახელი არ უნდა აღემატებოდეს 12 სიმბოლოს.',

            'lastname.required' => 'ველი: "გვარი"-ის შევსება სავალდებულოა.',
            'lastname.max' => 'გვარი არ უნდა აღემატებოდეს 20 სიმბოლოს.',

            'phone.required' => 'ველი: "მობილური"-ის შევსება სავალდებულოა.',
            'phone.min' => 'მობილურ ნომერი უნდა იყოს 9 ციფრი, ფორმატით: 5xx xxx xxx',
            'phone.max' => 'მობილურ ნომერი უნდა იყოს 9 ციფრი, ფორმატით: 5xx xxx xxx.',
            'phone.numeric' => 'მობილურის ნომერი უნდა შედგებოდეს მხოლოდ ციფრებისგან.',

            'photo.mimes' => 'ფოტო უნდა იყოს ერთ-ერთი ფორმატი: Jpg; Jpeg; Png; Bmp.',
            'photo.max' => 'ფოტო არ უნდა აღემატებოდეს 512 კილობაიტს.',
            'photo.dimensions' => 'სურათი უნდა იყოს 5:3 პროპორციით.',
        ];
    }

}
