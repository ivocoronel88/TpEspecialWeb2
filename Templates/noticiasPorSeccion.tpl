<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Diario </title>

</head>

<body>
        <form method="POST" action="deleteNoticia">
          {foreach from=$noticia item=noticias}
<div class="card text-center">

            
                  <h1 scope="col">{$noticias->titulo}</h1>
                  <h3 scope="col">{$noticias->Subtitulo}</h2>
                  <p scope="col">{$noticias->cuerponoticia}</p>
                  <button scope="col"> <a href="noticia/{$noticias->id_noticia}">VER</button> </a>
                  <button type="submit" name="id_noticiaDelete" value="{$noticias->id_noticia}"> BORRAR </button>
                  

            
          {/foreach}
        </form>   
</div>

       
 
{include file="footer.tpl"};

