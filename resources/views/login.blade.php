
<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="login-form form-item form-stl">
                            <form name="frm-login" method="POST" action="{{route('loginCustom')}}">
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Log in to your account</h3>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">Email Address:</label>
                                    <input type="text" id="frm-login-uname" name="email" placeholder="Type your email address">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-pass">Password:</label>
                                    <input type="password" id="frm-login-pass" name="password" placeholder="************">
                                </fieldset>

                                @if($error!=null)
                                    <h3 style="color :red">{{$error}}</h3>
                                @endif
                                <input type="submit" class="btn btn-submit" value="Login" name="submit">
<hr>
                                <div class="text-center"> <b> <a style="color:red" class=" text-center" href="/loginAdminPage" >Login As Admin</a>
                                    </b></div>

                            </form>
                        </div>
                    </div>
                </div><!--end main products area-->
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->



