<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>lead form</title>
</head>
<body>
 
    <div class="container-fluid"></div>
<form method="post" action="<?= $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" class="col-md-6">
<div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="enter name">
    <span class="error"></span>
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <span class="error"></span>
  </div>
  <div class="form-group">
    <label for="">phone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="">
    <span class="error"></span>
  </div>
  <div class="form-group">
    <label for="">service</label>
    <input type="text" class="form-control" id="service" name="service" placeholder="">
    <span class="error"></span>
  </div>
  <div class="form-group">
    <label for="">messages</label>
    <input type="text" class="form-control" id="message" name="message" placeholder="">
    <span class="error"></span>
  </div>
  <br>
  <button type="button" name="submit" onclick="validateForm()" class="btn btn-primary">Submit</button>
</form>
</div>

    
<script src = "https://code.jquery.com/jquery-2.1.1.min.js" type = "text/javascript" > </script> 
<script type="text/javascript">
function validateForm() {
    var valid = true;
    if (isFormValid()) {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var service = $("#service").val();
        var msg = $("#message").val();
       
        var values = { "name": name, "email": email, "phone": phone, "service": service, "message": msg };

        $.ajax({
            url: "lead.php",
            type: "post",
            data: values,
            success: function(response) {
                // $(".success").html("Thank you for your enquiry. We will revert you soon.");
               // window.location.href = "lead.php";
                valid = false;
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                console.log(res);
                // alert("Your form fields are validated. Now you can implement insert logic");
            }
        });
    }
}

function isFormValid() {

    //Initially default values;
    errorMessage = "";
    $(".error").html("");
    var isValid = true;
    var regName = /^[a-zA-Z ]+$/;
    var regemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var regphn = /^\d{10}$/;
    //Validate First name
    if ($("#name").val() == "") {
        $("#name").siblings(".error").html("Please Enter Name")
        isValid = false;
    } else {
        if (!regName.test($("#name").val())) {
            $("#name").siblings(".error").html("Please Enter Valid Name")
            isValid = false;
        }
    }

    if ($("#email").val() == "") {
        $("#email").siblings(".error").html("Please Enter email ")
        isValid = false;
    } else {
        if (!regemail.test($("#email").val())) {
            $("#email").siblings(".error").html("Please Enter Valid email")
            isValid = false;
        }
    }
    if ($("#phone").val() == "") {
        $("#phone").siblings(".error").html("Please Enter  phone number")
        isValid = false;
    } else {
        if (!regphn.test($("#phone").val())) {
            $("#phone").siblings(".error").html("Please valid phone number")
            isValid = false;
        }
    }

    if ($("#service").val() == "") {
        $("#service").siblings(".error").html("Please Enter  service")
        isValid = false;
    }

    if ($("#message").val() == "") {
        $("#message").siblings(".error").html("Please Enter  message")
        isValid = false;
    }


    return isValid;
}
</script>
</body>
</html>
