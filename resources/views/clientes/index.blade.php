<x-layout title="Clientes">
    <a href="/clientes/criar" class="btn btn-dark mb-2">Adicionar cliente</a>

    <ul class="list-group">
        @foreach ($clientes as $cliente)
            <li class="list-groups-item">{{$cliente->name}}</li>
        @endforeach
    </ul>

</x-layout>