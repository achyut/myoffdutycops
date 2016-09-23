@include('frontend.includes.header')
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Login</h4>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">  
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
					<!-- <div class=" alert-success alert">
						Password sucessfully changed! Login to continue.
					</div>
                     --> @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                            </ul>
                      </div>
                    @endif

                    
                    <div class="login-form">
                        <h3>Log In</span></h3>
                         {{ Form::open(array('url' => 'login')) }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                           <!--  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required> -->
                        {{ Form::text('email', Input::old('email'), array('placeholder' => 'Enter email', 'required'=>'true','class'=>'form-control')) }}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                        
                        {{ Form::input('password','password',Input::old('password'), array('placeholder' => 'Enter password', 'required'=>'true','class'=>'form-control')) }}

                           <!--  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required> -->
                        </div>                   
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-theme-bg">Login</button>
                        <a href="forgot">Forget Password?</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divide60"></div>
        @include('frontend.includes.footer')
