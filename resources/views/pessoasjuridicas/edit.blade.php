<x-layout title="Editar Cliente: {{ $pessoajuridica->name }}">
    <x-pessoasjuridicas.pessoaJuridicaForm :action="route('pessoasjuridicas.update', $pessoajuridica->id)"
    :name="$pessoajuridica->name"
    :cnpj="$pessoajuridica->cnpj"
    :email="$pessoajuridica->email"
    :company_phone="$pessoajuridica->company_phone"
    :address="$pessoajuridica->address"
    :complement="$pessoajuridica->complement"
    :number="$pessoajuridica->number"
    :neighborhood="$pessoajuridica->neighborhood"
    :zipCode="$pessoajuridica->zipCode"
    :city="$pessoajuridica->city"
    :state="$pessoajuridica->state"/>
</x-layout>

