<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CopyFileRequest extends FormRequest
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
            'destination_disk_id' => [
                'required',
                'integer',
                Rule::exists('disk', 'id'),
                'different:source_disk_id' // destination_disk_id != source_disk_id
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
            'destination_disk_id.required' => 'Please specify the destination disk.',
            'destination_disk_id.exists' => 'The destination disk does not exist.',
            'destination_disk_id.different' => 'The destination disk must be different from the source disk.',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void //build-in laravel method like messages runs before validation
    {
        $file = $this->route('file');

        $this->merge([
            'source_disk_id' => $file?->disk_id
        ]);
    }
}
