<?php
	$brandName = $_GET['brand']; 
	$dbhandler = NULL;

	try {
		$dataSource = "sqlite:../../db/test1.db";
		try {
			$dbhandler = new PDO($dataSource, "user", "password", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false, ));
		}
		catch (PDOEXception $e) {
			echo "Fail to connect to the database!";
        	print new Exception($e->getMessage());
    	}

		$sql = 'SELECT * FROM Model_3D WHERE brand = "'. $brandName. '"';
		$stmt = $dbhandler->query($sql);

		$i=0; $res = null;
		
		while ($data = $stmt->fetch()) {

			$res[$i]['brand'] = $data['brand'];
			$res[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
			$res[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
			$res[$i]['modelTitle'] = $data['modelTitle'];
			$res[$i]['modelSubtitle'] = $data['modelSubtitle'];
			$res[$i]['modelDescription'] = $data['modelDescription'];
			
			$i++;
		}
		echo json_encode($res);
	}
	catch (PDOEXception $e) {	
    	print new Exception($e->getMessage());
	}
	
	$dbhandler = NULL;

 ?>