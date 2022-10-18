{include file="header.tpl"}

    <section class="section-notas">
        <div class="titulo-seccion">
            <h2>Noticia completa</h2>
            <div class="cont-cuadraditos">
                <div class="cuadradito-grande"></div>
                <div class="cuadradito-chico"></div>
                <div class="cuadradito-grande"></div>
                <div class="cuadradito-chico"></div>
                <div class="cuadradito-grande"></div>
            </div>
        </div>
        <div class="cont-noticias">
          {foreach from=$noticia item=$info}
            <div class="noticia">
                <div class="text-info card-body">
                    <h2 class="card-title">{$info->titulo}</h2>
                    <p>{$info->descripcion}</p>
                </div>
            </div>
          {/foreach}
    </section>

{include file="footer.tpl"}