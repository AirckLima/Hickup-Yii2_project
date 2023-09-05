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
                [
                    'content' => '<img src="https://cdn.akamai.steamstatic.com/steam/apps/413150/header.jpg?t=1666917466"/>',
                    'caption' => '<h2>Stardew Valley</h2>',
                    'captionOptions' => ['class' => '']
                ],
                [
                    'content' => '<img src="https://cdn.akamai.steamstatic.com/steam/apps/367520/header.jpg?t=1667006028"/>',
                    'caption' => '<h2>Hollow Knight</h2>',
                    'captionOptions' => ['class' => '']
                ],
                [
                    'content' => '<img src="https://cdn.akamai.steamstatic.com/steam/apps/590380/header.jpg?t=1658236736"/>',
                    'caption' => '<h2>Into the Breach</h2>',
                    'captionOptions' => ['class' => '']
                ]
            ],
            'options' => ['id' => 'jogos']
        ]
    );
    ?>
</div>

<div class="container-fluid ">
    <div class="row">
        <div class="col-4 teste">
            <img src="https://www.fangamer.com/cdn/shop/files/undertalephysicalgameitemview_360x360.png?v=1691706321" />
            <img src="https://www.fangamer.com/cdn/shop/files/intothebreachswitchgameitemview_360x360.png?v=1691706385" />
            <img src="https://www.fangamer.com/cdn/shop/files/hollowknightphysicalgameitemview_360x360.png?v=1691706288" />
            <img src="https://www.fangamer.com/cdn/shop/files/stardewvalleyphysicalgameitemview_360x360.png?v=1691706310" />
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <h2>Nossos jogos <br>Nossas vidas!</h2>
                </div>
            </div>
        </div>

    </div>

</div>