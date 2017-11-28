<?php
	class Reservation
	{
		private $destination;
		private $places;
		private $assurance;
		public $passagers;

		function __construct ($destination, $places)
		{
			$this->destination = $destination;
			$this->places = $places;
			$this->passagers = array();
		}

		public function getDestination()
		{
			return $this->destination;
		}

		public function getPlaces()
		{
			return $this->places;
		}

		public function getAssurance($assur)
		{
			if($assur == "on")
			{
				$assurance = "OUI";
				return $assurance;
			}
			else
			{
				$assurance = "NON";
				return $assurance;
			}
		}

		public function getPassagers()
		{
			return $this->passagers;
		}

		public function setPassagers($passager)
		{
			$this->passagers[] = $passager;
		}


	}

	Class Passager
	{
		private $name;
		private $firstname;
		private $age;

		function __construct ($name, $firstname, $age)
		{
			$this->name = $name;
			$this->firstname = $firstname;
			$this->age = $age;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getFirstname()
		{
			return $this->firstname;
		}

		public function getAge()
		{
			return $this->age;
		}

	}
?>