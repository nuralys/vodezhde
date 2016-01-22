<div class="content">
	<?=$page['Page']['body'] ?>
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