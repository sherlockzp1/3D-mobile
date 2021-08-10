<?php
	class Model {
		public $dbhandler;
		
		public function __construct() {
			$dataSource = "sqlite:./db/data.db";
			
			try {
				$this->dbhandler = new PDO($dataSource, "user", "password", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false, ));
			}
			catch (PDOEXception $e) {
				echo "Fail to connect to the database!";
	        	print new Exception($e->getMessage());
	    	}
		}
		
		public function dbGetBrand() {
			return array("-", "Coke", "Coke Light","Coke Zero","Sprite", "Dr Pepper", "Fanta");
		}

		public function dbCreateTable() {
			try{
				$sql = "CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)";
				$this->dbhandler->exec($sql);
				return "Model_3D table is successfully created in test1.db file";
			}
			catch(PD0EXception $e) {
				print new Exception($e->getMessage());
			}
			$this->dbhandler = NULL;
		}
		
		public function dbInsertData() {
			try{
				$sql =
				'INSERT INTO "Model_3D" ("id", "name", "title", "subTitle", "description", "pictureUrl", "x3dUrl") VALUES (1, "Coca Cola", "Coca Cola", "New York Harbour, 1886", "It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!", "assets/images/site_images/coca_cola.png", "string_5");'.
				'INSERT INTO "Model_3D" ("id", "name", "title", "subTitle", "description", "pictureUrl", "x3dUrl") VALUES (2, "Dietcoke", "Dietcoke", "West Germany, 1959", "First introduced in 1961, crisp, refreshing, clean-tasting Dietcoke is now the world\'s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Dietcoke Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Dietcoke without the sugar or calories.", "assets/images/site_images/dietcoke.png", "string_5");'.
				'INSERT INTO "Model_3D" ("id", "name", "title", "subTitle", "description", "pictureUrl", "x3dUrl") VALUES (3, "Fanta", "Fanta", "Italy, 1955", \'The "Fanta" brand, as it is now known, was launched by Coca-Cola in Italy in 1955 as an orange-flavoured soft drink. It is the main core flavour, accounting for 70% of sales, but other fruit flavours also have many fans. The bright colours of the packaging, the distinctive fruit flavours and the bubbly character are the reasons for the popularity of Fanta sodas. The new brand image, designed by visitoffice, has a softer and more dynamic typography and a graphic expression that highlights the fact that Fanta is a soft carbonated drink with a fun, humorous and playful personality. visitoffice has used superb illustrations, graphics and colours in the visual communication of the brand elements, which are set up in different areas to convey different messages. to meet consumers\' needs for different flavours.\', "assets/images/site_images/fanta.png", "string_5");';

				$this->dbhandler->exec($sql);
				return "X3D model data inserted successfully inside test1.db";
			}
			catch(PD0EXception $e) {
				print new Exception($e->getMessage());
			}
			$this->dbhandler = NULL;
		}

		public function dbGetData() {
			try {
				$sql = "SELECT * FROM Model_3D";
				$stmt = $this->dbhandler->query($sql);
				$result = null;
				$i=-0;
				while ($data = $stmt->fetch()) {
					$result[$i]['name'] = $data['name'];
					$result[$i]['title'] = $data['title'];
					$result[$i]['subTitle'] = $data['subTitle'];
					$result[$i]['description'] = $data['description'];
					$result[$i]['pictureUrl'] = $data['pictureUrl'];
					$result[$i]['x3dUrl'] = $data['x3dUrl'];
					$result[$i]['detailUrl'] = $data['detailUrl'];

					$i++;
				}
			}
			catch (PD0EXception $e) {
				print new Exception($e->getMessage());
			}
			$this->dbhandler = NULL;

			return $result;
		}
	
		public function getData() {
			return array(
				'model_1' => 'Coke Can 3D Image 1',
				'image3D_1' => 'coke_1',

				'model_2' => 'Coke Can 3D Image 2',
				'image3D_2' => 'coke_2',

				'model_3' => 'Sprite Bottle 3D Image 1',
				'image3D_3' => 'sprite_1',

				'model_4' => 'Sprite Bottle 3D Image 2',
				'image3D_4' => 'sprite_2',

				'model_5' => 'Dr Pepper Cup 3D Image 1',
				'image3D_5' => 'pepper_1',

				'model_6' => 'Dr Pepper Cup 3D Image 2',
				'image3D_6' => 'pepper_2'
			);
		}
	}
?>