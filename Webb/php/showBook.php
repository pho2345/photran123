
<?php

class ShowBook
{
	public static function showBookk()
			{
					require('DataProvider.php');
					if(isset($_GET['theloai']))
						$tenTheLoai=$_GET['theloai'];
					if(isset($tenTheLoai))
					{
			// -------------Sách Thiếu Nhi---------------------------------------------------------------------//
			
						if($tenTheLoai=="thieunhi")
						{		
							//  Đếm số lượng sách thiếu nhi
							$sql="select COUNT(*) as numRows from sach where MaTheLoai='TN'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach where MaTheLoai='TN' LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=thieunhi&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?theloai=thieunhi&masach=" . $row['MaSach']."'>"
												
												."<img src='../images/thieunhi/" . $row['HinhAnh'] . "'>"
											."</a>"
											."<div class='tensach'>" . $row['TenSach'] . "</div>"
											."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>"
										."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							
							//  In phân trang
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
									
							
						}
				// -------------Sách chuyên ngành---------------------------------------------------------------------//
				
						if($tenTheLoai=="chuyennganh")
							{
							//  Đếm số lượng Sách chuyên ngành
							$sql="select COUNT(*) as numRows from sach where MaTheLoai='CN'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach where MaTheLoai='CN' LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=chuyennganh&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?theloai=chuyennganh&masach=" . $row['MaSach']."'>"
												."<img src='../images/chuyennganh/" . $row['HinhAnh'] . "'>"
											."</a>"
											."<div class='tensach'>" . $row['TenSach'] . "</div>"
											."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>"
										."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
							}
							
					// -------------Sách Lịch sử---------------------------------------------------------------------//
						
						if($tenTheLoai=="lichsu")
							{
								//  Đếm số lượng Sách chuyên ngành
							$sql="select COUNT(*) as numRows from sach where MaTheLoai='LS'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach where MaTheLoai='LS' LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=lichsu&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?theloai=lichsu&masach=" . $row['MaSach']."'>"
												."<img src='../images/lichsu/" . $row['HinhAnh'] . "'>"
											."</a>"
											."<div class='tensach'>" . $row['TenSach'] . "</div>"
											."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>"
										."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							
							
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
							}
						

						// -------------Sách Kỹ Năng Sống---------------------------------------------------------------------//
						
						if($tenTheLoai=="kynangsong")
							{
								//  Đếm số lượng Sách chuyên ngành
							$sql="select COUNT(*) as numRows from sach where MaTheLoai='KNS'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach where MaTheLoai='KNS' LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=kynangsong&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?theloai=kynangsong&masach=" . $row['MaSach']."'>"
												."<img src='../images/kynangsong/" . $row['HinhAnh'] . "'>"
											."</a>"
											."<div class='tensach'>" . $row['TenSach'] . "</div>"
											."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>"
										."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							var_dump($last);
							
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
							}
						
						// -------------Sách Kinh tế---------------------------------------------------------------------//
						
						if($tenTheLoai=="kinhte")
							{
								//  Đếm số lượng Sách chuyên ngành
							$sql="select COUNT(*) as numRows from sach where MaTheLoai='KT'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach where MaTheLoai='KT' LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=kinhte&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?theloai=kinhte&masach=" . $row['MaSach']."'>"
												."<img src='../images/kinhte/" . $row['HinhAnh'] . "'>"
											."</a>"
											."<div class='tensach'>" . $row['TenSach'] . "</div>"
											."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>"
										."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							
							
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
							}
						
						// -------------Sách Học ngoại ngữ---------------------------------------------------------------------//
						
						if($tenTheLoai=="hocngoaingu")
							{
								//  Đếm số lượng Sách chuyên ngành
							$sql="select COUNT(*) as numRows from sach where MaTheLoai='NN'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach where MaTheLoai='NN' LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=ngoaingu&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?theloai=hocngoaingu&masach=" . $row['MaSach']."'>"
												."<img src='../images/ngoaingu/" . $row['HinhAnh'] . "'>"
											."</a>"
											."<div class='tensach'>" . $row['TenSach'] . "</div>"
											."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>"
										."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							
							
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
							}
						// -------------Sách Học ngoại ngữ---------------------------------------------------------------------//
						
						if($tenTheLoai=="tuoiteen")
							{
								//  Đếm số lượng Sách chuyên ngành
							$sql="select COUNT(*) as numRows from sach where MaTheLoai='TT'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach where MaTheLoai='TT' LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=tuoiteen&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?theloai=hocngoaingu&masach=" . $row['MaSach']."'>"
												."<img src='../images/tuoiteen/" . $row['HinhAnh'] . "'>"
											."</a>"
											."<div class='tensach'>" . $row['TenSach'] . "</div>"
											."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>"
										."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							
							
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
							}
						
						// -------------Sách Học ngoại ngữ---------------------------------------------------------------------//
						
						if($tenTheLoai=="vanhoc")
							{
								//  Đếm số lượng Sách chuyên ngành
							$sql="select COUNT(*) as numRows from sach where MaTheLoai='VH'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach where MaTheLoai='VH' LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=vanhoc&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?theloai=hocngoaingu&masach=" . $row['MaSach']."'>"
												."<img src='../images/vanhoc/" . $row['HinhAnh'] . "'>"
											."</a>"
											."<div class='tensach'>" . $row['TenSach'] . "</div>"
											."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>"
										."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							
							
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
							}
						
						
						// -------------Tất cả sách---------------------------------------------------------------------//	
						if($tenTheLoai=="tatca")
						{		
							//  Đếm số lượng sách 
							$sql="select COUNT(*) as numRows from sach ";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=8;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from sach LIMIT " .$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="sanpham.php?theloai=tatca&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$s="<div style='padding-left:10px'>";
							while($row=mysqli_fetch_array($result))
							{
									$s=$s. "<div class='sach'>"
											."<a href='chitietsach.php?";
										if($row['MaTheLoai']=="NN")
										{
											$s=$s."theloai=hocngoaingu&masach=" . $row['MaSach'] ."'>"
												 ."<img src='../images/ngoaingu/" . $row['HinhAnh']  ."'>"
												 ."</a>"
												 ."<div class='tensach'>" . $row['TenSach'] . "</div>"
												 ."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>";
										}
										else if($row['MaTheLoai']=="KT")
										{
											$s=$s."theloai=kinhte&masach=" . $row['MaSach'] ."'>"
												."<img src='../images/kinhte/" . $row['HinhAnh'] . "'>"
												 ."</a>"
												 ."<div class='tensach'>" . $row['TenSach'] . "</div>"
												 ."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>";
										}
										else if($row['MaTheLoai']=="KNS")
										{
											$s=$s."theloai=kynangsong&masach=" . $row['MaSach'] ."'>"
												."<img src='../images/kynangsong/" . $row['HinhAnh'] . "'>"
												 ."</a>"
												 ."<div class='tensach'>" . $row['TenSach'] . "</div>"
												 ."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>";
										}
										else if($row['MaTheLoai']=="LS")
										{
											$s=$s."theloai=lichsu&masach=" . $row['MaSach'] ."'>"
												."<img src='../images/lichsu/" . $row['HinhAnh'] . "'>"
												 ."</a>"
												 ."<div class='tensach'>" . $row['TenSach'] . "</div>"
												 ."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>";
										}
										else if($row['MaTheLoai']=="CN")
										{
											$s=$s."theloai=chuyennganh&masach=" . $row['MaSach'] ."'>"
												."<img src='../images/chuyennganh/" . $row['HinhAnh'] . "'>"
												 ."</a>"
												 ."<div class='tensach'>" . $row['TenSach'] . "</div>"
												 ."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>";
										}
										else if($row['MaTheLoai']=="TN")
										{
											$s=$s."theloai=thieunhi&masach=" . $row['MaSach'] ."'>"
												."<img src='../images/thieunhi/" . $row['HinhAnh'] . "'>"
												 ."</a>"
												 ."<div class='tensach'>" . $row['TenSach'] . "</div>"
												 ."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>";
										}
										else if($row['MaTheLoai']=="TT")
										{
											$s=$s."theloai=tuoiteen&masach=" . $row['MaSach'] ."'>"
												."<img src='../images/tuoiteen/" . $row['HinhAnh'] . "'>"
												 ."</a>"
												 ."<div class='tensach'>" . $row['TenSach'] . "</div>"
												 ."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>";
										}
										else if($row['MaTheLoai']=="VH")
										{
											$s=$s."theloai=vanhoc&masach=" . $row['MaSach'] ."'>"
												."<img src='../images/vanhoc/" . $row['HinhAnh'] . "'>"
												 ."</a>"
												 ."<div class='tensach'>" . $row['TenSach'] . "</div>"
												 ."<div class='gia'>" .  $row['Gia'] . "<sup>đ</sup></div>";
										}
											
										$s=$s."</div>";
										
							}
							$s=$s."</div>";
							echo $s;
							
							//  In phân trang
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
									
							
						}
					}		
	
			}
			
