<?php
$config = [
    'lang' => 'ar'
];
?>

<!DOCTYPE html>
<html lang="<?= $config['lang'] ?>">
<?php
include('layouts/header.php');
?>

<body>
<div class="header-top-w3layouts">
    <div class="container">
        <div class="col-md-6 logo-w3">
            <a href="index.html"><img src="images/logo2.png" alt=" "/>
                <h1>STAGE<span style="margin-left:25px">Book</span></h1></a>
        </div>
        <div class="col-md-6 phone-w3l">
            <ul>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                <li id="phone_no">+18045403380</li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="header-bottom-w3ls">
    <div class="container">
        <div class="col-md-7 navigation-agileits">
            <nav class="navbar navbar-default">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                            data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        <li class=" active"><a href="index.html" class="hyper "><span>Home</span></a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>Categories<b
                                        class="caret"></b></span></a>
                            <ul class="dropdown-menu multi">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <?php
                                            $categoriess = [
                                                [
                                                    'name' => 'Science',
                                                    "link" => 'science.html'
                                                ],
                                                [
                                                    'name' => 'Religion Spirituality',
                                                    "link" => 'Religion.html'
                                                ],
                                                [
                                                    'name' => 'History',
                                                    "link" => 'History.html'
                                                ],
                                                [
                                                    'name' => 'Art',
                                                    'link' => 'Art.html'
                                                ]
                                            ];

                                            foreach ($categoriess as $category){
                                                echo '<li><a href="' . $category['link'] . '"><i class="fa fa-angle-right"
                                                                          aria-hidden="true"></i>' . $category['name']. '</a></li>';
                                            }

                                            ?>


                                            <!--                                            <li><a href="Religion.html"><i class="fa fa-angle-right"-->
                                            <!--                                                                           aria-hidden="true"></i>Religion &amp;-->
                                            <!--                                                    Spirituality</a></li>-->
                                            <!--                                            <li><a href="History.html"> <i class="fa fa-angle-right"-->
                                            <!--                                                                           aria-hidden="true"></i>History</a></li>-->
                                            <!--                                            <li><a href="Art.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Art</a>-->
                                            <!--                                            </li>-->

                                        </ul>

                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="Novels.html"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i>Novels</a></li>
                                            <li><a href="cultural.html"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>cultural</a></li>
                                            <li><a href="Autobiography.html"><i class="fa fa-angle-right"
                                                                                aria-hidden="true"></i>Autobiography</a>
                                            </li>
                                            <li><a href="Others.html"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i>Others</a></li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-4 w3l">
                                        <a href="Novels.html"><img src="images/menu1.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>

                        <li><a href="about.html" class="hyper"><span>About</span></a></li>
                        <li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                    function () {
                        $('.dropdown-menu', this).stop(true, true).slideDown("slow");
                        $(this).toggleClass('open');
                    },
                    function () {
                        $('.dropdown-menu', this).stop(true, true).slideUp("slow");
                        $(this).toggleClass('open');
                    }
                );
            });
        </script>
        <div class="col-md-4 search-agileinfo">
            <form action="#" method="post">
                <input type="search" name="Search" placeholder="Search for a Book ..." required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
            </form>
        </div>
        <div class="col-md-1 cart-wthree">
            <div class="cart">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart"/>
                    <input type="hidden" name="display" value="1"/>
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"
                                                                                        aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="banner-agile">
    <div class="container">
        <h2>WELCOME TO</h2>
        <h3>Book <span>Stage</span></h3>
        <p>Are you one of the so-called bookworms , who wait for the annual book fair in Egypt to get a chance to
            exchange or borrow books or buy cheap books ?
        </p>
        <a href="about.html">Read More</a>
    </div>
