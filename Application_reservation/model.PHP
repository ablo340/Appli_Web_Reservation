<?php
	class Reservation
	{
		private $destination;
		private $places;
		private $assurance;

		function __construct ($destination, $places)
		{
			$this->destination = $destination;
			$this->places = $places;
		}

		public function getDestination()
		{
			return $this->destination;
		}

		public function getPlaces()
		{
			return $this->places;
		}

		public function checkAssurance()
		{
			return $assurance;
		}
	}

	Class Passager
	{
		private $name;
		private $firstname;
		private $age;

		function __construct ($name, $prenom, $age)
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