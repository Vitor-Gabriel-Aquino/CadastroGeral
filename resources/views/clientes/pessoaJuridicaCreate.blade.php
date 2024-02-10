<x-layout title="Nova Empresa" >  
<div class="container bg-light p-4">
    <form action="{{ route('clientes.store') }}" method="post" >
        @csrf 

        <!-- Informações Pessoais -->
        <div class="row">
            <div class="col-lg-3">
                <label for="name" class="form-label">Nome da Empresa</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name">
            </div>
            <div class="col">
                <label for="cpf" class="form-label">Cnpj</label>
                <input type="text" class="form-control form-control-sm" id="cnpj" name="cnpj">
            </div>
        </div>

        <!-- Contato -->
        <div class="row">
            <div class="col">
                <label for="telephone" class="form-label">Telefone</label>
                <input type="text" class="form-control form-control-sm" id="company_phone" name="company_phone">
            </div>
            <div class="col">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control form-control-sm" id="address" name="address">
            </div>
        </div>

        <!-- Outros Detalhes de Endereço -->
        <div class="row">
            <div class="col-lg-6">
                <label for="complement" class="form-label">Complemento</label>
                <input type="text" class="form-control form-control-sm" id="complement" name="complement">
            </div>
            <div class="col-lg-1">
                <label for="number" class="form-label">Número</label>
                <input type="number" class="form-control form-control-sm" id="number" name="number">
            </div>
            <div class="col-lg-5">
                <label for="neighborhood" class="form-label">Bairro</label>
                <input type="text" class="form-control form-control-sm" id="neighborhood" name="neighborhood">
            </div>
        </div>

        <!-- CEP, Cidade e Estado -->
        <div class="row">
            <div class="col">
                <label for="zipCode" class="form-label">CEP</label>
                <input type="text" class="form-control" id="zipCode" name="zipCode">
            </div>
            <div class="col">
                <label for="city" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="col">
                <label for="state" class="form-label">Estado</label>
                <input type="text" class="form-control" id="state" name="state">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button class="btn ">Adicionar funcionario</button>
            </div>
        </div>



        <!-- Botão de Submissão -->
        <div class="row">
            <div class="col">
                <button class="btn btn-primary">Adicionar Cliente</button>
            </div>
        </div>
    </form>
</div>
</x-layout>
