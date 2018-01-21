<?php

/**
 * Created by PhpStorm.
 * User: Keshav Gupta
 * Date: 7/17/2017
 * Time: 12:40 PM
 */
class Room
{
  public $roomno;
  public  $capacity;
  public  $booked;
  public $free;

  public function  __construct($rn,$ca,$bo,$fr)
  {
      $this->roomno = $rn;
      $this->capacity =$ca;
      $this->booked = $bo;
      $this->free =$fr;
  }
  public function  getroomno()
  {
      $this->roomno;
  }
    public function  getcapacity()
    {
        $this->capacity;
    }
    public function  getbooked()
    {
        $this->booked;
    }
    public function  getfree()
    {
        $this->free;
    }
}