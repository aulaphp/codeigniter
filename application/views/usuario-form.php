<form action="usuario-save" method="post">
    <div class="col-md-6">
        <label for="nome">Nome</label>
        <input type="text" name="nome" 
               class="form-control"placeholder="Nome"
               oninvalid="setCustomValidity('Por favor preencha o aaa ')"
               required>
    </div>
    <div class="col-md-6">
        <label for="idade">Idade</label>
        <input type="number" name="idade"
               class="form-control" placeholder="Idade">
    </div>
    <a class="btn btn-default" href="lista-usuario.php">Voltar</a>
    <button type="submit" class="btn btn-default">Submit</button>
</form>