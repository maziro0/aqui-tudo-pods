
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <br> <br> <br> <br> <br> 
    <h1>Entre em contato conosco:</h1>
    <br> 
<form>
    <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control">
    </div> 
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div> 
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div> 
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>