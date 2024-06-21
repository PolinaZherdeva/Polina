<?php
require_once __DIR__ . '/src/helpers.php';

//checkAuth();

$user = currentUser();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>shop</title>
	<link rel="stylesheet" href="css/main/style.css">
	<link rel="stylesheet" href="css/header/style_header.css">
	<link rel="stylesheet" href="css/main/media.css">
	<script src="script/script.js"></script>
	<script defer src="script/script_header.js"></script>
	<script defer src="script/carousel.js"></script>
</head>
<body>
	<header class="header open">
        <div class="container header_container">
            <button class="header_burger_btn" id="burger">
                <span></span><span></span><span></span>
            </button>
            <a href="#" class="logo_img">
                <img class="logo_img" src="img/logo.png" alt="Логотип">
            </a>
            <div class="menu">
                <ul class="menu_list">
                    <li class="menu_item"><a class="menu_link" id ="submenu" href="#">Каталог</a>
                        <ul class="submenu open">
                            <li class="submenu_item"><a class="menu1_link" id ="sub-submenu" href="#">Горнолыжный спорт</a>
                                <ul class="sub-submenu open">
                                    <li><a class="menu_link" href="#">Сноуборды</a></li>
                                    <li class="sub-submenu_item"><a class="menu_link" id ="sub-submenu2" href="#">Ботинки</a>
                                        <ul class="sub-submenu2 open">
                                            <li><a class="menu_link2" href="#">Ботинки для лыж</a></li>
                                            <li><a class="menu_link2" href="#">Ботинки для сноуборда</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu_link" href="#">Крепления</a></li>
                                    <li><a class="menu_link" href="#">Защита</a></li>
                                    <li><a class="menu_link" href="#">Одежда</a></li>
                                </ul>
                            </li>
                            <li class="submenu_item"><a class="menu1_link" href="#">Тренажеры и фитнес</a></li>
                            <li class="submenu_item"><a class="menu1_link" href="#">Плавание</a></li>
                            <li class="submenu_item"><a class="menu1_link" href="#">Велоспорт</a></li>
                            <li class="submenu_item"><a class="menu1_link" href="#">Альпинизм</a></li>
                            <li class="submenu_item"><a class="menu1_link" href="#">Единоборства</a></li>
                        </ul>
                    </li>
                    <li class="menu_item"><a class="menu_link" href="#">О компании</a></li>
                    <li class="menu_item"><a class="menu_link" href="#">Доставка и оплата</a></li>
                    <li class="menu_item"><a class="menu_link" href="#">Акции</a></li>
                    <li class="menu_item"><a class="menu_link" href="#">Оптовикам</a></li>
                    <li class="menu_item"><a class="menu_link" href="#">Контакты</a></li>
                    <li class="menu_item"><a class="menu_link3" href="#">Регистрация</a></li>
                    <li class="menu_item"><a class="menu_link3" href="#">Вход</a></li>
                </ul>
            </div>
        </div>
    </header> 
    </header>	  
	<div class="wrapper">
		<div class="container2">
			<header class="top_menu">
				<nav>
					<ul class="top_menu_ul">
						<li><a href="#">О компании</a></li>
						<li><a href="#">Доставка и оплата</a></li>
						<li><a href="#">Акции</a></li>
						<li><a href="#">Оптовикам</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</nav>
				<nav>
					<ul class="account">
						<?php if(!isset($_SESSION['user']['user_id'])): ?>
							<li><a href="login-register/register.php">Регистрация</a></li>
							<li><a href="login-register/login.php">Вход</a></li>
						<?php endif; ?>
						<?php if(isset($_SESSION['user']['user_id'])): ?>
							<li><a href="login-register/home.php">Профиль</a></li>
						<?php endif; ?>
					</ul>
				</nav>
			</header>
			<header class="medium_menu">
				<nav class="logo">
					<a href ="#"><img src="img/logo.png" alt="logo" width="230"></a>	
				</nav>
				<nav class="telephone">
					<a href="tel: 89236115738" class="number_"><b>8 (923) 611-57-38</b><br>Звонок бесплатный</a>
				</nav>
				<nav class="adress">
					<a href="#" class="location"><img src="img/map.png" width="13"> Томск, ул. Вершинина, 20к.</a>
					
				</nav>
				<?php if(isset($_SESSION['user']['user_id'])): ?>
					<nav class="buy">
						<span class="buy-text">0&#8381 </span>
						<span class="buy-text"> 0 товаров</span>
							<div class="shop-btn">
								<a href="#"><img src="img/shop.png" width="35px"></a>
							</div>
							<div class="favourites">
								<a href="#"><img src="img/favourites.png" width="35px"></a>
							</div>
					</nav>
				<?php endif; ?>

			</header>

		
	
			<header class="main_menu">
				
	
				<nav>
					<ul>
						<li><a class="main_menu_ul"href="#">Горнолыжный спорт <img src="img/arrow_d.png" width="14"></a>
							<ul class="menu_points">
								<li><a href="#">Сноуборды</a></li>
								<li><a href="#">Ботинки <img src="img/arrow_d.png" width="14"></a>
									<ul>
										<li><a href="#">Ботинки для лыж</a>
										<li><a href="#">Ботинки для сноуборда</a>
									</ul>
								</li>
								<li><a href="#">Крепления</a></li>
								<li><a href="#">Защита</a></li>
								<li><a href="#">Одежда</a></li>
							</ul>
						</li>
	
						<li><a href="#">Тренажеры и фитнес <img src="img/arrow_d.png" width="14"></a>
							<ul class="menu_points">
								<li><a href="#">Кардиотренажеры</a></li>
								<li><a href="#">Силовые тренажеры</a></li>
								<li><a href="#">Товары для фитнеса</a></li>
								<li><a href="#">Одежда</a></li>
					
							</ul>
						</li>
						<li><a href="#">Плавание</a></li>
						<li><a href="#">Велоспорт</a></li>
						<li><a href="#">Альпинизм</a></li>
						<li><a href="#">Единоборства</a></li>
				
					</ul>
				</nav>
				<div class="search-box">
					<input type="text" class="search-text" placeholder="Поиск">
					<a href="#" class="search-btn"><img src="img/search.png" width="25px" class="fa fa-search" aria-hidden="true"></a>
				</div>
	
			</header>

		</div>
		<div class="main">
			<div class="sale>">
				<p class="sale-description">Зимняя распродажа</p>
				<h1 class="sale-title">СКИДКИ ДО 70%</h1><br><br><br>
				<a class="btn" href="#">Смотреть товары</a>
			</div>
			<div class="box">
				<div class="box-price">
					<strike class="box-price_old">40 000 &#8381</strike>
					<p class="box-price_new">25 000 &#8381</p>
				</div>
				<img class="box-image" src="img/main.png" alt="main" width="650px">

			</div>
		</div>

	</div>
	<section>
		<div class="advantages">
			<div class="container">
				<div class="services">
					<div class="services_col">
						<img class="services_img" src="img/quality.png" alt="quality">
						<div class="services_about">
							<h2 class="services_title">Гарантия</h2>
							<p class="services_text">качества всех товаров</p>
						</div>
					</div>
					<div class="services_col">
						<img class="services_img2" src="img/delivery.png" alt="quality">
						<div class="services_about">
							<h2 class="services_title">Доставка</h2>
							<p class="services_text">по Томску</p>
						</div>
					</div>
					<div class="services_col">
						<img class="services_img3" src="img/pay.png" alt="quality">
						<div class="services_about">
							<h2 class="services_title">Оплата</h2>
							<p class="services_text">онлайн и наличными</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="grid">
				<button class="arrow-btn" id="prevBtn" href="#"><img src="img/arrow_d.png" width="14"></button>
				<div class="grid-item-title">
					<h2 class="title-hit">Хиты продаж</h2>
				</div>
				<div class="grid-item-hit">
					<div class="bg-white">
						<div class="chip">
							<img src="img/items/snowboard.png" alt="snowboard" width="250px">
						</div>
						<p class="grid-title">Сноуборд Nitro</p>
						<p class="grid-price">18 750 &#8381</p>
						<a class="grid-btn" href="#">В корзину</a>
					</div>
				</div>
				<div class="grid-item-hit">
					<div class="bg-white">
						<div class="chip">
							<div class="img-chip">
								<img class="chip-img weight" src="img/items/weight.png" alt="snowboard" width="180px">
							</div>
							<div class="explain">
								<p class="grid-title">Гантели Now</p>
								<p class="grid-price">5 200 &#8381</p>
								<a class="grid-btn" href="#">В корзину</a>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-item-hit">
					<div class="bg-white">
						<div class="chip">
							<img class="chip-img" src="img/items/snowboard2.png" alt="snowboard" width="250px">
							<p class="grid-title">Сноуборд Lib</p>
							<p class="grid-price">25 000 &#8381</p>
							<a class="grid-btn" href="#">В корзину</a>
						</div>
					</div>
				</div>
				<div class="grid-item-hit">
					<div class="bg-white">
						<div class="chip">
							<div class="img-chip">
								<img class="chip-img camp" src="img/items/camp.png" alt="snowboard" width="244px">
							</div>
							<div class="explain">
								<p class="grid-title">Палатка Anch</p>
								<p class="grid-price">22 990 &#8381</p>
								<a class="grid-btn" href="#">В корзину</a>
							</div>
							
						</div>
					</div>
				</div>
				<button class="arrow-btn" id="nextBtn" href="#"><img src="img/arrow_d.png" width="14"></button>
			</div>

		</div>
	</section>
	<section>
		<div class="grey-bg">
			<div class="container">
				<div class="information">
					<div class="col">
						<div class="col-title">
							<h2 class="col-title-text">Новости</h2>
						</div>
						<div class="col-news">
							<div class="col-news-single">
								<div class="col-img">
									<img class="brand-img" src="img/information/how.jpeg" alt="how" width="120px" height="120px">
								</div>
								<div class="col-information">
									<a class="col-information-title2" href="#">Как выбрать сноуборд</a>
									<p class="col-information-date">12.11.2023</p>
								</div>
							</div>
							<div class="col-news-single">
								<div class="col-img">
									<img class="brand-img" src="img/information/new_items.jpeg" alt="new_items" width="120px" height="120px">
								</div>
								<div class="col-information">
									<a class="col-information-title2" href="#">Новинки в нашем магазине</a>
									<p class="col-information-date">30.10.2023</p>
								</div>
							</div>
						</div>
						<a class="col-btn news" href="#">Все новости</a>
					</div>
					<div class="col">
						<div class="col-title">
							<h2 class="col-title-text">Отзывы</h2>
						</div>
						<div class="col-comment">
							<p class="col-comment-text">Я нашел на этом сайте идеальный велосипед, который полностью соответствует моим ожиданиям. Он был упакован и доставлен очень быстро, курьер привез товар в день заказа, а качество сборки и материалов просто поразило меня. Он удобный, легкий и отлично подходит для городских улиц. Спасибо Good Living за отличный выбор и отличный сервис! Я обязательно буду рекомендовать ваш магазин друзьям и знакомым.</p>
							<a class="col-comment-person">Дмитрий</a>
						</div>
						<a class="col-btn comment" href="#">Все отзывы</a>
					</div>
					<div class="col">
						<div class="col-title">
							<h2 class="col-title-text">Бренды</h2>
						</div>
						<div class="brands">
							<div class="brand-item">
								<div class="brand-item-col">
									<div class="position">
										<img class="brand-img" src="img/information/termit.webp" alt="termit" width="120px">
										<p class="brand-title">Termit</p>
									</div>
									<div class="position">
										<img class="brand-img" src="img/information/nike.jpeg" alt="termit" width="120px">
										<p class="brand-title">Nike</p>
									</div>
								</div>
								<div class="brand-item-col">
									<div class="position">
										<img class="brand-img" src="img/information/puma.png" alt="termit" width="120px" height="120px">
										<p class="brand-title">Puma</p>
									</div>
									<div class="position">
										<img class="brand-img" src="img/information/outventure.png" alt="termit" width="120px">
										<p class="brand-title">Outventure</p>
									</div>
								</div>
								<div class="brand-item-col">
									<div class="position">
										<img class="brand-img" src="img/information/rebok.jpeg" alt="termit" width="120px">
										<p class="brand-title">Reebok</p>
									</div>
									<div class="position">
										<img class="brand-img" src="img/information/adidas.png" alt="termit" width="120px">
										<p class="brand-title">Adidas</p>
									</div>
								</div>
							</div>
						</div>
						<a class="col-btn brands" href="#">Все бренды</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
	

	<section class="s-about"> 
		<div class="container">
		  <h2 class="title-section">О нас</h2>
			<div class="about-tabs"> 
			  <div class="tabs__body about__body"> 
				<div class="tab tab--active tab-shop">
				  <p class="text">Good Living - ваш идеальный выбор для спортивных товаров! Наш интернет-магазин предлагает не только широкий ассортимент высококачественной спортивной одежды, обуви, инвентаря и аксессуаров для занятий спортом, но также обеспечивает клиентов только лучшими брендами и гарантированным высоким качеством каждого товара. 

					В нашем магазине вы найдете все необходимое для занятий фитнесом, бегом, йогой, плаванием, единоборствами, а также для активного отдыха на природе. Мы стремимся предложить широкий выбор продукции, чтобы удовлетворить потребности спортсменов всех уровней и интересов.
					
					Наша команда профессионалов всегда готова помочь вам с выбором и ответить на все ваши вопросы. Мы ценим каждого клиента и стремимся обеспечить высокий уровень обслуживания.
					
					На все наши товары распространяется гарантия, что дает вам уверенность в качестве покупки. Покупайте спортивные товары у Good Living и достигайте новых высот в своей активной жизни!</p>
				</div>
				<div class="tab tab-advantages">
				  <p class="text">1</p>
				</div>
				<div class="tab tab-service">
				  <p class="text">2 </p>
				</div>
				<div class="tab tab-delivery">
				  <p class="text">3</p>
				</div>
			  </div>
			  <ul class="tabs-navigation about-navigation"> 
				<li class="about-navigation__item tabs-navigation__item tabs-navigation__item--active" show-tab="tab-shop">Интернет магазин</li>
				<li class="about-navigation__item tabs-navigation__item" show-tab="tab-advantages">Наши преимущества</li>
				<li class="about-navigation__item tabs-navigation__item" show-tab="tab-service">Сервис</li>
				<li class="about-navigation__item tabs-navigation__item" show-tab="tab-delivery">Доставка</li>
			  </ul>
			</div>
		</div>
	</section>

	<section>
		<div class="grey-bg-footer">
			<div class="container">
				<footer class="footer">
					<div class="options">
						<div class="options-item">
							<h3>Категории</h3>
							<ul class="options-menu">
								<li class="options-menu-items"><a href="#">Горнолыжный спорт</a></li>
								<li class="options-menu-items"><a href="#">Тренажеры и фитнес</a></li>
								<li class="options-menu-items"><a href="#">Плавание</a></li>
								<li class="options-menu-items"><a href="#">Велоспорт</a></li>
								<li class="options-menu-items"><a href="#">Альпинизм</a></li>
								<li class="options-menu-items"><a href="#">Единоборства</a></li>
							</ul>
						</div>
						<div class="options-item">
							<h3>Основные ссылки</h3>
							<ul class="options-menu">
								<li class="options-menu-items"><a href="#">О компании</a></li>
								<li class="options-menu-items"><a href="#">Доставка</a></li>
								<li class="options-menu-items"><a href="#">Оплата</a></li>
								<li class="options-menu-items"><a href="#">Возврат
								</a></li>
								<li class="options-menu-items"><a href="#">Новости</a></li>
								<li class="options-menu-items"><a href="#">Отзывы</a></li>
							</ul>
						</div>
						<div class="options-item">
							<div class="options-title">
								<h3>Полезные ссылки</h3>
								<ul class="options-menu">
									<li class="options-menu-items"><a href="#">Контакты</a></li>
									<li class="options-menu-items"><a href="#">Вопросы и ответы</a></li>
								</ul>
							</div>
							<div class="сontacts">
								<p class="сontacts-text">Томск, ул. Вершинина, 20к.</p>
							</div>

						</div>
						<div class="options-item-last">
							<a href="tel: 89236115738" class="number">8 (923) 611-57-38</a>
							<p class="number-free">Звонок бесплатный</p>
							<p class="number-mail">
								<a href="mailto:zherdevap00@mail.ru" class="number-mail">good_living@mail.ru</a>
							</p>
						</div>
					</div>

					<div class="network">
						<div class="network-item">
							<img class="network-img" src="img/network/tg.png" width="41px">

						</div>
						<div class="network-item">
							<img class="network-img" src="img/network/vk.png" width="45px">
						</div>
						<div class="network-item">
							<img class="network-img" src="img/network/whatsapp.png" width="53px">
						</div>
						<div class="request">
							<a class= "request-btn" href="#">Оставить отзыв</a>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</section>
	
</body>
</html>