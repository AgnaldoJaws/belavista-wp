<style>
.navbar-header2{
  z-index:4;
	background-color: #80a00f;
	margin-bottom: -10px;
	height: 66px;

}
.img-logo{
position: absolute;
z-index:5;
width: 180px;
height: 180px;
margin-left: 54px;
}
.img-icon {
	margin-left: 90%;
	margin-top: -25px;
}
element.style {
}

.metaslider .caption-wrap {
	background-color: #80a00f !important;
	width: 500px !important;
	font-size: 25px;
	margin-left: 30% !important;
	margin-top: -10px !important;
	text-align: center;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #80a00f;
    background-color: #fff;
		height: 65px;

}

.navbar-default .navbar-nav>li>a {
    color: #fff	;
}

.navbar-default .navbar-nav>li>a:HOVER {
      background-color: #fff;
			height: 65px;
			color: #80a00f;
}


</style>

<a href="<?php echo get_option('home');?>"> <img
		src="https://s3-us-west-2.amazonaws.com/agenda-caicara-v1/logo-sitio-bela-vitsa.png"
		class="img-responsive img-logo"></a>
<br><br>
<!-- <img src="http://www.caninecicloturismo.com.br/belavista/icon/icoFace.png" class="img-responsive img-icon">
		<!-- NAVEGCAO -->
		 <nav class="navbar navbar-default navbar-header2">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>

	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
					<li><?php wp_list_categories('title_li=');?> </li>
          <li><a href="#servicos">O QUE FAZEMOS ?</a></li>
          <li><a href="#location">LOCALIZAÇÃO</a></li>
          <li><a href="#contact">CONTATO</a></li>

	      </ul>
	    </div>
	  </div>
	</nav>
	</div>



	<!-- Fim navegação -->
