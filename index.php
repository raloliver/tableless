<?php
require_once('dts/ini.php');
require_once('dts/get.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php setHome();?>/tpl/estilo.css" rel="stylesheet" type="text/css" />
<link href="<?php setHome();?>/tpl/imprimir.css" rel="stylesheet" type="text/css" media="print" />
<link rel="stylesheet" type="text/css" href="<?php setHome();?>/js/shadowbox/shadowbox.css">
<script type="text/javascript" src="<?php setHome();?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php setHome();?>/js/shadowbox/shadowbox.js"></script>
<script type="text/javascript" src="<?php setHome();?>/js/maskedinput.js"></script>
<script type="text/javascript" src="<?php setHome();?>/js/cycle.js"></script>
<script type="text/javascript">
Shadowbox.init();

jQuery(function($){
   $("#fone").mask("(99) 9999-9999");
});

$(function(){
	$('.box1 > ul').cycle({
		fx: 'fade',
		speed: 'slow',
		timeout: 4000,
		pagerAnchorBuilder: function(idx, slide){
			return '.box2 li:eq('+ (idx) +') a';
		}
	});
	
});
</script>

<?php getHome();?>

</div><!--/conteudo-->
<div id="limpar"></div><!--limpar-->
</div><!--/corpo-->
<div id="rodape">
<div class="rodape_corpo">
    <div id="rodape_espaco"></div><!--/rodape_espaco-->
		<?php setMenu();?>
    <ul class="rodape_elementos">
        <li>
        <a href="<?php setHome();?>" title="Home | Ral Oliver - Desenvolvimento de sites em Joomla, PHP, Less, JavaScript e Zend Framework.">
            <img src="<?php setHome();?>/tpl/images/logo_rodape.png" border="0" alt="Logo" title="Ral Oliver - Freelancer Web" />
        </a>
        </li>
        <li>
            <div class="tel">Ligue:</div><!--/ligue-->
            <p>(41) 3153-1869</p>
            <p>(41) 9709-0478</p>
        </li>
        <li class="direita">
            <div class="mail">Escreva:</div><!--/mail-->
            <p class="min">contato@raloliver.com</p>
            <p class="min">raloliver.ws@gmail.com</p>
        </li>
    </ul><!--/rodape_elementos-->
</div><!--/rodape_corpo-->
</div><!--/rodape-->
</body>
</html>