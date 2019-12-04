<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'websekolah');
	
	if($mysqli){
		echo "sudah connect";
		
	}else{
		echo "belum konek";
	}
	//baru
?>