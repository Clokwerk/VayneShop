

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border: 1px solid #212529;
            width: 1200px;
            position: relative;
        }
        td, th {

            text-align: left;
            font-size: small;
            padding: 15px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><span>Admin Panel</span></li>
            </ul>
            <form action="/adminNewProductPage">
                <button class="btn btn-submit" type="submit" style="font-size: 10px; height: 30px; width: 150px; font-size: small; background-color: #00CA00"><b style="color: white">ADD NEW PRODUCT</b></button>
            </form>
            <br>
        </div>


        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">





                <div class="row">

                    <table c>
                        <tr>
                            <th>Product Image</th>
                            <th >Product Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Category</th>
                        </tr>

                        @foreach($products as $product)

                            <tr>
                                <td style="border: 1px solid #212529; width: 100px;height: 30px"><img src="{{$product->image}}"</td>
                                <td style="border: 1px solid #212529">{{$product->name}}</td>
                                <td style="border: 1px solid #212529">{{$product->price}} den.</td>
                                <td style="border: 1px solid #212529">{{$product->description}}</td>
                                <td style="border: 1px solid #212529">{{$product->category}}</td>
                                <td style="border: 1px solid #212529">
                                <form action="/adminEditProductPage/{{$product->id}}">
                                        <button class="btn btn-info" type="submit" style="font-size: 10px; height: 30px; width: 85px; font-size: small">Edit product</button>
                                </form>
<br>
                                    <form action="/adminDeleteProduct/{{$product->id}}">
                                        <button class="btn btn-danger" type="submit" style="font-size: 10px; height: 30px; width: 100px; font-size: small">Delete product</button>
                                    </form>
                                </td>

                            </tr>
                       @endforeach



                    </table>



                </div>



            </div><!--end main products area-->



        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->

