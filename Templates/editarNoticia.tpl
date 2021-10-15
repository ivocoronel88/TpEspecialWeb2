
<form action="editarNoticia" method="POST" class="nav justify-content-center">
           
                <input name="titulo"value="{$noticias->titulo}">
                <input name="subTitulo"value="{$noticias->Subtitulo}">
                <input name="cuerpoNoticia"value="{$noticias->cuerponoticia}">
                    <select  name="id_seccion">
                    {foreach from=$secciones item=seccion}
                        <option scope="col" value="{$seccion->id_secciones}">{$seccion->nombre}</option>
                {/foreach}
                </select>
                <button scope="col" type="submit" name="id_noticia" value="{$noticias->id_noticia}"> EDITAR </button>             
               
</form>

