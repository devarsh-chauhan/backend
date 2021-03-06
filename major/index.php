<?php
// session_start(); 
include 'header.php';
include 'conn.php';
?>
  
<style>
div.card 
  {   
      
      text-align: center;
      
  }
  div.card:hover 
  {   
      box-shadow:  1px 1px 0 rgba(0, 0, 0, 0), 0 2px 1px 0 rgba(0, 0, 0, 0.19);
      text-align: center;
      border: none;
  }
</style>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                            commitment to exceptional quality.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2030</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                            commitment to exceptional quality.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Clothing Collections 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Accessories</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="img/banner/banner-3.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Shoes Spring 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Man Product</li>
                    
                </ul>
            </div>
        </div>
        

<!--Man Product Section Start -->  
<!-- <form method="POST" action="man_cart.php"> -->
<div class="container">
    <div class="row">
    <?php 
    $q="SELECT * FROM man";
    $check=mysqli_query($conn,$q);  
    while($row=mysqli_fetch_assoc($check))
    {
       
        ?> 
         <div class="col-3 card" style="background-color:;">
            <a href="shop-details-man.php?man_id=<?php echo $row['man_id'];  ?>">
                <img src="<?php echo $row['pro_img_f']; ?>" class="p-2" style="width: 300px; height: 300px;">
            </a>
            <h4><?php echo $row['pro_name']; ?></h4>
            <span>  </span>
            <h6 class="p-1"><b>???  <?php echo $row['pro_price']; ?></b> </h6> 
            <div class="rating p-1">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="container p-2">
                <div class="row">
                    <div class="col-sm-12">
                        <form  method="POST">
                            <a href="man_cart.php?man_id=<?php echo $row['man_id'];  ?>" class="btn btn-secondary">
                                add cart
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        <?php
    }
    ?>  
    </div>
</div>
<!-- </form> --> 

<!-- Man Product Section End -->

<div class="container p-4">
    <div class="row">
        <div class="col-lg-12">
            <ul class="filter__controls">
                <li class="active" data-filter="*">Female Product</li>
            </ul>
        </div>
    </div>
</div>

<!-- Female Product Section Start -->  

<div class="container mt-5">
    <div class="row">
    <?php 
    $q="SELECT * FROM female";
    $check=mysqli_query($conn,$q);
    while($row_female=mysqli_fetch_assoc($check))
    {
        ?> 
         <div class="col-3 card" style="background-color:;">
            <a href="shop-details-female.php?female_id=<?php echo $row_female['female_id'];  ?>">
                <img src="<?php echo $row_female['pro_img_f']; ?>" class="p-2" style="width: 300px; height: 300px;">
            </a>
            <h4><?php echo $row_female['pro_name']; ?></h4>
            <span>  </span>
            <h6 class="p-1"><b>???  <?php echo $row_female['pro_price']; ?></b></h6> 
            <div class="rating p-1">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="container p-2">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="female_cart.php?female_id=<?php echo $row_female['female_id'];  ?>" class="btn btn-secondary" style="width:50%;">add to cart</a>
                    </div>
                </div>
            </div>
        </div> 
        <?php
    }
    ?>  
    </div>
</div> 

<!--  Female Product Section End -->

<div class="container p-4 mt-5">
    <div class="row">
        <div class="col-lg-12">
            <ul class="filter__controls">
                <li class="active" data-filter="*">Kids Product</li>
            </ul>
        </div>
    </div>
</div>

<!-- kids Product Section Start -->  

<div class="container mt-5 mt-5">
    <div class="row">
    <?php 
    $q="SELECT * FROM kids";
    $check=mysqli_query($conn,$q);
    while($row_kids=mysqli_fetch_assoc($check))
    {
        ?> 
         <div class="col-3 card" style="background-color:;">
            <a href="shop-details-kids.php?kids_id=<?php echo $row_kids['kids_id'];  ?>">
                <img src="<?php echo $row_kids['pro_img_f']; ?>" class="p-2" style="width: 300px; height: 300px;">
            </a>
            <h4><?php echo $row_kids['pro_name']; ?></h4>
            <span>  </span>
            <h6 class="p-1"><b>???  <?php echo $row_kids['pro_price']; ?></b></h6> 
            <div class="rating p-1">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="container p-2">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="kids_cart.php?kids_id=<?php echo $row_kids['kids_id'];  ?>" class="btn btn-secondary" style="width:50%;">add to cart</a>
                    </div>
                </div>
            </div>
        </div> 
        <?php
    }
    ?>  
    </div>
</div> 

<!--  kids Product Section End -->

<!-- Categories Section Begin -->
<section class="categories spad mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="img/product-sale.png" alt="">
                    <div class="hot__deal__sticker">
                        <span>Sale Of</span>
                        <h5>$29.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="categories__deal__countdown">
                    <span>Deal Of The Week</span>
                    <h2>Multi-pocket Chest Bag Black</h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item">
                            <span>3</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>1</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>50</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-1.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-2.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-3.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-4.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-5.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-6.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
                    <h3>#Male_Fashion</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

<?php 
include 'footer.php';
?>