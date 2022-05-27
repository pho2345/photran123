<nav class="navbar navbar-inverse " style="border-radius:0px">
	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php" title="Trang chủ"><img src="../images/onepiece.PNG" style="margin:-16px" width="200px" height="52px" alt="logo-trang chủ"></a>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<div class="row">
				<div class="col-md-5 col-md-offset-2">

					<div class="input-group">
						<input type="text" class="form-control" id="search" onkeyup="search(this.value)" placeholder="Tìm kiếm" name="search" size="44">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit" data-target="#myModal" data-toggle="modal">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>

					
				</div>

				<ul class="nav navbar-nav navbar-right">
				<?php
				
				if(!empty($_SESSION['user'])){ ?>
						<li id="loginn"><a href="php/DangNhap.php"><span class="glyphicon glyphicon-user"><?php echo $_SESSION['user'] ?></span></a></li>					
						<li id="logout" class=""><a href="php/Dangky.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>	 
						<?php } else {?>
							<li id="loginn"><a href="php/DangNhap.php"><span class="glyphicon glyphicon-user"></span> Đăng nhập   |</a></li>					
							<li id="logout" ><a href="php/DangNhap.php">Đăng ký</a></li>	
						<?php }?>
				</ul>
			</div>
		</div>
	</div>
</nav>