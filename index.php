<?php
    class Hotel{
        public $name;
        public $price;
        public $description;
        public $image_path;
    }

    $hotel1 = new Hotel();
    $hotel1->name='Asteria Hotel Fantasia';
    $hotel1->price='45620';
    $hotel1->description='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga neque pariatur possimus veritatis voluptate. Culpa est facere quasi quod vitae.';
    $hotel1->image_path='1.jpg';

    $hotel2 = new Hotel();
    $hotel2->name='Maxx Royal Belek Golf Resort';
    $hotel2->price='34868';
    $hotel2->description='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga neque pariatur possimus veritatis voluptate. Culpa est facere quasi quod vitae.';
    $hotel2->image_path='2.jpg';

    $hotel3 = new Hotel();
    $hotel3->name='Sunrise Arabian Beach Resort';
    $hotel3->price='32423';
    $hotel3->description='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga neque pariatur possimus veritatis voluptate. Culpa est facere quasi quod vitae.';
    $hotel3->image_path='3.jpg';

    $hotel4 = new Hotel();
    $hotel4->name='Chuchulev Hotel';
    $hotel4->price='32434';
    $hotel4->description='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga neque pariatur possimus veritatis voluptate. Culpa est facere quasi quod vitae.';
    $hotel4->image_path='4.jpg';
    $hotels = [$hotel1, $hotel2, $hotel3, $hotel4];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tour Agency</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <header class="header">
        <nav class="nav">
            <h2>SexBeach</h2>
            <ul class="nav__menu">
                <li><a href="#" class="nav__link">Home</a></li>
                <li><a href="#" class="nav__link">About</a></li>
                <li><a href="#" class="nav__link">Contact</a></li>
                <li><a href="#" class="nav__link">Gallery</a></li>
            </ul>
        </nav>
    </header>


    <h1>Welcome to tour agency - SexBeach</h1>
    <section class="content">
        <div class="content__product_list">
            <ul class="content__grid">
                <?php foreach ($hotels as $hotel):?>
                    <li class="content__hotel" style="background-image: url('images/<?php echo $hotel->image_path?>')">
                            <div class="content__wrap">
                                <h2><?php echo $hotel->name?></h2>
                                <h2>Цена: <?php echo $hotel->price?></h2>
                                <p><?php echo $hotel->description?></p>
                            </div>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </section>
</body>
</html>