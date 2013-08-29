<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ral Oliver - Freelancer Web</title>
<meta name="description" content="Desenvolvimento web: blogs, portais e catálogos virtuais. Vasta experiência no CMS Joomla" />
<meta name="keywords" content="ral oliver, joomla, joomtus, webdesign, php, cms, freelancer joomla, web design"
</head>

<body>


	<form name="formContato" action="contatosend.php" method="post" enctype="multipart/form-data">
    	<fieldset>
        	<legend>Dados Primários</legend>
                <label>
                    <span>Nome:</span>
                    <input type="text" size="50" name="nome" />
                </label>
                <br/>
                <label>
                    <span>Senha:</span>
                    <input type="password" size="50" name="senha"/>
                </label>
                <br/>
                <label>
                    <input type="checkbox" value="1" name="news" /> Deseja receber e-mails?
                </label>
        
                <br/>
                <label>
                    <input type="radio" size="1" name="sexo" checked="checked"/> Masculino
                </label>
                <label>
                    <input type="radio" size="2" name="sexo"/> Feminino
                </label>
                <br/>
                <!--<input type="button" name="enviar" value="enviar" />-->
                <br/>
                <input type="file" name="imagem" size="50"  />
                <br/>
                <!--
                <input type="hidden" name="data" value=""  />
                <input type="image" src="slide_btn.png" value="enviar"  />
                -->
		</fieldset>
        <br/>
        	<fieldset>
            	<legend>Dados Secundários</legend>
                	<label>
                    	<span>Selecione o Setor:</span>
                    	<select name="setor">
                        	<option value="-1" selected="selected">Selecione uma opção &nbsp;</option>
                        	<option value="1">Comercial &nbsp;</option>
                            <option value="2">Suporte &nbsp;</option>
                            <option value="3" disabled="disabled">Pessoal &nbsp;</option>                            
                        </select>
                    </label>
        <br/>
                    <label>
                    	<span> Envie sua mensagem:</span><br/>
                        <textarea name="mensagem" cols="80" rows="10">Escreva aqui sua mensagem</textarea>
                    </label>
            </fieldset>
        <br/>
        <fieldset>
        	<legend>Enviar Formulário</legend>
            <input type="reset" value="Limpar"  />
            <input type="submit" value="Enviar" name="enviar"  />
        </fieldset>
        <br/>
        <fieldset>
        	<legend>Ação Alertar</legend>
            <input type="button" value="Pressionar" name="enviar" onclick="alert(123);" />
        </fieldset>
    </form>







<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<table width="720" border="1" cellpadding="5" cellspacing="5" title"Lista de Clientes">
    <tbody>
    	<tr>
        	<td width="250"><b>Nome:</b></td>
            <td><b>E-mail:</b></td>
			<td><b>Telefone</b></td>
        </tr>
    </tbody>
        <tr>
        	<td>Israel</td>
            <td>contato@raloliver.com</td>
            <td>41 3153.1869</td>
        </tr>
        <tr>
        	<td>Israel</td>
            <td>contato@raloliver.com</td>
            <td>41 3153.1869</td>
        </tr>
     <tfoot>
     	<tr>
        	<td align="center" colspan="3" valign="middle" height="80"><a href="#">1</a> <a href="#">2</a> <a href="#">3</a></td>
        </tr>
    </table>

	<table width="720" border="1" cellpadding="5" cellspacing="5"><!--Tabela-->
    	<tr><!--Linha-->
        	<td rowspan="3">Nome do Cliente</td>
            <td>Endereço</td>
        </tr>
        <tr>
            <td>Telefone</td>
        </tr>
		<tr>
            <td>Celular</td>
        </tr>
    </table>
	<table width="720" border="1" cellpadding="5" cellspacing="5"><!--Tabela-->
    	<tr><!--Linha-->
        	<td rowspan="2">Coluna 1</td>
            <td>Coluna 2</td>
            <td>Coluna 3</td>
        </tr>
        <tr><!--Linha-->
        	<td colspan="2">Coluna 4</td>
            <td>Coluna 5</td>
        </tr>
    </table>

<div id="conteudo-antigo" style="width:720px;">
	<p>
    Lorem Ipsum is simply <b>dummy text of the printing</b> and typesetting industry. Lorem Ipsum has been the <big>industry's</big> standard dummy text ever since the <sup>1500s</sup>.
    </p>
    <hr/>
    <p>
    <i>Lorem Ipsum is simply dummy</i> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the <small>1500s</small>, <del datetime="07/09/2012">when an unknown printer took</del> <ins datetime="10/09/2012">a galley of type and scrambled it to make a type</ins> specimen <sub>book</sub>.
    </p>
</div>

<div id="conteudo-antigo" style="width:720px;">
	<h1>Novo curso de Joomla 2.5</h1>
    <h2>Ainda no mês de setembro teremos um novo blog com uma pesquisa para o novo curso de Joomla 2.5</h2>
    
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
    
    <blockquote><cite>@raloliver</cite>: Lorem Ipsum is simply dummy text of the printing and typesetting industry</blockquote>
    
    <p><em>O curso vai estar disponível de maneira exclusiva no Edukee</em> e vai custar apenas: <strong>R$ 159,00</strong>
    Valor exclusivo para participantes do módulo 1 e 2 do volume 1</p>
    
    <h3> Entre em contato agora mesmo pelo endereço <address> www.joomtus.com.br </address>e arquira o seu!</h3>
</div>

    <addr>Indica uma abreviação</addr><br />
    <address>Contato do autor do artigo</address><br />
    <blockquote>Indica uma citação do autor</blockquote><br />
    <cite>Indica o autor da citação</cite><br />
	<code>Informa um script ou código</code>
    <div>Define um bloco relacionado a formatação</div><br />
	<em>Formatação de texto em itálico (maior ênfase)</em><br />
	<h1>Cabeçalho mais relevante</h1> ao <h6> cabeçalho menos importante</h6><br />
    <pre>Texto pré definido</pre><br />
    <span>Conteúdo generico</span><br />
	<strong>Dar ênfase ao trecho do texto</strong><br />
    
	<p>Me chamo <a href="http://www.raloliver.com" target="_blank" title="Ral Oliver - Portfolio">Ral Oliver</a> e começar a desenvolver um site do zero com tableless.</p>
    <p><a title="Título" href="#" target="_blank">Link</a></p>
    <p>
    <ul>
    	<li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ul>
    <ol>
	    <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ol>
    <dl>
	    <dt><strong>Título da Artigo</strong></dt>
        <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam, dolor id feugiat imperdiet, nisl magna aliquet lectus, ut commodo nunc felis at massa. Aenean consequat sem ut elit faucibus sed pretium sapien consectetur. Sed nec justo nunc</dd>
        <dt><strong>Título da Artigo 2</strong></dt>
        <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam, dolor id feugiat imperdiet, nisl magna aliquet lectus, ut commodo nunc felis at massa. Aenean consequat sem ut elit faucibus sed pretium sapien consectetur. Sed nec justo nunc</dd>
        <dt><strong>Título da Artigo 3</strong></dt>
        <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam, dolor id feugiat imperdiet, nisl magna aliquet lectus, ut commodo nunc felis at massa. Aenean consequat sem ut elit faucibus sed pretium sapien consectetur. Sed nec justo nunc</dd>
    </dl>
    </p>
</body>

</html>