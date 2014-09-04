<div id="header">
<nav class='top-bar' role="navigation">
    <div class="row">
    <ul class="title-area">
		<li class="name">
			<?php if ($logo): ?>
      		<h1>
      			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
      				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      			</a>
      		</h1>
    		<?php endif; ?>

            <?php if ($site_name || $site_slogan): ?>
                <div>
                    <?php if ($site_name): ?>
                        <h1>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
                        </h1>
                    <?php endif; ?>

                    <?php if ($site_slogan): ?>
                        <div><?php print $site_slogan; ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
		</li>
	</ul>

    <section class="top-bar-section">
        <ul class="right">
            <li class="has-form">
                <?php print render($page['header']); ?>
            </li>
        </ul>
    </section>
    </div>
</nav>
</div>

<div class="row">
    <div class="large-8 medium-8 columns">
        <?php print render($page['highlighted']); ?>
        <?php print $breadcrumb; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
            <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
    </div>

    <?php
    // Render the sidebars to see if there's anything in them.
    $sidebar  = render($page['sidebar']);
    ?>

    <?php if ($sidebar): ?>
        <div class="large-4 medium-4 columns">
        <aside class="sidebars">
            <?php print $sidebar; ?>
        </aside>
        </div>
    <?php endif; ?>


</div>
<div id="footer">
    <div class="row">
        <div class="full">
            <?php print render($page['footer']); ?>
        </div>
    </div>
</div>