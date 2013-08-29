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
                <input type="text" name="nome" value="Informe seu nome!" 
                	onclick="
                    	this.style.background='#F5F5F5',
                        this.style.borderColor='#FFF'
                        if(this.value == 'Informe seu nome!' | this.value == 'Valido apenas Nome Completo!') {
                    		this.value=''
                            }
                    "
                    onblur="
                    	if(this.value == '') {
                        	this.value='Informe seu nome!',
                            this.style.background='#FFA6A6',
                        	this.style.borderColor='red'
                        }
                    " 
                    onchange="
                    	if(this.value.length < 10) {
                        	this.value='Valido apenas Nome Completo!',
                            this.style.background='#FFA6A6',
                        	this.style.borderColor='red'
                        }else{
                        	this.style.background='#97FFB1',
                        	this.style.borderColor='green'
                        
                        }
                    
                    "         
                    onfocus="this.style.background='red'"                    
                    onmouseover="this.style.borderColor='blue'"                    
                    onmouseout="this.style.borderColor='#999'"
                    
                    />
            </label>
            
            <label>
            	<span>Telefone:</span>
                <input type="text" name="telefone" maxlength="14" value="Informe seu telefone!"
                	onclick="
                    	this.style.background='#F5F5F5',
                        this.style.borderColor='#FFF'
                        if(this.value == 'Informe seu telefone!' | this.value == 'Formato inválido: (XX) XXXX-XXXX') {
                    		this.value=''
                            }
                    "
                    onblur="
                    	if(this.value == '') {
                        	this.value='Informe seu telefone!',
                            this.style.background='#FFA6A6',
                        	this.style.borderColor='red'
                        }
                    "
                    onchange="
                    	if(this.value.length < 14) {
                        	this.value='Formato inválido: (XX) XXXX-XXXX',
                            this.style.background='#FFA6A6',
                        	this.style.borderColor='red'
                        }else{
                        	this.style.background='#97FFB1',
                        	this.style.borderColor='green'
                        
                        }
                    
                    " 
                    onfocus="this.style.background='red'"                    
                    onmouseover="this.style.borderColor='blue'"                    
                    onmouseout="this.style.borderColor='#999'"
                    
                    />
            </label>
            
            <label>
            	<span>Classe:</span>
                <input type="text" name="classe" onclick="this.className='click'" />
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