<x-layout title="Editar Funcionario: {{ $funcionarios->name }}">
    <x-funcionarios.form3 :action="route('funcionarios.update', $funcionarios->id)" 
    :name="$funcionarios->name"
    :email="$funcionarios->email"
    :cpf="$funcionarios->cpf"
    :cellphone="$funcionarios->cellphone"/>
</x-layout>