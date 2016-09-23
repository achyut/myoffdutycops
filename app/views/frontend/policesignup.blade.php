	@include('frontend.includes.header')
	<div class="breadcrumb-wrap">
	            <div class="container">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <h4>Police Signup</h4>
	                    </div>
	                </div>
	            </div>
	        </div><!--breadcrumbs-->
	       
	        <div class="divide60"></div>

	        <div class="container">
	            <div class="row">
	                <div class="col-md-10 col-sm-offset-1 margin30 sky-form-columns contact-sky-option">
	                   <div class="row">
	                        <div class="col-md-12">
	                            <div class="center-heading">
	                                <h2>Police Signup</h2>
	                                <span class="center-line"></span>
	                                <p>
	                                    Join our police network and receive notice of service requests in your area!
	                                </p>
	                            </div>
	                        </div>                   
	                    </div><!--center heading row-->
	                   
						<div class="center-heading">
							@if ($errors->any())
					        	<div class="alert alert-danger">
					        	    <ul>
					                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
					                </ul>
					        	</div>
					        @endif
					        @if(Session::has('successmessage'))
							<div class=" alert-info alert">
								{{ Session::get('successmessage') }}
							</div>
							@endif
						</div>
					{{ Form::open(array('route' => 'policesignup','id'=>'sky-form', 'class' => 'form-horizontal sky-form sky-form-columns')) }}

					<fieldset>					
						<div class="row">
							<section class="col col-6">
								
								<label class="input">
									<i class="icon-append fa fa-user"></i>
                                        <input type="text" name="fname" value="{{ Input::old('fname') }}" id="officername" placeholder="First Name">
                                        <b class="tooltip tooltip-top-right">Enter your Firstname</b>
								</label>
							</section>
							<section class="col col-6">
								
								<label class="input">
									<i class="icon-append fa fa-user"></i>
                                        <input type="text" name="lname" value="{{ Input::old('lname') }}" id="officerlastname" placeholder="Last Name">
                                        <b class="tooltip tooltip-top-right">Enter your Lastname</b>
								</label>
							</section>
						</div>

						<div class="row">
							<section class="col col-6">
								
								<label class="input">
									<i class="icon-append fa fa-envelope-o"></i>
                                        <input type="email" name="email" value="{{ Input::old('email') }}" id="email" placeholder="Email Address">
                                        <b class="tooltip tooltip-top-right">Enter Your Email address</b>
								</label>
							</section>
							<section class="col col-6">
								
								<label class="input">
									<i class="icon-append fa fa-phone"></i>
                                        <input type="text" value="{{ Input::old('phone') }}" name="phone" id="phonenumber" placeholder="Phone Number">
                                        <b class="tooltip tooltip-top-right">Enter your phone number</b>
								</label>
							</section>	
						</div>
						
						<section>
							
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
	                                <input type="text" value="{{ Input::old('badgenumber') }}" name="badgenumber" id="badgenumber" placeholder="Badge Number">
	                                 <b class="tooltip tooltip-top-right">Enter your Badge Number</b>
							</label>
						</section>
						
						<section>
							
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
	                                <input type="text" name="policeagency" value="{{ Input::old('policeagency') }}" id="agency" placeholder="Police Agency">
	                                 <b class="tooltip tooltip-top-right">Police Agency</b>
							</label>
						</section>
							
						<section>
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
	                                <input type="text" name="state" value="{{ Input::old('state') }}" id="state" placeholder="State">
	                                 <b class="tooltip tooltip-top-right">Enter your state</b>
							</label>
						</section>
						

						<!-- <section>
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
	                                <input type="text" name="zipcode" id="zipcode" placeholder="Police station zip code">
	                                 <b class="tooltip tooltip-top-right">Enter zip code of your police station</b>
							</label>
						</section>
						 -->

						<!--
												<section>
							
							<label class="textarea">
								<i class="icon-append fa fa-comment"></i>
	                                <textarea rows="4" name="message" id="message" placeholder="Message"></textarea>
	                                 <b class="tooltip tooltip-top-right">Your message (minimum 10 Characters)</b>
							</label>
						</section>
						
						-->
	
					</fieldset>
					<section>
						<label class="checkbox"><input type="checkbox" name="authorization" value="ACCEPTED"><i></i>I authorize My Off Duty Cops to contact my employer for verification of my status as a police officer.</label>
					</section>
					<footer>
						<button type="submit" class="btn btn-theme-bg btn-lg ">Submit</button>
					</footer>
					
				</form>	
	        						
	                </div>

	            </div>
	        </div><!--contact advanced container end-->
	        <div class="divide60"></div>
	        @include('frontend.includes.footer')
