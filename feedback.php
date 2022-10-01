<?php
include ('nav2.php'); 
include ('cdn.php');
include ('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8 shadow-sm mt-3 py-3 border">
                <div class="alert alert-success" id="successMsg" style="display:none">
                    <strong>Thanks for your feedback.</strong>
                </div>
				<div class="alert alert-primary">
                  <strong>Your feedback is important to us! Please provide us feedback!</strong>
                </div>
                <input type="hidden" class="id">
                <input type="" placeholder="Username"  class="name form-control mb-2
                    ">
                <input type="" placeholder="How old are you? "  class="age form-control mb-2">
                <input type="" placeholder="Are you pregnant woman?"   class="q1 form-control mb-2">

                <input type="" placeholder="Does this website help the users obtain further understanding about haemorrhoids?"  class="q2 form-control mb-2
                ">
                <input type="" placeholder="How long did it take you to recover from haemorrhoids after getting the treatment with this website?"  class="q3 form-control mb-2">
                <input type="" placeholder="Do you think that this website is essential and beneficial for you?"  class="q4 form-control mb-2">
                <input type="" placeholder="Did you ever have the treatment plan from any other websites or clinic about haemorrhoids before using this website? "  class="q5 form-control mb-2">
                <input type="" placeholder="What advantage does this website have to use it compared with the others? "  class="q6 form-control mb-2">
                <input type="" placeholder="Is this website easy to use and user friendly? "  class="q7 form-control mb-2">
                <input type="" placeholder="What other functionalites do you want us to put in this website? "  class="q8 form-control mb-2">
                <input type="" placeholder="Do you recommend the other people who have haemorrhoids to use this website?"  class="q9 form-control mb-2">
                <button class="btn btn-outline-dark btn-sm ibtn" onclick="insertData()">Insert</button>
                <button class="btn btn-outline-dark btn-sm ubtn" onclick="updateData()" style="display: none;">Update</button>
            
            
        </div>
			
		</div>

		<div class="showArea row mt-3">
			<!-- <table class="table table-bordered table-striped table-sm">
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Email</th>
					<th>Create_Date</th>
					<th>Modified_Date</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr>
					<td>1</td>
					<td>John</td>
					<td>joh@gmail.com</td>
					<td>22.33.21</td>
					<td>23.33.21</td>
					<td><a href="" class="btn btn-outline-danger btn-sm">Edit</td>
					<td><a href="" class="btn btn-outline-warning btn-sm">Delete</td>	
				</tr>
			</table> -->
		</div>
		
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			selectData();
		});
		function insertData()
		{


			var name=$('.name').val();
			var age=$('.age').val();
			var q1=$('.q1').val();
			var q2=$('.q2').val();
			var q3=$('.q3').val();
			var q4=$('.q4').val();
			var q5=$('.q5').val();
			var q6=$('.q6').val();
			var q7=$('.q7').val();
			var q8=$('.q8').val();
			var q9=$('.q9').val();
   
			if(name === "" || age === "" || q1 === "" || q2 === "" || q3 === "" || q4 === "" || q5 === "" || q6 === "" || q7 === "" || q8 === "" || q9 === ""){
			    alert(" Please provide us all information!!");
                return false;
            }
			
			$.ajax({
				url:"action.php",
				type: "POST",
				//data:{name,age,q1,q2,q3,q4,q5,q6,q7,q8,q9},
                data: {"name":name,"age":age,"q1":q1,"q1":q1,"q2":q2,"q3":q3,"q4":q4,"q5":q5,"q6":q6,"q7":q7,"q8":q8,"q9":q9},
				success:function(data)
				{
                    $("#successMsg").show();
                    $('.showArea').html(data);
				}

			});
		}
		 function selectData(){
		 	$.ajax({
				url:"action.php",
				type:"POST",
			data:{select:1},
			success:function(data){
				$('.showArea').html(data);
				}
			});
		 }
		
		
		
		
	</script>

</body>
</html>