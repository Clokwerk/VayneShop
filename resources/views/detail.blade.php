

<!--main area-->
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
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
                        <div class="quantity">
                            <span>Quantity:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >

                                <a class="btn btn-reduce" href="#"></a>
                                <a class="btn btn-increase" href="#"></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            <a href="" class="btn add-to-cart">Add to Cart</a>
                        </div>
                    </div>



                        </div>
                    </div>
                </div>
            </div><!--end main products area-->



    <div class="container">
        <div class="row">
            <div style="color:white; font-family: Roboto; background: red; height: 45px; font-size: 25px;" class="col-12 "> RELATED PRODUCTS</div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="row">

            @foreach($sameCategory as $product)
                <div class="col-3">
                    <div class="card border border-secondary ">
                        <img style="height: 250px;" class="card-img-top img-fluid" src="{{$product->image}}" alt="Card image cap">

                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                        </div>
                        <hr>
                        <div class="card-body ">
                            <h4 class="card-title ">Price:  {{$product->price}} den.</h4>

                        </div>
                        <hr>
                        <form action="/productDetail/{{$product->id}}">
                            <div class="card-body  text-center">
                                <button class="btn btn-info" type="submit">Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
<br>
        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->

