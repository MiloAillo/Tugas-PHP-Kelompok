<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topik 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <?php
            class Car {
                public $brand;
                public $model;
                public $color;
                public $isAvailable;

                public function __construct($brand, $model, $color, $isAvailable) {  // method 1: special method
                    $this->brand = $brand;
                    $this->model = $model;
                    $this->color = $color;
                    $this->isAvailable = $isAvailable;
                }

                public function Available() {  // method 2: cek ketersediaan
                    if ($this->isAvailable == "true") {
                        return "<p class='available'>$this->brand $this->model is available</p>";
                    } elseif ($this->isAvailable == "false") {
                        return "<p class='available'>$this->brand $this->model is not available</p>";
                    } else {
                        return "<p class='available'>cannot retreive $this->brand $this->model data</p>";
                    }
                }

                public function getStatus() { // method 3: lihat status
                    echo "<div class='container'>
                            <p class='status'>This is $this->brand $this->model with color $this->color </p>
                            ". $this->Available() 
                        ."</div>";
                    
                }
            }

            $suzuki = new Car("suzuki", "RoadRusher", "grey", "true");
            $toyota = new Car("Toyota", "X", "white", "true");
            $jeep = new Car("Jeep", "BigBoy", "dark green", "false");
            $fuso = new Car("Fuso", "A880", "white", "false");
            $yunori = new Car("Yunori", "G5", "dark blue", "engga tau");

            $cars = [$suzuki, $toyota, $jeep, $fuso, $yunori];

            foreach ($cars as $car) {
                $car->getStatus();
            }
        ?>
    </div>

</body>
</html>