<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:19:46
  from 'D:\Xampp\htdocs\TpEspecial\templates\editarNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c9229783b2_36924646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19f193010654951962bdd17b80c278213198c23' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\templates\\editarNoticia.tpl',
      1 => 1634257185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168c9229783b2_36924646 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="editarNoticia" method="POST" class="nav justify-content-center">
           
                <input name="titulo"value="<?php echo $_smarty_tpl->tpl_vars['noticias']->value->titulo;?>
">
                <input name="subTitulo"value="<?php echo $_smarty_tpl->tpl_vars['noticias']->value->Subtitulo;?>
">
                <input name="cuerpoNoticia"value="<?php echo $_smarty_tpl->tpl_vars['noticias']->value->cuerponoticia;?>
">
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
                <button scope="col" type="submit" name="id_noticia" value="<?php echo $_smarty_tpl->tpl_vars['noticias']->value->id_noticia;?>
"> EDITAR </button>             
               
</form>

<?php }
}
