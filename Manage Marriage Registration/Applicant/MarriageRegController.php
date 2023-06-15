<?php

class MarriageRegController {
  private $MarriageRegistration;

  //Registration controller's constructor
  public function __construct($MarriageRegistration) {
    $this->MarriageRegistration = $MarriageRegistration;
  }

  public function testinput($firstname) {
    

    //Call input function in form Model
    $this->formmodel->inputdetail($firstname);

  }
}
  ?>