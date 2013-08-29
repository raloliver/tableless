<?php
session_start();

	if($_GET['fechar']){
		$_SESSION['fechar'] = 'style="display:none"';
		header('Location: index.php');
		}else{}

?>

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
    <iframe src="http://www.raloliver.com/2012" width="100%" height="720" scrolling="no" frameborder="0"></iframe>
    
    <div id="fundo" <?php echo $_SESSION['fechar']; ?>>
    	<div class="janela">
        	<img src="foto.png" title="@raloliver" alt="www.raloliver.com"  />
            	<div class="close">
                	<a href="index.php?fechar=true" title="Fechar">X</a>
                </div><!--/close-->
        </div><!--janela-->
    </div><!--/fundo-->
</body>

</html>