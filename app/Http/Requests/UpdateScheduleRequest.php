<?php

namespace App\Http\Requests;

use Brick\Math\BigInteger;
use Illuminate\Foundation\Http\FormRequest;

class UpdateScheduleRequest extends FormRequest
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
            'student_id'=>'BigInteger', 
            'subject_id'=>'BigInteger', 
            'schedule_date'=>'date', 
            'schedule_type'=>'string',
        ];
    }
}
