<?php get_header();?>

<?php
$a = 10;
$b = 20;

$a -= $b = ($a += $b) - $b;
var_dump($a, $b);
?>

<header class="ui inverted vertical center aligned segment">
    <div class="ui right floated horizontal list header-top">
        <span class="item">(096) 271-90-74</span>
        <span class="item">(032) 271-90-74</span>
        <span class="item">пн-пт 9:00-18:00</span>
        <span class="item">avtograd.lviv@gmail.com</span>
    </div>

    <nav class="content nav-wrapper">
        <div class="ui menu">
            <div class="item">
                <img src="https://wsj.waw.pl/wp-content/themes/wsj/assets/img/logo-wsj.png" class="logo">
            </div>
            <div class="right menu">
                <a class="item">Чому ми?</a>
                <a class="item">Авто та водії</a>
                <a class="item">Навчальна база</a>
                <a class="item">Сертифікати</a>
                <a class="item">Акції</a>
            </div>
        </div>
    </nav>

    <h1 class="ui header">Досить ходити пішки, час сідати за кермо!</h1>

    <main class="custom-buttons">
        <div class="content">
            <div class="ui menu">
                <a class="item">Локації та розклад</a>
                <a class="item">Записатися на курси</a>
                <a class="item">Ціни і терміни</a>
            </div>
        </div>
    </main>

</header>

<main class="row">
    <div class="ui center aligned container">
        <h2 class="ui huge header">Чому обирають нас?</h2>
        <p>
            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce
            dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
            ut fermentum massa justo sit amet.
        </p>
        <div class="ui green massive button">Get started today</div>
    </div>
</main>

<?php get_footer(); ?>