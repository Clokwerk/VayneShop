<main>

    <br>

    <div class="row d-flex justify-content-center">

        <div class="col-12 text-center" ><h1 style="font-family: Roboto">MESSAGES</h1></div>

        <div class="col-md-8 col-lg-6">
            <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                <div class="card-body p-4">

                    @foreach($messages as $m )
                    <div class="card mb-4">
                        <div class="card-body">
                            <p>{{$m->comment}}</p>
                            <hr>
                        </div>
                        <div STYLE="margin-top: -20px" class="container">
                            <div class="row">
                                <div class="col-3">
                                    <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" alt="avatar" width="25"
                                         height="25" />
                                    <p class="small mb-0 ms-2">  {{'  '.$m->name}}</p>

                                </div>

                                <div class="col-3">
                                    <br>
                                    Email: <b>{{$m->email}}</b>
                                </div>
                                <div class="col-3">
                                    <br>
                                    Phone: <b>{{$m->phone}}</b>
                                </div>

                                <div class="col-3">

                                  <a href="/delmessage/{{$m->id}}"> <button style="margin-top: 5px;"  class="btn btn-danger">Delete</button></a>
                                </div>
                            </div></div>
                    </div>


                    @endforeach




                </div>
            </div>
        </div>
    </div>
<br>

</main>
