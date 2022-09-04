
<!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <br>
        <br>
        <div class=" main-content-area">

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Cart</h3>
                <ul class="products-cart">
                    <?php $total = 0 ?>

                    @if(session('basket'))
                            @foreach(session('basket') as $id => $infos)
                                <?php $totalPerItem = $infos['price'] * $infos['item_qty']

                                ?>

                                <?php $total = $totalPerItem+$total

                                ?>
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ $infos['image'] }}" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">{{ $infos['name'] }}</a>
                        </div>
                        <div class="price-field produtc-price"><p class="price">${{ $infos['price'] }}</p></div>
                        <div class="quantity">
                            <div  class="product-name">
                                <input type="text" class="text-center" name="product-quatity" value="{{$infos['item_qty']}}" data-max="120" pattern="[0-9]*" >

                            </div>

                        </div>

                        <div class="price-field sub-total"><p class="price">${{$totalPerItem}}</p></div>


                        <form action="/removeFromCart/{{$id}}">
                            <button style="margin-top: 20px"  class="btn btn-danger"><i class="fa fa-close"></i></button>
                        </form>

                    </li>

                            @endforeach
                        @endif
<hr>
                </ul>
            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">${{$total}}</b></p>
                    <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">${{$total}}</b></p>
                </div>
                <div class="checkout-info">

                    <a class="btn btn-checkout" href="checkout">Check out</a>
                    <a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>

                <div class="update-clear">
                    <a class="btn btn-clear" href="/clear">Clear Shopping Cart</a>
                    <a class="btn btn-update" href="#">Update Shopping Cart</a>
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









                        </div>
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
    </div><!--end container-->

</main>
<!--main area-->
