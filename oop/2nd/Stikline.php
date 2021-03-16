<?php

class Stikline {

    private $turis;
    private $yra = 0;

    public function __construct($turis) 
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {
        $visoKiekis = $kiekis + $this->yra;
        $this->yra = min($this->turis, $visoKiekis);
    }

    public function ispilti()
    {
        $yra = $this->yra;
        $this->yra = 0;
        return $yra;
    }
}