<x-layout title="Clientes">
    <a href="{{ route('clientes.create') }}" class="btn btn-dark mb-2">Adicionar cliente</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($clientes as $cliente)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$cliente->name}}

                <span class="d-flex">
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary btn-sm">
                        E
                    </a>
                    <form action="{{ route('clientes.destroy', $cliente->id)}}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>

</x-layout>