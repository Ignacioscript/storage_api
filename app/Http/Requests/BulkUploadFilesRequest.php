<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BulkUploadFilesRequest extends FormRequest
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
                Rule::exists('disks', 'id')
            ],
            'files' => [
                'required',
                'array',
                'min:1',
                'max:20' // Maximum 20 files at once
            ],
            'files.*' => [ // using .* this is a validation for each type of the file inside the files array like css
                'required',
                'file',
                'max:102400' //100MB per file
            ],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'files.required' => 'Please select at least one file to upload.',
            'files.min' => 'Please select at least one file to upload.',
            'files.max' => 'You can upload a maximum of 20 files at once.',
            'files.*.file' => 'All items must be valid files.',
            'files.*.max' => 'Each file cannot exceed 100MB.',
        ];
    }
}
