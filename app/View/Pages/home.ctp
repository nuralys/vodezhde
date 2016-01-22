<section class="slider" >
				<div class="slider__item">

					<img src="img/slider1.jpg" alt=""></div>
				<div class="slider__item">

					<img src="img/slider2.jpg" alt=""></div>
				<div class="slider__item">

					<img src="img/slider4.jpg" alt=""></div>
			</section>
			<div class="delivery">
				ВОЗМОЖНОСТЬ ЭКСПРЕСС-ДОСТАВКИ ДЛЯ ЖИТЕЛЕЙ АСТАНЫ
				<a href="" class="button">УЗНАТЬ ПОДРОБНЕЕ</a>
			</div>
			<div class="brand">
				<div class="title">
					<h2>ФИРМЕННАЯ ОДЕЖДА ОТ МИРОВЫХ БРЕНДОВ</h2>
				</div>

				<ul>
					<li class="brand_item">
						<img src="img/brand1.jpg" alt=""></li>
					<li class="brand_item">
						<img src="img/brand2.jpg" alt=""></li>
					<li class="brand_item">
						<img src="img/brand3.jpg" alt=""></li>
					<li class="brand_item">
						<img src="img/brand4.jpg" alt=""></li>
					<li class="brand_item">
						<img src="img/brand5.jpg" alt=""></li>
					<li class="brand_item">
						<img src="img/brand6.jpg" alt=""></li>
					<li class="brand_item">
						<img src="img/brand7.jpg" alt=""></li>
					<li class="brand_item">
						<img src="img/brand8.jpg" alt=""></li>
				</ul>
			</div>

			<div class="product">
			<div class="title">
					<h2>РЕКОМЕНДУЕМ</h2>
				</div>
				<div class="product-list">
					<?php foreach($recommended as $item): ?>
					<div class="product_list-item">
						<a class="product_item">
							<div class="product_item_img">
								<img src="/img/product/thumbs/<?=$item['Product']['img1'] ?>" alt="" ></div>
							<span class="produc_list_item__name">Платье</span>
							<span class="produc_list_item__brand">GEMMA LACE INSERT DRESS</span>
							<div class="price_slider">
								<span class="old_price">23 999 тг</span>
								<span class="news_price">20 999 тг</span>
							</div>
						</a>
					</div>
				<?php endforeach ?>
				</div>
			</div>
			<div class="content">
				<p>Интернет магазин одежды VERSUS (VODEZHDE.KZ)</p>
				<p>
					Онлайн-покупки становятся все более популярным и востребованным направлением шопинга. С открытием интернет-магазина VODEZHDE.KZ этот процесс стал еще более простым, выгодным и удобным. Теперь каждый житель КАЗАХСТАНА может приобрести качественные брендовые вещи, не выходя из дома, — достаточно посетить интернет-магазин+ одежды (официальный сайт) VODEZHDE.KZ. Здесь представлен огромный ассортимент стильных и модных вещей, которые смогут раскрыть вашу индивидуальность, подчеркнуть изысканный вкус, превратить даже самый простой повседневный образ в нечто яркое, модное и оригинальное. Совершать покупки в нашем магазине можно всей семьей. Здесь есть отличные варианты для мужчин, женщин и деток. Одежда и аксессуары VODEZHDE.KZ — это возможность выглядеть безупречно всегда и везде.
				</p>
				<p>
					Чтобы шопинг в Сети приносил истинное удовольствие, был выгодным и простым, стоит выбирать только официальные интернет-магазины одежды. VODEZHDE.KZ — это исключительно оригинальная продукция всемирно известной нидерландской компании. Каждая новая коллекция удивляет покупателей еще большей необычностью, полным соответствием актуальным модным трендам и, конечно же, бескомпромиссным качеством. Удачный крой подчеркивает все достоинства фигуры и помогает подобрать гардероб к любому случаю.
				</p>
				<p>
					Наш интернет-магазин выбирает каждый, кто:
					<br>
					привык находить нечто особенное — мы предлагаем самую большую коллекцию одежды и
					<br>
					аксессуаров VODEZHDE.KZ;
					<br>
					ценит высококлассное обслуживание и безупречное качество;
					<br>
					хочет совершать покупки с удобством, быстро и в любое время суток;
					<br>
					получать информационную поддержку в режиме 24/7;
					<br>
					не ограничивается магазинами своего региона — мы осуществляем доставку по АСТАНЕ.
					<br></p>
				<p>
					Если вы узнали себя, тогда сотрудничество с интернет-магазином VODEZHDE.KZ оправдает все ваши ожидания. Удобная форма заказа позволит приобрести понравившуюся вещь в несколько кликов, а наша служба доставки приложит максимум усилий для того, чтобы заказ оказался у вас максимально быстро.
				</p>
			</div>
			<div class="title">
				<h2>НОВОСТИ И ПОЛЕЗНЫЕ СОВЕТЫ</h2>
			</div>
			<div class="news">
			<div class="news-list">
			<?php foreach($news as $item): ?>
				<div  class="news-list-item">
					<a href="/news/<?=$item['News']['id'] ?>" class="news_item">
						<div class="news_item_img">
							<img src="/img/news/thumbs/<?=$item['News']['img']?>" alt="" ></div>
					<div class="news_des"><?=$item['News']['title']?></div>
					</a>
				</div>
			<?php endforeach ?>
			</div>
				
			</div>