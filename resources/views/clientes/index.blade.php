<x-layout title="Clientes">
    <a href="{{ route('clientes.create') }}" class="btn btn-dark mb-2">Adicionar cliente</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Data de Aniversário</th>
                <th>Celular</th>
                <th>Endereço</th>
                <th>CEP</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->name }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->birthdate }}</td>
                    <td>{{ $cliente->cellphone }}</td>
                    <td>{{ $cliente->address }}</td>
                    <td>{{ $cliente->zipCode }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post" class="ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
