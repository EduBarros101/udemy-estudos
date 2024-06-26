<?php

class Car
{
  private $id;
  private $brand;
  private $km;
  private $color;

  public function getID()
  {
    return $this->id;
  }

  public function setID($id)
  {
    $this->id = $id;
  }

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getKm()
  {
    return $this->km;
  }

  public function setKm($km)
  {
    $this->km = intval($km);
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }
}

interface CarDAOInterface
{
  public function create(Car $car);
  public function findAll();
}
