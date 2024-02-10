<x-layout title="Editar Cliente: {{ $pessoaJuridica->name }}">
    <x-pessoasjuridicas.form :action="route('pessoasjuridicas.update', $pessoaJuridica->id)" 
    :name="$pessoaJuridica->name"
    :cnpj="$pessoaJuridica->cnpj"
    :company_phone="$pessoaJuridica->company_phone"
    :address="$pessoaJuridica->address"
    :complement="$pessoaJuridica->complement"
    :number="$pessoaJuridica->number"
    :neighborhood="$pessoaJuridica->neighborhood"
    :zipCode="$pessoaJuridica->zipCode"
    :city="$pessoaJuridica->city"
    :state="$pessoaJuridica->state"/>
</x-layout>