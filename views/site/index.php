<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Carousel;

$this->title = 'Hickup Studio';
?>
<div class="container games-carousel">
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

<div class="container games-show bg-negative">

    <div class="row">
        <div class="col ">
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

<div class="container novidades text-center bg-positive">
    <div class="row">
        <div class="col-7">
            <p>images</p>
        </div>
        
        <div class="col-5">
            <h2>Fique em dia com nosso desenvolvimento!</h2>
            <button type="button" class="btn btn-primary">Acesse o portal</button>
        </div>
    </div>
</div>

<div class="container apoie text-center bg-negative">
    <div class="row">
        <div class="col-7">
            <p>images</p>
        </div>

        <div class="col-5">
            <h2>Apoie nossos projetos</h2>
            <button type="button" class="btn btn-primary">Apoie</button>
        </div>
    </div>
</div>

<div class="container sobre text-center bg-positive">
    <div class="row">
        <div class="col-7">
            <p>images</p>
        </div>

        <div class="col-5">
            <h2>Conheça nossa história</h2>
            <button type="button" class="btn btn-primary">Sobre</button>
        </div>
    </div>
</div>

<div class="container contato text-center bg-negative">
    <div class="row">
        <div class="col-7">
            <p>images</p>
        </div>

        <div class="col-5">
            <h2>Conheça nossa história</h2>
            <button type="button" class="btn btn-primary">Acesse o portal</button>
        </div>
    </div>
</div>