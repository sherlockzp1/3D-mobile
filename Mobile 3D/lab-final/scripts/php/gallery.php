<?php
	$path = '../../assets/images/gallery_images';
	$exts = array('jpg','jpeg','gif','png');
	$dir = opendir($path);

	$res = "";

	while ($file = readdir($dir)) 
		if (substr($file, 0, 1) != '.') {
			$filename = explode('.', $file);
			$ext = strtolower($filename[1]);

			if (in_array($ext, $exts)) $res .= '/'.$file.'~';
		}

	closedir($dir);

	echo $res;
?>