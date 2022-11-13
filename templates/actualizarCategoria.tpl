{include file="header.tpl"}
      
        <div class="card-header">
            Modificar Categoria
        </div>
        <form method="POST" action="updateCategoria" class="form-modificar">
        <div class="form-group">
            <label for="email">Nombre:</label>
            <input type="text" name="nombre" value="{$categoria->categoria}" class="form-control">

            <div class="form-group">
                <input type="number" name="id" value="{$categoria->id_categoria}" class="form-control">
            </div>
            
        </div>

        <button type="submit" class="btn btn-primary m-2">Modificar</button>
        </form>

{include file="footer.tpl"}
