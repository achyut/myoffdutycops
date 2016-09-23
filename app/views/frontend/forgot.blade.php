@include('frontend.includes.header')
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Forgot Password</h4>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">  
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
					<div class=" alert-success alert">
						Information to reset your password has been sent to your email. Please check your email to continue.
					</div>
                    <div class="login-form">
                        <h3>Reset Password</span></h3>
                         <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                        </div>         
                        <button type="submit" class="btn btn-theme-bg">Reset Password</button>
                        <a href="login">Login</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divide60"></div>
        @include('frontend.includes.footer')
