<footer class="footer">
	<div class="container">
	<div class="row justify-content-between">
		<div class="col-md-3 col-12">
			<p>ИНН 507000000000<br />ОГРНИП 321000000000000</p>
			<hr />
			<div class="copy">
				<p>Предсказания ОНЛАЙН</p>
				<p>© 2024 Карты судьбы.</p>
				<small>Все права защищены, копирование любой информации запрещено.</small>
			</div>
		</div>
		<div class="col-md-5 col-12">
			<?php wp_nav_menu( array(
			'menu'	=> 4,
			'container' => 'ul',
			'container_class' => 'footer_menu',
			'menu_class' => 'footer_menu',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth' => 0,
			) ); ?>
		</div>
		<div class="col-md-4 col-12">
			<div class="footer-button"><button type="button" class="h_zz btn btn-lg btn-primary w-100">Заказать звонок</button></div>
			<div class="footer-contacts">
				<p class="footer-contacts_phone"><a href="tel:+79258790977">+7(999) 999-00-00</a></p>
				<p class="footer-contacts_email"><a href="mailto:admin@ya.ru">admin@ya.ru</a></p>
			</div>
			<div class="footer-social">
				<a class="footer-policy" href="/policy/">Полит конф.</a>
				<a class="footer-policy" href="/randcard/">Карты</a>
				<a class="footer-policy" href="/map/">Карта сайта</a>
			</div>
		</div>
	</div>
	</div> <!-- Container Футера -->
</footer>

	<?php wp_footer(); ?>
</body>
</html>