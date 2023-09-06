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
                    'content' => '<img class="img-fluid opacity-75" src="/img/undertalecarousel.png"/>',
                    'caption' => '<p class="display-4"><b>Undertale</b></p>',
                    'options' => ['class' => '']
                ],
                [
                    'content' => '<img class="img-fluid opacity-75" src="/img/stardewvalleycarousel.png"/>',
                    'caption' => '<p class="display-4"><b>Stardew Valley</b></p>',
                    'options' => ['class' => '']
                ],
                [
                    'content' => '<img class="img-fluid opacity-75" src="/img/hollowknightcarousel.png"/>',
                    'caption' => '<p class="display-4"><b>Hollow Knight</b></p>',
                    'options' => ['class' => '']
                ],
                [
                    'content' => '<img class="img-fluid opacity-75" src="/img/intothebreachcarousel.png"/>',
                    'caption' => '<p class="display-4"><b>Into the Breach</b></p>',
                    'options' => ['class' => '']
                ]
            ],
            'options' => ['id' => 'jogos', 'class' => 'slide', 'data-bs-ride' => 'carousel']
        ]
    );
    ?>
</div>

<div class="container ">

    <div class="row">
        <div class="col games-show">
            <p class="display-3 text-center">Nossos jogos <br>Nossas vidas!</p>
        </div>
    </div>

    <div class="row card-grid">

        <div class="col">
            <div class="card">
                <img src="https://www.fangamer.com/cdn/shop/files/undertalephysicalgameitemview_360x360.png?v=1691706321" />
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://www.fangamer.com/cdn/shop/files/intothebreachswitchgameitemview_360x360.png?v=1691706385" />
            </div>
        </div>
        
        <div class="col">
            <div class="card">
                <img src="https://www.fangamer.com/cdn/shop/files/hollowknightphysicalgameitemview_360x360.png?v=1691706288" />
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="https://www.fangamer.com/cdn/shop/files/stardewvalleyphysicalgameitemview_360x360.png?v=1691706310" />
            </div>
        </div>


    </div>
</div>