<?php
/* Smarty version 3.1.39, created on 2021-10-14 17:18:53
  from 'D:\Xampp\htdocs\TpEspecial\templates\formlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61684a5d849ee3_90485431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '430802fa1c7d782e4e144632b7cd36d7e2197b0e' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\templates\\formlogin.tpl',
      1 => 1634161878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61684a5d849ee3_90485431 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container">
      <form action="insertNoticia" method="post">
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secciones']->value, 'seccion');
$_smarty_tpl->tpl_vars['seccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['seccion']->value) {
$_smarty_tpl->tpl_vars['seccion']->do_else = false;
?>
                 <option scope="col" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value->id_secciones;?>
"><?php echo $_smarty_tpl->tpl_vars['seccion']->value->nombre;?>
</option> </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)
          </div>
          <input type="submit" class="btn btn-primary">Insert Noticia</button>
        </form>
       
    </div>
        
           
                
            
<?php }
}
