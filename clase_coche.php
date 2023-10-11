<?php
echo "clase coche";
class coche
{
	public $color;
	public $potencia;
	public $marca;
}
$micoche->new coche();
$micoche->$color='rojo';
$micoche->$potencia=120;
$micoche->$marca='yaris';
echo "mi coche tiene <br>";
echo "color".$micoche->color."<br>";
echo "color".$micoche->potencia."<br>";
echo "color".$micoche->marca."<br>";
?>