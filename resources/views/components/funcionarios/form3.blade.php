<div class="container bg-light p-4">
    <form action="{{ $action }}" method="post">
        @csrf 

    @isset($name)
        @method('PUT')
    @endisset

    

        <!-- Informações Pessoais -->
<div class="row">
    <div class="col-lg-3">
                <label for="name" class="form-label">Nome do Funcionario</label>
                <input type="text" class="form-control form-control-sm"  
                id="name" 
                name="name"
                @isset($name)value="{{ $name }}" @endisset>
    </div>

    <div class="col-lg-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control form-control-sm"
                 id="email" 
                 name="email"
                 @isset($email)value='{{ $email }}' @endisset>
     </div>

    <div class="col-lg-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control form-control-sm"
                 id="cpf" 
                 name="cpf"
                 @isset($cpf)value='{{ $cpf }}' @endisset>
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
        </div>
        <!-- Botão de Submissão -->
        <div class="row">
            <div class="col">
                <button class="btn btn-primary">Adicionar Funcionario</button>
            </div>
        </div>
</form>
</div>