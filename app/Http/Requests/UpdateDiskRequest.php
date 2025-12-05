<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDiskRequest extends FormRequest
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
            'name' => [
                'sometimes',
                'string',
                'max:255',
                Rule::unique('disks', 'name')->ignore($this->disk),
            ],
            'driver' => [
                'sometimes',
                'string',
                Rule::in(['local', 's3', 'ftp', 'sftp']),
            ],
            'configuration' => [
                'sometimes',
                'array'
            ],
            'is_active' => [
                'sometimes',
                'boolean:'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'name.unique' => 'A disk with this name already exist',
            'driver.in' => 'The selected driver is not supported'
        ];
    }
}
