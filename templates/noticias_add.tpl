{include file="header.tpl"}

<h1 class="titulo-redaccion">Redacción de noticias</h1>

<!-- formulario para agregar noticias -->
<form method="POST" action="agregar" enctype="multipart/form-data" class="my-4 form-desarrollo">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Titulo:</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>
            <div class="form-group">
                <label>Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div>
            <div class="form-group">
                <label>Cuerpo de la noticia:</label>
                <input type="text" name="cuerpo" id="cuerpo" class="form-control">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control">
            </div>
            <div class="form-group">
                <label>Categoría:</label>
                <select class="form-select" name="categoria" id="categoria">
                    <option selected>Seleccione categoria</option>
                    {foreach from=$categorias item=$categoria}
                        <option value="{$categoria->id_categoria}">{$categoria->categoria}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary m-2">Cargar</button>
</form>


