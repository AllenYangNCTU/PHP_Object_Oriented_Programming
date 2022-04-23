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
        function __construct($name)
        {
            $this->name=$name;
            print($this->name." was constructed!");
        }
    }
    $obj = new  Employee("Allen");
    ?>
</body>
</html>