<x-layout title="Clientes">
    

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($clientes as $cliente)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$cliente->name}}
<<<<<<< HEAD

=======
                
>>>>>>> 64446ffb95e7da55e4e14319658cc3d5460dd132
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
    <br><br>
    <a href="{{ route('clientes.create') }}" class="btn btn-dark mb-2">Adicionar Pessoa Fisíca</a>

</x-layout>