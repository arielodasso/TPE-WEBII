{include file="noticias_add.tpl"}

<!-- lista de noticias -->
<ul class="list-group col-md-8">
    {foreach from=$noticias item=$noticia}
        <li class="list-group-item">
            <span>Noticia: <b>{$noticia->titulo}</b></span>
            <div class="ml-auto">
                <input type="hidden" name="id" value="{$noticia->id}">
                <a href='editar/{$noticia->id}' type='button' class='btn btn-primary'>Editar</a>
                <a href='borrar/{$noticia->id}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>

{include file="footer.tpl"}