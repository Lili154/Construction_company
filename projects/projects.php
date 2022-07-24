<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>construction company</title>
	<link rel="stylesheet"  href="css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="first">
			<img src="c19c76_e1ee443d4c5e4e3197a25eec7a0a97e5.webp">
			<h1>ПОДЪЁМ СТРОЙФИРМА</h1>
		</div>
		<div class="second">
			<ul id="test">
				<li class="li1"><a href="../index.php">ГЛАВНАЯ</a></li>
				<li><a href="#section2"> УСЛУГИ</a></li>
				<li><a href="#section3"> О НАС</a></li>
				<li><a href="#section5">ПРОЕКТЫ</a></li>
				<li><a href="#section6">КОНТАКТЫ</a></li>
			</ul>
		</div>
	</div>
	<section>
		<div class="section-content1">
			<h1 >ПРОЕКТЫ</h1>
			<div class="borders"></div>
		</div>
		<div class="section-content2">
			<div class="">
			    <p>Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе. Здесь будет удачно смотреться текст о вашей компании и услугах. Используйте эту возможность, чтобы выгодно представить себя и свою компанию клиентам. Расскажите интересную историю, например, как вам в голову пришла идея собственного дела, и объясните, в чем заключается ваше преимущество перед конкурентами.</p>
			    <button class="exit"><a href="../index.php" >НАЗАД К ПРОЕКТАМ</a></button>	
			</div>
			<div>
				<img class="mySlides" src="c19c76_89c49f1613c147dcb672ee4f63dccd8f.webp">
	            <img class="mySlides" src="c19c76_a0c8f339cfb94906aa7f587a62c38f15.webp">
	            <img class="mySlides" src="c19c76_5f05f0fa3cc84e448cc6531038e5344d.webp">
	            <img class="mySlides" src="c19c76_5a9e692f14ed419db399cdf44bd02177.webp">
			</div>
		</div>
	</section>
	<script>
		  var myIndex = 0;
		  carousel();

		  function carousel() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  myIndex++;
		  if (myIndex > x.length) {myIndex = 1}    
		  x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 2000); // Change image every 2 seconds
		  }
</script>

</body>
</html>