<?php 
class Movie {
  private $titolo;
  private $genere;
  private $anno;
  private $lingua;


  public function  __construct($_titolo, $_genere, $_lingua, $_anno) {
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    $this->lingua = $_lingua;
    $this->anno = $_anno;
  }

  public function movieInfo() {
    if( strtolower($this->genere) == 'fantascienza')
    return "<li>{$this->titolo}</li>
            <li>{$this->genere}</li>
            <li>{$this->lingua}</li>
            <li>{$this->anno}</li> </br>";
  }



}




