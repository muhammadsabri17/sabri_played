<?php

include_once "app/Controller.php";
include_once "app/Track.php";

$track = new Track();

if ($_POST['btn-simpan']) {
	$track->input();
	header("location:track_tampil.php");
}

if ($_POST['btn-edit']) {
	$track->update();
	header("location:track_tampil.php");
}

if ($_GET['delete-id']) {
	$track->delete($_GET['delete-id']);
	header("location:track_tampil.php");
}