</div>
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <h3 style="font-size: 40px;color: #000;margin-bottom: 40px;padding-top:3%;">Recent Added</h3>

        <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
            <a href="History.html">
                <div class="eye-on-hover bb-left-agileits-w3layouts-inner">
                    <span style="display: block;" class="fa fa-eye fa-5x"></span>
                </div>
            </a>
        </div>
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href="Science.html">
                <div class="eye-on-hover bb-middle-top">

                </div>
            </a>
            <a href="History.html">
                <div class="eye-on-hover bb-middle-bottom">

                </div>
            </a>
        </div>
        <div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
            <a href="Novels.html">
                <div class="eye-on-hover bb-right-top">

                </div>
            </a>
            <a href="Religion.html">
                <div class="eye-on-hover bb-right-bottom">

                </div>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="top-products">
    <div class="container">
        <h3>Top Search</h3>
        <div class="sap_tabs">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item"><span>Science</span></li>
                    <li class="resp-tab-item"><span>History</span></li>
                    <li class="resp-tab-item"><span>Art</span></li>
                    <li class="resp-tab-item"><span>Novels</span></li>
                </ul>
                <div class="clearfix"></div>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp1.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Formal shoes"/>
                                            <input type="hidden" name="amount" value="220.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>medical</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp2.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Formal shirt"/>
                                            <input type="hidden" name="amount" value="190.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Kids</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp3.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Blazer"/>
                                            <input type="hidden" name="amount" value="160.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Biology </h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp4.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Casual shoes"/>
                                            <input type="hidden" name="amount" value="250.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Engineering</h4>

                        </div>
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                            <div class="col-md-3 top-product-grids tp5">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/ip2.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Inner wear"/>
                                                <input type="hidden" name="amount" value="50.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>zoology</h4>
                            </div>
                            <div class="col-md-3 top-product-grids tp6">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/shp8.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Shoes"/>
                                                <input type="hidden" name="amount" value="150.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Medical</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp7">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/cap1.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Formal shirt"/>
                                                <input type="hidden" name="amount" value="100.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Medical</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/wap3.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Watch"/>
                                                <input type="hidden" name="amount" value="200.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Engineering</h4>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp5.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Casual wear"/>
                                            <input type="hidden" name="amount" value="220.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>religious</h4>
                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp6.png" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Casual wear"/>
                                            <input type="hidden" name="amount" value="190.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Resume</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp7.png" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Casual wear"/>
                                            <input type="hidden" name="amount" value="160.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Resume</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp8.png" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Casual wear"/>
                                            <input type="hidden" name="amount" value="250.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Resume</h4>

                        </div>
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/wp8.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Casual wear"/>
                                                <input type="hidden" name="amount" value="250.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>civilization</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/wp5.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Casual wear"/>
                                                <input type="hidden" name="amount" value="250.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Religius</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/wp4.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Casual wear"/>
                                                <input type="hidden" name="amount" value="350.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Religius</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/wp3.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Casual wear"/>
                                                <input type="hidden" name="amount" value="200.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Religius</h4>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp9.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Handbag"/>
                                            <input type="hidden" name="amount" value="90.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Preaching</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp10.png" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Handbag"/>
                                            <input type="hidden" name="amount" value="60.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Human Development</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp11.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Handbag"/>
                                            <input type="hidden" name="amount" value="120.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Fashion</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp12.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Handbag"/>
                                            <input type="hidden" name="amount" value="70.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Fashion</h4>

                        </div>
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/hp9.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Handbag"/>
                                                <input type="hidden" name="amount" value="290.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Human Development</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/hp8.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Handbag"/>
                                                <input type="hidden" name="amount" value="50.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Preaching</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/hp7.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Handbag"/>
                                                <input type="hidden" name="amount" value="70.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Poetry</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/hp3.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Handbag"/>
                                                <input type="hidden" name="amount" value="190.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Human Development</h4>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp13.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Eye makeup"/>
                                            <input type="hidden" name="amount" value="90.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Literature</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp14.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Gold makeup"/>
                                            <input type="hidden" name="amount" value="60.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Romance</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp15.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Tya Makeup kit"/>
                                            <input type="hidden" name="amount" value="120.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Social</h4>

                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="single.html">
                                <div class="product-img">
                                    <img src="images/tp16.jpg" alt=""/>
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="w3ls1_item" value="Vega Brushes"/>
                                            <input type="hidden" name="amount" value="60.00"/>
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                    class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Poetry</h4>

                        </div>
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/cp5.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Vega Brushes"/>
                                                <input type="hidden" name="amount" value="60.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Resume</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/cp4.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Vega Brushes"/>
                                                <input type="hidden" name="amount" value="60.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Religious</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/cp7.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Eye shades"/>
                                                <input type="hidden" name="amount" value="60.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Social</h4>

                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html">
                                    <div class="product-img">
                                        <img src="images/cp8.jpg" alt=""/>
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="w3ls1_item" value="Eye shades"/>
                                                <input type="hidden" name="amount" value="160.00"/>
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i
                                                        class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Drama</h4>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<div class="fandt">
    <div class="container">
        <div class="col-md-6 features">
            <h3>Our Services</h3>
            <div class="support">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-user " aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>24/7 online free support</h4>
                    <p>Our Team Ready To Serve You Anytime and Anywhere .</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="shipping">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>Book Location</h4>
                    <p>We provide You Many Location For One Book , Go with Your choise.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="money-back">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-heart" aria-hidden="true"></i>

                </div>
                <div class="col-md-10 ftext">
                    <h4>Books from everywhere</h4>
                    <p>Massive collection of Books prepared for you .</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 testimonials">
            <div class="test-inner">
                <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <img src="images/c1.png" alt=" " class="img-responsive"/>
                                <p>just what I needed , great service and the work team is helpful</p>
                                <h4># Andrew</h4>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <img src="images/c2.png" alt=" " class="img-responsive"/>
                                <p>Finding books anywhere and very easy , can't be any better</p>
                                <h4># Lucy</h4>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <img src="images/c3.png" alt=" " class="img-responsive"/>
                                <p>one place gather everything you can do with a book and high potential , it's just
                                    great</p>
                                <h4># Martina</h4>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script src="js/jquery.wmuSlider.js"></script>
    <script>
        $('.example1').wmuSlider();
    </script>
