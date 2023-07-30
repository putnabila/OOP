<?php

// Parent class hp
class hp
{
    protected $merk;
    private $color;
    public $isComfortable;

    public function __construct($merk, $color)
    {
        $this->merk = $merk;
        $this->color = $color;
        $this->isComfortable = true;
        echo "Hp object created.\n";
    }

    public function __destruct()
    {
        echo "Hp object destroyed.\n";
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function playOn()
    {
        echo "Playing on the hp...\n";
    }

    public function Communicate()
    {
        echo "Communicate from the hp...\n";
    }
}

// Child class  ReclinerHp inheriting from hp
class ReclinerHp extends hp
{
    private $hasCamera;

    public function __construct($merk, $color)
    {
        parent::__construct($merk, $color);
        $this->hasCamera = true;
        echo "Hp object created.\n";
    }

    public function __destruct()
    {
        echo "Hp object destroyed.\n";
    }

    public function hasCamera()
    {
        return $this->hasCamera ? "Yes" : "No";
    }

    public function playOn()
    {
        parent::playOn();
        echo "playing game at hp...\n";
    }
}

// Instansiasi object dari masing-masing class
$hp = new hp ("Samsung", "Black");
$hp = new hp("Case", "Green");

// Set semua property dari objectnya
$hp->setMerk("Samsung");
$hp->setColor("Black");

// Get semua property dari objectnya