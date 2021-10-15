<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:55:18
  from 'D:\Xampp\htdocs\TpEspecial\templates\loginSession.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c36648c075_59317305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e58194f4abe45beda4e14dfcfe8d34827cccc18' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\TpEspecial\\templates\\loginSession.tpl',
      1 => 1634255714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168c36648c075_59317305 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="nav justify-content-center"> 
<h2>Login</h2>
           <form method="POST" action="verificarLogin">
               <input type="text" name="email" placeholder="Ingrese su email..."/>
               <input type="password" name="password" placeholder="Ingrese su password..."/>
               <button>Login</button>
            </form>
</div>
              
                <?php }
}
