{include file="header.tpl"}
<div class="container">

        <div class="row">

        <div class="col-md-4">
                
                </div>
        <div class="col-md-4">
        <div class="card mt-4">
        <div class="card-header">
            Modificar Categoria
        </div>
        <div class="card-body">
    <form method="POST" action="">
        <div class="form-group">
            <label for="email">Nombre:</label>
            <input type="text" class="form-control mb-3" id="" name="nombre">
        </div>
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file"  class="form-control" id="" name="imagen">
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-success mt-3">Entrar</button>
    </form>
</div>

{include file="footer.tpl"}