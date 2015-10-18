<!doctype HTML>

<?php include('resource/links.php'); ?>

<html>

<head>

	<title> Innovative video-game servers </title>

	<link rel='icon' type='img/ico' href='img/fav.ico'>

</head>

<body>

	<?php include('resource/header.php'); ?>

		<div id='about'>

			<center>

				<h2> Hey there! </h2>

			</center>

			<p> PiNG runs game servers. </p>

			<p> The people who run PiNG are a solution of people actively involved in video-game communities and people passionate about technology and exploring new territory of what you can accomplish. </p>

			<p> This is all we've got right now, but things will get more interesting soon. </p>

		</div>

		<div class='server'>

			<a id='link' title='Click to join' href='steam://connect/50.23.129.120:27015' target='_blank'> Trade #1 <img class='icon' src='img/icon/connect.svg'> </a>

			<a href="http://clanforge.multiplay.co.uk/servers/2962301/view" target="_blank"><img src="http://cache.multiplayuk.com/b/1-2962301-560x95-17558-FFFFFF-FFFFFF.png" alt="Server Banner" style="border:0;width:560px;height:95px" /></a>

						<h5> Seattle - Washington </h5>

			<p class='descrip'> Standard trade server, there's a rotation of plaza maps and aimless maps just for killing time on. </p>

			<div class='commands'>
				<div>
					<p> !pc - Pricecheck </p>
					<p> !bp - Inspect someone's backpack </p>
					<p> !rtd - Roll the dice </p>
					<p> !buildinghats - Give engineer buildings hats </p>
				</div>
				<div>
					<p> !rtv - Rock the vote </p>
					<p> !nominate - Nominate a map </p>
					<p> !revote - Change your map vote </p>
					<p> !admin - Call an admin </p>
					<p> !dj / !music / !jukebox - Play music </p>
				</div>
			</div>

			<h4 id='togMap'> Map rotation: (1h) </h4>

			<div id='mapRot'>

				<?php

				include('resource/connect.php');

				$qMap = mysql_query('SELECT * FROM server');

				while($row = mysql_fetch_array($qMap)) {
					$map = explode(' ', $row['map']);

					foreach ($map as $mapEntry) {
						echo '
						<li>'. $mapEntry .'</li>
						';
					}
				}

				?>

			</div>

		</div>

					<audio>
	<source src="resource/noot-noot.mp3"></source>
</audio>

		<a id='email' href='mailto:pinggameservers@gmail.com'> pinggameservers@gmail.com </a>

	</body>
	</html>