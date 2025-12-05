<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BulkDeleteFilesRequest extends FormRequest
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
            'file_ids' => [
                'required',
                'array',
                'min:1',
            ],
            'file_ids.*' => [ //rules for each item inside files_ids array [file->id, file2->id, file3->id..]
                'required',
                'integer',
                Rule::exists('files', 'id')
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
            'file_ids.required' => 'Please provide file IDs to delete.',
            'file_ids.array' => 'File IDs must be provided as an array.',
            'file_ids.min' => 'Please provide at least one file ID.',
            'file_ids.*. integer' => 'Each file ID must be an integer.',
            'file_ids.*.exists' => 'One or more file IDs do not exist.',
        ];
    }
}
