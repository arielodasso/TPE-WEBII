{include file="header.tpl"}
      
        <div class="card-header">
            Modificar Noticia
        </div>
        <form method="POST" action="updateNoticia" class="form-modificar">
        <div class="form-group">
            <label>Titulo:</label>
            <input type="text" name="titulo" value="{$noticia->titulo}" class="form-control">

            <label>Descripción:</label>
            <input type="text" name="descripcion" value="{$noticia->descripcion}" class="form-control">

            <label>Cuerpo:</label>
            <input type="text" name="cuerpo" value="{$noticia->cuerpo}" class="form-control">

            <label>Fecha:</label>
            <input type="text" name="fecha" value="{$noticia->fecha}" class="form-control">

            <div class="form-group">
                <input type="number" name="id" value="{$noticia->id}" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary m-2">Modificar</button>
        </form>

{include file="footer.tpl"}