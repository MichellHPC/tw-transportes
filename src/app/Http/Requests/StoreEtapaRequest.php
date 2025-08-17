<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\FreteStatus;

class StoreEtapaRequest extends FormRequest
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
            'descricao' => ['required', 'string', 'max:255'],
            'frete_id'  => ['required', 'exists:fretes,id'],
            'tipo_etapa' => ['required', Rule::in([
                FreteStatus::PENDENTE->name, 
                FreteStatus::EM_TRANSITO->name, 
                FreteStatus::SAIU_PARA_ENTREGA->name, 
                FreteStatus::ENTREGUE->name
            ])]
        ];
    }
}
