	
					<div id="test" class="popup-form">
					  
						<strong class="form-title">Request Consultation</strong>
						<div class="Get-Started-Popup">
						<form method="post">
							<span class="g_success"></span>
								<div class="popup-input">
									<input id="g_name" type="text" name="g_name"  placeholder="Full Name*" value="" >
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<input id="g_cname" type="text" name="g_cname"  placeholder="Company Name*" value="" >
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<input id="g_email" type="email" name="g_email"  placeholder="Work Email*" value="" >
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<input id="g_number" type="number" name="g_number"  placeholder="Phone Number*" value="" >
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<textarea id="g_message"  name="g_message" placeholder="Project Details"></textarea>
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<!--<button class=" btn_color_one" type="submit" name="getquote">Send Request</button>-->
									<button class="btn btn_color_one mt-4 mb-4" style="height:50px; width:200px;" onclick="val_quote()" type="button" name="quote">Submit</button>
									
								</div>
						</form>

					</div>
				</div>
				
	 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

		function val_quote() {
				console.log('i am here');
			 var g_valid = true;
			 console.log(isval_quote());
            if (isval_quote() == true) {
			    var gname = $("#g_name").val();
				var gcname = $("#g_cname").val();
				var gemail = $("#g_email").val();
				var gphone = $("#g_number").val();
				var gmsg = $("#g_message").val();
				var gvalues = {"g_name":gname,"g_cname":gcname,"g_email":gemail,"g_phone":gphone,"g_message":gmsg};
				$.ajax({
				url: "gmail.php",
				type: "post",
				data: gvalues ,
				success: function (response) {
				if(response == 'success'){
				//$(".g_success").html("Thank you for your enquiry. We will revert you soon.");	
				
				$(function() {
						$('#test').delay(2000).fadeOut();
				});
				g_valid = false;
				}
			    
				},
				error: function(jqXHR, textStatus, errorThrown) {
        
			}
			});  			
			}	 		
		} 
	
		function isval_quote() {	
		
		//Initially default values;
            errorMessage = "";
            $(".g_error").html("");
            var g_isValid = true;
            var reg_Name = /^[a-zA-Z ]+$/;
			var reg_email=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var reg_phn = /^\d{10}$/;

            //Validate First name
            if ($("#g_name").val() == "") {
                $("#g_name").siblings(".g_error").html("Please Enter Name")                
                g_isValid = false;
            }
            else {

                if (!reg_Name.test($("#g_name").val())) {
                    $("#g_name").siblings(".g_error").html("Please Enter Valid Name")
                    g_isValid = false;
                }

            }
			if ($("#g_cname").val() == "") {
                $("#g_cname").siblings(".g_error").html("Please Enter Company Name")                
                g_isValid = false;
            }
            else {

                if (!reg_Name.test($("#g_cname").val())) {
                    $("#g_cname").siblings(".g_error").html("Please Enter Valid Company Name")
                    g_isValid = false;
                }

            }
			
			 if ($("#g_email").val() == "") {
                $("#g_email").siblings(".g_error").html("Please Enter email ")                
                g_isValid = false;
            }
			else {

                if (!reg_email.test($("#g_email").val())) {
                    $("#g_email").siblings(".g_error").html("Please Enter Valid email")
                    g_isValid = false;
                }
			}
			 if ($("#g_number").val() == "") {
                $("#g_number").siblings(".g_error").html("Please Enter  phone number")                
                g_isValid = false;
            }
			else {

                if (!reg_phn.test($("#g_number").val())) {
                    $("#g_number").siblings(".g_error").html("Please valid phone number")
                    g_isValid = false;
                }
			}
			
			 if ($("#g_message").val() == "") {
                $("#g_message").siblings(".g_error").html("Please Enter  message")                
                g_isValid = false;
            }
			 //alert("Your form fields are validated. Now you can implement insert logic");
		 return g_isValid;
		 
	}
	
	
</script>