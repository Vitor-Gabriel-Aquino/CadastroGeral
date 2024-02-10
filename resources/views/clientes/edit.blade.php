<x-layout title="Editar Cliente: {{ $cliente->name }}">
    <x-clientes.clienteForm :action="route('clientes.update', $cliente->id)" 
    :name="$cliente->name"
    :email="$cliente->email"
    :cpf="$cliente->cpf"
    :birthday="$cliente->birthday"
    :cellphone="$cliente->cellphone"
    :telephone="$cliente->telephone"
    :address="$cliente->address"
    :complement="$cliente->complement"
    :number="$cliente->number"
    :neighborhood="$cliente->neighborhood"
    :zipCode="$cliente->zipCode"
    :city="$cliente->city"
    :state="$cliente->state"/>
</x-layout>