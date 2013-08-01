<?php snippet('header') ?>

	<body class="gf">
		<header class="main-header contrast-<?php echo $page->headercontrast() ?>">
			<h1><?php echo $page->title() ?></h1>
			<nav role="navigation">
				<ul class="group">
					<li><a href="/" class="home">Home</a></li>
					<li><a href="archive" class="arc">Archive</a></li>
				</ul>
			</nav>
		</header> <!-- /header -->

		<article>
		<!-- <article class="crop"> -->
			<header class="<?php echo $page->shortcode() ?> js-bg">
				<h1 class="tokyo"><span><?php echo $page->titlealt() ?> </span><span><?php echo $page->country() ?></span></h1>
			</header>

			<div class="content group">
				<section class="intro group">
					<time datetime="<?php echo $page->date('Y-m-d') ?>"><?php echo $page->date('F Y') ?></time>
					<h1><?php echo $page->introheader() ?></h1>
					<p><?php echo $page->introtext() ?></p>
				</section>
				<section>
					<?php echo kirbytext($page->text()) ?>
				</section>

		<?php if($page->hasImages()): ?>
		<section class="photo">
			<?php foreach($page->images() as $image): ?>
		<figure class="group">
						<img src="<?php echo $image->url() ?>" alt="<?php echo $image->alt() ?>" class="img-xl">
						<figcaption class=""><span><?php echo $image->caption() ?></span></figcaption>
					</figure>
			 <?php endforeach ?>
	</section>
	<?php endif ?>
				
			</div> <!-- /content -->
		</article> <!-- /article -->

		<?php snippet('article-navigator') ?>

<?php snippet('footer-scripts') ?>