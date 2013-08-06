<?php snippet('home-header') ?>

	<body class="main gf">

		<nav class="grid">
			<ul class="top row">
<?php foreach($pages->visible()->sortBy($sort='date', $dir='desc')->limit(3) as $item): ?>
				<a href="<?php echo $item->url() ?>" class="zone <?php echo $item->shortcode() ?>">
					<li>
						<h1><?php echo html($item->title()) ?></h1>
						<time datetime="<?php echo $item->date('Y-m-d') ?>"><?php echo html($item->date('d.m.Y')) ?></time>
					</li>
				</a>
<?php endforeach ?>
			</ul>
		</nav>

		<p class="tag"></p>

<?php snippet('footer-scripts') ?>