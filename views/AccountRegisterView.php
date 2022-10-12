<?php $this->layoutPath = "LayoutTrangTrong.php";  ?>
<style type="text/css">
    .to {
        display: grid;
        grid-template-columns: repeat(12,1fr);
        grid-template-rows: minmax(100px,auto);
        width: 1000px;
        height: 1000px;
        /*margin-left: -80px;*/
    }
    .wrapper {
        border: 1px solid #80808000;
        grid-column: 6/9;
        grid-row: 3;
        height: 800px;
        width: 800px;
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
    label {
        margin-top: 50px;
        margin-left: -200px;
        display: block;
        font-weight: lighter;
    }
    input{
        margin-left: -200px;
        display: block;
        border-bottom: 2px solid #00BCD4;
        margin-top: 6px;
        margin-bottom: 20px;
        outline-style: none;
        padding: 5px;
        width: 200%;
    }
    input[type="text"] {
        padding: 5px;
        width: 450%;
    }
    input[type="password"] {
        padding: 5px;
        width: 450%;
    }
    input#submit {
        margin-left: 20px;
        padding: 7px;
        width: 100%;
        border-radius: 10px;
        border: none;
        /*position: absolute;*/
        bottom: 10px;
        cursor: pointer;
        background: linear-gradient(to right, #fc00ff, #00dbde);
    }
    input#submit:hover{
        background: linear-gradient(to right, #fc466b, #3f5efb);
    }
</style>
<div class="to"  style="margin: auto;"> 
    <div class="wrapper">
        <h2>Đăng ký tài khoản</h2>
        <?php if(isset($_GET["notify"])&&$_GET["notify"]=="exists"): ?>
        <p style="color: red;">Email đã tồn tại!</p>
        <?php else: ?>
        <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
        <?php endif; ?>
        <form method='post' action="index.php?controller=account&action=registerPost">
            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8NCDIeDSHgNIh7wY7X1HBtTBzdju-hUg15GcW6GapXzfmQE3y2P-Pa1gLzKPnkBBOeGOPfIY8YizaUAza1qjuq-S7qBC9cNJ5wBCsY1hvEGhDYHpl9GdoxvRVGcVgf20tVL6_NtcL9vQLmmDhdq91T0" />
            <p class="title"><span>Đăng ký tài khoản</span></p>
            <div class="form-group">
                <label>Họ và tên:</label>
                <input type="text" name="name" class="input-control">
            </div>
            <div class="form-group">
                <label>Email đăng nhập:<b id="req">*</b></label>
                <input type="text" name="email" class="input-control" required>
            </div>
            <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" name="address" class="input-control">
            </div>
            <div class="form-group">
                <label>Điện thoại:</label>
                <input type="text" name="phone" class="input-control">
            </div>
            <div class="form-group">
                <label>Mật khẩu:<b id="req">*</b></label>
                <input type="password" name="password" class="input-control" required="">
            </div>
            <div class="form-group">
                <input type="submit" id="submit" class="button" value="Đăng ký"> 
            </div>
        </form>
    </div>
</div>