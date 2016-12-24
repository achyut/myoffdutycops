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
							
						<!-- <section>
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
	                                <input type="text" name="state" value="{{ Input::old('state') }}" id="state" placeholder="State">
	                                 <b class="tooltip tooltip-top-right">Enter your state</b>
							</label>
						</section> -->
						

						<div class="row">
							<section class="col col-6">
								
								<label class="input">
									<i class="icon-append fa fa-tag"></i>
                                        <input type="text" name="zipcode" value="{{ Input::old('zipcode') }}" id="zipcode" placeholder="Your Zip Code ( you can give only zipcode)">
                                        <b class="tooltip tooltip-top-right">Enter your zip code (Only zipcode is enough)</b>
								</label>
							</section>
							<section class="col col-6">
								
								<label class="input">
									<i class="icon-append fa fa-road"></i>
                                        <input type="number" name="distance" value="{{ Input::old('distance') }}" id="distance" placeholder="Distance you can travel. In miles. (eg. 100)" autocomplete="false">

                                        <b class="tooltip tooltip-top-right">Distance you can travel in miles.</b>
								</label>
							</section>
						</div>

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
					
					<input type="hidden" name="street_number" id="street_number" />
			      <input type="hidden" name="route" id="route" />
			      <input type="hidden" name="locality" id="locality" />
			      <input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" />
			      <input type="hidden" name="administrative_area_level_2" id="administrative_area_level_2" />
			      <input type="hidden" name="postal_code" id="postal_code" />
			      <input type="hidden" name="country" id="country" />
			      <input type="hidden" name="postal_code_suffix" id="postal_code_suffix" />
			      <input type="hidden" name="latitude" id="latitude" />
			      <input type="hidden" name="longitude" id="longitude" /> 

				</form>	
	        						
	                </div>

	            </div>
	        </div><!--contact advanced container end-->
	        <div class="divide60"></div>
	        @section('page-js')
       <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD1F13nPmWEVl3hWQtfTgPv272QEr6kR2w&libraries=places"></script>
       <script src="{{ asset('js/jquery.geocomplete.min.js') }}"></script> 
        <script>
        $(document).ready(function(){
		
				$("#zipcode").geocomplete()
		          .bind("geocode:result", function(event, result){
		          	//console.log(result);
		          	fillInAddress(result);
		            //console.log("Result: " + result.adr_address);
		          })
		          .bind("geocode:error", function(event, status){
		            console.log("ERROR: " + status);
		          })
		          .bind("geocode:multiple", function(event, results){
		            console.log("Multiple: " + results.length + " results found");
		          });

				var componentForm = {
		          street_number: 'short_name',
		          route: 'long_name',
		          locality: 'long_name',
		          administrative_area_level_1: 'short_name',
				  administrative_area_level_2: 'short_name',
		          country: 'long_name',
		          postal_code: 'short_name',
		          postal_code_suffix: 'short_name',

		        };

		        function fillInAddress(place) {
		          // Get the place details from the autocomplete object.
		         // var place = autocomplete.getPlace();
		         
		          for (var component in componentForm) {
		            document.getElementById(component).value = '';
		            //document.getElementById(component).disabled = false;
		          }
				  // Get each component of the address from the place details
		          // and fill the corresponding field on the form.
		          for (var i = 0; i < place.address_components.length; i++) {
		            var addressType = place.address_components[i].types[0];
		            if (componentForm[addressType]) {
		              var val = place.address_components[i][componentForm[addressType]];
		              document.getElementById(addressType).value = val;
		            }
		          }

		          var latitude = place.geometry.location.lat();
			      var longitude = place.geometry.location.lng();
			      $("input#latitude").val(latitude);
			      $("input#longitude").val(longitude);
		        }

				
				
		});
        </script>
		@endsection

	        @include('frontend.includes.footer')
