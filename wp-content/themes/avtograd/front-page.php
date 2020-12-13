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
            <ul class="ui list">
                <li>70% учнів приходять за рекомендацією</li>
                <li>Досвід понад 25 років. Ми підготували понад 20 000 водіїв</li>
                <li>Поетапна оплата і чесні ціни</li>
                <li>Зручне розташування. Єдиний у Львові власний автодром</li>
                <li>Безперервний набір у групи. Навчання розпочинається одразу після сплати першого внеску</li>
                <li>Вільний вибір авто чи інструктора. Є інструктори-жінки</li>
                <li>Гнучкий графік навчання</li>
                <li>Навчання їзді на мотоциклі (отримання прав категорії А).</li>
                <li>Безоплатне повторне навчання. Сплативши лише перший внесок, Ви можете відвідувати заняття з Правил дорожнього руху доти, доки не переконаєтеся, що знаєте їх добре.</li>
            </ul>
        </p>
        <div class="ui green massive button">Get started today</div>
    </div>
</main>

<main class="row">
    <div class="ui center aligned container">
        <h2 class="ui huge header">Ціни і терміни</h2>
        <div class="ui grid">
            <div class="two column row">
                <div class="column">
                    <div class="content">Водіння - 150 грн/година на механічній коробці передач</div>
                </div>
                <div class="column">
                    <div class="content">Водіння - 200 грн/година на автоматичній коробці передач</div>
                </div>
            </div>
            <div class="three column row">
                <div class="column">
                    <div>
                        <img src="https://avtograd.org.ua/wp-content/uploads/2018/07/cat_a.png">
                        <p>Категорія – А</p>
                        <p>2500 грн</p>
                    </div>
                    <div>
                        <p>Начитка - 70 год</p>
                        <p>Тривалість - 3 місяці</p>
                        <p>Водіння - 100 грн</p>
                        <div class="ui green massive button">Записатись</div>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="https://avtograd.org.ua/wp-content/uploads/2018/07/cat_b.png">
                        <p>Категорія – B</p>
                        <p>8000 грн</p>
                    </div>
                    <div>
                        <p>Начитка - 70 год</p>
                        <p>Тривалість - 3 місяці</p>
                        <p>Водіння - 100 грн</p>
                        <div class="ui green massive button">Записатись</div>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="https://avtograd.org.ua/wp-content/uploads/2018/07/cat_c.png">
                        <p>Категорія – C</p>
                        <p>8500 грн</p>
                    </div>
                    <div>
                        <p>Начитка - 70 год</p>
                        <p>Тривалість - 3 місяці</p>
                        <p>Водіння - 100 грн</p>
                        <div class="ui green massive button">Записатись</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<main class="row">
    <div class="ui center aligned container">
        <h2 class="ui huge header">Акції</h2>
        <div class="ui grid">
            <div class="three column row">
                <div class="column">
                    <div>
                        <p>АКЦІЯ "INSTA"</p>
                        <p>0 грн</p>
                        <p>Вказавши промокод instaAvtograd отримайте безкоштовне заняття з водіння</p>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <p>АКЦІЯ "ПРИВЕДИ ДРУГА"</p>
                        <p>0 грн</p>
                        <p>Приходьте з другом і отримайте 2 безкоштовних заняття з водіння</p>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <p>АКЦІЯ "5%"</p>
                        <p>5%</p>
                        <p>При повній оплаті ви отримаєте 5% знижки</p>
                    </div>
                </div>
            </div>
            <div>Кожен, хто замовляє послугу «Відновлення навичок водіння», отримує у подарунок безкоштовний курс правил дорожнього руху! Подорожуйте автомобілем безпечно!</div>
        </div>
    </div>
</main>

<main class="row">
    <div class="ui center aligned container">
        <h2 class="ui huge header">Локації та розклад</h2>
        <div class="ui grid">
            <div class="four column row">
                <div class="column">
                    <p>Пасічна, 49А (головний офіс)</p>
                    <p>вт-чт 18:00-20:00, пн-ср 18:00-20:00</p>
                </div>
                <div class="column">
                    <p>Сахарова, 19</p>
                    <p>пн-ср 18:00-19:30, вт-чт 19:00-20:30</p>
                </div>
                <div class="column">
                    <p>Пекарська, 50</p>
                    <p>уточніть розклад на Пасічній, 49а</p>
                </div>
                <div class="column">
                    <p>Кушевича, 1 (Форум Львів)</p>
                    <p>уточніть розклад на Пасічній, 49а</p>
                </div>
            </div>
        </div>
    </div>
</main>

<main class="row">
    <div class="ui center aligned container">
        <h2 class="ui huge header">Записатися на курси</h2>
        <p>
            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce
            dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
            ut fermentum massa justo sit amet.
        </p>
        <div class="ui green massive button">Get started today</div>
    </div>
</main>

<main class="row">
    <div class="ui center aligned container">
        <h2 class="ui huge header">Сертифікати</h2>
        <p>
            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce
            dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
            ut fermentum massa justo sit amet.
        </p>
        <div class="ui green massive button">Get started today</div>
    </div>
</main>

<?php get_footer(); ?>