	public static function showBookInAdmin()
	{
		require('DataProvider.php');
		
		if(isset($_GET['theloai']))
			$matheloai=$_GET['theloai'];
		else $matheloai="";
		if(isset($_GET['timkiemtheoloai']))
			$loai=$_GET['timkiemtheoloai'];
		else $loai="";
		if(isset($_GET['timkiem']))
			$chuoitimkiem=$_GET['timkiem'];
		else $chuoitimkiem="";
		
						if($matheloai=="" && $loai=="" && $chuoitimkiem=="")
						{		
							//  Đếm số lượng sách 
							$sql="select COUNT(*) as numRows from sach s,chitietsach ct where s.MaSach=ct.MaSach";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=10;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select s.MaSach,s.MaTheLoai,TenSach,TenTheLoai,TenTacGia,Gia,HinhAnh from sach s,chitietsach ct, theloai tl where s.MaSach=ct.MaSach and s.MaTheLoai=tl.MaTheLoai LIMIT ".$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="quanlysanpham.php?theloai=&loai=&timkiem=&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$i=1;
							
							$s="<div class='table-responsive' >
										<table class='table table-striped table-bordered table-hover' id='gg'>
											<thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã_sách</th>
                                                    <th>Tên_sách</th>
                                                    <th>Thể_loại</th>
                                                    <th>Tên_tác_giả</th>
													<th>Giá</th>
													<th>Hình_ảnh</th>
													<th>Sửa</th>
													<th>Xóa</th>
                                                </tr>
											</thead>
												<tbody>
													<div id='data-product'>";
							while($row=mysqli_fetch_array($result))
							{
								$s=$s. "<tr>"
										."<td>".$i."</td>"
										."<td>".$row['MaSach']."</td>"
										."<td>".$row['TenSach']."</td>"
										."<td>".$row['TenTheLoai']."</td>"
										."<td>".$row['TenTacGia']."</td>"
										."<td>".$row['Gia']."</td>";
										
										if($row['MaTheLoai']=="NN")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/ngoaingu/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="KT")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/kinhte/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="KNS")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/kynangsong/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="LS")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/lichsu/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="CN")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/chuyennganh/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="TN")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/thieunhi/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="TT")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/tuoiteen/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="VH")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/vanhoc/" . $row['HinhAnh'] . "'></td>";
										
										$s=$s. "<td><a href='editBook.php?masach=".$row['MaSach']."'><i class='fa fa-pencil fa-fw'></i> Sửa</a></td>"
										."<td><font style='color:#337ab7;cursor:pointer' onclick='xoasanpham(".'"'.$row['MaSach'].'"'.")' data-id=><i class='fa fa-trash fa-fw'></i> Xóa</font></td>"
									."</tr>";
								$i++;
							}
							
							$s=$s					."</div>"
												."</tbody>"
										."</table>"
									."</div>";
							
							echo $s;
							//  In phân trang
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
									
							
						}//--------	------------------------------------------------------------------------------------------//
						else
						{
							//  Đếm số lượng sách 
							$sql="select COUNT(*) as numRows from sach s,chitietsach ct where s.MaSach=ct.MaSach";
							if($matheloai!="")
								$sql=$sql . " and s.MaTheLoai='".$matheloai."'";
							if($loai!="" && $chuoitimkiem!="")
							{
								if($loai=="MaSach")
									$sql=$sql." and s.MaSach LIKE '%".$chuoitimkiem."%'";
								if($loai=="TenSach")
									$sql=$sql." and s.TenSach LIKE '%".$chuoitimkiem."%'";
								if($loai=="TenTacGia")
									$sql=$sql." and TenTacGia LIKE '%".$chuoitimkiem."%'";
							}
								
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số sản phẩm tối đa hiện lên trong 1 trang
							$rowsPerPage=10;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select s.MaSach,s.MaTheLoai,TenSach,TenTheLoai,TenTacGia,Gia,HinhAnh from sach s,chitietsach ct, theloai tl where s.MaSach=ct.MaSach and s.MaTheLoai=tl.MaTheLoai ";
							if($matheloai!="")
								$sql=$sql . " and s.MaTheLoai='".$matheloai."'";
							if($loai!="" && $chuoitimkiem!="")
							{
								if($loai=="MaSach")
									$sql=$sql." and s.MaSach LIKE '%".$chuoitimkiem."%'";
								if($loai=="TenSach")
									$sql=$sql." and s.TenSach LIKE '%".$chuoitimkiem."%'";
								if($loai=="TenTacGia")
									$sql=$sql." and TenTacGia LIKE '%".$chuoitimkiem."%'";
							}
							$sql=$sql. " LIMIT ".$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="quanlysanpham.php?theloai=". $matheloai."&loai=".$loai."&timkiem=".$chuoitimkiem."&page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$i=1;
							
							$s="<div class='table-responsive'>
										<table class='table table-striped table-bordered table-hover' id='gg'>
											<thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã_sách</th>
                                                    <th>Tên_sách</th>
                                                    <th>Thể_loại</th>
                                                    <th>Tên_tác_giả</th>
													<th>Giá</th>
													<th>Hình_ảnh</th>
													<th>Sửa</th>
													<th>Xóa</th>
                                                </tr>
											</thead>
												<tbody>
													<div id='data-product'>";
							while($row=mysqli_fetch_array($result))
							{
								$s=$s. "<tr>"
										."<td>".$i."</td>"
										."<td>".$row['MaSach']."</td>"
										."<td>".$row['TenSach']."</td>"
										."<td>".$row['TenTheLoai']."</td>"
										."<td>".$row['TenTacGia']."</td>"
										."<td>".$row['Gia']."</td>";
										
										if($row['MaTheLoai']=="NN")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/ngoaingu/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="KT")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/kinhte/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="KNS")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/kynangsong/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="LS")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/lichsu/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="CN")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/chuyennganh/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="TN")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/thieunhi/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="TT")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/tuoiteen/" . $row['HinhAnh'] . "'></td>";
										if($row['MaTheLoai']=="VH")
											$s=$s. "<td><img style='width:100px;height:150px' src='../images/vanhoc/" . $row['HinhAnh'] . "'></td>";
										
										$s=$s. "<td><a href='editBook.php?masach=".$row['MaSach']."'><i class='fa fa-pencil fa-fw'></i> Sửa</a></td>"
										."<td><font style='color:#337ab7;cursor:pointer' onclick='xoasanpham(".'"'.$row['MaSach'].'"'.")' data-id=><i class='fa fa-trash fa-fw'></i> Xóa</font></td>"
									."</tr>";
								$i++;
							}
							
							$s=$s					."</div>"
												."</tbody>"
										."</table>"
									."</div>";
							
							echo $s;
							//  In phân trang
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
						}
		
	}
}
?>