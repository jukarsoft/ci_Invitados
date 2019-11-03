<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style type="text/css">
		#colLeft{background: pink; border-radius: 15px; padding: 15px}
		#colRight{background: paleGreen; border-radius: 15px; padding: 15px}
		#title{text-align: center; color: white; text-shadow: 2px 2px 2px black; font-size: 4em; background: gray}
		ul {list-style: none}
		label {width: 160px; display:inline-block;}
	</style>
	<script>
		var url = '<?=base_url()?>'
	</script>
	<script src='<?=base_url()?>assets/js/consulta.js'></script>
	<script src='<?=base_url()?>assets/js/alta.js'></script>
	<script src='<?=base_url()?>assets/js/baja.js'></script>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 id="title">LISTA DE INVITADOS</h1>
		</div>
		<div class="row">
			<div id="colLeft" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="<?=base_url()?>inicio/enlaces/consulta">Consulta</a>
					</li>
					<li>
						<a href="<?=base_url()?>inicio/enlaces/alta">Alta</a>
					</li>
					<li>
						<a href="<?=base_url()?>inicio/enlaces/baja">Baja</a>
					</li>
				</ul>
			</div>
			
			<div id="colRight" class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<?=$contenido;?>
			</div>
		</div>
	</div>
</body>
</html>