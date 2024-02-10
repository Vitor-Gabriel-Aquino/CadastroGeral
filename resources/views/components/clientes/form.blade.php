<form action="{{ $action }}" method="post">
    @csrf 

    @isset($name)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="name" class="form-label">Nome do Cliente</label>
        <input type="text" 
                class="form-control" 
                id="name" 
                name="name"
                @isset($name)value="{{ $name }}" @endisset>

        <label for="email" class="form-label">Email</label>
        <input type="email" 
                class="form-control" 
                id="email" 
                name="email"
                @isset($email)value="{{ $email }}" @endisset>

        <label for="email" class="form-label">CPF</label>
        <input type="text" 
                class="form-control" 
                id="cpf" 
                name="cpf"
                @isset($cpf)value="{{ $cpf }}" @endisset>
    </div>
    <button class="btn btn-primary">Adicionar Cliente</button>
</form>