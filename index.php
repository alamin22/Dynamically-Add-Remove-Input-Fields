

<!DOCTYPE html>
<html>
<head>
	<title>Dynamically add input fields</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

           $('#button').click(function(){
           	 $('#myTable').append('<tr><td><input class="form-control" type="text" name="skill[]" placeholder="Add Skill"></td><td><button class="btn btn-danger" type="button" id="delete">Delete</button></td></tr>')
           });

          $(document).on('click','#delete',function(){
          	$(this).closest('tr').remove();
          }); 

        $("#submit").click(function(){
        	$.ajax({
        		url:"ajaxPage.php",
        		type:"post",
        		data:$("#myForm").serialize(),
        		success:function(data){
        			$("p").html(data);
        			$("#myForm")[0].reset();
        		}
        	});
        });


		});
	</script>

</head>
<body>
	<center>
	<h3>Add Your Skill</h3>
	<p></p>
	<form id="myForm"  class="form-group">
		<table class="table-bordered" id="myTable">
			<tr>
				<td><input class="form-control" type="text" name="skill[]" placeholder="Add Skill"></td>
				<td><button class="btn btn-success" type="button" id="button">Add More</button></td>
			</tr>

		</table>
			<br><button class="btn btn-primary" type="button" id="submit">Submit</button> 
	</form>
	</center>
</body>
</html>
