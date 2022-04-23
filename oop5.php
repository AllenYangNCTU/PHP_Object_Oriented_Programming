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
        public $name;
        function __construct($Str)
        {
            $this->name=$Str;
            print($this->name." was constructed!<br>");
        }
        function __destruct()
        {
            $this->name=NULL;
            print("It was destructed!");
        }
    }
    $obj = new  Employee("Allen");
    $obj = NULL;
    ?>
</body>
</html>