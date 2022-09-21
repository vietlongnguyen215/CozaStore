<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangTrong.php"; ?>
<!-- breadcrumb -->
<style>
	.cart{
		width: 1500px;
		height: 1000px;
		margin: 100px 0px 0px -200px;
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
				Shoping Cart
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
										<th class="column-3">Giá bán lẻ</th>
										<th class="column-4">Số lượng</th>
										<th class="column-5">Thành tiền</th>
										<th class="column-6">Xóa</th>
									</tr>
									<?php foreach($_SESSION["cart"] as $product): ?>
									<tr class="table_row">
										<td class="column-1">
											<div class="how-itemcart1">
												<img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive"/>
											</div>
										</td>
										<td class="column-2">
											<a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
										</td>
										<td class="column-3">
											<?php echo number_format($product['price']); ?>
										</td>
										<td class="column-4">
											<div class="wrap-num-product flex-w m-l-auto m-r-0">
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>
												<input class="mtext-104 cl3 txt-center num-product" type="number" id="quantity" min="0" name="product_<?php echo $product['id']; ?>" value="<?php echo $product['number']; ?>">
												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>
										</td>
										<td class="column-5">
											<?php echo number_format($product['number']*$product['price']); ?>
										</td>
										<td class="column-6">
											<a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="">Xóa</i></a>
										</td>
									</tr>
									<?php endforeach; ?>
								</table>
							</div>
							<?php if($this->cartNumber() > 0): ?>
							<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
								<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
									<input type="submit" value="Cập nhật" style="color:none">
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
					</form>
					<?php if($this->cartNumber() > 0): ?>
					<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50" style="margin-left: 1050px; margin-top: -490px;">
						<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm" >
							<h4 class="mtext-109 cl2 p-b-30">
								Hóa đơn
							</h4>

							<!-- tien hang -->

							<!-- shipping money -->

							<div class="flex-w flex-t p-t-27 p-b-33">
								<div class="size-208">
									<span class="mtext-101 cl2">
										Thành tiền:
									</span>
								</div>

								<div class="size-209 p-t-1">
									<span class="mtext-110 cl2">
										<?php echo number_format($this->cartTotal()); ?>
									</span>
								</div>
							</div>

							<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
								<a href="index.php?controller=cart&action=checkout" class="button black">Thanh toán</a>
							</button>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
</div>	