<?php
    require ('steamauth/steamauth.php');  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Steam Login PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table {
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
  </head>
  <body style="background-color: #EEE;">
    <div class="container" style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 10px; background-color: #FFF;">
		<h1>Steam Login PHP</h1>
		<hr>
		<?php
		if(!isset($_SESSION['steamid'])) {
			echo "<div style='margin: 30px auto; text-align: center;'>Welcome Guest! Please log in!<br>";
			loginbutton();
			echo "</div>";
		}  else {
			include ('steamauth/userInfo.php');
		?>	
		<br>
		<h4 style='margin-bottom: 3px; float:left;'>Data:</h4><span style='float:right;'><?php logoutbutton(); ?></span>
		<table class='table table-striped'>
			<tr>
				<td><b>Nombre de la variable</b></td>
				<td><b>Valor</b></td>
				<td><b>Descripción</b></td>
			</tr>
			<tr>
				<td>$steamprofile['steamid']</td>
				<td><?=$steamprofile['steamid']?></td>
				<td>SteamID64 del usuario</td>
			</tr>
			<tr>
				<td>$steamprofile['communityvisibilitystate']</td>
				<td><?=$steamprofile['communityvisibilitystate']?></td>
				<td>1 - Privada; 3 - Pública</td>
			</tr>
			<tr>
				<td>$steamprofile['profilestate']</td>
				<td><?=$steamprofile['profilestate']?></td>
				<td>1 - El usuario ha configurado su perfil; 0 - No lo ha configurado</td>
			</tr>
			<tr>
				<td>$steamprofile['personaname']</td>
				<td><?=$steamprofile['personaname']?></td>
				<td>Nombre público (Nick)</td>
			</tr>
			<tr>
				<td>$steamprofile['lastlogoff']</td>
				<td><?=$steamprofile['lastlogoff']?></td>
				<td>
					<a href='http://www.unixtimestamp.com/' target='_blank'>Marca de tiempo UNIX</a> desde el último cierre de sesión
				</td>
			</tr>
			<tr>
				<td>$steamprofile['profileurl']</td>
				<td><?=$steamprofile['profileurl']?></td>
				<td>Link personalizado al perfil del usuario</td>
			</tr>
			<tr>
				<td>$steamprofile['personastate']</td>
				<td><?=$steamprofile['personastate']?></td>
				<td>0 - Desconectado, 1 - En linea, 2 - Ocupado, 3 - Ausente, 4 - Durmiendo, 5 - Deseando intercambiar, 6 - Deseando jugar</td>
			</tr>
			<tr>
				<td>$steamprofile['realname']</td>
				<td><?=$steamprofile['realname']?></td>
				<td>"Real" name (no siempre se obtiene)</td>
			</tr>
			<tr>
				<td>$steamprofile['primaryclanid']</td>
				<td><?=$steamprofile['primaryclanid']?></td>
				<td>ID del grupo primaro (si se ha establecido)</td>
			</tr>
			<tr>
				<td>$steamprofile['timecreated']</td>
				<td><?=$steamprofile['timecreated']?>
				</td>
				<td>
					<a href='http://www.unixtimestamp.com/' target='_blank'>Marca de tiempo UNIX</a> de la creación de la cuenta
				</td>
			</tr>
			<tr>
				<td>$steamprofile['uptodate']</td>
				<td><?=$steamprofile['uptodate']?></td>
				<td>
					<a href='http://www.unixtimestamp.com/' target='_blank'>Marca de tiempo UNIX</a>  para el momento en que se actualizó por última vez la información de la cuenta del usuario
				</td>
			</tr>
			<tr>
				<td>$steamprofile['avatar']</td>
				<td>
					<img src='<?=$steamprofile['avatar']?>'><br>
					<?=$steamprofile['avatar']?>
				</td>
				<td>32x32px avatar</td>
			</tr>
			<tr>
				<td>$steamprofile['avatarmedium']</td>
				<td>
					<img src='<?=$steamprofile['avatarmedium']?>'><br>
					<?=$steamprofile['avatarmedium']?>
				</td>
				<td>64x64px avatar</td>
			</tr>
			<tr>
				<td>$steamprofile['avatarfull']</td>
				<td>
					<img src='<?=$steamprofile['avatarfull']?>'><br>
					<?=$steamprofile['avatarfull']?>
				</td>
				<td>184x184px avatar</td>
			</tr>
		</table>
		<?php
		}    
		?>
		<hr>
	</div>
  </body>
</html>
