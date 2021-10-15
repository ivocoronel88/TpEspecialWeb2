<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}" />
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
           {foreach from=$secciones item=seccion}
  
                 <li scope="col" class="nav-item"> <a href="seccion/{$seccion->id_secciones}">{$seccion->nombre}</li> </a>
                 <form action="deleteSeccion" method="POST">
                 <button class="nav-item" type="submit" value="{$seccion->id_secciones}" name="id_seccion"> BORRAR </button> 
                </form>
        </div>
            {/foreach}
        
           
                
    
 
</ul>

<br> 
<br> 


{include file="loginSession.tpl"}
<br> 
<br> 
{include file="loginuser.tpl"}

<br> 
<br> 
{include file="insertSeccion.tpl"}
<br> 
<br> 
{include file="insertNoticia.tpl"}












  