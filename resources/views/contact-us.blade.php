

<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Contact us</span></li>
            </ul>
        </div>
        <div class="row">
            <div class=" main-content-area">
                <div class="wrap-contacts ">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-form">
                            <h2 class="box-title">Leave a Message</h2>
                            <form action="/comment" method="post" name="frm-contact">

                                <label for="name">Name<span>*</span></label>
                                <input type="text" style="background: lightgrey"  id="name" value="{{$currentUser->name}}" name="name" >

                                <label for="email">Email<span>*</span></label>
                                <input type="text" style="background: lightgrey"   id="email" value="{{$currentUser->email}}" name="email" >.

                                <label for="phone">Number Phone</label>
                                <input type="text" value="" id="phone" name="phone" >

                                <label for="comment">Comment</label>
                                <textarea name="comment" id="comment"></textarea>

                                <input type="submit" name="ok" value="Submit" >

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-info">
                            <div class="wrap-map">
                                <div class="mercado-google-maps"
                                     id="az-google-maps57341d9e51968"
                                     data-hue=""
                                     data-lightness="1"
                                     data-map-style="2"
                                     data-saturation="-100"
                                     data-modify-coloring="false"
                                     data-title_maps="Skopje, Macedonia"
                                     data-phone="075 489 321"
                                     data-email="vaynecosmetics@gmail.com"
                                     data-address="Boulevard Partizanski Odredi 15A, Skopje 1000, Macedonia"
                                     data-longitude="21.424871"
                                     data-latitude="41.997954"
                                     data-pin-icon=""
                                     data-zoom="16"
                                     data-map-type="ROADMAP"
                                     data-map-height="263">
                                </div>
                            </div>
                            <h2 class="box-title">Contact Detail</h2>
                            <div class="wrap-icon-box">

                                <div class="icon-box-item">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Email</b>
                                        <p>vaynecosmetics@gmail.com</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Phone</b>
                                        <p>075 489 321</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->


<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>
</html>
