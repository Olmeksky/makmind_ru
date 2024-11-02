<!-- Сайдбар -->
<?php
if(isset($_GET["preload"])){
	$preload = $_GET["preload"];
} else {
	$preload = 0;
}
#echo 'Загрузка' . $preload;
?>

<section class="randcard">
	<div class="container">
		<h2 class="section__title">Заголовок</h2>
		<?php
			if ($preload==1) {
				echo '<div class="row preload">';
			} else {
				echo '<div class="row">';
			}
			?>
			<div class="col-lg-4 col-sm-4 col-4">
				<div class="randcard_wrap">
					<img class="randcard_img" src="/wp-content/themes/ustrb5/assets/img/card_shir.png" alt=""/>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-4">
				<div class="randcard_wrap">
					<img class="randcard_img" src="/wp-content/themes/ustrb5/assets/img/card_shir.png" alt=""/>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-4">
				<div class="randcard_wrap">
					<img class="randcard_img" src="/wp-content/themes/ustrb5/assets/img/card_shir.png" alt=""/>
				</div>
			</div>
		</div>
		<?php
			if ($preload==1) {
				randomCard();
			} else {
			}
		?>
		<div class="randcard_navig text-center">
		<?php
			if ($preload==1) {
				echo '<a type="button" class="CardClick1 btn btn-info btn-lg" href="?preload=1">Открыть другую</a>';
			} else {
				echo '<a type="button" class="CardClick1 btn btn-info btn-lg" href="?preload=1">Открыть карту</a>';
			}
		?>
		</div>
	</div> <!-- Container -->
</section>

<section class="instruction">
	<div class="container">
		<h2 class="section__title">Инструкция</h2>
		<div class="content">
			<p>Инструкция текст Инструкция текст Инструкция текст Инструкция текст Инструкция текст Инструкция текст Инструкция текст Инструкция текст Инструкция текст Инструкция текст Инструкция текст Инструкция текст
			Инструкция текст Инструкция текст Инструкция текст Инструкция текст </p>
			<small style="color:red;">Эта инструкция меняется в фале <b><i>sidebar-randcard.php</i></b></small>
		</div>
	</div> <!-- Container -->
</section>

