<?php
include 'db.php';


if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6']) && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9']))
{
	
	$name=$_POST['name'];
	$age=(int) $_POST['age'];
	$q1=$_POST['q1'];
	$q2=$_POST['q2'];
	$q3=$_POST['q3'];
	$q4=$_POST['q4'];
	$q5=$_POST['q5'];
	$q6=$_POST['q6'];
	$q7=$_POST['q7'];
	$q8=$_POST['q8'];
	$q9=$_POST['q9'];
	
    $sql = mysqli_query($conn,"INSERT INTO feedback (name,age,q1,q2,q3,q4,q5,q6,q7,q8,q9) VALUES('".$name."','".$age."','".$q1."','".$q2."','".$q3."','".$q4."','".$q5."','".$q6."','".$q7."','".$q8."','".$q9."')");
    
}

    $data = '';
    $data.='<table class="table table-bordered table-striped table-sm">
				<tr>
				<th>No</th>
								<th>Username</th>
					<th>Age</th>
					<th>Are you pregnant woman?</th>
					 					<th>Does this website help the users obtain further understanding about haemorrhoids?</th>
 					<th>How long did it take you to recover from haemorrhoids after getting the treatment with this website?</th>
			<th>Do you think that this website is essential and beneficial for you?</th>
			<th>Did you ever have the treatment plan from any other websites or clinic about haemorrhoids before using this website? </th>
					<th>What advantage does this website have to use it compared with the others?</th>
					<th>Is this website easy to use and user friendly? </th>
					<th>What other functionalites do you want us to put in this website?</th>
					<th>Do you recommend the other people who have haemorrhoids to use this website?</th>

					
			</tr>';
    $query=mysqli_query($conn,"SELECT * FROM feedback");

    while($row=mysqli_fetch_assoc($query))
    {
        $data.='<tr>
 					<td>'.$row['id'].'</td>
 					<td>'.$row['name'].'</td>
 					<td>'.$row['age'].'</td>
 					<td>'.$row['q1'].'</td>
 					<td>'.$row['q2'].'</td>
					<td>'.$row['q3'].'</td>
					<td>'.$row['q4'].'</td>
					<td>'.$row['q5'].'</td>
					<td>'.$row['q6'].'</td>
					<td>'.$row['q7'].'</td>
					<td>'.$row['q8'].'</td>
					<td>'.$row['q9'].'</td>

					
 				</tr>';
    }
    $data.='</table>';
    echo $data;
?>