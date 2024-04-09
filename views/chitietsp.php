<?php
    extract($sanpham);
?>
<div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <?php $img = "upload/" . $hinh;

                                echo '<div class="swiper-slide zoom-image-hover"> <img class="img-responsive m-auto" src='.$img.' alt=""> </div>'
                            ?>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="product-details-content quickview-content">
                        
                        <?php echo '<h2>'.$tensp.'</h2>' ?>
                        <p class="reference">Reference:<span> demo_17</span></p>
                        
                        <div class="pricing-meta">
                            <ul>
                                
                                <?php echo '<li class="old-price not-cut">'.$gia.'.000</li>' ?>

                            </ul>
                        </div>
                        <p class="quickview-para m-0">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                        <div class="pro-details-quality">
                            <div class="pro-details-cart">
                                <button class="add-cart btn btn-primary btn-hover-primary" href="#"> Buy Now</button>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details1">Description</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                    <a data-bs-toggle="tab" href="#des-details3">Reviews</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane active">
                        <div class="product-anotherinfo-wrapper">
                            <ul>
                               
                                <?php echo $mota; ?>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane">
                        <div class="product-description-wrapper">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            </p>
                            <p>
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            </p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">

                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                       
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                               
                                            </div>
                                            <div class="review-bottom">
                                            <table class="table">
                                                <?php $binhluan=loadall_binhluan();?>
                                                <?php foreach($binhluan as $value): ?> 
                                                    <tbody>                                                    
                                                        <tr >
                                                            <td><?php echo $value['hoten']?></td>
                                                            <td><?php echo $value['noidung']?></td>
                                                            <td><?php echo date("d/m/Y", strtotime($value['ngaybl'])) ?></td>
                                                        </tr>
                                                    
                                                    <?php endforeach; ?>
                                                </tbody>
                                                </table>
                                            <table class="">
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <div class="ratting-form">
                                        <form action="index.php?act=chitietsp&idsp=<?= $idsp?>" method="POST">
                                                                                         
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea type="text" name="noidung" value="<?=$noidung?>" ></textarea>
                                                        <button class="btn btn-primary btn-hover-color-primary " type="submit" name="submit" value="Submit">Submit</button>
                                                            <!-- <input type="text" name="noidung">
                                                            <input type="submit" name="guibinhluan" value="Gửi bình luận"> -->
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->

    <!-- New Product Start -->
    <div class="section pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-start mb-11">
                        <h2 class="title">You Might Also Like</h2>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <div class="new-product-wrapper swiper-wrapper">
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets/images/product-image/1.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="sale">-10%</span>
                                <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                <span class="price">
                                    <span class="new">$18.50</span>
                                <span class="old">$28.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets/images/product-image/3.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="sale">-7%</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                <span class="old">$43.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets/images/product-image/5.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                </a>
                                <span class="badges d-none">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets/images/product-image/7.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="shop-left-sidebar.html" class="image">
                                    <img src="assets/images/product-image/9.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="sale">-5%</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                <span class="old">$40.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Prodect -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>