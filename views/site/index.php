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
                    'content' => '<img class="img-fluid" src="https://cdn.akamai.steamstatic.com/steam/apps/391540/header.jpg?t=1579096091"/>',
                    'caption' => '<p class="display-4"><b>Undertale</b></p>',
                    'captionOptions' => ['class' => '']
                ],
                [
                    'content' => '<img class="img-fluid" src="https://cdn.akamai.steamstatic.com/steam/apps/413150/header.jpg?t=1666917466"/>',
                    'caption' => '<p class="display-4"><b>Stardew Valley</b></p>',
                    'captionOptions' => ['class' => '']
                ],
                [
                    'content' => '<img class="img-fluid" src="https://cdn.akamai.steamstatic.com/steam/apps/367520/header.jpg?t=1667006028"/>',
                    'caption' => '<p class="display-4"><b>Hollow Knight</b></p>',
                    'captionOptions' => ['class' => '']
                ],
                [
                    'content' => '<img class="img-fluid" src="https://cdn.akamai.steamstatic.com/steam/apps/590380/header.jpg?t=1658236736"/>',
                    'caption' => '<p class="display-4"><b>Into the Breach</b></p>',
                    'captionOptions' => ['class' => '']
                ]
            ],
            'options' => ['id' => 'jogos']
        ]
    );
    ?>
</div>

<div class="container ">

    <div class="row">

        <div class="col-auto teste">
            <div class="card">
                <img src="https://www.fangamer.com/cdn/shop/files/undertalephysicalgameitemview_360x360.png?v=1691706321" />
            </div>
            
            <div class="card">
                <img src="https://www.fangamer.com/cdn/shop/files/intothebreachswitchgameitemview_360x360.png?v=1691706385" />
            </div>    
        </div>

        <div class="col-auto">
            <div class="card">
                <img src="https://www.fangamer.com/cdn/shop/files/hollowknightphysicalgameitemview_360x360.png?v=1691706288" />
            </div> 
            <div class="card">
                <img src="https://www.fangamer.com/cdn/shop/files/stardewvalleyphysicalgameitemview_360x360.png?v=1691706310" />
            </div>
        </div>
        
        <div class="col games-show">
            <p class="display-3 text-center">Nossos jogos <br>Nossas vidas!</p>
        </div>
        
    </div>
</div>