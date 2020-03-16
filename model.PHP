<?php
	class Reservation
	{
		private $destination;
		private $places;
		private $assurance;
		private $passagers;

		function __construct ()
		{
			$this->destination = null;
			$this->places = null;
			$this->passagers = array();
			$this->assurance = 'OUI';
		}

		public function getDestination()
		{
			return $this->destination;
		}

		public function getPlaces()
		{
			return $this->places;
		}

		public function setDestination($destination)
		{
			$this->destination = $destination;
		}

		public function setPlaces($places)
		{
			$this->places =$places;
		}

		public function getAssurance()
		{
			return $this->assurance;
		}

		public function setAssurance($assur)
		{
			$this->assurance = $assur;
		}

		public function getPassagers()
		{
			return $this->passagers;
		}

		public function AddPassagers($passager)
		{
			$this->passagers[] = $passager;
		}

		public function DelPassagers()
		{
			$i = (sizeof($this->passagers) - 1);
			unset($this->passagers[$i]);
		}


	}

	Class Passager
	{
		private $name;
		private $firstname;
		private $age;

		function __construct ()
		{
			$this->name = '';
			$this->firstname = '';
			$this->age = '';
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

		public function setName($name)
		{
			$this->name = $name;
		}

		public function setFirstname($firstname)
		{
			$this->firstname = $firstname;
		}

		public function setAge($age)
		{
			$this->age = $age;
		}
	}
?>