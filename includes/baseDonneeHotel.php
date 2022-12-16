<?php



class Hotel
{
    public $id;
    public $name;
    public $location;
    public $price;
    public $pictures = array();

    function __construct($id, $name, $location, $price, $pictures)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->price = $price;
        $this->pictures = array();
        array_push($this->pictures, $pictures);
    }



    function __destruct()
    {
        echo "The Hotel is {$this->name} the location is {$this->location}.";
    }
}

$maria = new Hotel("0", "Maria", "Paris", "300€", $pictures["01.jpg" "02.jpg"]);
