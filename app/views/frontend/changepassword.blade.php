@include('frontend.includes.header')
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>New Password</h4>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container">
			
            <div class="row">  
				<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
					<div class=" alert-success alert">
						Password sucessfully changed!
					</div>
                    <div class="login-form">
                        <h3>New Password</span></h3>
                         <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">New password</label>
                            <input type="password" class="form-control" id="newpassword" placeholder="Enter new password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="btn btn-theme-bg">Submit</button>
                        <a href="login">Login</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divide60"></div>
        @include('frontend.includes.footer')
