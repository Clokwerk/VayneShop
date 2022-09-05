

<!--main area-->
<main id="main" class="main-site">

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="text-center col-12"><h1>Orders</h1></div>
        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">OrderId</th>
                    <th scope="col">TotalPrice</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order )
                <tr class="">
                    <th  scope="row">{{$order->id}}</th>
                    <td>{{$order->totalPrice}} den.</td>
                    <td>{{$order->status}}</td>
                    <td class="text-center"><a href="/order/details/{{$order->id}}"><button  class="btn btn-info">Details</button></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


</div>

</main>
<!--main area-->


