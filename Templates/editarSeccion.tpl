<form action="editarSeccion" method="POST">
                <label> editar </LABEL>
                <input name="nombre" >
                    <select  name="id_seccion">
                        {foreach from=$secciones item=seccion}
                            <option scope="col" value="{$seccion->id_secciones}">{$seccion->nombre}</option>
                        {/foreach}
                    </select>
                            <button scope="col" type="submit"> EDITAR </button>     
                                       
               
</form>

