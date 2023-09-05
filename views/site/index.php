<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Carousel;

$this->title = 'HickUP Studio';
?>

<div class="container">


<?php
echo Carousel::widget(
    [
        'items' => [
            [
                'content' => '<img src="https://cdn.akamai.steamstatic.com/steam/apps/391540/header.jpg?t=1579096091"/>',
                'caption' => '<h2>Undertale</h2>',
                'captionOptions' => ['class' => '']
            ],
            ['content' => '<img src="https://cdn.akamai.steamstatic.com/steam/apps/413150/header.jpg?t=1666917466"/>'],
            ['content' => '<img src="https://cdn.akamai.steamstatic.com/steam/apps/590380/header.jpg?t=1658236736"/>']
        ],
        'options' => ['id' => 'Jogos']
    ]
    );
?>
</div>
