<?php
    if(Session::has('cart')){
        $sessionCart = Session('cart');
        $cartCount = $sessionCart['total'];
    } else{
        $cartCount = 0;
    }
?>

<!-- header start -->
<header class="header-pos elements1" style="border-bottom: 1px solid #ebebeb;">
    <div class="header-area header-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="logo">
                        <a href="/"><img src="/img/logo/logo-word-black.png" alt="" / style="width:200px;"></a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-9 col-xs-12 text-right xs-center">
                    <div class="main-menu display-inline hidden-sm hidden-xs">
                        <nav>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li><a href="">Jilbab</a>
                                    <ul class="submenu" style="margin-top:-20px">
                                        <li><a href="/categories/hijab" style="border-bottom: 1px solid #ebebeb;">Semua Jilbab</a></li>
                                        <li><a href="/categories/hijab/ciput">Ciput</a></li>
                                        <li><a href="/categories/hijab/instant">Kerudung Instan</a></li>
                                        <li><a href="/categories/hijab/khimar">Khimar</a></li>
                                        <li><a href="/categories/hijab/pashmina">Pashmina</a></li>
                                        <li><a href="/categories/hijab/square">Hijab Segi Empat</a></li>
                                    </ul>
                                </li>
                                <li><a>Pakaian</a>
                                    <ul class="submenu" style="margin-top:-20px">
                                        <li class="/categories/clothing" style="border-bottom: 1px solid #ebebeb;"><a href="#">Semua Pakaian</a></li>
                                        <li><a href="/categories/clothing/men">Pakaian Pria</a></li>
                                        <li><a href="/categories/clothing/women">Pakaian Wanita</a></li>
                                        <li><a href="/categories/clothing/gamis">Gamis</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Tas & Sepatu</a>
                                    <ul class="submenu" style="margin-top:-20px">
                                        <li><a href="/categories/bag">Semua Tas</a></li>
                                        <li><a href="/categories/shoe">Semua Sepatu</a></li>
                                    </ul>
                                </li>
                                <li><a href="/promo"><span class="fa fa-asterisk" style="color:red"></span>Diskon & Promo</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="search-block-top display-inline">
                        <div class="icon-search"></div>
                        <div class="toogle-content">
                            <form action="#" id="searchbox">
                                <input type="text" placeholder="Search" />
                                <button class="button-search"></button>
                            </form>
                        </div>
                    </div>
                    <div class="shopping-cart ml-20 display-inline" id="cartCountDiv">
                        <a href="/cart"><b>keranjang</b>(<span id="cartCount">@if(isset($cartCount)) {{$cartCount}} @else 0 @endif</span>)</a>
                        {{-- <ul>
                            <li>
                                <div class="cart-img">
                                    <a href="#"><img src="{{env('API_BASE_URL').'app/images/f1c65761-7ab4-485b-8d2b-1fd0e56c621f/47d1e335-9bc4-419b-9920-310828d1b54c/big_v1-539-35593-62917-8113-46-82624-2.jpg'}}" style="max-width:80px;max-height:92px" alt="" /></a>
                                </div>
                                <div class="cart-content">
                                    <h3><a href="#"> 1 X Salma Veil</a> </h3>
                                    <span><b>Cokelat</b></span>
                                    <span class="cart-price">Rp 300.000</span>
                                </div>
                                <div class="cart-del">
                                    <i class="fa fa-times-circle"></i>
                                </div>
                            </li>
                            <li>
                                <hr class="shipping-border" />
                                <div class="shipping">
                                    <span class="f-left"> Total </span>
                                    <span class="f-right cart-price">Rp 315.000</span>
                                </div>
                            </li>
                            <li class="checkout m-0"><a href="#">checkout <i class="fa fa-angle-right"></i></a></li>
                        </ul> --}}

                        <ul style="margin-top:-50px;background:#FBB62D;height:30px;padding-top:-10px;width:200px" id="cartCountInfo">
                            <li style="color:#ffffff;margin-top:-10px"><span class="fa fa-info-circle"></span> Keranjang Diperbaharui</li>
                        </ul>
                    </div>
                    <div class="setting-menu display-inline">
                        <span class="fa fa-user"></span> <a href="/login">Sign In</a> | <a href="/register">Register</a>
                        {{-- <ul class="content-nav toogle-content">
                            <li class="currencies-block-top">
                                <div class="current"><b>My Account</b></div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">My wishlist</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Log in</a></li>
                                </ul>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu-area visible-sm visible-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
						<ul>
							<li><a href="#">Home</a>
								<ul>
									<li><a href="index.html">home version 1</a></li>
									<li><a href="index-2.html">home version 2</a></li>
									<li><a href="index-3.html">home version 3</a></li>
									<li><a href="index-4.html">home version 4</a></li>
								</ul>
							</li>
							<li><a href="shop.html">Sofa</a>
								<ul>
									<li><a href="#">Bras & Tanks</a></li>
									<li><a href="#">Trousers</a></li>
									<li><a href="#">Hoodies & Sweatshirts</a></li>
									<li><a href="#">Tees</a></li>
									<li><a href="#">Jackets</a></li>
									<li><a href="#">Shorts</a></li>
									<li><a href="#">Trousers</a></li>
									<li><a href="#">Tees</a></li>
									<li><a href="#">Tanks</a></li>
									<li><a href="#">Pants</a></li>
									<li><a href="#">trousers</a></li>
									<li><a href="#">jeans</a></li>
									<li><a href="#">shorts</a></li>
									<li><a href="#">suits</a></li>
									<li><a href="#">jackets</a></li>
								</ul>
							</li>
							<li><a href="#">Elements</a>
								<ul>
                                        <li><a href="elements-alerts.html">alerts</a></li>
                                        <li><a href="elements-banner1.html">banner 1</a></li>
                                        <li><a href="elements-banner2.html">banner 2</a></li>
                                        <li><a href="elements-banner3.html">banner 3</a></li>
                                        <li><a href="elements-brand-logo.html">brand logo</a></li>
                                        <li><a href="elements-buttons.html">buttons</a></li>
                                        <li><a href="elements-blog.html">blog</a></li>
                                        <li><a href="elements-tab.html">tab</a></li>
                                        <li><a href="elements-map.html">map</a></li>
                                        <li><a href="elements-collapse.html">collapse</a></li>
                                        <li><a href="elements-newsletter.html">newsletter</a></li>
                                        <li><a href="elements-newsletter-2.html">newsletter 2</a></li>
                                        <li><a href="elements-products.html">products</a></li>
                                        <li><a href="elements-services.html">services</a></li>
                                        <li><a href="elements-social-icon.html">social icon</a></li>
                                        <li><a href="elements-testimonial.html">testimonial</a></li>
                                        <li><a href="elements-carousel-tab.html">carousel with tab</a></li>
								</ul>
							</li>
							<li><a href="shop.html">Lighting</a>
								<ul>
									<li><a href="#">Bras & Tanks</a></li>
									<li><a href="#">Trousers</a></li>
									<li><a href="#">Hoodies & Sweatshirts</a></li>
									<li><a href="#">Tees</a></li>
									<li><a href="#">Jackets</a></li>
									<li><a href="#">Shorts</a></li>
									<li><a href="#">Trousers</a></li>
									<li><a href="#">Tees</a></li>
									<li><a href="#">Tanks</a></li>
									<li><a href="#">Pants</a></li>
									<li><a href="#">trousers</a></li>
									<li><a href="#">jeans</a></li>
									<li><a href="#">shorts</a></li>
									<li><a href="#">suits</a></li>
									<li><a href="#">jackets</a></li>
								</ul>
							</li>
							<li><a href="#">Pages</a>
							    <ul>
									<li><a href="blog.html">blog</a></li>
									<li><a href="blog-details.html">blog details</a></li>
									<li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
									<li><a href="cart.html">cart</a></li>
									<li><a href="checkout.html">checkout</a></li>
									<li><a href="contact.html">contact</a></li>
									<li><a href="login.html">login</a></li>
									<li><a href="product-details.html">product details</a></li>
									<li><a href="register.html">register</a></li>
									<li><a href="shop.html">shop</a></li>
									<li><a href="wishlist.html">wishlist</a></li>
								</ul>
							</li>
							<li><a href="#">What's New</a></li>
						</ul>
					</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<script type="text/javascript">
	$(document).ready(function(){
        $('#cartCountDiv').hover(function(){
            $('#cartCountInfo').css({"opacity": "0", "visibility": "hidden"});
        });
    });
</script>
