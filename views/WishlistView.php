<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangTrong.php"; ?>
<!-- breadcrumb -->
<style>
	.cart{
		width: 1500px;
		height: 1000px;
		margin: 100px 0px 0px -100px;
	}

</style>
<div class="cart">
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg" style="margin-left: 200px;">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Sản phẩm yêu thích
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
		<div class="flex" >
			<div class="container">
				<div class="row" >
					<form class="bg0 p-t-75 p-b-85" method="post" action="index.php?controller=cart&action=update">
					<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
						<div class="m-l-25 m-r--38 m-lr-0-xl" style="width: 850px;">
							<div class="wrap-table-shopping-cart">
								<table class="table-shopping-cart">
									<tr class="table_head">
										<th class="column-1">Ảnh sản phẩm</th>
										<th class="column-2">Tên sản phẩm</th>
										<th class="column-3">Xóa</th>
									</tr>
									<?php foreach($_SESSION["Wishlist"] as $product): ?>
									<tr class="table_row">
										<td class="column-1">
											<div class="how-itemcart1">
												<img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive"/>
											</div>
										</td>
										<td class="column-2">
											<a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?> </a>
										</td>
										<td class="column-3">
											<a href="index.php?controller=wishlist&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="">Xóa</i></a>
										</td>
									</tr>
									<?php endforeach; ?>
								</table>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
</div>	