<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Employee
        {
            public $Name;
            function construct($Str)
            { 
            $this->Name = $Str;
            }
        }

        $obj1 = new Employee("Allen"); 
        $obj2 = new Employee("Allen");
        $obj3 = $obj1;

        if ($obj2 == $obj1) echo '$obj2 的成員與值均和 $obj1 相同'.'<br>'; 
        else echo '$obj2 的成員或值和 obj1 不同'.'<br>';

        if ($obj2 === $obj1) echo '$obj2 和o bj1 指向相同物件'.'<br>'; 
        else echo '$obj2和obj1 指向不同物件'.'<br>';

        if ($obj3 === $obj1) echo '$obj3 和 obj1 指向相同物件'.'<br>'; 
        else echo '$obj3 和 obj1 指向不同物件'.'<br>';
    ?>
</body>
</html>