<?php

include "app/Track.php";

$id = $_GET['id'];

$track = new Track();
$row = $track->edit($id);

?>
<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">

<body>

	<div class="container">
		<div class="header">
			<center><img src="layout/assets/image/Header.png"></center>
		</div>

		<center>
			<div class="menu">
				<a href="index.php">Home</a>
				<a href="artist_tampil.php">Artist</a>
				<a href="album_tampil.php">Album</a>
				<a href="track_tampil.php">Track</a>
				<a href="played_tampil.php">Played</a>
				<a href="logout.php">LogOut</a>

			</div>
		</center>


		<center>
			<h2>ALBUM EDIT</h2>
		</center>
		<form method="POST" action="track_proses.php">
			<input type="hidden" name="track_id" value="<?php echo $id; ?>">
			<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#DCFFFB" align="center">
				<tr>
					<td>Track Name</td>
					<td><input type="text" name="Track_name" value="<?php echo $row['Track_name']; ?>"></td>
				</tr>
				<tr>
					<td>Artist Id</td>
					<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
				</tr>
				<tr>
					<td>Album Id</td>
					<td><input type="text" name="album_id" value="<?php echo $row['album_id']; ?>"></td>
				</tr>
				<tr>
					<td>Time</td>
					<td><input type="time" name="waktu" value="<?php echo $row['waktu']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn-edit" value="UPDATE"></td>
				</tr>
			</table>
		</form>