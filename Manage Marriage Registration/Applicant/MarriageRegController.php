<?php

class formcontroller {
  private $formmodel;

  //Registration controller's constructor
  public function __construct($formmodel) {
    $this->formmodel = $formmodel;
  }

  public function testinput($firstname) {
    

    //Call input function in form Model
    $this->formmodel->inputdetail($firstname);

  }
}
  ?>