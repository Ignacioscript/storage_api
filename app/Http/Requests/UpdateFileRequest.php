<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFileRequest extends FormRequest
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
        // For file updates, we only allow changing the name and metadata.
        //  You can't change the actual file or which disk it's on!
        return [
            'name' => [
                'sometimes',
                'string',
                'max:255'
            ],
            'metadata' => [
                'sometimes',
                'array'
            ],
        ];
    }
}
