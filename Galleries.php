<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<?php include('header.php'); ?>
		<div class="container">
			<h3 align="center" style="margin-top: 70px;"><i>My Collection Gallery</i></h3>
			<div id="jLightroom" class="jlr">
				<a href="images/Galleries/children.jpeg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/children.jpeg" class="jlr_img"></a>
				<a href="images/Galleries/children7.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/children7.jpg" class="jlr_img"></a>
				<a href="images/Galleries/children4.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/children4.jpg" class="jlr_img"></a>
				<a href="images/Galleries/children5.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/children5.jpg" class="jlr_img"></a>

				<a href="images/Galleries/ajay.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/ajay.jpg" class="jlr_img"></a>
				<a href="images/Galleries/sikum.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/sikum.jpg" class="jlr_img"></a>
				<a href="images/Galleries/sayuj2.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/sayuj2.jpg" class="jlr_img"></a>
				<a href="images/Galleries/me.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/me.jpg" class="jlr_img"></a>

				<a href="images/Galleries/scene2.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/scene2.jpg" class="jlr_img"></a>
				<a href="images/Galleries/me1.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/me1.jpg" class="jlr_img"></a>
				<a href="images/Galleries/scene.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/scene.jpg" class="jlr_img"></a>
				<a href="images/Galleries/sayuj.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/sayuj.jpg" class="jlr_img"></a>

				<a href="images/Galleries/me18.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/me18.jpg" class="jlr_img"></a>
				<a href="images/Galleries/me9.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/me9.jpg" class="jlr_img"></a>
				<a href="images/Galleries/me8.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/me8.jpg" class="jlr_img"></a>
				<a href="images/Galleries/me11.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/me11.jpg" class="jlr_img"></a>

				<a href="images/Galleries/bike1.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/bike1.jpg" class="jlr_img"></a>
				<a href="images/Galleries/bike.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/bike.jpg" class="jlr_img"></a>
				<a href="images/Galleries/bike3.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/bike3.jpg" class="jlr_img"></a>
				<a href="images/Galleries/me3.jpg" data-lightbox="lb1" class="jlr_item"> <img src="images/Galleries/me3.jpg" class="jlr_img"></a>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/jquery.lightroom.js"></script>

    <script type="text/javascript">
        $("#jLightroom").lightroom({
            image_container_selector: ".jlr_item",
            img_selector: "img.jlr_img",
            img_class_loaded: "jlr_loaded",
            img_space: 5,
            img_mode: 'min',
            init_callback: function(elem){$(elem).removeClass("gray_out")}
        }).init();
    </script>
  <?php include('footer.php'); ?>
	</body>
</html>
