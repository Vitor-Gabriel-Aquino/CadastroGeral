<div class="container bg-light p-4">
    <form action="{{ $action }}" method="post">
        @csrf 

    @isset($name)
        @method('PUT')
    @endisset

    

        <!-- Informações Pessoais -->
        <div class="row">
            <div class="col-lg-3">
                <label for="name" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control form-control-sm"  
                id="name" 
                name="name"
                @isset($name)value="{{ $name }}" @endisset> 
            </div>
            <div class="col-lg-9">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-sm"
                 id="email" 
                 name="email"
                 @isset($email)value='{{ $email }}' @endisset>
            </div>
        </div>

        <!-- Dados de Identificação -->
        <div class="row">
            <div class="col">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control form-control-sm"
                 id="cpf" 
                 name="cpf"
                 @isset($cpf)value='{{ $cpf }}' @endisset>
            </div>
            <div class="col">
                <label for="birthdate" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control form-control-sm"
                 id="birthday" 
                 name="birthday"
                 @isset($birthday)value='{{ $birthday }}' @endisset>
            </div>
        </div>

        <!-- Contato -->
        <div class="row">
            <div class="col">
                <label for="cellphone" class="form-label">Celular</label>
                <input type="text" class="form-control form-control-sm"
                 id="cellphone" 
                 name="cellphone"
                 @isset($cellphone)value='{{ $cellphone }}' @endisset>
            </div>
            <div class="col">
                <label for="telephone" class="form-label">Telefone</label>
                <input type="text" class="form-control form-control-sm"
                 id="telephone" 
                 name="telephone"
                 @isset($telephone)value='{{ $telephone }}' @endisset>
            </div>
        </div>

        <!-- Endereço -->
        <div class="row">
            <div class="col">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control form-control-sm"
                 id="address" 
                 name="address"
                 @isset($address)value='{{ $address }}' @endisset>
            </div>
        </div>

        <!-- Outros Detalhes de Endereço -->
        <div class="row">
            <div class="col-lg-6">
                <label for="complement" class="form-label">Complemento</label>
                <input type="text" class="form-control form-control-sm"
                 id="complement" 
                 name="complement"
                 @isset($complement)value='{{ $complement }}' @endisset>
            </div>
            <div class="col-lg-1">
                <label for="number" class="form-label">Número</label>
                <input type="number" class="form-control form-control-sm"
                 id="number" 
                 name="number"
                 @isset($number)value='{{ $number }}' @endisset>
            </div>
            <div class="col-lg-5">
                <label for="neighborhood" class="form-label">Bairro</label>
                <input type="text" class="form-control form-control-sm"
                 id="neighborhood" 
                 name="neighborhood"
                 @isset($neighborhood)value='{{ $neighborhood }}' @endisset>
            </div>
        </div>

        <!-- CEP, Cidade e Estado -->
        <div class="row">
            <div class="col">
                <label for="zipCode" class="form-label">CEP</label>
                <input type="text" class="form-control form-control-sm"
                 id="zipCode" 
                 name="zipCode"
                 @isset($zipCode)value='{{ $zipCode }}' @endisset>
            </div>
            <div class="col">
                <label for="city" class="form-label">Cidade</label>
                <input type="text" class="form-control form-control-sm"
                 id="city" 
                 name="city"
                 @isset($city)value='{{ $city }}' @endisset>
            </div>
            <div class="col">
                <label for="state" class="form-label">Estado</label>
                <input type="text" class="form-control form-control-sm"
                 id="state" 
                 name="state"
                 @isset($state)value='{{ $state }}' @endisset>
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
