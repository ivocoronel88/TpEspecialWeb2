<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:20:55
  from 'D:\Xampp\htdocs\TpEspecial\templates\editarSeccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168ad474616a6_96818895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b96f0c6428ff7acdb25116486a18597c3c8278a' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\templates\\editarSeccion.tpl',
      1 => 1634250053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168ad474616a6_96818895 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="editarSeccion" method="POST">
                <label> editar </LABEL>
                <input name="nombre" >
                    <select  name="id_seccion">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secciones']->value, 'seccion');
$_smarty_tpl->tpl_vars['seccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seccion']->value) {
$_smarty_tpl->tpl_vars['seccion']->do_else = false;
?>
                            <option scope="col" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value->id_secciones;?>
"><?php echo $_smarty_tpl->tpl_vars['seccion']->value->nombre;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                            <button scope="col" type="submit"> EDITAR </button>     
                                       
               
</form>

<?php }
}
