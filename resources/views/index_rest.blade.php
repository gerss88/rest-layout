<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="zag"><h2><span class="red">FOO</span>BLO</h2></div>
        <div class="menu">
            <a href="#" class="on red">Главная</a>
            <a href="">Рецепты</a>
            <a href="">Страницы</a>
            <a href="">Обо мне</a>
            <a href="">Блог</a>
            <a href="" class="of">Контакты</a>
        </div>
        <div class="search">
            <div class="search-block">
                <a href="#" class="butt"><i class="fa-solid fa-magnifying-glass"></i> Нажми, чтобы искать</a>
            </div>
        </div>
    </header>
    <div class="main_container">
        <div class="text-all">
            <h1>Мексиканский гриль</h1>
            <div class="disc-main">
                <h3 class="onl"><i class="fa-solid fa-utensils"></i> 4 зала</h3>
                <h3><i class="fa-regular fa-clock"></i> 40 минут</h3>
                <h3 class="ofl"><i class="fa-regular fa-user"></i> Иван Петров</h3>
            </div>
            <div class="but-block">
                <div class="but"><a href="#" class="butt1">Посмотреть блюда</a></div>
            </div>
        </div>
        <div class="photo-all">
            <div class="block-1"><div class="imagein"><img src="{{ asset('images/block-1.jpg') }}" alt=""></div></div>
            <div class="block-2"><div class="imagein"><img src="{{ asset('images/block-2.jpg') }}" alt=""></div></div>
            <div class="block-3"><div class="imagein"><img src="{{ asset('images/block-3.jpg') }}" alt=""></div></div>
            <div class="block-4"><div class="imagein"><img src="{{ asset('images/block-4.jpg') }}" alt=""></div></div>
        </div>
    </div>
    <div class="slozno-container">
        <div class="bluda">
            <div class="most-popular">
                <h1>Самые популярные блюда</h1>
                <div class="create-line"></div>
                <div class="photo-kart">
                    <div class="bl-1 cont">
                        <div class="photo-1 photo"></div>
                        <h3>Каша с фруктами и вафли</h3>
                    </div>
                    <div class="bl-2 cont">
                        <div class="photo-2 photo"></div>
                        <h3>Овощной салат</h3>
                    </div>
                    <div class="bl-3 cont">
                        <div class="photo-3 photo"></div>
                        <h3>Мясо с луком, жаренное на сковороде</h3>
                    </div>
                    <div class="bl-4 cont">
                        <div class="photo-4 photo"></div>
                        <h3>Грузинские блюда</h3>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="pp">
                    <a href=""class="red nac">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href=""> > </a>
                </div>
            </div>
            <div class="random-recipes">
                <div class="block_1">
                    <div class="photo-food circle-image photo_1 ph1"></div>
                    <div class="text-photo"><h4>Мексиканский рецепт кукурузы на гриле</h4></div>
                </div>
                <div class="block_2">
                    <div class="photo-food circle-image photo_2"></div>
                    <div class="text-photo"><h4>Курица с лимонным соусом</h4></div>
                </div>
                <div class="block_3">
                    <div class="photo-food circle-image photo_3"></div>
                    <div class="text-photo"><h4>Салат из авокадо и дыни с лаймоным соком</h4></div>
                </div>
                <div class="block_4">
                    <div class="photo-food circle-image photo_4"></div>
                    <div class="text-photo"><h4>Нежное говяжье рагу</h4></div>
                </div>
                <div class="block_5">
                    <div class="photo-food circle-image photo_5"></div>
                    <div class="text-photo"><h4>Фермерский овощной суп</h4></div>
                </div>
            </div>
        </div>
        <div class="link-contacts">
            <div class="shef">
                <h2>Шеф-повар</h2>
                <div class="create-line"></div>
                <div class="parent"><div class="photo-shef circle-imagee"></div></div>
                <div class="name_shef"><h1 class="name">Константин Ивлев</h1></div>
                <div class="disc_shef"><h4>Шеф-повар, телеведущий, идеолог<br> фестиваля «Да, шеф!»</h4></div>
            </div>
            <div class="sub-fol">
                <h2>Подписаться и следить</h2>
                <div class="create-line"></div>
                <div class="sub-block">
                    <div class="block-1-sub"><p><i class="fa-brands fa-youtube"></i> Подпишись</p></div>
                    <div class="block-2-sub"><p><i class="fa-brands fa-instagram"></i> Подпишись</p></div>
                    <div class="block-3-sub"><p><i class="fa-brands fa-facebook"></i> Подпишись</p></div>
                    <div class="block-4-sub"><p><i class="fa-brands fa-twitter"></i> Подпишись</p></div>
                </div>
            </div>
            <div class="ad"><h1>Реклама</h1></div>
            <div class="last-news">
                <h2>Получить последние новости</h2>
                <div class="input-e-mail">
                    <form action="action_page.php">
                        <input type="text" placeholder="Твой e-mail" name="mail" required>
                        <input type="submit" value="Подписаться">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="line-recipes">
        <div class="cub1"></div>
        <div class="cub2"></div>
        <div class="cub3">
            <div class="inst">
                <p>Подпишись<br><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></p>
            </div>
        </div>
        <div class="cub4"></div>
        <div class="cub5"></div>
    </div>
    <div class="pred-footer">
        <div class="about">
            <h1>О нас</h1>
            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam iusto aliquam, id omnis.</h3>
        </div>
        <div class="archives">
            <h1>Архивы</h1>
            <div class="arc">
                <a href="#"> <i class="fa-solid fa-circle fa-2xs"></i> Июнь 2019</a><br><br>
                <a href="#"> <i class="fa-solid fa-circle fa-2xs"></i> Июнь 2018</a><br><br>
                <a href="#"> <i class="fa-solid fa-circle fa-2xs"></i> Июнь 2017-14</a>
            </div>
        </div>
        <div class="recipes">
            <h1>Блюда</h1>
            <div class="rec">
                <a href="#"> <i class="fa-solid fa-circle fa-2xs"></i> Обзор рецептов</a><br><br>
                <a href="#"> <i class="fa-solid fa-circle fa-2xs"></i> Страница рецептов</a><br><br>
                <a href="#"> <i class="fa-solid fa-circle fa-2xs"></i> Отправить рецепт</a>
            </div>
        </div>
        <div class="newsletters">
            <h1>Новостная рассылка</h1>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, architecto.</h3>
            <div class="input-mail">
                <form action="action_page.php">
                    <input type="text" placeholder="Твой e-mail" name="mail" required>
                    <input type="submit" value="Подписаться">
                </form>
            </div>
        </div>
    </div>
    <div class="footer"><h3>Thanks for attention.</h3></div>
</body>
</html>