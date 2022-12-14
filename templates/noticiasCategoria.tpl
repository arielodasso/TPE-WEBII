{include file="header.tpl"}


    <section class="section-notas">
        <div class="titulo-seccion">
            <h2>Noticias filtradas</h2>
            <div class="cont-cuadraditos">
                <div class="cuadradito-grande"></div>
                <div class="cuadradito-chico"></div>
                <div class="cuadradito-grande"></div>
                <div class="cuadradito-chico"></div>
                <div class="cuadradito-grande"></div>
            </div>
        </div>
        <div class="cont-noticias">
          {foreach from=$noticias item=$noticiaByCategoria}
            <div class="noticia">
                <div class="text-noticia card-body">
                    <h2 class="card-title">{$noticiaByCategoria->titulo}</h2>
                    <p>{$noticiaByCategoria->descripcion}</p>
                    <a href="noticia/{$noticiaByCategoria->id}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
          {/foreach}
    </section>


{include file="footer.tpl"}

