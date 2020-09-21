

<form method="POST" action="/pareceristas">
    @csrf<!--código padrão de segurança-->
    <div class="form-group">
        <label for="nusp">
            Número USP:
        </label> 
        <input id="nusp" class="form-control" type="text" name="numero_usp" >
    </div>
    <div class="form-group">
        <label for="nome">
            Nome :
        </label> 
        <input id="nome" class="form-control" type="text" name="nome" >
    </div>
    <div class="form-group">
        
        <input class="btn-success" type="submit" value="Enviar">
    </div>
    

</form>

