<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:00:49
  from 'D:\Xampp\htdocs\TpEspecial\templates\loginuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c4b1802a98_12392860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e2ae9fc311810b4304008fa4c567e37d877d1ff' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\templates\\loginuser.tpl',
      1 => 1634256049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168c4b1802a98_12392860 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="nav justify-content-center">
<h2>Crear Usuario</h2>
           <form method="POST" action="createUser">
               <input type="text" name="email" placeholder="Ingrese su email..."/>
               <input type="password" name="password" placeholder="Ingrese su password..."/>
               <button>Login</button>
            </form>
</div>

              
                <?php }
}
