<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <nav>
            <?php
                include 'Subcomponents/logo1.php';
                include 'Subcomponents/nav-links.php';
            ?>
        </nav>
        <div class="information">
            <div class="overlay"></div>
            <img src="images/lenovo.png" class="laptop" alt="">
            <div id="circle">
                <div class="feature one">
                    <img src="images/ram gpu.png" alt="">
                    <div>
                        <h1>RAM/GPU</h1>
                        <p>Corsair DDR4 32GB DRAM NVIDIA RTX 3080TI</p>
                    </div>
                </div>
                <div class="feature two">
                    <img src="images/processor.png" alt="">
                    <div>
                        <h1>Processor</h1>
                        <p>Intel® Core™ i9-10900K</p>
                    </div>
                </div>
                <div class="feature three">
                    <img src="images/laptopvector.png" alt="">
                    <div>
                        <h1>Display</h1>
                        <p>20" 1920x1080 240hz</p>
                    </div>
                </div>
                <div class="feature four">
                    <img src="images/battery.png" alt="">
                    <div>
                        <h1>Battery Life</h1>
                        <p>4 Cell 52Whr Long Life Battery</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="controls">
            <img src="images/arrow.png" alt="" id="upBtn">
            <h3>Features</h3>
            <img src="images/arrow.png" alt="" id="downBtn">
        </div>

    </div>

    <script src="home.js"></script>
</body>
</html>