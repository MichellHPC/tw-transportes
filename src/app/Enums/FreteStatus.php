<?php

namespace App\Enums;

enum FreteStatus: string
{
    case PENDENTE = 'Pendente';
    case EM_TRANSITO = 'Em Trânsito';
    case SAIU_PARA_ENTREGA = 'Saiu para Entrega';
    case ENTREGUE = 'Entregue';

    public function getTagColor(): string
    {
        return match($this) {
            self::PENDENTE => 'bg-yellow-500 text-white',
            self::EM_TRANSITO => 'bg-blue-500 text-white',
            self::SAIU_PARA_ENTREGA => 'bg-purple-500 text-white',
            self::ENTREGUE => 'bg-green-500 text-white',
        };
    }

    public static function fromName(string $name): ?self
    {

        foreach(FreteStatus::cases() as $case) {
            
            if($case->name === $name) {
                return $case;
            }

        }

        return null;
    }

    public static function toNameValueArray()
    {
        return collect(FreteStatus::cases())
            ->mapWithKeys(fn($case) => [$case->name => $case->value])
            ->toArray();
    }
}
