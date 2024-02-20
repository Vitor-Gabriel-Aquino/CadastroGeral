<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CpfValidation implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
    $cpf = preg_replace('/[^0-9]/', '', (string) $value);
    
    if (strlen($cpf) != 11) {
        return false;
    }

    for ($i = 0, $j = 10, $sum = 0; $i < 9; $i++, $j--)
        $sum += $cpf[$i] * $j;
    $rest = $sum % 11;
    if ($cpf[9] != ($rest < 2 ? 0 : 11 - $rest))
        return false;

    for ($i = 0, $j = 11, $sum = 0; $i < 10; $i++, $j--)
        $sum += $cpf[$i] * $j;
    $rest = $sum % 11;

    return $cpf[10] == ($rest < 2 ? 0 : 11 - $rest);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Digite um CPF válido.';
    }
}