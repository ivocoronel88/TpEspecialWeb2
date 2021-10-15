<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:05:26
  from 'D:\Xampp\htdocs\TpEspecial\Templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c5c677ae92_67554752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94009011355874cd0f7b5431d97150fb035ed1db' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\Templates\\header.tpl',
      1 => 1634256325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loginSession.tpl' => 1,
    'file:loginuser.tpl' => 1,
    'file:insertSeccion.tpl' => 1,
    'file:insertNoticia.tpl' => 1,
  ),
),false)) {
function content_6168c5c677ae92_67554752 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Diario </title>

</head>

<body>
<H1 class="nav justify-content-center"> DIARIO </h1>




<ul class="nav justify-content-center" >
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secciones']->value, 'seccion');
$_smarty_tpl->tpl_vars['seccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seccion']->value) {
$_smarty_tpl->tpl_vars['seccion']->do_else = false;
?>
  
                 <li scope="col" class="nav-item"> <a href="seccion/<?php echo $_smarty_tpl->tpl_vars['seccion']->value->id_secciones;?>
"><?php echo $_smarty_tpl->tpl_vars['seccion']->value->nombre;?>
</li> </a>
                 <form action="deleteSeccion" method="POST">
                 <button class="nav-item" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value->id_secciones;?>
" name="id_seccion"> BORRAR </button> 
                </form>
        </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
           
                
    
 
</ul>

<br> 
<br> 


<?php $_smarty_tpl->_subTemplateRender("file:loginSession.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br> 
<br> 
<?php $_smarty_tpl->_subTemplateRender("file:loginuser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br> 
<br> 
<?php $_smarty_tpl->_subTemplateRender("file:insertSeccion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br> 
<br> 
<?php $_smarty_tpl->_subTemplateRender("file:insertNoticia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>












  <?php }
}
