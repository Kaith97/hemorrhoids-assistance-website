<?php
date_default_timezone_set('Europe/London');
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include 'db.php';
include 'model.php';
require 'vendor/autoload.php';
$robo = 'robot@example.com';
$developmentMode = true;
$result = mysqli_query($conn, "SELECT m.treatment_plan as treatment_plan,m.treatment_time as treatment_time,m.complete,m.user_id as user_id,u.id,u.name as name,u.email as email FROM mail as m JOIN user as u ON m.user_id = u.id WHERE m.complete = false");
while ($row = mysqli_fetch_assoc($result)) {
	$user_id = $row['user_id'];
	$name = $row['name'];
	$email = $row['email'];
	$treatment_plan = $row['treatment_plan'];
	$treatment_time = $row['treatment_time'];
	if($treatment_time < 7){
		$mailer = new PHPMailer($developmentMode);
		
		try {
			//Server settings
			$mailer -> SMTPDebug = 2;                     //Enable verbose debug output
			$mailer->isSMTP();
			if ($developmentMode) {
$mailer->SMTPOptions = [
'ssl'=> [
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
]
];
}
			
			$mailer -> Host = 'smtp.gmass.co';                     //Set the SMTP server to send through
			$mailer -> SMTPAuth = true;                                   //Enable SMTP authentication
			$mailer -> Username = 'gmass';                     //SMTP username
			$mailer -> Password = 'c179fb15-ab2d-4b16-9209-f1de8bc36cd0';                               //SMTP password
			$mailer -> SMTPSecure = 'tls';            //Enable implicit TLS encryption
			$mail -> Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
			
			//Recipients
			$mailer -> setFrom('helo99122@gmail.com', 'Sm Sohag');
			$mailer -> addAddress($email, $name);     //Add a recipient
			
			
			//Content
			$mailer -> isHTML(true);                                  //Set email format to HTML
			$mailer -> Subject = 'Today for Scheduled activities Plan';
			if($treatment_plan == "internal"){
				switch (date("l")) {
					case "Monday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Monday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>A bowl of milk with oats, muesli (whole oats with dried fruit) or other whole-grain breakfast cereals (whole wheat, oats, barley, rye, brown rice, red rice, black rice).</p><br>
						   <p><b>Lunch</b>Spinach with peas, seasoned with salt, pepper and fresh olive oil. You can add fresh tomatoes and a few pieces of ham for extra flavor.</p><br>
						   <p>Drink 0.5 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.2 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Dinner</b>Fish with a vegetable mix of your choice (choose at least 3 vegetables: corn, carrots, zucchini, peppers, eggplant, tomatoes, cauliflower, broccoli, green beans, green peas, beets, radishes, potatoes, celery, celeriac, Brussels sprouts etc.)</p><br>
						   <p><b>Walk for 10 mins</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
					case "Tuesday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Tuesday</title>
						</head>
						<body>
						    <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>Plain yogurt with oats, nuts and fruits (try to choose 2-3 different options from the following: chia seeds, sunflower seeds, pumpkin seeds, black or white sesame seeds, red, black or English walnuts, almonds, cashews, pistachios, fruits with skin or dried fruits such as prunes, dried figs, apples, pears, kiwifruit, dates, strawberries, cranberries, cherries etc.)</p><br>
						   <p><b>Lunch</b>Canned white beans with canned sweet corn (season with salt, fresh olive oil, fresh parsley)</p><br>
						   <p>Drink 0.2 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.5 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
					
						   <p><b>Dinner</b>Chicken breast or chicken legs (2-3 pieces) with a big leafy greens salad (Example 1: arugula with cherry tomatoes, olive oil, salt and some lemon juice; Example 2: lettuce, tomato, cucumber, radishes, grated carrot salad, seasoned with salt, olive oil)</p><br>
						   <p><b>Pelvic floor contraction exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
					case "Wednesday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Wednesday</title>
						</head>
						<body>
						    <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>2-3 soft boiled eggs with 2-3 slices of whole wheat toast or other whole-grain bread and avocado + tea/fresh juice/water</p><br>
						   <p><b>Lunch</b>Feta cheese salad: feta cheese cubes, lettuce, cucumber, tomatoes, onion/green onion/leek, brined olives, almonds, salt, olive oil + 1 can of fish at 100-150 g (tuna, sardines, mackerel, cod etc.) if you’re not feeling satiated</p><br>
						   <p>Drink 0.2 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.5 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   
						   <p><b>Dinner</b>Stew from peas, carrots and 2-3 chicken legs + 2-3 slices of whole-grain bread</p><br>
						   <p><b>Deep Breathing exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
					case "Thursday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Thursday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>omelette with greens (spinach, kale, lettuce, sorrel, leek, green onions, beet tops, dandelion greens, turnip greens or collard greens) and other vegetables, fresh or integrated into the omelette (tomatoes, zucchini, carrots) + 2 slices of whole-grain toast/bread</p><br>
						    <p><b>Lunch</b>1 can of tuna with couscous, 1 can of white beans + 1-2 tablespoons of mayonnaise</p><br>
						   <p>Drink 0.5 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.2 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						  
						   <p><b>Dinner</b>Boiled spinach with boiled potato cubes + 2 pieces of chicken legs (boiled, roasted, baked)</p><br>
						   <p><b>Child’s Pose exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
					case "Friday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Friday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>A bowl of milk with oats, and a favorite topping (examples: walnuts with honey, chia seeds with dried apricots or peaches, almonds with dried apple, or just fresh fruit such as nectarines, strawberries, kiwifruit, peaches etc.)</p><br>
						    <p><b>Lunch</b>Tuna, beans and corn salad from 1 can of tuna, 1 can of beans, half a can of sweet corn + 1-2 tablespoons of mayonnaise + 2 slices of whole-grain bread</p><br>
						   <p>Drink 0.5 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.2 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						  
						   <p><b>Dinner</b>Stuffed pasta such as Tortellini, Cannelloni, Ravioli stuffed with spinach and ricotta (you can usually buy them at the supermarket and they only require boiling)</p><br>
						   <p><b>Leg up the wall pose exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
					case "Saturday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Saturday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>Scrambled eggs with 100-150 g of minced chicken, turkey, beef or pork meat + vegetables (example: grated carrots, fresh tomatoes, bell peppers, cucumbers, radishes, fresh or pickled beets etc.) + 2 slices of whole-grain bread</p><br>
						    <p><b>Lunch</b>About 100 g of boiled white rice mixed with boiled peas, carrots, green beans and mayonnaise. Alternatively, whole-wheat spaghetti with vegetables, either broccoli, cauliflower, peppers, tomatoes, zucchini, eggplant or a mushroom, parsley and garlic spread</p><br>
						   <p>Drink 0.2 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.5 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   
						   <p><b>Dinner</b>A generous serving of purple cabbage with canned white beans. Basically chop red/purple cabbage and boil until soft, then add a can of drained beans and season with salt, pepper, fresh olive oil</p><br>
						   <p><b>Wind-Relieving Pose Exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
					case "Sunday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Sunday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>Milk or yogurt with oats or other whole-grain cereals (with whole wheat, oats, barley, rye, brown rice etc.) + a topping of your choice (fresh fruit, dried fruit, seeds, nuts)</p><br>
						    <p><b>Lunch</b>Roasted canned chickpeas with 1-2 pieces of breaded, fried chicken/beef/pork meat</p><br>
						   <p>Drink 0.5 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.2 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						  
						   <p><b>Dinner</b>Canned beans with pumpkin. For me, a good ratio of beans to pumpkin is 4:1 or 4:2. If the pumpkin is fresh, it should cook in about 15 minutes. You can also get it canned</p><br>
						   <p><b>Bound Angle Pose</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
				}
			}
			if($treatment_plan === "external"){
				switch (date("l")) {
					case "Monday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Monday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>A bowl of milk with oats, muesli (whole oats with dried fruit) or other whole-grain breakfast cereals (whole wheat, oats, barley, rye, brown rice, red rice, black rice).</p><br>
						   <p><b>Lunch</b>Spinach with peas, seasoned with salt, pepper and fresh olive oil. You can add fresh tomatoes and a few pieces of ham for extra flavor.</p><br>
						   <p>Drink 0.5 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.2 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Dinner</b>Fish with a vegetable mix of your choice (choose at least 3 vegetables: corn, carrots, zucchini, peppers, eggplant, tomatoes, cauliflower, broccoli, green beans, green peas, beets, radishes, potatoes, celery, celeriac, Brussels sprouts etc.)</p><br>
						   <p><b>Walk for 10 mins</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
					case "Tuesday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Tuesday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>Plain yogurt with oats, nuts and fruits (try to choose 2-3 different options from the following: chia seeds, sunflower seeds, pumpkin seeds, black or white sesame seeds, red, black or English walnuts, almonds, cashews, pistachios, fruits with skin or dried fruits such as prunes, dried figs, apples, pears, kiwifruit, dates, strawberries, cranberries, cherries etc.)</p><br>
						   <p><b>Lunch</b>Canned white beans with canned sweet corn (season with salt, fresh olive oil, fresh parsley)</p><br>
						   <p>Drink 0.2 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.5 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p>Sitz Bath</p><br>
						   <p><b>Dinner</b>Chicken breast or chicken legs (2-3 pieces) with a big leafy greens salad (Example 1: arugula with cherry tomatoes, olive oil, salt and some lemon juice; Example 2: lettuce, tomato, cucumber, radishes, grated carrot salad, seasoned with salt, olive oil)</p><br>
						   <p><b>Pelvic floor contraction exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>
						';
						break;
					case "Wednesday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Wednesday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>2-3 soft boiled eggs with 2-3 slices of whole wheat toast or other whole-grain bread and avocado + tea/fresh juice/water</p><br>
						   <p><b>Lunch</b>Feta cheese salad: feta cheese cubes, lettuce, cucumber, tomatoes, onion/green onion/leek, brined olives, almonds, salt, olive oil + 1 can of fish at 100-150 g (tuna, sardines, mackerel, cod etc.) if you’re not feeling satiated</p><br>
						   <p>Drink 0.2 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.5 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p>Sitz Bath</p><br>
						   <p><b>Dinner</b>Stew from peas, carrots and 2-3 chicken legs + 2-3 slices of whole-grain bread</p><br>
						   <p><b>Deep Breathing exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>';
						break;
					case "Thursday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Thursday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>omelette with greens (spinach, kale, lettuce, sorrel, leek, green onions, beet tops, dandelion greens, turnip greens or collard greens) and other vegetables, fresh or integrated into the omelette (tomatoes, zucchini, carrots) + 2 slices of whole-grain toast/bread</p><br>
						    <p><b>Lunch</b>1 can of tuna with couscous, 1 can of white beans + 1-2 tablespoons of mayonnaise</p><br>
						   <p>Drink 0.5 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.2 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p>Sitz Bath</p><br>
						   <p><b>Dinner</b>Boiled spinach with boiled potato cubes + 2 pieces of chicken legs (boiled, roasted, baked)</p><br>
						   <p><b>Child’s Pose exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>';
						break;
					case "Friday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Friday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>A bowl of milk with oats, and a favorite topping (examples: walnuts with honey, chia seeds with dried apricots or peaches, almonds with dried apple, or just fresh fruit such as nectarines, strawberries, kiwifruit, peaches etc.)</p><br>
						    <p><b>Lunch</b>Tuna, beans and corn salad from 1 can of tuna, 1 can of beans, half a can of sweet corn + 1-2 tablespoons of mayonnaise + 2 slices of whole-grain bread</p><br>
						   <p>Drink 0.5 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.2 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p>Sitz Bath</p><br>
						   <p><b>Dinner</b>Stuffed pasta such as Tortellini, Cannelloni, Ravioli stuffed with spinach and ricotta (you can usually buy them at the supermarket and they only require boiling)</p><br>
						   <p><b>Leg up the wall pose exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>';
						break;
					case "Saturday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Saturday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>Scrambled eggs with 100-150 g of minced chicken, turkey, beef or pork meat + vegetables (example: grated carrots, fresh tomatoes, bell peppers, cucumbers, radishes, fresh or pickled beets etc.) + 2 slices of whole-grain bread</p><br>
						    <p><b>Lunch</b>About 100 g of boiled white rice mixed with boiled peas, carrots, green beans and mayonnaise. Alternatively, whole-wheat spaghetti with vegetables, either broccoli, cauliflower, peppers, tomatoes, zucchini, eggplant or a mushroom, parsley and garlic spread</p><br>
						   <p>Drink 0.2 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.5 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p>Sitz Bath</p><br>
						   <p><b>Dinner</b>A generous serving of purple cabbage with canned white beans. Basically chop red/purple cabbage and boil until soft, then add a can of drained beans and season with salt, pepper, fresh olive oil</p><br>
						   <p><b>Wind-Relieving Pose Exercise</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>';
						break;
					case "Sunday":
						$mailer -> Body = '
						<html>
						<head>
						   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						   <title>Sunday</title>
						</head>
						<body>
						   <p><b>Drink 1 liter of water</b> as soon as you wake up</p><br>
						   <p><b>Breakfast</b>Milk or yogurt with oats or other whole-grain cereals (with whole wheat, oats, barley, rye, brown rice etc.) + a topping of your choice (fresh fruit, dried fruit, seeds, nuts)</p><br>
						    <p><b>Lunch</b>Roasted canned chickpeas with 1-2 pieces of breaded, fried chicken/beef/pork meat</p><br>
						   <p>Drink 0.5 liter of water</p><br>
						   <p>Walk for 10 mins</p><br>
						   <p>0.2 liter of water</p><br>
						   <p><b>Snack</b>Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz).</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p>Sitz Bath</p><br>
						   <p><b>Dinner</b>Canned beans with pumpkin. For me, a good ratio of beans to pumpkin is 4:1 or 4:2. If the pumpkin is fresh, it should cook in about 15 minutes. You can also get it canned</p><br>
						   <p><b>Bound Angle Pose</p><br>
						   <p><b>0.5 liter of water</p><br>
						   <p><b>Sleep</p><br>
						</body>
						</html>';
						break;
				}
			}
			
			$mailer -> send();
			
			++$treatment_time;
			if($treatment_time === 7){
				$sql = mysqli_query($conn,"UPDATE mail SET treatment_time = '".$treatment_time."',complete = '1' WHERE user_id = '".$user_id."'");
				
				$mailer = new PHPMailer($developmentMode);
				$mailer -> SMTPDebug = 2;                      //Enable verbose debug output
				
				$mailer -> Host = 'smtp.gmass.co';                     //Set the SMTP server to send through
				$mailer -> SMTPAuth = true;                                   //Enable SMTP authentication
				$mailer -> Username = 'gmass';                     //SMTP username
				$mailer -> Password = 'c179fb15-ab2d-4b16-9209-f1de8bc36cd0';                               //SMTP password
				$mailer -> SMTPSecure = 'tls';            //Enable implicit TLS encryption
				$mailer -> Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
				
				//Recipients
				$mailer -> setFrom('helo99122@gmail.com', 'Sm Sohag');
				$mailer -> addAddress($email, $name);     //Add a recipient
				
				
				//Content
				$mailer -> isHTML(true);                                  //Set email format to HTML
				$mailer -> Subject = 'Scheduled plan Completed';
				$mailer -> Body = 'Have you fully recovered after one week scheduled home remedy plan? <br> If no, I recommend you to continue following this plan for one more week!! <br> If yes, Please give us feedback about your experience of using this website.';
				$mailer -> send();
				
			}else{
				$sql = mysqli_query($conn,"UPDATE mail SET treatment_time = '".$treatment_time."' WHERE user_id = '".$user_id."'");
			}
			
			echo json_encode('Message has been sent');
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mailer->ErrorInfo}";
		}
	}
}

?>
<script type="text/javascript">
	$('.mbtn').click(function())
	{
		var to=$(this).attr('to');
		$(.'to').val(to);
	}
</script>
