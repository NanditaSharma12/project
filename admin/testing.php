<?php 

if(isset($_POST['save'])){
	
	

	$pc_content = $_POST['content'];
    $title_name = $_POST['name'];
    
	
   for($i=0; $i<count($pc_content); $i++){
      echo $title_name[$i].'<br>';
	// 	$pc_imagex=$_FILES['pc_image']['name'][$x];
	//  	$imagepc_image[$x]=explode('.',$pc_imagex); //first index is file name and second index file type
	// 	$rand17=rand(10000,99999);
	// 	$newpc_image[$x]=$imagepc_image[$x][0].$rand17.'.'.$imagepc_image[$x][1];
	//     $uploadPathpc_image[$x]="../uploads/".$newpc_image[$x] ;
	// 	$isUploadpc_image[$x]=move_uploaded_file($_FILES["pc_image"]["tmp_name"][$x],$uploadPathpc_image[$x]);
	// 		if($isUploadpc_image[$x]){
	// 			$pc_image[$x] = $uploadPathpc_image[$x];
	// 		}
			
	// echo $sql = "INSERT INTO `inner_service_data`(`service_id`, `title`,`image`, `description`) VALUES ('$service_id','$title[$x]','$pc_image[$x]','$pc_content[$x]')";
	// 	$conn->prepare($sql)->execute();

		}	
	die;
			
	}
    ?>
    <html>
        <body>
<form method="post" >
<div id="appenddatapcx" class="row">
										
                                        <div class="form-group col-md-4 mb-2">
                                         <label for="complaintinput1">Title</label>
                                           <input type="text" name="name[]"  class="form-control round"  placeholder="company name" >
                                        </div>	
										
                                        <div class="form-group col-md-4 mb-2">
                                         <label for="complaintinput1">Image</label>
                                           <input type="file"  name="pc_image[]"  class="form-control round"  placeholder="company name" multiple>
                                        </div>	
                                        <div class="form-group col-md-4 mb-2">
                                         <label for="complaintinput1">Description</label>
                                         <textarea  id="ckeditextaerea2" name="content[]"  class="ckeditor-color"> </textarea>
                                        </div>
                                
                                </div>  

                                <button class="appenddatapc btn btn-primary" type="button">Add More</button>	

							<br><br>
						
							<div class="form-actions">
								<button type="button" class="btn btn-danger mr-1">
									<i class="fa fa-times"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary" name="save">
									<i class="fa fa-check"></i> Save
								</button>
</form>
<script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/editors/editor-ckeditor.min.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

<script>
    $('.ckeditor-color').each(function () {
        CKEDITOR.replace($(this).prop('id'));
    });
</script>
<script>
$(document).ready(function(){

var x = 2; 
var max_fields = 10;
    $(".appenddatapc").on("click",function (e) {
		e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            var editorId = 'editor_' +x;
		$("#appenddatapcx").append('  <div class="form-group col-md-4 mb-2"><label for="complaintinput1">Title</label><input type="text"  name="name[]" id="complaintinput1" class="form-control round"  placeholder="company name" > </div><div class="form-group col-md-4 mb-2"><label for="complaintinput1">Image</label><input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" multiple name="pc_image[]">  </div>	  <div class="form-group col-md-4 mb-2"><label for="complaintinput1">Description</label><textarea  id="'+editorId+'" name="content[]"  class="ckeditor-color"> </textarea></div>');
  
		CKEDITOR.replace(editorId, { height: 200 });
        }
});
});


</script>
        </body>
    </html>