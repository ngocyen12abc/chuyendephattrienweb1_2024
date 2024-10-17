<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3114">


    <div class='container-custom'>

        <div class="top-header">
            <div class="row-dflex">
                <div class="col-lg-5">
                    <div class="welcome">
                        <span>Welcome to Martfury Online Store</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="list-nav row-dflex ">
                        <div class="col">
                            <a href="">Store Location</a>
                        </div>
                        <div class="col">
                            <a href="">Track Order</a>
                        </div>
                        <div class="col">
                            <a href="">
                                <span>USD</span>
                                <span class="fa fa-angle-down"></span>
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <span class="flag">
                                    <img width="18" height="12" src="./img/en.webp" alt="en">
                                </span>
                                <span class="language">English</span>
                                <span class="fa fa-angle-down"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="beetwen-header">
            <div class="row-dflex beetwen-header-flex">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="#">
                            <img height="50" width="225" src="./img/logo-martfury.webp" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="search">
                        <input class="input-search" type="text" placeholder="I'm looking for ...">
                        <button class="btn-search">Search</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="auth">
                        <div class="heart">
                            <a href="#">
                                <span class="fa fa-heart-o" style="font-size:30px;"></span>
                            </a>
                        </div>
                        <div class="cart">
                            <a href="#">
                                <span class="fa fa-cart-plus" style="font-size:30px;"></span>
                            </a>
                        </div>
                        <div class="login">
                            <span>
                                <i class="fa fa-user" aria-hidden="true" style="font-size:30px;"></i>
                            </span>
                            <div class="login-txt">
                                <a href="#">Log In</a>
                                <a href="#">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <div class="bottom-header">
        <div class="container-custom">

            <div class="row-dflex bottom-header-wrap">
                        <div class="col-lg-3">
                            <div class="shop-by-department">
                                <i class="fa fa-bars" style="font-size:30px;"></i>
                                <p>
                                    Shop By Department 
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu">
                                
                                    <div class="col">
                                        <div class="item">
                                            
                                            <a href="#">Home Layout</a>
                                            <i class="fa fa-angle-down" aria-hidden="true" style="padding-left: 15px"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="item">
                                            <a href="#">Category</a>
                                            <i class="fa fa-angle-down" aria-hidden="true" style="padding-left: 15px"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="item">
                                            <a href="#">Product</a>
                                            <i class="fa fa-angle-down" aria-hidden="true" style="padding-left: 15px"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="item">
                                            <a href="#">Blog</a>
                                            <i class="fa fa-angle-down" aria-hidden="true" style="padding-left: 15px"></i>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="item">
                                            <a href="#">Contact</a>
                                            
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="phone">
                                <i class="fa fa-phone" aria-hidden="true" style="font-size: 18px; "></i>
                                <span>Hotline: <strong>1-800-234-5678</strong></span>
                            </div>
                        </div>
                    </div>
            </div>   
           
        </div>

    </div>
</div>
</div>