</div>
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Top Donate Resources</h3>
        <div class="sliderfig">
            <ul id="flexiselDemo1">
                <li>
                    <img src="images/4.png" alt=" " class="img-responsive"/>
                </li>
                <li>
                    <img src="images/55.jpg" alt=" " class="img-responsive"/>
                </li>
                <li>
                    <img src="images/5.png" alt=" " class="img-responsive"/>
                </li>
                <li>
                    <img src="images/7.png" alt=" " class="img-responsive"/>
                </li>
                <li>
                    <img src="images/6.png" alt=" " class="img-responsive"/>
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: false,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<!-- //top-brands -->
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3> Follow Us</h3>
            <p>If you like our service please subscribe Us </p>
        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="Subscribe"/>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grids fgd1">

            <ul>


                <a href="https://twitter.com/AyaSher05974952?s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/Book-Stage-2071068316466908/"><i class="fa fa-facebook"
                                                                                   aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/book-stage-226264159"><i class="fa fa-linkedin"
                                                                              aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd2">

            <ul>

                <h4>
                    <li><a href="faq.html">FAQ's</a></li>
                </h4>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd3">

            <ul>
                <h4>
                    <li><a href="login.html">Login</a></li>
                </h4>

            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd4">

            <ul>


                <h4>
                    <li><a href="register.html">Register</a></li>
                </h4>

            </ul>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">© 2018 Book Stage . All rights reserved </p>
    </div>
</div>
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    w3ls1.render();

    w3ls1.cart.on('w3sb1_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
                items[i].set('shipping', 0);
                items[i].set('shipping2', 0);
            }
        }
    });
</script>
<!-- //cart-js -->
</body>
</html>