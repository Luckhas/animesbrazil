<?php require_once "config.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

   		<title>Painel de admnistração</title>
		<link rel="stylesheet" href="<?php echo path; ?>/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/dashboard.css">

   		<link rel="icon" type="image/icon" href="../favicon.ico">
	</head>
  	<body>
    
		<div class="row">
			<div class="col-sm-3 col-md-2">
				<nav class="navbar navbar-default">
					<a href="" class=""><img src="<?php path; ?>/img/logo_mini.png" alt="logo" class="logoMiniPanel"></a>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainSideNavBar" aria-expanded="false">
							<span class="sr-only">Ativar Navegação</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="mainSideNavBar">
						<ul class="nav navbar-nav-edit">
							<li><a href="">Item1</a></li>
							<li><a href="">Item2</a></li>
							<li><a href="">Item3</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="col-sm-9 col-md-10">
                asdasdasdasd
            </div>
		</div>


    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="../bootstrap/js/bootstrap.min.js"></script>
  	</body>
</html>