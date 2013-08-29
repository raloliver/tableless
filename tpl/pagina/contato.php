<title>Fale Conosco | Ral Oliver - Freelancer Web</title>
<meta name="description" content="Fale Conosco | Ral Oliver - Desenvolvimento de sites em Joomla, PHP, Less, JavaScript e Zend Framework." />
<meta name="keywords" content="raloliver, ral, oliver, israel, joomtus, joomla, curitiba, parana, bahia, cms, sites" />
<?php setHeader();?>

<div id="conteudo_corpo">
    <h1 class="titulo">Fale Conosco</h1>
	<div id="pagina">
    
    	<div class="contato">
        	<h3>Por Telefone:</h3>
                <p>(41) 3153-1869</p>
                <p>(41) 9709-0478</p>
            <h3>Por Email:</h3>
            	<p>contato@raloliver.com</p>
        </div><!--/contato-->
        
        <form class="fale" action="" method="post">
        	<label>
            	<span>Nome:</span>
                <input type="text" name="nome" />
            </label>
            <label>
            	<span>Email:</span>
                <input type="text" name="email" />
            </label>
            <label>
            	<span>Telefone:</span>
                <input type="text" name="telefone" id="fone"/>
            </label>
            <label>
            	<span>Mensagem:</span>
                <textarea name="msg" rows="8"></textarea>
            </label>
            <input type="submit" name="enviar" value="Enviar" class="btn"  />       
        </form>
    </div><!--/pagina-->
</div><!--/conteudo_corpo-->