<!--main area-->
<main id="main" class="main-site">
    <br>
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
                            @if($order->status=='WAITING')
                            <td style="background: lightsalmon">{{$order->status}}...</td>
                            @else
                                <td style="background: lightgreen">{{$order->status}}!!!</td>
                            @endif

                            @if($order->status=="WAITING")
                            <td class="text-center"><a href="/order/accept/{{$order->id}}"><button  class="btn btn-success">Accept</button></a>
                                @else
                                <td class="text-center"><a href="/order/accept/{{$order->id}}"><button disabled="true"  class="btn btn-success">Accept</button></a>
                                  @endif

                            <a href="/order/detailsAdmin/{{$order->id}}"><button  class="btn btn-info">Details</button></a></td>

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


