<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	</ul>
	  	</div>
	</div>
</div>

<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Become a Subscriber</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>Get free updates on the latest products and discounts, straight to your inbox.</p>
	    	<form method="POST" action="">
		    	<div class="input-group">
	                <input type="text" class="form-control">
	                <span class="input-group-btn">
	                    <button type="button" class="btn btn-info btn-flat"><i class="fa fa-envelope"></i> </button>
	                </span>
	            </div>
		    </form>
	  	</div>
	</div>
</div>

<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
	  	<div class='box-body'>
			<a class="btn btn-social-icon btn-facebook" onclick="redirectToRandom(['https://www.facebook.com/jhonandre.maleniza/', 'https://www.facebook.com/zuxxxxx', 'https://www.facebook.com/nicopalamo', 'https://www.facebook.com/theoloseanon.cinco.5', 'https://www.facebook.com/wayne.eblamo', 'https://www.facebook.com/profile.php?id=61554885265150'])"><i class="fa fa-facebook"></i></a>
			<a class="btn btn-social-icon btn-twitter" onclick="redirectToRandom(['https://twitter.com'])"><i class="fa fa-twitter"></i></a>
			<a class="btn btn-social-icon btn-instagram" onclick="redirectToRandom(['https://www.instagram.com/_itsnot_jhonny/'])"><i class="fa fa-instagram"></i></a>
		</div>

	<script>
		function redirectToRandom(urls) {
			const randomIndex = Math.floor(Math.random() * urls.length);
			window.location.href = urls[randomIndex];
		}
	</script>
	</div>
</div>
