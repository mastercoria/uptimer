<!DOCTYPE html>
<!-- saved from url=(0022)http://localhost/stat/ -->
<html lang="es_MX"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<title>Master Coria Status - Inicio</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="refresh" content="100">
		<link href="./status_files/bootstrap.min.css" rel="stylesheet">
		<style>
			body { padding-top: 80px; }
			.table-center th { vertical-align: middle; text-align: center; }
			.table-center td { vertical-align: middle; text-align: center; }
		</style>
		<script src="./status_files/jquery.min.js"></script>
		<script src="./status_files/bootstrap.min.js"></script>
		<script type="text/javascript">
			  var i = 1, j = 1, load;
			  servers = Array();
			  servers[1] = "https://www.mastercoria.com";
			  servers[2] = "https://social.mastercoria.com";
			  servers[3] = "http://support.mastercoria.com";
			  servers[4] = "http://home.mastercoria.com";
			  servers[5] = "http://l.mastercoria.com";
			  servers[6] = "http://chat.mastercoria.com";
			  servers[7] = "https://blog.mastercoria.com";
			  servers[8] = "http://image.mastercoria.com";
			  servers[9] = "https://www.trabajaytriunfa.com";
			  servers[10] = "http://developers.mastercoria.com";
			  servers[11] = "http://apps.mastercoria.com";
		</script>
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<a class="navbar-brand" href="#">Master Coria Status</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="http://localhost/stat/#status" data-toggle="tab">Estados</a></li>
						<li class=""><a href="http://localhost/stat/#servers" data-toggle="tab">Servidores</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="container">

			<div class="tabbable" style="margin-bottom: 20px;">

				<div class="tab-content">

					<div class="tab-pane active" id="status">

						<table class="table table-bordered table-center">
							<thead>
								<tr>
									<th class="span2" scope="col">Nombre</th>
									<th class="span2" scope="col">Ubicación</th>
									<th class="span3" scope="col">Host</th>
									<th class="span3" scope="col">Estado</th>
									<th class="span3" scope="col">Tiempo de carga</th>
									<th class="span2" scope="col">Fecha de comp.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>MasterCoria.com</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status1"></td>
									<td id="time1"></td>
									<td></td>
								</tr>
								<tr>
									<td>Red Master</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status2"></td>
									<td id="time2"></td>
									<td></td>
								</tr>
								<tr>
									<td>Master Coria Support</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status3"></td>
									<td id="time3"></td>
									<td></td>
								</tr>
								<tr>
									<td>Master Coria Home</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status4"></td>
									<td id="time4"></td>								
									<td></td>
								</tr>
								<tr>
									<td>Master Coria URL Shortener</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status5"></td>
									<td id="time5"></td>								
									<td></td>
								</tr>
								<tr>
									<td>Master Coria Chat</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status6"></td>
									<td id="time6"></td>									
									<td></td>
								</tr>	
								<tr>
									<td>El Blog de Master Coria</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status7"></td>
									<td id="time7"></td>								
									<td></td>								
								</tr>
								<tr>
									<td>Master Coria IMG Editor</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status8"></td>
									<td id="time8"></td>							
									<td></td>
								</tr>
								<tr>
									<td>Trabaja Y Triunfa</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status9"></td>
									<td id="time9"></td>									
									<td></td>
								</tr>																													<tr>
									<td>Master Coria Developers</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status10"></td>
									<td id="time10"></td>								
									<td></td>
								</tr>
								<tr>
									<td>App Selector</td>
									<td>Estados Unidos</td>
									<td>Hostinger</td>
									<td id="status11"></td>
									<td id="time11"></td>							
									<td></td>
								</tr>		
							</tbody>
						</table>

					</div>

					<div class="tab-pane" id="servers">

						<table class="table table-bordered table-center">
							<thead>
								<tr>
									<th class="span2" scope="col">Hostname</th>
									<th class="span2" scope="col">Type</th>
									<th class="span2" scope="col">OS</th>
									<th class="span2" scope="col">Host</th>
									<th class="span2" scope="col">Location</th>
									<th class="span2" scope="col">RAM</th>
									<th class="span2" scope="col">Storage</th>
									<th class="span2" scope="col">Bandwidth</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>MasterCoria.com</td>
									<td>Virtual Private Server</td>
									<td>Linux</td>
									<td>Linode</td>
									<td>Dallas, TX</td>
									<td>1024 MB</td>
									<td>48 GB</td>
									<td>2 TB</td>
								</tr>
								<tr>
									<td>carbon</td>
									<td>Virtual Private Server</td>
									<td>Linux</td>
									<td>Digital Ocean</td>
									<td>Amsterdam</td>
									<td>512 MB</td>
									<td>20 GB</td>
									<td>1 TB</td>
								</tr>
								<tr>
									<td>oryx</td>
									<td>Virtual Private Server</td>
									<td>Linux</td>
									<td>Backupsy</td>
									<td>Chicago, IL</td>
									<td>512 MB</td>
									<td>250 GB</td>
									<td>1 TB</td>
								</tr>
							</tbody>
						</table>

					</div>

				</div>

			</div>

			<hr>
			<footer class="footer">
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p>Copyright © 2014 - 2016, Master Coria.</p>
			</footer>
		</div> <!-- /container -->
		<script type="text/javascript" src="uptime.js"></script>
</body>
</html>