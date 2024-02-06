<x-layout title="Página Inicial">
    <style>
        body {
            background-color: #052c65;
            background-image: url('https://andaimessorocaba.com/wp-content/uploads/2019/02/quais-sao-as-etapas-para-a-constru%C3%A7%C3%A3o-de-um-predio.png');
            background-repeat: no-repeat;
            background-size: auto 100%; /* Ajusta o tamanho da imagem para cobrir 100% da altura do corpo */
            background-position: left top; /* Posiciona a imagem no canto superior esquerdo */
            margin: 0;
            padding: 0;
        }
        .depth-div {
            background-color: #3498db;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
            border: 5px solid #2980b9;
            transform: perspective(1000px) rotateX(20deg);
        }

        .container-background {
            background-color: #6c757d;
            padding: 40px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            border-radius: 15px;
        }

        .centro {
            margin: 0 auto;
            display: table;
        }

        .btn {
            color: white;
        }
    </style>
    <div class="background-imagem"></div>
    <div class="container-background depth-div">
        <div class="centro">
            <a href="{{route('clientes.index')}}" class="btn btn-dark mb-2"><strong>Visualizar Clientes</strong></a>
        </div>

        <div class="centro">
            <a href="/clientes/create" class="btn btn-dark mb-2"><strong>Cadastrar Clientes</strong></a>
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
