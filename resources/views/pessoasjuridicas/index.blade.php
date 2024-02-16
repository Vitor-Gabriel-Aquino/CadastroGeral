<x-layout title="Pessoas Juridicas">
    <a href="{{ route('pessoasjuridicas.create') }}" class="btn btn-dark mb-2">Adicionar cliente</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoajuridica as $pessoajuridica)
                <tr>
                    <td>{{ $pessoajuridica->name }}</td>
                    <td>{{ $pessoajuridica->cnpj }}</td>
                    <td>{{ $pessoajuridica->email }}</td>
                    <td>{{ $pessoajuridica->company_phone }}</td>
                    <td>{{ $pessoajuridica->address }}</td>

                    <td>
                        <a href="{{ route('pessoasjuridicas.edit', $pessoajuridica->id) }}" class="btn btn-primary btn-sm">Editar</a>

                        <form action="{{ route('pessoasjuridicas.destroy', $pessoajuridica->id) }}" method="post" class="">
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

