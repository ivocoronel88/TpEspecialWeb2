<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:15:55
  from 'D:\Xampp\htdocs\TpEspecial\Templates\noticiasPorSeccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c83b73efe9_22929490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2c09d4cf10bdf123e87db28cec85a2ba203ce71' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\Templates\\noticiasPorSeccion.tpl',
      1 => 1634256922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168c83b73efe9_22929490 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form method="POST" action="deleteNoticia">
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
                  <button scope="col"> <a href="noticia/<?php echo $_smarty_tpl->tpl_vars['noticias']->value->id_noticia;?>
">VER</button> </a>
                  <button type="submit" name="id_noticiaDelete" value="<?php echo $_smarty_tpl->tpl_vars['noticias']->value->id_noticia;?>
"> BORRAR </button>
                  

            
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </form>   
</div>

       
 
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;

<?php }
}
