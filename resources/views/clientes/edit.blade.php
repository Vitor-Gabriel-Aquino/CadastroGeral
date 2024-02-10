<x-layout title="Editar Cliente: {{ $cliente->name }}">
    <x-clientes.form :action="route('clientes.update', $cliente->id)" 
    :name="$cliente->name"
    :email="$cliente->email"
    :cpf="$cliente->cpf"/>
</x-layout>