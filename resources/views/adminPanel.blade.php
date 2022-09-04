

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
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
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">





                <div class="row">

                    <table>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Actions</th>
                        </tr>



                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td><a href="/adminEditProductPage/{{$product->id}}" title="Edit product">Edit product</a>
                                    <a href="/adminDeleteProduct/{{$product->id}}" title="Delete product">Delete product</a>
                                </td>
                            </tr>





                        @endforeach



                    </table>
                   <a title="New product" href="adminNewProductPage">New product</a>

                </div>


            </div><!--end main products area-->



        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->

