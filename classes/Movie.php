<?php 

  class Movie{
    public $overview;
    private $original_title;
    private $genres = [];
    private $cast = [];
    private $vote_average = 0;

    public function_construct($_original_title){
      $this->original_title = $_original_title;
    }
  }

  /****** 
  SET  
  ******/
  public function setGenres($genresString){
    $this->genres = explode('|', $genresString);
  }

  public function setCast($genresString){
    $this->cast = explode('|', $castString);
  }


  public function setVote($_vote_average){
    $this->vote_average = $_vote_average;
  }
   

  /****** 
  GET  
  ******/
  public function getTitle(){
    return $this->original_title;
  }

  public function getGenres(){
    return $this->genres;
  }

  public function getCast(){
    return $this->cast;
  }

  public function getVote(){
    return $this->vote_average;
  }

?>