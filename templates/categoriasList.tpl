{include file="header.tpl"}

<h1 class="titulo-redaccion redaccion-categoria">Crear categoría</h1>

<!-- formulario para agregar categorias -->
<form action="add" method="POST" class="my-4 form-categorias">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label>Nombre de la categoria:</label>
                <input name="nombreCategoria" type="text" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Cargar</button>
    <button type="submit" class="btn btn-warning mt-2 ms-2">Modificar</button>
</form>

<!-- lista de categorias -->
<ul class="list-group col-md-8">
    {foreach from=$categorias item=$categoria}
        <li class="list-group-item">
            <span>Categoría: <b>{$categoria->categoria}</b></span>
            <div class="ml-auto">
                <a href='modificar/{$categoria->id_categoria}' type='button' class='btn btn-primary'>Modificar</a>
                <a href='delete/{$categoria->id_categoria}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>

{include file="footer.tpl"}



