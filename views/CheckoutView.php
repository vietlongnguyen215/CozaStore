<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangTrong.php"; ?>
<!-- breadcrumb -->

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .check{
      width: 800px;
      height: 1000px;
      margin: 25px 0px 0px 100px;
    }


    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%; /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%; /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%; /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container2 {
      background-color: #f2f2f2;
      margin-bottom: 50px;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }
    .container3 {
      margin-top: 100px;
    }

    .container4 {
      margin: 25px 0px 25px 150px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container2 {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    .rowmain {
      width: 1200px;
      display: flex;
      margin:  auto;
    }

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>


<body>
  <div class="container3">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg" style="margin-left: 200px;">
      <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
        Home
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4">
        Checkout
      </span>
    </div>
  </div>
  <div class="container4">
    <h3>Thông tin đơn hàng</h3><br>
    <?php if(isset($_SESSION["customer_email"]) == false): ?> 
      <p>Bạn đã có tài khoản? 
        <a style="color: black;" href="index.php?controller=account&action=login">
          Đăng nhập
        </a>  
      </p>

    <?php else: ?>
      <a style="margin-top: 10px;" href="#">Xin chào <?php echo $_SESSION["customer_email"]; ?>   
      <a href="index.php?controller=account&action=logout" class="flex-c-m trans-04 p-lr-25">
        Đăng xuất
      </a>
    <?php endif; ?>
  </div>
  <div class="rowmain">
    <div class="col-md-6">
      <div class="container2">
        <form method="post" action="index.php?controller=account&action=registerPost"> 
          <div class="row">
            <div class="col-50"><br>
              <div class="form-group">
                <label>Họ và tên:<b id="req">*</b></label>
                <input type="text" name="name" class="input-control" required>
              </div>
              <div class="form-group">
                <label>Email<b id="req">*</b></label>
                <input type="text" name="email" class="input-control" required>
              </div>
              <div class="form-group">
                <label>Địa chỉ:<b id="req">*</b></label>
                <input type="text" name="address" class="input-control" required>
              </div>
              <div class="form-group">
                <label>Điện thoại:<b id="req">*</b></label>
                <input type="text" name="phone" class="input-control" required>
              </div>
            </div>
          </div>
          <!-- <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label> -->
          <input type="submit" value="Đặt hàng ngay" class="btn">
        </form> 
      </div>
    </div>
    <!-- //cart -->
    <div class="col-sm-6">
      <div class="container2">
        <form method="post" action="index.php?controller=cart&action=update">
          <h4>Hóa Đơn
          <br><br> 
            <!-- <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> 
              <?php 
              $numCart = 0;
              if(isset($_SESSION["cart"])){
                foreach($_SESSION["cart"] as $product)
                {
                  $numCart++;
                }
              } 
              ?>
              <?php echo $numCart; ?>
            </span> -->
          </h4>
          <?php foreach($_SESSION["cart"] as $product): ?>
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
              <div style="width: 500px; margin-left: -140px;">
                  <table> 
                    <tr>
                      <td>  
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo $product['number']; ?>">
                            <img style="margin-left: 18px; width:80px ;" src="assets/upload/products/<?php echo $product['photo']; ?>"/>
                        </div>
                      </td>
                      <td>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
                      </td>
                      <td style="text-align: center; padding-left: 155px; text-align: center;">
                        <?php echo number_format($product['price']); ?>đ
                      </td>
                    </tr>
                  </table>
              </div>
            </div>
          <?php endforeach; ?>
        </form>
        <p>Thành tiền: <span class="price" style="color:black">
            <?php echo number_format($this->cartTotal()); ?>đ
        </span></p>
      </div>
    </div>
  </div>
</body>
</html>

