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
          {foreach from=$noticias item=$noticia}
                <div class="text-info card-body">
                    <h2 class="card-title" id="titulo">{$noticia->titulo}</h2>
                    <p class="descripcion">{$noticia->descripcion}</p>
                    <p class="fecha">{$noticia->fecha}</p>

                    <p class="cuerpo">{$noticia->cuerpo}</p>
                </div>
          {/foreach}
    </section>

{include file="footer.tpl"}