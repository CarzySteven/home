<!DOCTYPE html>
<html>
<head>
	<title>Jump for Joy</title>
	<style>
	div {
		float:left;
		text-align: left;
		border: solid #000 3px;
	}
	#header{
		width: 100%;
		border: 0px;
		height: 50px;
	}
	#main{
		background-color: gray;
		height: 500px;
		display: none;

	}
	.guess_box{
	height:245px;
	}

	#clickMe {
	background: #D8B36E;
	padding: 20px;
	text-align: center;
	width: 205px;
	display: block;
	border: 2px solid #000;
	}

	#picframe {
	background: #D8B36E;
	padding: 20px;
	width: 205px;
	display: none;
	border: 2px solid #000;
	}



	</style>
     <script src="http://code.jquery.com/jquery.js"></script>
</head>	
<body>
	<h1>test</h1>
	<button>h1</button>
	<div id="clickMe">Show me the the Furry Friend of the Day</div>
		<div id="picframe">
			<img src="<?php echo$this->config->base_url();?>assets/img/furry_friend.jpg"   />

		</div>





	<div id="header">
		<h2>Jump for Joy Sale</h2>
	</div>

	<div id="main">	
		   <div class="guess_box"> <img src="<?php echo$this->config->base_url();?>assets/img/jump1.jpg"   />	</div>
		   <div class="guess_box"> <img src="<?php echo$this->config->base_url();?>assets/img/jump2.jpg"   />	</div>
		   <div class="guess_box"> <img src="<?php echo$this->config->base_url();?>assets/img/jump3.jpg"   />	</div>
		   <div class="guess_box"> <img src="<?php echo$this->config->base_url();?>assets/img/jump4.jpg"   />	</div>
	</div>
	<script>
			$(document).ready(function() {
				$(".guess_box").click( function(){
					$(".guess_box p").remove();
					var discount = Math.floor((Math.random()*5) + 5);
					var discount_msg = "<p> Your Discount is "+ discount +"%</p>";
					$(this).append(discount_msg);
				});
			});
			$(document).ready(function(){
				$("#clickMe").click(function() {
					$("img").fadeIn(1000);
					$("#picframe").slideToggle("slow");
					$(".guess_box").fadeIn(1000);
					$("#main").slideToggle("slow");
				
				});
			});
			$(document).ready(function(){
				$("button").click(function(){
				$("h1").replaceWith("<h1>test2</h1>")			
				})
			})
			
	</script>
</body>
</html>