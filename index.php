<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <?php
    require_once "Core/Logic/menu.php";
    ?>
    </header>
    
<?php 
function Laaunch()
{
    echo "test";
}
Laaunch();
$Author = "eliott";

echo "<p> {$Author}<p>";

?>
</body>
</html>