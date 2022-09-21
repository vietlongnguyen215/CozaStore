<?php $this->layoutPath = "LayoutTrangTrong.php";  ?>
<style type="text/css">
	.to {
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
    width: 800px;
    height: 800px;
    /*margin-left: 150px;*/
	}
	 
	.wrapper {
	    border: 1px solid #80808000;
	    grid-column: 6/9;
	    grid-row: 3;
	    height: 500px;
	    width: 500px;
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	    position: relative;
	    border-radius: 15px;
	    box-shadow: 0px 0px 14px 0px grey;
	    background-color: white;
	    font-family: 'Open Sans', sans-serif;
	}
	h2 {
	    margin-top: 50px;
	    margin-bottom: 30px;
	}
	i.fab.fa-app-store-ios {
	    display: block;
	    margin-bottom: 50px;
	    font-size: 28px;
	}
	 
	label {
		margin-top: 50px;
	    margin-left: -80px;
	    display: block;
	    font-weight: lighter;
	 
	}
	input{
		margin-left: -80px;
	    display: block;
	    border-bottom: 2px solid #00BCD4;
	    margin-top: 6px;
	    margin-bottom: 20px;
	    outline-style: none;

	}
	input[type="text" ] {
	    padding: 5px;
	    width: 250%;
	}

	input[type="password"] {
	    padding: 5px;
	    width: 250%;
	}
	 
	input#submit {
		margin-left: -60px;
	    padding: 7px;
	    width: 50%;
	    border-radius: 10px;
	    border: none;
	    position: absolute;
	    bottom: 10px;
	    cursor: pointer;
	    background: linear-gradient(to right, #fc00ff, #00dbde);
	}
	input#submit:hover{
	 
	    background: linear-gradient(to right, #fc466b, #3f5efb); 
	}
</style>
<div>
	<div class="to" style="margin: auto;">
		<div class="wrapper">
			<h2>Đăng nhập tài khoản</h2>
		          <?php if(isset($_GET["notify"])&&$_GET["notify"]=="success"): ?>
		          	<p style="color: red;">Đăng ký thành công</p>
		          <?php else: ?>
		          	<p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
		          <?php endif; ?>
			<form method="post" action="index.php?controller=account&action=loginPost">
				<label>Email</label>
				<input type="text" name="email" required="">
				<label>Password</label>
				<input type="password" name="password" required="">
				<input type="submit" id="submit" value="Đăng nhập">
			</form>
		</div>
	</div>
</div>

