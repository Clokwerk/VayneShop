

<!--main area-->
<main id="main" class="main-site center-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Products</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img style="height: 330px; width: 1164px;" src="https://www.beautyandmakeup.co/wp-content/uploads/2020/12/orgonic-cosmetics.jpg"  ></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Products</h1>

                    <div class="wrap-right">

                        <form action="/shop">
                        <div class="sort-item orderby ">
                            <select name="sort" class="use-chosen" >
                                <option href="" value="default" selected="selected">Default sorting</option>
                                <option value="asc">Sort by price: low to high</option>
                                <option value="desc">Sort by price: high to low</option>
                            </select>
                        </div>

                        <div class="sort-item product-per-page">
                            <select name="category" class="use-chosen" >
                                <option value="" selected="selected"></option>
                                <option value="">All</option>
                                <option value="Face">Face</option>
                                <option value="Body">Body</option>
                                <option value="Hair">Hair</option>
                                <option value="Around Eyes">Around Eyes</option>

                            </select>

                            <button type="submit" class="btn btn-danger" style="font-size: 10px; height: 30px; width: 60px; font-size: small">Search</button>
                        </div>

                        </form>


                    </div>

                </div>

                @if($searched!='')
                    <div><h3 class="text-center">Searched: <b>{{$searched}}</b></h3></div>}
                @endif

                <!--end wrap shop control-->
                <br>

                <div class="row">








                            <div class="container">
                                <div class="row">

                                    @foreach($products as $product)
                                    <div class="col-lg3 col-md-3">



                                        <div class="card border border-light rounded-top">
                                            <img style="height: 250px;" class="card-img-top img-fluid rounded" src="{{$product->image}}" alt="Card image cap">

                                            <hr>
                                            <div class="card-body">
                                                <h5 class="card-title">{{$product->name}}</h5>
                                            </div>
                                            <hr>
                                            <div class="card-body ">
                                                <h4 class="card-title ">Price:  {{$product->price}} den.</h4>

                                            </div>
                                            <hr>
                                            <form action="addToCart/{{$product->id}}/1">
                                            <div class="card-body  text-center">
                                                <button class="btn btn-danger" type="submit" style="font-size: 10px; height: 30px; width: 100px; font-size: small">Add To Cart</button>
                                            </div>
                                            </form>

                                            <form action="/productDetail/{{$product->id}}">
                                                <div class="card-body  text-center">
                                                    <button class="btn btn-info" type="submit" style="font-size: 10px; height: 30px; width: 60px; font-size: small">Details</button>
                                                </div>
                                            </form>
                                        </div>





                                    </div>

                                    @endforeach
                                </div>

                            </div>









                </div>


                <br>
                <br>
                <br>
                <br>



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
                </div><!-- brand widget-->

            </div><!--end main products area-->






            <br>
            <br>

            </div><!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
