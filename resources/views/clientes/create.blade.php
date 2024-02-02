<x-layout title="Novo Cliente">
    <form action="{{ route('clientes.store') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label for="name" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <label for="email" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <button class="btn btn-primary">Adicionar Cliente</button>
    </form>
</x-layout>