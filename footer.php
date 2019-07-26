<footer class="footer-wrap">
	<div class="container">
		<div class="footer">
			<div class="footer-top">
				<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo-name.svg" alt=""></div>
				<ul class="socials">
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/socials/vk.svg" alt=""></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/socials/instagram.svg" alt=""></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/socials/facebook.svg" alt=""></a></li>
				</ul>
			</div>
			<div class="copyright">&copy; 2019 Строительная компания &laquo;Сура&raquo;</div>
			<div class="footer__text first">Строительство каркасных домов, домов из кирпича, домов из бруса, домов из оцилиндрованного бревна, домов из СИП-панелей, домов из газоблоков, домов из пеноблоков. Строительство бань и беседок</div>
			<div class="footer__text second">*При заказе строительства дома под ключ в нашей компании, наши специалисты подготовят проект вашего будущего дома и всю необходимую проектную документацию, а также подберут все необходимые материалы.</div>
			<div class="footer__text last">Сайт не является публичной офертой и носит информационный характер. Заполняя любую форму на данном сайте я даю согласие на обработку персональных данных, согласен на получение информационных рассылок от компании «Сура» и соглашаюсь c <a class="confidential" href="#">политикой конфиденциальности</a></div>
		</div>
	</div>
</footer>

<div class="popup" id="js-popup"><i class="popup__icon" id="js-close-popup"><img src="<?php echo get_template_directory_uri(); ?>/assets/i/popup-close.svg" alt=""></i>
	<div class="form">
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
	</div>
</div>
</div>
<div class="overlay" id="js-overlay"></div>
<?php wp_footer(); ?>

</body>
</html>
