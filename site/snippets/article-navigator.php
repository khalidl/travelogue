<footer>
			<nav class="navigator group">
				<ul>
<?php if($page->hasNextVisible()) { ?>
					<li>
						<a href="<?php echo $page->nextVisible()->url() ?>" title="Previous"><span><i>&lsaquo; </i> <?php echo $page->nextVisible()->title() ?></span></a>
					</li>
<?php }
			else { ?>
					<li><a href="/"><span><i>&lsaquo;</i> Home</a></li>
<?php } ?>
<?php if($page->hasPrevVisible()) { ?>
					<li>
						<a href="<?php echo $page->prevVisible()->url() ?>" title="Next"><span><?php echo $page->prevVisible()->title() ?> <i>&rsaquo;</i></span></a>
					</li>
<?php }
else { ?>
					<li><a href="/"><span>Home <i>&rsaquo;</i></a></li>
<?php } ?>
				</ul>
			</nav>
		</footer>