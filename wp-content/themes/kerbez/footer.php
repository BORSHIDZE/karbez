<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kerbez
 */

?>

<footer class="footer section">

	<div class="container">

		<h2 class="title">Мы делаем ваш дом <span class="title__sub">привлекательным и комфортным:</span></h2>

		<div class="footer__links">

			<a class="footer__link" href="tel:+77071092949">+7 (707) 109 2949</a>
			<a class="footer__link" href="tel:+77074714919">+7 (707) 471 4919</a>

		</div>

		<button type="button" class="btn footer__bottom_link" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Оставить заявку
		</button>

		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog modal-dialog-centered">

				<div class="modal-content">

					<div class="modal-header">

						<h1 class="modal-title" id="exampleModalLabel">Заголовок</h1>

						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">

						<form action="#" class="footer__modal">

							<input type="text" class="footer__input" placeholder="Имя">
							<input type="tel" class="footer__input" placeholder="Номер телефона">

						</form>

					</div>

					<div class="modal-footer">

						<button type="submit" class="btn">Оставить заявку</button>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="container_2">

		<div class="container">

			<div class="footer__down">

				<p class="footer__down_text">
					Все права защищены © 2023
				</p>

				<a class="footer__down_link" href="#">
					made in vass.kz
				</a>

			</div>

		</div>
	</div>

</footer>


<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>///cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>

</html>