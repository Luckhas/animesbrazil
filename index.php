<?php include_once "app/config.php"; ?>
<!DOCTYPE html>
<html lang="{lang}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{metaDescription}"/>
    <meta name="author" content="{metaAuthor}"/>
    <meta name="copyright" content="{metaCopyright}"/>
    <meta name="keywords" content="{metaKeywords}"/>
    <meta property="og:locale" content="{lang}"/>
    <meta property="og:type" content="{meta_og_type}"/>
    <meta property="og:title" content="{meta_og_title}"/>
    <meta property="og:image" content="{meta_og_image}"/>
    <meta property="og:description" content="{meta_og_description}"/>
    <meta property="og:url" content="{meta_og_url}"/>
    <meta property="og:site_name" content="{meta_og_name}"/>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{meta_twitter_url}">
    <meta name="twitter:title" content="{meta_twitter_title}">
    <meta name="twitter:description" content="{meta_twitter_description}">
    <meta name="twitter:image" content="{meta_twitter_image}">
    <title>{metaTitle}</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animes-brazil.css">

   	<link rel="icon" type="image/icon" href="favicon.ico">
</head>
<body>

	<header>
		<div class="headerBar container-fluid">
			<div class="container">
				<div class="row topBarRow">
					<!-- <div class="col-xs-4 col-sm-6"><img src="img/logo.png" alt="Logo" class="logo img-responsive"></div> -->
					<div class="col-xs-4 col-sm-6 logo"></div>
					<div class="col-xs-8 col-sm-6 text-right slogan">O seu clube de animes!!!</div>
				</div>
			</div>
		</div>
	</header>

	<main>
		<div class="container" style="padding: 0;">
			<div id="carousel_news" class="carousel slide" data-ride="carousel" data-interval="10000">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			        <li data-target="#carousel_news" data-slide-to="0" class="active"></li>
			        <li data-target="#carousel_news" data-slide-to="1"></li>
			        <li data-target="#carousel_news" data-slide-to="2"></li>
			        <li data-target="#carousel_news" data-slide-to="3"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">
			        <div class="item active">
			            <img src="img/uploads/carousel/dragon-ball-super.jpg" alt="Dragon Ball Super">
			            <div class="carousel-caption">
			        		<div class="carouselBlackBox">
			        			Novo episódio de <span>DRAGON BALL SUPER</span>
			        		</div>
			        	</div>
				    </div>
				    <div class="item">
				        <img src="img/uploads/carousel/naruto.jpg" alt="Naruto Shippuden">
				        <div class="carousel-caption">
				        	<div class="carouselBlackBox">
			        			Novo episódio de <span>NARUTO SHIPPUDEN</span>
			        		</div>
				        </div>
				    </div>
				    <div class="item">
				        <img src="img/uploads/carousel/sousei-no-onmyouji.jpg" alt="Sousei no Onmyouji">
				        <div class="carousel-caption">
				        	<div class="carouselBlackBox">
			        			Novo episódio de <span>SOUSEI NO ONMYOUJI</span>
			        		</div>
				        </div>
				    </div>
				    <div class="item">
				        <img src="img/uploads/carousel/ao-no-exorcist.jpg" alt="Ao no Exorcist">
				        <div class="carousel-caption">
				        	<div class="carouselBlackBox">
			        			Novo episódio de <span>AO NO EXORCIST</span>
			        		</div>
				        </div>
				    </div>
			    </div>

			    <!-- Controls -->
			    <a class="left carousel-control" href="#carousel_news" role="button" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    	<span class="sr-only">Anterior</span>
			    </a>
				<a class="right carousel-control" href="#carousel_news" role="button" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    	<span class="sr-only">Próximo</span>
			  	</a>
			</div>
		</div>

		<div class="container menu">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainMenu" aria-expanded="false">
							<span class="sr-only">Ativar navegação</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="mainMenu">
						<ul class="nav navbar-nav">
							<li><a href="">Príncipal</a></li>
							<li><a href="">Lista de Animes</a></li>
							<li><a href="">Categorias</a></li>
							<li><a href="">Pedidos</a></li>
							<li><a href="">Contato</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<div class="container postArea">
			<div class="row feedTitle">
				<div class="col-xs-6 text-left">Feed de postagem</div>
				<div class="col-xs-6 text-right"><span class="glyphicon glyphicon-align-justify" role="button" data-toggle="collapse" href="#mainContent" aria-expanded="false" aria-controls="mainContent"></span></div>
			</div>
			
			<div class="collapse" id="mainContent">
			    <div class="well">
			    	
			    </div>
			</div>
		</div>

		<div class="container recommended">
			<div class="panel panel-default">
			    <div class="panel-heading">
			    	<h3 class="panel-title">Famosos</h3>
			    </div>
			    <div class="panel-body">
			    	<div class="thumbnailsAnimes">
			    		<a href="">
				    		<div class="animeData text-center">
				    			<span class="glyphicon glyphicon-play"></span>
				    			<div class="animeName">Naruto</div>
				    		</div>			    		
			    			<div class="recommendedThumbnail">
			    				<img src="img/uploads/thumbnails/animes/naruto.png" alt="Naruto">
			    			</div>
			    		</a>
		    		</div>
		    		<div class="thumbnailsAnimes">
			    		<a href="">
				    		<div class="animeData text-center">
				    			<span class="glyphicon glyphicon-play"></span>
				    			<div class="animeName">Dragon Ball Super</div>
				    		</div>			    		
			    			<div class="recommendedThumbnail">
			    				<img src="img/uploads/thumbnails/animes/dragon-ball-super.png" alt="Dragon Ball Super">
			    			</div>
			    		</a>
		    		</div>
		    		<div class="thumbnailsAnimes">
			    		<a href="">
				    		<div class="animeData text-center">
				    			<span class="glyphicon glyphicon-play"></span>
				    			<div class="animeName">one Piece</div>
				    		</div>			    		
			    			<div class="recommendedThumbnail">
			    				<img src="img/uploads/thumbnails/animes/one-piece.png" alt="one Piece">
			    			</div>
			    		</a>
		    		</div>
		    		<div class="thumbnailsAnimes">
			    		<a href="">
				    		<div class="animeData text-center">
				    			<span class="glyphicon glyphicon-play"></span>
				    			<div class="animeName">Bleach</div>
				    		</div>			    		
			    			<div class="recommendedThumbnail">
			    				<img src="img/uploads/thumbnails/animes/bleach.png" alt="Bleach">
			    			</div>
			    		</a>
		    		</div>
		    		<div class="thumbnailsAnimes">
			    		<a href="">
				    		<div class="animeData text-center">
				    			<span class="glyphicon glyphicon-play"></span>
				    			<div class="animeName">Fairy Tail</div>
				    		</div>			    		
			    			<div class="recommendedThumbnail">
			    				<img src="img/uploads/thumbnails/animes/fairy-tail.png" alt="Fairy Tail">
			    			</div>
			    		</a>
		    		</div>
			    </div>

				<div class="panel-heading">
			    	<h3 class="panel-title">Lançamentos</h3>
			    </div>
			    <div class="panel-body">
			    	
			    </div>

			</div>
		</div>

	</main>

	<footer class="container">
		<div class="footer row">
			<div>animesbrazil.club - Seu clube de animes e cultura japonesa &copy; 2017 - Todos os direitos reservados</div>
		</div>
	</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>