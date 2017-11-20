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
?>