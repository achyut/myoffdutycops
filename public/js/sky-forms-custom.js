/* 
 Assan v1.3
 Sky forms custom js
 */

$(function()
			{
				
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						fname:
						{
							required: true
						},
						lname:
						{
							required: true
						},
						phone:{
							required:true	
						},
						badgenumber:
						{
							required: true
						},
						policeagency:
						{
							required: true
						},
						state:{
							required: true
						},
						company:{
							required: true
						},
						typeofjob:{
							required: true
						},
						venue:{
							required: true
						},
						location:{
							required: true
						},
						dateandtime:{
							required: true
						},
						authorization:{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						fullname:{
							required:true						
						},
						message:
						{
							required: true,
							minlength: 10
						},
						captcha:
						{
							required: true,
							remote: 'sky-form/captcha/process.php'
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						},
						captcha:
						{
							required: 'Please enter characters',
							remote: 'Correct captcha is required'
						}
					},
						/*				
					// Ajax form submition					
					submitHandler: function(form)
					{
						/*$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
	
					},
	*/				
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
                        
                        
                        
                        
                        
                        
