<?php
    require_once "classes/Student.php";

    $student1 = new Student("Jan", 18, "ZSK");
    $student2 = new Student("Anna", 17, "ZSŁ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <h1>Uczniowie</h1>
    <h2>Informacje o użytkownikaxch</h2>

    <?php
        echo $student1->getInfo()."<br>";
        echo $student2->getInfo()."<br>";
    ?>

    <h2>Informacje HTML - HERDOC</h2>

    <?php  
        echo $studnet1->getHtml();
        echo $student2->getHtml();
    ?>
</body>
</html>
