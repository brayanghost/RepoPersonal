<?php

class Aprendiz{
    //atributos
    private $nombre;
    private $programa;
    private $ficha;
    //metodos
    function saludar(){
        echo "Hola, soy $this->nombre, pertenezco al programa $this->programa y soy de la ficha $this->ficha.<br>";
    }

    //setters

    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    function setPrograma($programa){
        $this->programa=$programa;
    }

    function setFicha($ficha){
        $this->ficha=$ficha;
    }

    //getters

    function getNombre(){
        return $this->nombre;
    }

    function getPrograma(){
        return $this->programa;
    }

    function getFicha(){
        return $this->ficha;
    }

}
$ob1=new Aprendiz();
$ob1->setNombre("Maria");
$ob1->setPrograma("Danzas");
$ob1->setFicha("2142354");
echo 'Me llamo '.$ob1->getNombre();
$ob1->saludar();

$ob2=new Aprendiz();
$ob2->setNombre("Juan");
$ob2->setPrograma("Cultura Fisica");
$ob2->setFicha("2156768");
echo 'Me llamo '.$ob2->getNombre();
$ob2->saludar();


$ob2=new Aprendiz();
$ob2->setNombre("Lucas");
$ob2->setPrograma("Ajedrez");
$ob2->setFicha("2112343");
echo 'Me llamo '.$ob2->getNombre();
$ob2->saludar();


//usando constructores

class Instructor {
    public $nombre;
    public $programa;
    public $ficha;

    function saludar(){
        echo "Hola, soy el instructor $this->name, dirijo el programa de $this->programa y la ficha $this->ficha.<br>";

    }

    function __construct($name, $programa, $ficha) {
      $this->name = $name;
      $this->programa = $programa;
      $this->ficha = $ficha;
    }

    function get_name() {
      return $this->name;
    }
    function get_programa() {
      return $this->programa;
    }

    function get_ficha() {
      return $this->ficha;
    }
  }

  
  $instructor1 = new Instructor("Juan Ramirez", "Danza", "2142345");
  $instructor1->saludar();

  $instructor2 = new Instructor("Alberto Muñoz", "MicroFutbol", "2783478");
  $instructor2->saludar();

?>