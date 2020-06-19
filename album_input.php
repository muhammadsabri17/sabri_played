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
			<h2>ADD ALBUM</h2>
		</center>
		<form method="POST" action="album_proses.php">
			<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#DCFFFB" align="center">
				<tr>
					<td>Artist Id</td>
					<td><input type="text" name="artist_id"></td>
				</tr>
				<tr>
					<td>Album Name</td>
					<td><input type="text" name="album_name"></td>
				</tr>
				</tr>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
				</tr>
			</table>
		</form>