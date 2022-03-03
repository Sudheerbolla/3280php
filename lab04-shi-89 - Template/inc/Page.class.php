<?php

//This Class is to construct our html page.

class Page  {

  public static $title = "Please set the title";

  //Constructor - Set the title when it is passed in __construct($newTitle)  {
  

  //This function displays the html header
  static function header() {

  }

  //This function displays the html footer
  static function footer() {
    
  }

  //This function displays the upload form for the CSV file
  static function uploadForm() { 
    }

    static function showRoster($team)  {
      ?>
      <!-- Setup the table roster -->
      

      <?php 
      //Iterate through the roster and print it out
      foreach ($team->players as $player)  {

       

      }
      ?>

      <!-- End the table roster -->
      <!-- Display the total count of team members -->
      <?php
    }


}

?>
