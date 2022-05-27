<nav class="navbar navbar-inverse" style="margin-top:0px;border-radius:0px">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar2">

			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Trang chủ</a></li>
				<?php $result = getAllbrand();
				foreach ($result as $row) { ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row['Name'] ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<?php $result = getAllcategory();
							foreach ($result as $tl) {
							?>
								<button type="button" class="list-group-item list-group-item-action" onclick="category(<?php echo $row['Id'] ?>, <?php echo $tl['Id'] ?>, 1)"><?php echo $tl['Name'] ?></button>

							<?php } ?>

							<li role="separator" class="divider"></li>
							<li class="dropdown-header"></li>
							<button type="button" class="list-group-item list-group-item-action" onclick="category(<?php echo $row['Id'] ?>,0,0)">Tất cả</button>
						</ul>
					</li>


				<?php } ?>

			</ul>


			<ul class="nav navbar-nav navbar-right">
				<li>
					
				<a href="cart.php"><i class="fa" style="font-size:35px;color:aliceblue;margin-top:5px;cursor: pointer;">&#xf07a;</i>
						<span class='badge badge-warning' id='lblCartCount'><?php 
						
					
						$sl=0;
						
						if(!empty($_SESSION['cart'])){
							foreach($_SESSION['cart'] as $cart){
								$sl+=$cart['quantity'];
							  }
						}
						echo $sl;
						
						?></span></a>
				</li>
			</ul>
		</div>


	</div>
</nav>