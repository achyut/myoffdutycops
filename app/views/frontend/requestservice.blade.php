@include('frontend.includes.header')

<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Contact</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ol>
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
                                <h2>Request Service</h2>
                                <span class="center-line"></span>
                                <p>
                                    Would you like to hire a police officer? Please complete the form below!
                                </p> 
                            </div>
                        </div>                   
                    </div><!--center heading row-->
                    <div class="row">
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
                    <!--  <p class="margin30">
                            We are waiting to here from you!
                        </p> -->
                        {{ Form::open(array('route' => 'requestservice','id'=>'sky-form', 'class' => 'form-horizontal sky-form sky-form-columns')) }}
				
				<fieldset>				
					<div class="row">
						<section class="col col-7">
								<label class="input">
									<i class="icon-append fa fa-user"></i>
                                        <input type="text" name="fullname" id="fullname" placeholder="Full Name">
                                        <b class="tooltip tooltip-top-right">Enter your Name</b>
								</label>
						</section>
					</div>
						
					<div class="row">
						<section class="col col-7">
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
								<input type="text" name="company" id="company" placeholder="Company">
								 <b class="tooltip tooltip-top-right">Company</b>
							</label>
						</section>
					</div>
					<div class="row">
						<section class="col col-7">
								<label class="input">
									<i class="icon-append fa fa-envelope-o"></i>
										<input type="email" name="email" id="email" placeholder="Email Address">
										<b class="tooltip tooltip-top-right">Enter Your Email address</b>
								</label>
						</section>
					</div>
					<div class="row">
						<section class="col col-7">
							<label class="input">
								<i class="icon-append fa fa-phone"></i>
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                    <b class="tooltip tooltip-top-right">Enter your phone number</b>
							</label>
						</section>
					</div>
							
					<div id="extracontainer">
						<div class="extracontent">
							
							
							<div class="row">
								<section class="col col-7">
									<label class="input">
										<i class="icon-append fa fa-location-arrow"></i>
											<input type="text" name="location" id="location" placeholder="Location">
											<b class="tooltip tooltip-top-right">Location</b>
									</label>
								</section>	
							</div>
							
							<div class="row">
								<section class="col col-3">
									<label class="input">
										<i class="icon-append fa fa-calendar"></i>
											<input type="date" name="dateandtime" id="dateandtime" placeholder="Date">
											<b class="tooltip tooltip-top-right">Date</b>
									</label>
								</section>
								<section class="col col-2">
									
									<label class="input">
										<i class="icon-append fa fa-clock-o"></i>
											<input type="text"  id="timefrom" placeholder="Time From">
											<b class="tooltip tooltip-top-right">Time From</b>
									</label>
								</section>	
								<section class="col col-2">
									<label class="input">
										<i class="icon-append fa fa-clock-o"></i>
											<input type="text"  id="timeto" placeholder="Time To">
											<b class="tooltip tooltip-top-right">Time To</b>
									</label>
								</section>
								<section class="col col-3">
									<div>
										<a href="#" class="add_another_job"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Another Shift</a>
									</div>
								</section>
							</div>
							
						</div>
					</div>
					
					<div class="row">
						<section class="col col-9">
							<label class="textarea">
								<i class="icon-append fa fa-comment"></i>
								<textarea rows="4" name="request_message" id="request_message" placeholder="Message"></textarea>
								 <b class="tooltip tooltip-top-right">Your message (minimum 10 Characters)</b>
							</label>
						</section>
					</div>
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

				</fieldset>
				
				  
				<footer>
					<button type="submit" class="btn btn-theme-bg btn-lg ">Submit</button>
				</footer>
				
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
				
				$("#extracontainer").on("click",".add_another_job",function(e){
					e.preventDefault();
					var text="<div class=\"extracontent\"> <hr> <br> <div class=\"row\"> <section class=\"col col-3\"> <label class=\"input\"> <i class=\"icon-append fa fa-calendar\"></i> <input type=\"text\" name=\"date\" id=\"date\" placeholder=\"Date\"> <b class=\"tooltip tooltip-top-right\">Date</b> </label> </section> <section class=\"col col-2\"> <label class=\"input\"> <i class=\"icon-append fa fa-clock-o\"></i> <input type=\"text\" name=\"timefrom\" id=\"timefrom\" placeholder=\"Time From\"> <b class=\"tooltip tooltip-top-right\">Time From</b> </label> </section> <section class=\"col col-2\"> <label class=\"input\"> <i class=\"icon-append fa fa-clock-o\"></i> <input type=\"text\" name=\"timeto\" id=\"timeto\" placeholder=\"Time To\"> <b class=\"tooltip tooltip-top-right\">Time To</b> </label> </section> <section class=\"col col-3\"> <div> <a href=\"#\" class=\"add_another_job\"><i class=\"fa fa-plus-circle\"></i>  Add Another Shift</a><br><a href=\"#\" class=\"remove_this_job\" style=\"color:#BD0404\"><i class=\"fa fa-minus-circle\"></i> Remove this Shift</a> </div> </section> </div> <div class=\"row\"></div> </div>";
					$("#extracontainer").append(text);
					
					$("#extracontainer").on("click",".remove_this_job",function(e){
						e.preventDefault();
						$(this).closest('.extracontent').remove();
					});
					
				});
				
				function attach_validation(){
					
				}

				$("#location").geocomplete()
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
		 
		 
