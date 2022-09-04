

<!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        <div class="row border border-light border-3">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area  ">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                            <img class="" src="{{$image}}">
                        </div>
                    </div>

                    <div class="detail-info">

                        <h1 class="product-name">{{$name}}</h1>
                        <div class="short-desc">
                            <ul>
                                <li>{{$description}}</li>
                            </ul>
                        </div>
                        <div class="wrap-social">
                            <a class="link-socail" href="{{$image}}"><img src="assets/images/social-list.png" alt=""></a>
                        </div>
                        <div class="wrap-price"><span class="product-price">{{$price}} den.</span></div>
                        <div class="stock-info in-stock">
                            @if ($availability == true)
                            <p class="availability">Availability: <b>In Stock</b></p>
                            @else
                                <p class="availability">Availability: <b>Not In Stock</b></p>
                            @endif
                        </div>
                        <form action="/addToCart/{{$id}}/0">
                        <div class="quantity">
                            <span>Quantity:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >

                                <a class="btn btn-reduce"></a>
                                <a class="btn btn-increase" ></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            <button class="btn add-to-cart">Add to Cart</button>
                        </div>
                        </form>





                        </div>
                    </div>
                </div>
            </div><!--end main products area-->


<br>
    <div class="container">
        <div class="row">
            <div style="color:white; font-family: Roboto; background: red; height: 45px; font-size: 25px;" class="col-12 "> RELATED PRODUCTS</div>
        </div>
    </div>

    <br>

    <div class="widget mercado-widget widget-product">
        <div class="widget-content">
            <div class="container">
                <div  class="products row">
                    @foreach($sameCategory as $product )
                        <div align="center" class="product-item col-4">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="/productDetail/{{$product->id}}" title="{{$product->name}}">
                                        <figure><img src="{{$product->image}}" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{$product->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{$product->price}} den.</span></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<br>
        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->

