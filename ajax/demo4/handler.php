<?php 
    
    // Params: name, year of birth
    // Return: name + age + colour
    
    $colours = array("#fff093", "#b7da8a", "#faab54");

    $name = $_POST["name"];
    $birthYear = $_POST["birthYear"];

    $age = 2019 - $birthYear;
    $r = rand(0, count($colours) - 1);

    $result = new Data($name, $birthYear, $age, $colours[$r]);
    echo json_encode($result);
    
    class Data {
        public $name;
        public $birthYear;
        public $age;
        public $colour;

        function __construct($name, $birthYear, $age, $colour)
        {
            $this->name = $name;
            $this->birthYear = $birthYear;
            $this->age = $age;
            $this->colour = $colour;
        }
    }


    



?>