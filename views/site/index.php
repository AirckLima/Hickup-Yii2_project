<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Carousel;

$this->title = 'HickUP Studio';
?>

<h1>aaaaaaaaaaa</h1>
<?php
echo Carousel::widget(
    [
        'items' => [
            '<img src="https://cdn.akamai.steamstatic.com/steam/apps/391540/header.jpg?t=1579096091"/>',
            '<img src="https://cdn.akamai.steamstatic.com/steam/apps/413150/header.jpg?t=1666917466"/>',
            '<img src="https://cdn.akamai.steamstatic.com/steam/apps/590380/header.jpg?t=1658236736"/>'
        ],
        'options' => ['id' => 'Jogos']
    ]
    );
?>
