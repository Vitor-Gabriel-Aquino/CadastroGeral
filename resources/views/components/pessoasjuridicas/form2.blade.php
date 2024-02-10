
<div class="container bg-light p-4">
    <form id="mainForm" action="{{ $action }}" method="post">
        @csrf 

    @isset($name)
        @method('PUT')
    @endisset

    

        <!-- Informações Pessoais -->
<div class="row">
    <div class="col-lg-3">
                <label for="name" class="form-label">Nome da Empresa</label>
                <input type="text" class="form-control form-control-sm"  
                id="name" 
                name="name"
                @isset($name)value="{{ $name }}" @endisset>
    </div>

    <div class="col-lg-3">
                <label for="cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control form-control-sm"
                 id="cnpj" 
                 name="cnpj"
                 @isset($cnpj)value='{{ $cnpj }}' @endisset>
     </div>
     <div class="col-lg-6">
                <label for="company_phone" class="form-label">Celular</label>
                <input type="company_phone" class="form-control form-control-sm"
                 id="company_phone" 
                 name="company_phone"
                 @isset($company_phone)value='{{ $company_phone }}' @endisset>
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
    <!-- Botão de Adicionar Funcionário -->
<div class="row">
    <div class="col">
        <button id="addEmployeeButton" class="btn btn-secondary">Adicionar Funcionário</button>
    </div>
    <div id="employeeForm" style="display: none;">
    <!-- Formulário para adicionar funcionário -->
    <div class="row">
        <div class="col-lg-2">
            <label for="employee_name" class="form-label">Nome</label>
            <input type="text" class="form-control form-control-sm" id="employee_name" name="employee_name">
        </div>
        <div class="col-lg-2">
            <label for="employee_email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-sm" id="employee_email" name="employee_email">
        </div>
        <div class="col-lg-2">
            <label for="employee_cpf" class="form-label">CPF</label>
            <input type="text" class="form-control form-control-sm" id="employee_cpf" name="employee_cpf">
        </div>
        <div class="col-lg-6">
            <label for="employee_cellphone" class="form-label">Celular</label>
            <input type="text" class="form-control form-control-sm" id="employee_cellphone" name="employee_cellphone">
        </div>

    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#addEmployeeButton').click(function(event) {
            // Prevenir a submissão do formulário principal
            event.preventDefault();

             // Toggle para exibir ou ocultar o formulário de funcionário
            $('#employeeForm').toggle();

            // Serializar dados do formulário do funcionário
            var formData = $('#employeeForm').serialize();

            // Enviar solicitação AJAX para salvar dados do funcionário
            $.ajax({
                url: '{{ route("funcionarios.store") }}', // Substitua "funcionarios.store" pela rota correta do seu controlador
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Manipular resposta de sucesso, se necessário
                    console.log(response);
                },
                error: function(xhr) {
                    // Manipular erro, se necessário
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>

   
