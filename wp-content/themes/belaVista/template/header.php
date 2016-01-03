<header id="header" class="container">
		<div class="content">
			<div class="logo1">



				<a href="<?php echo get_option('home');?>"> <img
					src="http://www.onthebass.com.br/belavista/oquefazemos/logo-sitio-bela-vitsa.png"
					class="img-responsive"></a>


			</div>

			<div class="logo2">

				<div class="panel-body">

					<div class="search-form-container">
					<?php get_search_form(); ?>
				   </div>


					<a href="https://www.facebook.com/belavistaagroecologico/?fref=ts"><img
						src="http://www.onthebass.com.br/belavista/icon/icoFace.png" id="icoFace"
						class="img-responsive"></a>  
						
						
						<a href="https://www.facebook.com/belavistaagroecologico/?fref=ts"><img
						src="http://www.onthebass.com.br/belavista/icon/icoyoutube.png" id="icoyoutube"
						class="img-responsive"></a>
						
						
						 <a href="https://www.facebook.com/belavistaagroecologico/?fref=ts"><img
						src="http://www.onthebass.com.br/belavista/icon/icoTw.png" id="icoTw"
						class="img-responsive"></a>
				</div>
			</div>
		</div>



	</header>
	
	<!-- NAVEGCAO -->
	 <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
     
        <li class="active"><a href="<?php echo get_option('home');?>">HOME
								</a></li>
								<li><a href="#about" data-scroll>SOBRE</a></li>
								<li><a href="#servicos" data-scroll>O QUE FAZEMOS</a></li>
								 <li><?php wp_list_pages('title_li=');?> </li> 
								
								<li><a href="#contato" data-scroll>LOCALIZAÇÃO</a></li>
								<li><a href="#contato" data-scroll>CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>
	<!-- Fim navegação -->
	
