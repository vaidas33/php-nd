<?php

class Pinigine {

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;


    public function ideti($kiekis) : void
    {
        // if(!is_number($kiekis) || $kiekis < 0) {
        //     return null;
        // }
        if($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti()
    {
        return print_r($this->metaliniaiPinigai + $this->popieriniaiPinigai);
    }

}