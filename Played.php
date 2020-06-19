<?php
include_once("Controller.php");

class Played extends Controller
{

	public function __construct()
	{
		$this->db = new Controller();
		$this->db = $this->db->dbConnect();
	}

	public function input()
	{

		$artistid = $_POST['artist_id'];
		$albumid = $_POST['album_id'];
		$trackid = $_POST['track_id'];
		$play = $_POST['played'];


		$sql = "INSERT INTO tb_played (artist_id, album_id,track_id,played) VALUES
										(:artist_id, :album_id, :track_id, :played)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $artistid);
		$stmt->bindParam(":album_id", $albumid);
		$stmt->bindParam(":track_id", $trackid);
		$stmt->bindParam(":played", $play);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_played";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_played WHERE played_id=:played_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":played_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$artistid = $_POST['artist_id'];
		$albumid = $_POST['album_id'];
		$trackid = $_POST['track_id'];
		$play = $_POST['played'];
		$id = $_POST['played_id'];

		$sql = "UPDATE tb_played SET artist_id=:artist_id, album_id=:album_id, track_id=:track_id, played=:played WHERE played_id=:played_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $artistid);
		$stmt->bindParam(":album_id", $albumid);
		$stmt->bindParam(":track_id", $trackid);
		$stmt->bindParam(":played", $play);
		$stmt->bindParam(":played_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{

		$sql = "DELETE FROM tb_played WHERE played_id=:played_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_id", $id);
		$stmt->execute();

		return false;
	}
}
