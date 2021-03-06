<!DOCTYPE html>
<html lang="en">
<?php
include('layouts\header.php');
?>
<body>
<div class="header-top-w3layouts">
    <div class="container">
        <div class="col-md-6 logo-w3">
            <a href="index.html"><img src="images/logo2.png" alt=" " /><h1>STAGE<span Style="margin-left:46px;">Book</span></h1></a>
        </div>
        <div class="col-md-6 phone-w3l">
            <ul>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                <li>+18045403380</li>
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
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
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
                            <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Categories<b class="caret"></b></span></a>
                            <ul class="dropdown-menu multi">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="science.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Science</a></li>
                                            <li><a href="Religion.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Religion &amp; Spirituality</a></li>
                                            <li><a href="History.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>History</a></li>
                                            <li><a href="Art.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Art</a></li>

                                        </ul>

                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="Novels.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Novels</a></li>
                                            <li><a href="cultural.html"><i class="fa fa-angle-right" aria-hidden="true"></i>cultural</a></li>
                                            <li><a href="Autobiography.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Autobiography</a></li>
                                            <li><a href="Others.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Others</a></li>

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
            $(document).ready(function(){
                $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');
                    }
                );
            });
        </script>
        <div class="col-md-4 search-agileinfo">
            <form action="#" method="post">
                <input type="search" name="Search" placeholder="Search for a Book..." required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
            </form>
        </div>
        <div class="col-md-1 cart-wthree">
            <div class="cart">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="products">
    <div class="container">
        <div class="single-page">
            <div class="single-page-row" id="detail-21">
                <div class="col-md-6 single-top-left">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="images/s1.jpg">
                                <div class="thumb-image detail_images"> <img src="images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                            <li data-thumb="images/s2.jpg">
                                <div class="thumb-image"> <img src="images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                            <li data-thumb="images/s3.jpg">
                                <div class="thumb-image"> <img src="images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 single-top-right">
                    <h3 class="item_name"> <?= $book['name'] ?> </h3>
                    <p>Processing Time : This Book will be shipped out within 2-3 working days. </p>
                    <div class="single-rating">
                        <ul>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li class="rating">20 reviews</li>
                            <li><a href="#">Add your review</a></li>
                        </ul>
                    </div>

                    <p class="single-price-text">هذه الرواية كانت بالنسبة لي عينا تشاهد أحداث عالم لم أكن أعتقد يوجوده أبدا
                        أخرجتني من عالم الفراشات والطيور الجميلة الى عالم " الحياة "
                        وكما قال أيمن " هذه هي الحياة " ولكني اكتشفت بنفس الوقت الانسان هذا المخلوق العجيب
                        القادر على التكيف لأبعد حد والقادر على أن يجعل من مآسيه فرصة للتشبت بهذا الكون
                        رواية رائعة وقاتلة بنفس الوقت
                        يمكن القول انها لمن يجرؤ فقط </p>
                    <form action="#" method="post">
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="w3ls1_item" value="Handbag" />
                        <input type="hidden" name="amount" value="540.00" />
                        <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                    </form>
                    <button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
                    <button class="w3ls-cart w3ls-cart-like"><i class="fa fa-gift" aria-hidden="true"></i> <a style="color:#00e58b"  onMouseOver="this.style.color='#fff'"
                                                                                                              onMouseOut="this.style.color='#00e58b'"href="Novels_ayman.html"> Related Bookes</a></button>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <!-- collapse-tabs -->
        <div class="collpse tabs">
            <h3 class="w3ls-title">About This Book</h3>
            <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            خلف الوادي انتشرت أشجار هرمة . إلا انها ظلت خضراء على طول عمرها الذي تجاوز مئات السنين .. ووقفت أمام شجرة لزاب عتيقة
                            وخاطبت فيها الراحلين جميعا من جدي الى جدتي الى عمتي الى الى كلب صديقي الى قطة جارتنا الى ببغاء اخي : لقد شهدتكم هذه الشجرة العتيقة ، انتم مضيتم وظلت هي مخضرة ،انتم توقفتم عن العطاء عند حد الثواء وهي ظلت تعطي كأنها من النهر نفسه تستمد البقاء
                            انتم انبتم من جذوركم فسقطتم على جبهاتكم في حفر التراب ، وهى ظلت تضرب جذورها في التراب و رؤؤس أغصانها في رحب الفضاء آنتم فانون وهي الى الآن باقية


                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> additional information <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            المؤلفات:
                            - الدّواوين:
                            1. قلبي عليك حبيبتي.
                            2. خذني إلى المسجد الأقصى.
                            3.نبوءات الجائعين .
                            4. الزنابق.

                            الرّوايات:
                            1. يا صاحبي السّجن
                            2. يسمعون حسيسها.
                            3. ذائقة الموت.
                            4. حديث الجنود.
                            5. نفر من الجن.
                            6. كلمة الله
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> reviews (5) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            أثناء قراءتي لرواية "يسمعون حسيسها" تأكدت من وجود شياطين على هيئة بشرِ يعيشون هنا, وتأكدت من وجود مقابر جماعية وفردية لأناس أحياء في مكان. كدت وما زلت أكاد لا أصدّق كل العذاب الذي تعرّض له مساجين في سجون "تدمر" السورية وفي سجون أو بالأصحّ "مقابر" أخرى على هذه الأرض
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-question-circle fa-icon" aria-hidden="true"></i> Help <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            If you want To Buy this Book Just click on add to cart and see the price, decide  how many books you need then call the number in the description or contact us .
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //collapse -->
    </div>
</div>
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3> Follow Us</h3>
            <p>If you like our service please subscribe Us </p>
        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="Subscribe" />
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grids fgd1">

            <ul>


                <a href="https://twitter.com/AyaSher05974952?s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/Book-Stage-2071068316466908/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/book-stage-226264159"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd2">

            <ul>

                <h4><li><a href="faq.html">FAQ's</a></li></h4>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd3">

            <ul>
                <h4><li><a href="login.html">Login</a></li></h4>

            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd4">

            <ul>


                <h4><li><a href="register.html">Register</a></li></h4>

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
