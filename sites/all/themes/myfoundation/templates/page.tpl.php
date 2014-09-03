<nav class='top-bar' role="navigation">
	<ul class="title-area">
		<li class="name">
			<?php if ($logo): ?>
      		<h1>
      			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo">
      				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" />
      			</a>
      		</h1>
    		<?php endif; ?>
		</li>
	</ul>
</nav>

<div class="row">
	<?php print render($page['content']); ?>
</div>