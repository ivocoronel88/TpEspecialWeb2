<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:28:22
  from 'D:\Xampp\htdocs\TpEspecial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168bd1676af43_56979064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '117a584fc48b1d538cea00343ee57afe325eef5c' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\templates\\header.tpl',
      1 => 1634254099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:insertSeccion.tpl' => 1,
    'file:editarSeccion.tpl' => 1,
    'file:insertNoticia.tpl' => 1,
    'file:loginSession.tpl' => 1,
  ),
),false)) {
function content_6168bd1676af43_56979064 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecss.css">
    
    <title>Diario </title>

</head>

<body>
<div class="pagina">
    <nav class="nav-list" id="nav-menu">
        <div class="top-nav-column">
           <?php $_smarty_tpl->_subTemplateRender("file:insertSeccion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
           <?php $_smarty_tpl->_subTemplateRender("file:editarSeccion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secciones']->value, 'seccion');
$_smarty_tpl->tpl_vars['seccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seccion']->value) {
$_smarty_tpl->tpl_vars['seccion']->do_else = false;
?>
                 <button scope="col"> <a href="seccion/<?php echo $_smarty_tpl->tpl_vars['seccion']->value->id_secciones;?>
"><?php echo $_smarty_tpl->tpl_vars['seccion']->value->nombre;?>
</button> </a>
                 <form action="deleteSeccion" method="POST">
                 <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value->id_secciones;?>
" name="id_seccion"> BORRAR </button> 
                </form>
        </div>
        
           
                
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           
                
        </div>
    </nav>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:insertNoticia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:loginSession.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>











  <?php }
}
