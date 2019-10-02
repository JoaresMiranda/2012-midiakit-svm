<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- Slider -->
    <link rel="stylesheet" href="_nivo/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="_nivo/nivo-slider.css" type="text/css" media="screen" />
    <!-- /Slider -->

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

    <title>Midiakit 2012 - Sistema Verdes Mares</title>
</head>

<body id="Capa">

    <!-- Site -->
    <div id="Site">
        
        <div id="Structure">
        
        <!-- Header -->
        <div id="Header">
            <h1><a href="#">Midiakit Verdes Mares</a></h1>
    
            <div id="Login">
                <form action="http://midiakit.verdesmares.com.br/auth" name='FormCadastroUsuario' class='FormCadastroUsuario' method="post">
                <p><span class="e-mail">e-mail</span> <input type="text" name="email"  value="e-mail" onfocus="if(this.value=='e-mail')this.value=''" onblur="if(this.value=='')this.value='e-mail'" class="email"  /></p>
                <p><span class="senha">senha</span> <input type="password" name="password"  value="senha" onfocus="if(this.value=='senha')this.value=''" onblur="if(this.value=='')this.value='senha'" class="password"  /> <input type="submit" name="" value="Ok" class="btAcessar"  /></p>
                <p class="btsCadastro"><a href="http://midiakit.verdesmares.com.br/cliente/recuperar">Esqueceu a senha?</a> | <a href="http://midiakit.verdesmares.com.br/cliente/cadastro">Cadastre-se</a></p>
                </form>
            </div>
    
        </div>
        <!-- /Header -->
        
        <!-- Main -->
        <div id="Main">
    
            <!-- Slide -->
            <div id="Slide">
    
    
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="_extra/sports-1.jpeg" alt="" title="#Slide-1" />
                        <img src="_extra/sports-2.jpeg" alt="" title="#Slide-2" />
                        <img src="_extra/sports-3.jpeg" alt="" title="#Slide-3" />
                        <img src="_extra/sports-4.jpeg" alt="" title="#Slide-4" />
                    </div>
                    <div id="Slide-1" class="caption-slide nivo-html-caption">
                        <p class="veiculo">FM 93</p>
                        <h2>Dia da Diversão</h2>
                        <p class="leiaMais"><a href="#">Mais informações sobre o projeto &raquo;</a></p>
                    </div>
                    <div id="Slide-2" class="caption-slide nivo-html-caption">
                        <p class="veiculo">TV Verdes Mares</p>
                        <h2>Casa Cor 2012</h2>
                        <p class="leiaMais"><a href="#">Mais informações sobre o projeto &raquo;</a></p>
                    </div>
                    <div id="Slide-3" class="caption-slide nivo-html-caption">
                        <p class="veiculo">TV Diário</p>
                        <h2>Caravana TV Diário</h2>
                        <p class="leiaMais"><a href="#">Mais informações sobre o projeto &raquo;</a></p>
                    </div>
                    <div id="Slide-4" class="caption-slide nivo-html-caption">
                        <p class="veiculo">Recife FM</p>
                        <h2>Mega blitz Recife FM</h2>
                        <p class="leiaMais"><a href="#">Mais informações sobre o projeto &raquo;</a></p>
                    </div>
                </div>
        
                <script type="text/javascript" src="_nivo/jquery-1.7.1.min.js"></script>
                <script type="text/javascript" src="_nivo/jquery.nivo.slider.js"></script>
                <script type="text/javascript">
                $(window).load(function() {
                    $('#slider').nivoSlider();
                });
                </script>
    
            </div>
            <!-- /Slide -->
            
            <!-- Menu -->
            <div id="Menu">
                <h3>Menu</h3>
                <ul>
                    <li><a href="http://midiakit.verdesmares.com.br/veiculo/principal/1">TV Verdes Mares</a></li>
                    <li><a href="http://midiakit.verdesmares.com.br/veiculo/principal/2">Diário do Nordeste</a></li>
                    <li><a href="http://midiakit.verdesmares.com.br/veiculo/principal/3">TV Diário</a></li>
                    <li><a href="http://midiakit.verdesmares.com.br/veiculo/principal/4">Rádio Verdes Mares</a></li>
                    <li><a href="http://midiakit.verdesmares.com.br/veiculo/principal/5">FM 93</a></li>
                    <li><a href="http://midiakit.verdesmares.com.br/veiculo/principal/6">Recife FM 97.5</a></li>
                    <li><a href="http://midiakit.verdesmares.com.br/veiculo/principal/8">TV Verdes Mares Cariri</a></li>
                </ul>
            </div>
            <!-- /Menu -->
            
            <!-- Vitrine -->
            <div id="Vitrine">
                <div id="PesquisaProjeto">
                    <h2>Encontre os projetos</h2>
                    <form action="http://midiakit.verdesmares.com.br/buscaProjeto" method="post" class="FormPesquisaProjeto" name="FormPesquisaProjeto" id="FormPesquisaProjeto">
                    <p>
                    <select name="veiculos">
                        <option value="" selected="selected">Por Veículo</option>
                        <option value="1">TV Verdes Mares</option>
                        <option value="2">Diário do Nordeste</option>
                        <option value="3">TV Diário</option>
                        <option value="4">Rádio Verdes Mares</option>
                        <option value="5">FM 93</option>
                        <option value="6">Recife FM 97.5</option>
                        <option value="8">TV Verdes Mares Cariri</option>
                    </select>
                    </p>
                    
                    <p>
                    <select name="segmentos">
                        <option value="" selected="selected">Por segmento</option>
                        <option value="1">Carnaval</option>
                        <option value="2">Cultural/Regional</option>
                        <option value="3">Data Comemorativa</option>
                        <option value="5">Esportivo</option>
                        <option value="6">Evento</option>
                        <option value="7">Férias</option>
                        <option value="8">Junino</option>
                        <option value="10">Promocional</option>
                        <option value="4">Segmentado</option>
                        <option value="9">Social/Serviços</option>
                    </select>
                    </p>
                    
                    <p>Por período: de
                    <select name="periodo_de" class="periodo1">
                        <option value="" selected="selected">Selecione</option>
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select> a <select name="periodo_ate" class="periodo1">
                        <option value="" selected="selected">Selecione</option>
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
                    </p>
                    <p><input type="text" name="search" class="pesquisaPalavraChave" value="Palavra-chave" onfocus="if(this.value=='Palavra-chave')this.value=''" onblur="if(this.value=='')this.value='Palavra-chave'" /></p>
                    <p><input type="submit" value="Pesquisar" class="btPesquisar" /></p>
                    </form>
                </div>
                
                <div id="DestaqueBlog">
                    <h2>Destaques do Blog</h2>
                    <div class="boxPost">
                        <a href="#"><img src="http://lorempixel.com/280/140/nightlife"></a>
                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec odio dolor, nec pharetra purus</a></h3>
                    </div>
                    <div class="boxPost">
                        <a href="#"><img src="http://lorempixel.com/280/140/nightlife"></a>
                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec odio dolor, nec pharetra purus</a></h3>
                    </div>                
                </div>
    
            </div>
            <!-- /Vitrine -->
    
        </div>
        <!-- Main -->
        
        </div>
    
    </div>
    <!-- /Site -->

	<!-- Footer -->
    <div id="Footer">
    	<div>
            <p id="MenuFooter"><a href="#">Equipe Comercial</a>  <a href="#">Fale Conosco</a></p>
            <p id="Logos">
            	<a href="#"><img src="imagens/logo-rodape-tvm.png"></a>
                <a href="#"><img src="imagens/logo-rodape-dn.png"></a>
                <a href="#"><img src="imagens/logo-rodape-tvd.png"></a>
                <a href="#"><img src="imagens/logo-rodape-verdinha.png"></a>
                <a href="#"><img src="imagens/logo-rodape-fm93.png"></a>
                <a href="#"><img src="imagens/logo-rodape-recife.png"></a>
                <a href="#"><img src="imagens/logo-rodape-tamoio.png"></a>
                <a href="#"><img src="imagens/logo-rodape-pvm.png"></a>
                <a href="#"><img src="imagens/logo-rodape-tvmcariri.png"></a>
            </p>
        </div>
    </div>
    <!-- /Footer -->

</body>
</html>