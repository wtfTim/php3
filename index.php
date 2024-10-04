<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php

    class Animal
    {
        public $weight;
        public $age;
        public $color;

        public function __construct($weight, $age, $color)
        {
            $this->weight = $weight;
            $this->age = $age;
            $this->color = $color;
        }

        public function getInfo()
        {
            return "Вес: $this->weight, Возраст: $this->age, Окрас: $this->color";
        }
    }

    class Lion extends Animal
    {
        public $speed;

        public function __construct($weight, $age, $color, $speed)
        {
            parent::__construct($weight, $age, $color);
            $this->speed = $speed;
        }

        public function getManeInfo()
        {
            return "Максимальная скорость: $this->speed";
        }
    }

    class Rabbit extends Animal
    {
        public $speed;

        public function __construct($weight, $age, $color, $speed)
        {
            parent::__construct($weight, $age, $color);
            $this->speed = $speed;
        }

        public function getEarInfo()
        {
            return "Максимальная скорость: $this->speed";
        }
    }

    class Wolf extends Animal
    {
        public $speed;

        public function __construct($weight, $age, $color, $speed)
        {
            parent::__construct($weight, $age, $color);
            $this->speed = $speed;
        }

        public function getPackInfo()
        {
            return "Максимальная скорость: $this->speed";
        }
    }


    $lion = new Lion(199.99, 4.5, "рыжий", 80);
    $rabbit = new Rabbit(2.59, 1.5, "серый", 55);
    $wolf = new Wolf(61.11, 2.5, "черный", 65);


    echo "Лев:" . "<br>" . $lion->getInfo() . " км/ч <br>";
    echo $lion->getManeInfo() . " км/ч <br><br>";
    echo "Кролик:" . "<br>" . $rabbit->getInfo() . "<br>";
    echo $rabbit->getEarInfo() . " км/ч<br><br>";
    echo "Волк:" . "<br>" . $wolf->getInfo() . "<br>";
    echo $wolf->getPackInfo() . " км/ч<br><br>";

    ?>
</body>

</html>