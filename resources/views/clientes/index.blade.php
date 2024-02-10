<x-layout title="Clientes">
    

    <ul class="list-group">
        @foreach ($clientes as $cliente)
            <li class="list-groups-item">{{$cliente->name}}</li>
        @endforeach
    </ul>
    <br><br>
    <a href="{{ route('clientes.create') }}" class="btn btn-dark mb-2">Adicionar Pessoa Fisíca</a>

</x-layout>