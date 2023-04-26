<?php

class Personne{

/////////////////////////////////////////////ATTRIBUTS/////////////////////////////////////////
  private string $nom;
  private string $prenom;
  private DateTime $dateNaiss;
  private DateTime $dateMort;

////////////////////////////////////////////CONSTRUCTEUR/////////////////////////////////////////
  public function __construct(string $nom, string $prenom, string $dateNaiss, string $dateMort){
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->dateNaiss = new DateTime($dateNaiss);
      $this->dateMort = new DateTime($dateMort);
  }
///////////////////////////////////////////GETTERS//////////////////////////////////////////////
  public function getNom():string
  {
    return $this->nom;
  }
  public function getPrenom():string
  {
    return $this->prenom;
  }
  public function getDateNaiss():DateTime
  {
    return $this->dateNaiss;
  }
  public function getDateMort():DateTime
  {
    return $this->dateMort;
  }
  
///////////////////////////////////////////SETTERS//////////////////////////////////////////////
  public function setNom($nom)
  {
    $this->nom = $nom;
    return $this;
  }
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;
    return $this;
  }
  public function setDateNaiss($dateNaiss)
  {
    $this->dateNaiss = $dateNaiss;
    return $this;
  }
  public function setDateMort($dateMort)
  {
    $this->dateMort = $dateMort;
    return $this;
  }
///////////////////////////////////////////METHODES//////////////////////////////////////////////
  public function calculerAge(){
      $dateMort = $this->dateMort;
      $dateNaiss = $this->dateNaiss;
  
      $difference = date_diff($dateNaiss, $dateMort);
      return $difference->y;
  }

  public function findNumber(){
    $dixaine = floor($this->calculerAge()/10);
    $unite = ($this->calculerAge()%10);
    $age = $dixaine+$unite;
    return $age;
  }
///////////////////////////////////////////AFFICHER//////////////////////////////////////////////
  public function getInfos(){
      return $this->getPrenom()." ".$this->getNom()." est mort à l'âge de ".$this->calculerAge()." ans.<br>";
  }

  public function __toString(){
    return $this->getPrenom();
  }

  
}



?>

