<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                    <img src="assets/images/slika10.webp" style="height: 500px; width: 3000px;" alt="" class="img-slide">
                    <div class="slide-info slide-1">
                        <h2 class="f-title" style="text-align:end"><b>No.1</b></h2>
                        <span class="subtitle">Best natural cosmetics</span>
                        <p class="sale-info">Prices from: <span class="price">500</span></p>
                        <a href="/shop" class="btn-link">Shop Now</a>
                    </div>
                </div>
                <div class="item-slide">
                    <img src="assets/images/slika9.jpg"  class="img-slide" style="height: 500px; width: 3000px;">
                    <div class="slide-info slide-2">
                        <h2 class="f-title" >100% natural</h2>
                        <span class="f-subtitle">Combine your ingredients depending on what is good for your skin</span>
                        <h4 class="s-title">Get yours</h4>
                        <a href="/shop" class="btn-link" style="font-size: x-large; color: red">Shop Now</a>
                    </div>

                </div>
                <div class="item-slide">
                    <img src="assets/images/slika11.jpg" alt="" class="img-slide" style="height: 500px; width: 3000px;">
                    <div class="slide-info slide-3">
                        <h2 class="f-title"><b>Dermatologically tested</b></h2>
                        <span class="f-subtitle">Run over 100+ tests</span>
                        <p class="sale-info"><b class="price">DON'T WAIT!</b></p>
                        <a href="/shop" class="btn-link">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>




        <div class="widget mercado-widget widget-product">
            <h2 class="widget-title">Popular Products</h2>
            <div class="widget-content">
                <div class="container">
                    <div  class="products row">
                        @foreach($mostPopular as $product )
                            <div align="center" class="product-item col-4">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="/productDetail/{{$product->id}}" title="{{$product->name}}">
                                            <figure><img src="{{$product->image}}" alt="" style="height: 120px; width: 300px"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>{{$product->name}}</span></a>
                                        <div class="wrap-price"><span class="product-price">{{$product->price}}</span></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- brand widget-->





        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="assets/images/slika2.png" alt=""  style="width:580px; height:300px" ></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="assets/images/slika 4.jpg" alt="" style="width:580px; height:300px"></figure>
                </a>
            </div>
        </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>




