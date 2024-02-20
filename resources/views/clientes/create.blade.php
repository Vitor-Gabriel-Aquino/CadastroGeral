<x-layout title="Pessoa Física">
    <x-clientes.clienteForm :action="route('clientes.store')" 
    :name="old('name')"
    :email="old('email')"
    :cpf="old('cpf')"
    :birthday="old('birthday')"
    :cellphone="old('cellphone')"
    :telephone="old('telephone')"
    :address="old('address')"
    :complement="old('complement')"
    :number="old('number')"
    :neighborhood="old('neighborhood')"
    :zipCode="old('zipCode')"
    :city="old('city')"
    :state="old('state')"/>
</x-layout>