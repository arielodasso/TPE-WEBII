{include file="header.tpl"}

<ul class="list-group mt-2">
    <h2 class="lista-categorias">Lista de categorías:</h2>
    {foreach from=$categorias item=$categoria}
        <a href="categoria/{$categoria->id_categoria}"><li class="list-group-item">{$categoria->categoria}</li></a>
    {/foreach}
</ul>


{include file="footer.tpl"}