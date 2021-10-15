<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:18:12
  from 'D:\Xampp\htdocs\TpEspecial\Templates\noticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c8c44698c2_48627062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c7ddff5d6953c9afb412737856f07210b4f9cd' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\Templates\\noticia.tpl',
      1 => 1634257091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:editarNoticia.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168c8c44698c2_48627062 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Diario </title>

</head>

<body>
 
      
        
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticia']->value, 'noticias');
$_smarty_tpl->tpl_vars['noticias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noticias']->value) {
$_smarty_tpl->tpl_vars['noticias']->do_else = false;
?>
             <div class="card text-center">
        
                  <h1 scope="col"><?php echo $_smarty_tpl->tpl_vars['noticias']->value->titulo;?>
</h1>
                  <h3 scope="col"><?php echo $_smarty_tpl->tpl_vars['noticias']->value->Subtitulo;?>
</h2>
                  <p scope="col"><?php echo $_smarty_tpl->tpl_vars['noticias']->value->cuerponoticia;?>
</p>
                  <td scope="col"><?php echo $_smarty_tpl->tpl_vars['noticias']->value->nombreSeccion;?>
</td>
                
                
                  
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
          <?php $_smarty_tpl->_subTemplateRender("file:editarNoticia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          
   
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
