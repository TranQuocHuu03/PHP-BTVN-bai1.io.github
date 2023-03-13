<?php
class Fraction {
    // properties
    public $tuso;
    public $mauso;
    // constructor
    function __construct($tuso, $mauso) {
        $this->tuso = $tuso;
        $this->mauso = $mauso;
    }
    // method to display fraction
    function displayFraction() {
        echo $this->tuso . "/" . $this->mauso;
    }
    // method to find greatest common divisor
    private function gcd($a, $b) {
        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
        return $a;
    }
    // method to simplify fraction
    private function simplify() {
        $gcd = $this->gcd($this->tuso, $this->mauso);
        $this->tuso /= $gcd;
        $this->mauso /= $gcd;
    }
    // method to add two fractions
    function add($fraction) {
        $tuso = $this->tuso * $fraction->mauso + $fraction->tuso * $this->mauso;
        $mauso = $this->mauso * $fraction->mauso;
        $result = new Fraction($tuso, $mauso);
        $result->simplify();
        echo $result;
    }
    // method to subtract two fractions
    function subtract($fraction) {
        $tuso = $this->tuso * $fraction->mauso - $fraction->tuso * $this->mauso;
        $mauso = $this->mauso * $fraction->mauso;
        $result = new Fraction($tuso, $mauso);
        $result->simplify();
        echo $result;
    }
    // method to multiply two fractions
    function multiply($fraction) {
        $tuso = $this->tuso * $fraction->tuso;
        $mauso = $this->mauso * $fraction->mauso;
        $result = new Fraction($tuso, $mauso);
        $result->simplify();
        echo $result;
    }
    // method to divide two fractions
    function divide($fraction) {
        $tuso = $this->tuso * $fraction->mauso;
        $mauso = $this->mauso * $fraction->tuso;
        $result = new Fraction($tuso, $mauso);
        $result->simplify();
        echo $result;
    }
}
$tuso_mauso =new Fraction("12","2");
$tuso_mauso -> displayFraction();
// echo $result;
?>