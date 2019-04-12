<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	
<?php
	
	
	Branch 1
	
	
	class Animal {
		private $name;
		private $type;
		private $sound;
		
		const AANTAL_WIELEN = 4;
		
		public function __construct($type = NULL){
			self::addAnimal();
			$this->type = $type;
		}
		
		public static $aantalDieren = 100;
		
		public function setName($value){
			$this->name = $value;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public static function addAnimal(){
			self::$aantalDieren++;
		}
		
		public function getType(){
			return $this->type;
		}
	}
//	
//	Animal::addAnimal();
//	
//	
	

	
	$aap = new Animal("Gorilla");
	$aap->setName("Sander");
	echo "<h1>Mijn dier is: {$aap->getType()}</h1>";
	
	echo Animal::$aantalDieren;
	
?>

<body>
</body>
</html>