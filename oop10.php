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
        class ParentClass
        {
            protected $Field1;
            function __construct($Value)
            {
                $this->Field1 = $Value;
                print("Field1 : ".$this->Field1."<br>");
            }
            function __destruct()
            {
                $this->Field1 = 0;
                print("Field1 : ".$this->Field1);
            }
        }
        class ChildClass extends ParentClass
        {
            protected $Field2;
            function __construct($Value)
            {
                $this->Field2 = $Value;
                print("Field2 : ".$this->Field2."<br>");
            }
            function __destruct()
            {
                $this->Field2 = 0;
                print("Field2 : ".$this->Field2);
            }
        }
        $MyObject = new ChildClass(100);
        $MyObject = NULL;
        ?>
</body>
</html>