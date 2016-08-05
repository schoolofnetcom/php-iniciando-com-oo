<?php 

interface IVehicle
{
	public function getEngine($type = null);

	abstract public function getBrand();

	public function getColor();

}

