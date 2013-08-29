<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ral Oliver - Freelancer Web</title>
    <meta name="description" content="Desenvolvimento web: blogs, portais e catálogos virtuais. Vasta experiência no CMS Joomla" />
    <meta name="keywords" content="ral oliver, joomla, joomtus, webdesign, php, cms, freelancer joomla, web design" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    
</head>

<body>

<form name="contato" action="" method="post" enctype="">
	<fieldset>
    	<legend> Envie seu contato: </legend>
        	
            <label>
            	<span>Nome:</span>
                <input type="text" name="" />
            </label>
            
            <label>
            	<span>E-mail:</span>
                <input type="text" name="" />
            </label>
            
            <label>
            	<span>Classe:</span>
                <input type="text" name="classe" />
            </label>
            
            <label>
            	<span>Imagem:</span>
                <input type="file" name="img" class="file" size="24" onchange="document.getElementById('fileon').value = this.value;" />
                <input type="text" name="fileon" class="fileon" id="fileon" />
            </label>

            
            <input type="reset" name="limpar" value="limpar" class="btn"/>
            <input type="submit" name="enviar" value="enviar" class="btn"  />
    </fieldset>
</form>
</body>

</html>