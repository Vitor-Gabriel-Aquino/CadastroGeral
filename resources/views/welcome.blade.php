<x-layout title="Página Inicial">
    <style>
        body {
            background-color: #052c65; 
        }

        .container-background {
            background-color: #6c757d;
            padding: 140px;
            display: flex;
        }

        .centro {
            margin: 0 auto;
            display: table;
        }

        .btn {
            color: white;
        }
    </style>

    <div class="container-background">
        <div class="centro">
            <a href="/clientes" class="btn btn-dark mb-2"><strong>Visualizar Clientes</strong></a>
        </div>

        <div class="centro">
            <a href="/clientes/criar" class="btn btn-dark mb-2"><strong>Cadastrar Clientes</strong></a>
        </div>

        <div class="centro">
            <a href="/clientes" class="btn btn-dark mb-2"><strong>Cadastrar Produtos</strong></a>
        </div>

        <div class="centro">
            <a href="/clientes" class="btn btn-dark mb-2"><strong>Cadastrar Ferramentas</strong></a>
        </div>

        <div class="centro">
            <a href="/clientes" class="btn btn-dark mb-2"><strong>Registro de vendas</strong></a>
        </div>

        <div class="centro">
            <a href="/clientes" class="btn btn-dark mb-2"><strong>Serviços</strong></a>
        </div>

        <div class="centro">
            <a href="/clientes" class="btn btn-dark mb-2"><strong>Ordem de Serviço</strong></a>
        </div>
    </div>
</x-layout>
