

<!--main area-->
<main id="main" class="main-site">
<br>
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="text-center col-12"><h1>Orders</h1></div>

        @if($succ!=null)
        <div style="color:lawngreen" class="text-center col-12"><b><h1>Successful payment!!!</h1></b> </div>
        @endif

        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">OrderId</th>
                    <th scope="col">TotalPrice</th>

                        <td>Status</td>

                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order )
                <tr class="">
                    <th  scope="row">{{$order->id}}</th>
                    <td>{{$order->totalPrice}} den.</td>
                    @if($order->status=='WAITING')
                        <td style="background: lightsalmon">{{$order->status}}...</td>
                    @else
                        <td style="background: lightgreen">{{$order->status}}!!!</td>
                    @endif                    <td class="text-center"><a href="/order/details/{{$order->id}}"><button  class="btn btn-info">Details</button></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


</div>
<div style="height: 500px;">

</div>
</main>
<!--main area-->


