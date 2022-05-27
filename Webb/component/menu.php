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
				<li><a href="#">Về chúng tôi</a></li>
				<li><a href="#">Liên hệ</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thể loại <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<div class="list-group">
							<button type="button" class="list-group-item list-group-item-action active">
								Cras justo odio
							</button>
							<button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
							<button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
							<button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
							<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
						</div>
					</ul>
				</li>
			</ul>


			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="php/giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng <span class="badge badge-secondary" style="margin-bottom: 2px;"><?php echo $soluongsp ?></span></a>
				</li>
			</ul>
		</div>


	</div>
</nav>