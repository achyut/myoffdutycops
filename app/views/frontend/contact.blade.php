@include('frontend.includes.header')
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Contact</h4>
                    </div>

                    <!-- <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ol>
                    </div>
                     -->
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
                                <h2>Contact us</h2>
                                <span class="center-line"></span>
                                <p>
                                    Questions or concerns? Fill out the form below and we'll be in touch!
                                </p> 
                            </div>
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
									<!-- 
									<div class=" alert-info alert">
										<strong style="font-weight:bold">Thank you for contacting us! </strong>We have received your message and will be responding as soon as possible.
									</div> -->
							</div>
                        </div>                   
                    </div><!--center heading row-->
                    
                    <!--  <p class="margin30">
                            We are waiting to here from you!
                        </p> -->
                        
				{{ Form::open(array('route' => 'contact','id'=>'sky-form', 'class' => 'form-horizontal sky-form sky-form-columns')) }}

				
				<fieldset>					
						<div class="row">
							<section class="col col-6">
								
								<label class="input">
									<i class="icon-append fa fa-user"></i>
                                        <input type="text" name="fname" id="fname" placeholder="First Name">
                                        <b class="tooltip tooltip-top-right">Enter your Firstname</b>
								</label>
							</section>
							<section class="col col-6">
								
								<label class="input">
									<i class="icon-append fa fa-user"></i>
                                        <input type="text" name="lname" id="lname" placeholder="Last Name">
                                        <b class="tooltip tooltip-top-right">Enter your Lastname</b>
								</label>
							</section>
						
						
						</div>
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                    <b class="tooltip tooltip-top-right">Enter Your Email address</b>
							</label>
						</section>
						<section class="col col-6">
							
							<label class="input">
								<i class="icon-append fa fa-phone"></i>
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                    <b class="tooltip tooltip-top-right">Enter your phone number</b>
							</label>
						</section>	
					</div>

					<section>
						
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
                                                        <textarea rows="4" name="contact_message" id="contact_message" placeholder="Message"></textarea>
                                                         <b class="tooltip tooltip-top-right">Your message (minimum 10 Characters)</b>
						</label>
					</section>
					
					
				</fieldset>
				
				<footer>
					<button type="submit" class="btn btn-theme-bg btn-lg ">Submit</button>
				</footer>
				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Your message was successfully sent!</p>
				</div>
			</form>	
        						
                </div>

            </div>
        </div><!--contact advanced container end-->
        <div class="divide60"></div>
        @include('frontend.includes.footer')
