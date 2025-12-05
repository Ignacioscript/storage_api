<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFileRequest extends FormRequest
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
            'disk_id' => [
                'required',
                'integer',
                Rule::exists('disks', 'id') // must exist with id in the disk's table
            ],
            'file' => [
                'required',
                'file',
                'max:102400'
            ],
            'metadata' => [
                'sometimes',
                'array'
            ],
        ];
    }

    public function messages(): array
    {
        //field.rule
        return [
            'disk_id.required' => 'Please specify which disk to upload to',
            'disk_id.exists' => 'The specified disk does not exist',
            'file.required' => 'Please select a file to upload',
            'file.max' => 'The file size cannot exceed 100MB.'
        ];
    }
}
