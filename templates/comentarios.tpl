<section class="section-notas">
        <div class="titulo-seccion">
            <h2>Comentarios del sitio</h2>
            <div class="cont-cuadraditos">
                <div class="cuadradito-grande"></div>
                <div class="cuadradito-chico"></div>
                <div class="cuadradito-grande"></div>
                <div class="cuadradito-chico"></div>
                <div class="cuadradito-grande"></div>
            </div>
        </div>
        <div class="cont-noticias">
            {foreach from=$comentarios item=$comentario}
                <p style="margin-left: 50px;">
                    {$comentario->comentario}
                </p>
            {/foreach}
    </section>


{include file="footer.tpl"}