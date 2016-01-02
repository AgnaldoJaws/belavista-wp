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
						class="img-responsive"></a> <a href="#"><img
						src="http://www.onthebass.com.br/belavista/icon/icoyoutube.png" id="icoyoutube"
						class="img-responsive"></a> <a href="#"><img
						src="http://www.onthebass.com.br/belavista/icon/icoTw.png" id="icoTw"
						class="img-responsive"></a>
				</div>
			</div>
		</div>



	</header>
	
	<!-- NAVEGCAO -->
	<div id="navegacao">
		<div class="container">
			<div id="navegacao__content">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed"
								data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1"
								aria-expanded="false">
								<span class="sr-only">Toggle navigation</span> <span
									class="icon-bar"></span> <span class="icon-bar"></span> <span
									class="icon-bar"></span>
							</button>

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
							id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo get_option('home');?>">HOME
								</a></li>
								<li><a href="#about" data-scroll>QUEM SOMOS</a></li>
								<li><a href="#servicos" data-scroll>O QUE FAZEMOS</a></li>
								 <li><?php wp_list_pages('title_li=');?> </li> 
								
								<li><a href="#contato" data-scroll>LOCALIZAÇÃO</a></li>
								<li><a href="#contato" data-scroll>CONTATO</a></li>
								
							</ul>


						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>
	<!-- Fim navegação -->
	
