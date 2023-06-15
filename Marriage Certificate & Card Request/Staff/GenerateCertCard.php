<?php
class formmodel {

  private $connect;

  //Registration controller's constructor
  public function __construct($database) {
    $this->connect = $database;
  }

  //This function will insert data in mySQL database
  public function inputdetail($firstname) {
    $query = $this->connect->prepare("INSERT INTO testing_input (firstname) VALUES (?)");
    $query->execute([$firstname]);

  }

}

?>