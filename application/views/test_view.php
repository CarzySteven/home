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
	}
	.guess_box{
	height:245px;
	}

	</style>
     <script src="http://code.jquery.com/jquery.js"></script>
</head>	
<body>
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
	</script>
</body>
</html>