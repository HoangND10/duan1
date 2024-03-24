<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4>login</h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2">
                            <h4>register</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="index.php?act=dangnhap" method="post">
                                        <input type="text" id="taikhoan" name="taikhoan" placeholder="Username" required />
                                        <input type="password" id="matkhau" name="matkhau" placeholder="Password" required />
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" />
                                                <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <div class="n1"><input type="submit" value="Đăng nhập" name="dangnhap"></div>
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($thongbao1) && ($thongbao1 != "")) echo $thongbao1;


                                    ?>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="index.php?act=dangky" method="post">
                                        <input type="text" name="hoten" placeholder="Họ và tên" required />
                                        <input type="email" name="email" placeholder="Email" required />
                                        <input type="text" name="sdt" placeholder="Số điện thoại" required />
                                        <input type="text" name="diachi" placeholder="Địa chỉ" required />
                                        <input type="text" name="taikhoan" placeholder="Username" required />
                                        <input type="password" name="matkhau" placeholder="Password" required />
                                        <div class="button-box">
                                            <div class="n1"><input type="submit" value="Đăng ký" name="dangky"></div>
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>