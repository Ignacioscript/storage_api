<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDiskRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('disks', 'name'), //unique values on table:disks, column: name
            ],
            'driver' => [
                'required',
                'string',
                Rule::in([ // must be one of this like an optional
                    'local',
                    's3',
                    'ftp',
                    'sftp'
                ]),
            ],
            'configuration' => 'nullable|array',
            'is_active' => 'sometimes|boolean'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please provide a name for disk.',
            'name.unique' => 'A disk with this name already exists.',
            'driver.required' => 'Please specify a storage driver',
            'driver.in' => 'The selected driver is not supported',
        ];
    }

    public function attributes(): array
    {
        return [
            'is_active' => 'active status', // This replace The "is_active" for "active status" must be true or false.
        ];
    }


    /** Laravel internally expects:

    rules()

    messages()

    attributes()

    authorize() */


}
