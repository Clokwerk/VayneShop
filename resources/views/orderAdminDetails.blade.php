
<style>
    body{background-color: #eeeeee;font-family: 'Open Sans',serif}.container{}.card{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}.track .step.active:before{background: #FF5722}.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}.track .step.active .icon{background: #ee5435;color: #fff}.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}.img-sm{width: 80px;height: 80px;padding: 7px}ul.row, ul.row-sm{list-style: none;padding: 0}.itemside .info{padding-left: 15px;padding-right: 7px}.itemside .title{display: block;margin-bottom: 5px;color: #212529}p{margin-top: 0;margin-bottom: 1rem}.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}
</style>
<!--main area-->
<main id="main" class="main-site">


        <div class="container">
            <article class="card">
                <header class="card-header"> My Orders / Tracking </header>
                <div class="card-body">
                    <h6>Order ID: {{$order->id}}</h6>
                    <article class="card">
                        <div class="card-body row">
                            <div class="col"> <strong>Ordered by :</strong> <br>{{$user->name}} </div>
                            <div class="col"> <strong>Email:</strong> <br>{{$user->email}} </div>
                            <div class="col"> <strong>Total Price:</strong> <br> {{$order->totalPrice}} den. </div>
                            <div  class="col"> <strong>Status :</strong> <br>{{$order->status}} </div>

                        </div>
                    </article>
                    @if($order->status=='WAITING')
                    <div class="track">
                        <div class="step active"> <span class="icon"> <i  class="fa "></i> </span> <span class="text">Waiting for approval</span> </div>
                        <div class="step  "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Order confirmed</span> </div>
                    </div>
                    @else
                        <div class="track">
                            <div class="step active"> <span class="icon"> <i  class="fa "></i> </span> <span class="text">Waiting for approval</span> </div>
                            <div class="step active "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Order confirmed</span> </div>
                        </div>
                        @endif
                    <hr>
                    <ul class="row justify-content-center">
                        <?php
                        $i=0;
                        ?>
                        @foreach($products as $p)
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <div class="aside"><img src="{{$p->image}}" class="img-sm border"></div>
                                <figcaption class="info align-self-center">
                                    <p class="title">{{$p->name}} <br> {{$p->description}}</p> <span class="text-muted">Quantity:{{$quantity[$i]}} </span> <br> <span class="text-muted">{{$p->price}} den. </span>
                                </figcaption>
                            </figure>
                        </li>
                                <?php
                                $i=$i+1;
                                ?>
                        @endforeach


                    </ul>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <a href="/ordersAdmin" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
                            </div>
                            <div class="col-6 ">
                                @if($order->status=="WAITING")
                                <a  href="/order/accept/{{$order->id}}" class="btn btn-success position-absolute top-50 start-50" data-abc="true"> <i class="fa "></i> Accept Order</a>
                                @else
                                    <a disabled="true" href="/order/accept/{{$order->id}}" class="btn btn-success position-absolute top-50 start-50" data-abc="true"> <i class="fa "></i> Accept Order</a>
                                @endif
                            </div>

                        </div>
                    </div>
               </div>
            </article>
        </div>
    </div>




</main>
<!--main area-->


