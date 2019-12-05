<?php
	$con = mysqli_connect('localhost', 'root', '', 'websekolah');
	
	if($con){
		echo "sudah connect";
		
	}else{
		echo "belum konek";
	}
	//baru
?>