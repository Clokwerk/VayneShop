

<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><span>Admin Panel</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">





                <div class="row">

                    <div class=" main-content-area">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Edit product</h3>
                            <form action="/adminEditProduct" method="POST" name="frm-billing">

                                <p class="row-in-form">
                                    <label for="fname">Product ID<span>*</span></label>
                                    <input id="fname" type="text" name="productID" value="{{$product->id}}" readonly="readonly">
                                </p>
                                <p class="row-in-form">
                                    <label for="fname">Product name<span>*</span></label>
                                    <input id="fname" type="text" name="productName" value="{{$product->name}}" placeholder="Acme cream">
                                </p>
                                <p class="row-in-form">
                                    <label for="lname">Product description<span>*</span></label>
                                    <input id="lname" type="text" name="productDescription" value="{{$product->description}}" placeholder="This is a 100% organic acme cream">
                                </p>
                                <p class="row-in-form">
                                    <label for="productImage">Image URL</label>
                                    <input id="productImage" type="text" name="productImage" value="{{$product->image}}" placeholder="https://5.imimg.com/data5/FU/TU/MY-39280229/kojic-acid-vitamin-c-cream-250x250.jpg">
                                </p>
                                <p class="row-in-form">
                                    <label for="productPrice">Price</label>
                                    <input id="productPrice" type="number" name="productPrice" value="{{$product->price}}" placeholder="100">
                                </p>

                                <p class="row-in-form">
                                    <label for="llname">Category<span>*</span></label>
                                    <input id="llname" type="text" name="category" value="{{$product->category}}" placeholder="Face">
                                </p>
                                <p class="row-in-form">
                                    @if($product->availability == true)
                                    <label for="productAvailability">Available</label>
                                    <input id="productAvailability" type="checkbox" name="productAvailability" value="Available" checked>
                                    @else
                                        <label for="productAvailability">Available</label>
                                        <input id="productAvailability" type="checkbox" name="productAvailability" value="Available">
                                    @endif
                                </p>
                                <button type="submit" value="Submit" style="background-color: red; color: white; width: 100px; height: 35px; font-size: 15px; border-color: white">Submit</button>
                            </form>

                        </div>

                    </div>


                </div><!--end main products area-->



            </div><!--end row-->

        </div><!--end container-->
    </div>
</main>
<!--main area-->



