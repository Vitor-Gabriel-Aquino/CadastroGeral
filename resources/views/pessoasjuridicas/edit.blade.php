<x-layout title="Editar Cliente: {{ $pessoaJuridica->name }}">
    <x-pessoasjuridicas.form :action="route('pessoasjuridicas.update', $pessoaJuridica->id)" 
    :name="$pessoaJuridica->name"
    :email="$pessoaJuridica->cnpj"
    :cpf="$pessoaJuridica->company_phone"/>
</x-layout>