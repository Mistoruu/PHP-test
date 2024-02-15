<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <?php


    class Character
    {
    }

    interface GenerateCode
    {
        public function generateHTML();
    }

    class GameCharacter extends Character
    {

        // atributs
        public $Name;
        public $Picture;
        public $Description;

        // Methods / Functions
        public function __construct($Name, $Picture, $Description)
        {
            $this->Name = $Name;
            $this->Picture = $Picture;
            $this->Description = $Description;

            echo "<h2>" . $this->Name . "<h2>";
        }
        public function __destruct()
        {
        }

        public function generateHTML()
        {
            echo "<h2>" . $this->Name . "<h2>";
            echo "<div>";
            echo "<img src'" . $this->Picture . "' alt='" . $this->Name . "' />";
            echo "<p>" . $this->Description . "</p>";
            echo "</div>";
        }
    }

    ?>

    <?php

    $Malenia = new GameCharacter("Malenia", "malenia.jpg", "I am Malenia Blade of Miquella and i have never known defeat");
    $Malenia->generateHTML();









    ?>



</body>

</html>