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
                            <!-- <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username" />
                                            <input type="password" name="user-password" placeholder="Password" />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" />
                                                    <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit"><span>Login</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                    <?php
                                            if(isset($_SESSION['taikhoan'])){
                                                extract($_SESSION['taikhoan']);
                                            
                                    ?>
                                        <p>Hello <?=$taikhoan?></p>
                                        <li><a class="dropdown-item" href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=edit_taikhoan">Cập nhâp tài khoản</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=mybill">Đơn hàng của tôi</a></li>

                                        <?php if($role==1){ ?>
                                            <li><a class="dropdown-item" href="admin/index.php">Đăng nhập admin</a></li>
                                            <?php }?>
                                            <button><a href="index.php?act=dangxuat">Đăng xuất</a></button>
                                        <?php }else {?>

                                            <form action="#" method="post">
                                                <input type="text" name="user-name" placeholder="Username" />
                                                <input type="password" name="user-password" placeholder="Password" />
                                                <input name="user-email" placeholder="Email" type="email" />
                                                <div class="button-box">
                                                    <button type="submit"><span>Register</span></button>
                                                </div>
                                            </form>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>