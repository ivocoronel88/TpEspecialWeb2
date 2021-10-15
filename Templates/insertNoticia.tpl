  <div class="nav justify-content-center">
      <form action="insertNoticia" method="post">
        <H2> INSERTAR NOTICIA </h2>
          <div class="form-group">
            <label>Titulo</label>
            <input class="" id="title" name="input_titulo">
          </div>
            <div class="form-group">
            <label >subtitulo</label>
            <input class="" id="subtitulo" name="input_subtitulo">
          </div>
            <div class="form-group">
              <label>Cuerpo Noticia</label>
              <input class="" id="cuerpoNoticia"  name="input_cuerpoNoticia">
            </div>
          <div class="form-group form-check">
            <label>Seccion</label>
            <select  name="input_seccion">
            {foreach from=$secciones item=seccion}
                 <option scope="col" value="{$seccion->id_secciones}">{$seccion->nombre}</option> </a>
            {/foreach})
          </div>
          <input type="submit" class="btn btn-primary"></button>
        </form>
       
    </div>
        
           
                
            
