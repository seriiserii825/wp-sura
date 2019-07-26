<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php wp_head(); ?>
</head>
<body>
<header class="header">
	<div class="container">
		<div class="menu" style="background: white;">
			<?php wp_nav_menu([
				'theme_location'  => 'header_menu',
				'menu'            => '',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			]); ?>
		</div>
		<?php if(!dynamic_sidebar('sidebar-language')): ?>
			<h>Language sidebar</h>
		<?php endif; ?>

	</div>

	<div class="container">
		<div class="header__top">
			<div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo-name.svg" alt=""></div><a class="phone" href="tel:88352382939">8 (8352) 38-29-39</a>
		</div>
		<div class="header__content">
			<h1 class="header__title">Строительство каркасных домов в Чебоксарах под ключ</h1>
			<p class="header__description">Предлагаем каркасные дома под ключ : от проектирования до прокладки коммуникаций в фундаменте, сборки каркаса и кровли и наружней и внутренней отделки.</p>
			<form class="form">
				<h4 class="form__title">Оставьте заявку, мы перезвоним вам в течение нескольких минут в рабочее время и проконсультируем по всем вопросам</h4>

				<div class="form-group">
					<?php if(have_posts()): ?>
						<?php while(have_posts()): ?>
							<?php the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
				</div>
			</form>
		</div>
	</div>
</header>
