<?php
session_start();
	include("cdn.php");
    include("nav2.php");
    if(!isset($_SESSION['id']))
    {
        header("location:index.php");

    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daily activities schedule for internal hemorrhoids</title>
</head>
<body>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Monday</th>
        <th scope="col">Tuesday</th>
        <th scope="col">Wednesday</th>
        <th scope="col">Thursday</th>
        <th scope="col">Friday</th>
        <th scope="col">Saturday</th>
        <th scope="col">Sunday</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Drink 1 liter of water as soon as you wake up</td>
        <td>Drink 1 liter of water as soon as you wake up</td>
        <td>Drink 1 liter of water as soon as you wake up</td>
        <td>Drink 1 liter of water as soon as you wake up</td>
        <td>Drink 1 liter of water as soon as you wake up</td>
        <td>Drink 1 liter of water as soon as you wake up</td>
        <td>Drink 1 liter of water as soon as you wake up</td>
    </tr>
    <tr>
        <td>Breakfast
            A bowl of milk with oats, muesli (whole oats with dried fruit) or other whole-grain breakfast cereals (whole wheat, oats, barley, rye, brown rice, red rice, black rice).</td>
        <td>Breakfast
            Plain yogurt with oats, nuts and fruits (try to choose 2-3 different options from the following: chia seeds, sunflower seeds, pumpkin seeds, black or white sesame seeds, red, black or English walnuts, almonds, cashews, pistachios, fruits with skin or dried fruits such as prunes, dried figs, apples, pears, kiwifruit, dates, strawberries, cranberries, cherries etc.)</td>
        <td>Breakfast
            2-3 soft boiled eggs with 2-3 slices of whole wheat toast or other whole-grain bread and avocado + tea/fresh juice/water.
        </td>
        <td>Breakfast
            omelette with greens (spinach, kale, lettuce, sorrel, leek, green onions, beet tops, dandelion greens, turnip greens or collard greens) and other vegetables, fresh or integrated into the omelette (tomatoes, zucchini, carrots) + 2 slices of whole-grain toast/bread</td>
        <td>Breakfast
        A bowl of milk with oats, and a favorite topping (examples: walnuts with honey, chia seeds with dried apricots or peaches, almonds with dried apple, or just fresh fruit such as nectarines, strawberries, kiwifruit, peaches etc.)</td>
        <td>Breakfast
        Scrambled eggs with 100-150 g of minced chicken, turkey, beef or pork meat + vegetables (example: grated carrots, fresh tomatoes, bell peppers, cucumbers, radishes, fresh or pickled beets etc.) + 2 slices of whole-grain bread</td>
        <td>Breakfast
        Milk or yogurt with oats or other whole-grain cereals (with whole wheat, oats, barley, rye, brown rice etc.) + a topping of your choice (fresh fruit, dried fruit, seeds, nuts)</td>
    </tr>
    <tr>
        <td>Lunch
        Spinach with peas, seasoned with salt, pepper and fresh olive oil. You can add fresh tomatoes and a few pieces of ham for extra flavor.</td>
        <td>Lunch
        Canned white beans with canned sweet corn (season with salt, fresh olive oil, fresh parsley).</td>
        <td>Lunch
        Feta cheese salad: feta cheese cubes, lettuce, cucumber, tomatoes, onion/green onion/leek, brined olives, almonds, salt, olive oil + 1 can of fish at 100-150 g (tuna, sardines, mackerel, cod etc.) if you’re not feeling satiated</td>
        <td>Lunch
        1 can of tuna with couscous, 1 can of white beans + 1-2 tablespoons of mayonnaise</td>
        <td>Lunch
        Tuna, beans and corn salad from 1 can of tuna, 1 can of beans, half a can of sweet corn + 1-2 tablespoons of mayonnaise + 2 slices of whole-grain bread</td>
        <td>Lunch
        About 100 g of boiled white rice mixed with boiled peas, carrots, green beans and mayonnaise. Alternatively, whole-wheat spaghetti with vegetables, either broccoli, cauliflower, peppers, tomatoes, zucchini, eggplant or a mushroom, parsley and garlic spread</td>
        <td>Lunch
        Roasted canned chickpeas with 1-2 pieces of breaded, fried chicken/beef/pork meat</td>
    </tr>
    <tr>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.2 liter of water</td>
        <td>Drink 0.2 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.2 liter of water</td>
        <td>Drink 0.5 liter of water</td>
    </tr>
    <tr>
        <td>Walk for 10 mins</td>
        <td>Walk for 10 mins</td>
        <td>Walk for 10 mins</td>
        <td>Walk for 10 mins</td>
        <td>Walk for 10 mins</td>
        <td>Walk for 10 mins</td>
        <td>Walk for 10 mins</td>
    </tr>
    <tr>
        <td>Drink 0.2 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.2 liter of water</td>
        <td>Drink 0.2 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.2 liter of water</td>
    </tr>
    <tr>
        <td>Snack
        Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz)</td>
        <td>Snack
        Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz)</td>
        <td>Snack
        Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz)</td>
        <td>Snack
        Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz)</td>
        <td>Snack
        Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz)</td>
        <td>Snack
        Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz)</td>
        <td>Snack
        Nuts, seeds (1-2 oz), fresh fruit (1-2 pieces) or dried fruit of your choice (1 oz)</td>
    </tr>
    <tr>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
    </tr>

    <tr>
        <td>Dinner
        Fish with a vegetable mix of your choice (choose at least 3 vegetables: corn, carrots, zucchini, peppers, eggplant, tomatoes, cauliflower, broccoli, green beans, green peas, beets, radishes, potatoes, celery, celeriac, Brussels sprouts etc.)</td>
        <td>Dinner
        Chicken breast or chicken legs (2-3 pieces) with a big leafy greens salad (Example 1: arugula with cherry tomatoes, olive oil, salt and some lemon juice; Example 2: lettuce, tomato, cucumber, radishes, grated carrot salad, seasoned with salt, olive oil)</td>
        <td>Dinner
        Stew from peas, carrots and 2-3 chicken legs + 2-3 slices of whole-grain bread</td>
        <td>Dinner
        Boiled spinach with boiled potato cubes + 2 pieces of chicken legs (boiled, roasted, baked)</td>
        <td>Dinner
       Stuffed pasta such as Tortellini, Cannelloni, Ravioli stuffed with spinach and ricotta (you can usually buy them at the supermarket and they only require boiling)</td>
        <td>Dinner
        A generous serving of purple cabbage with canned white beans. Basically chop red/purple cabbage and boil until soft, then add a can of drained beans and season with salt, pepper, fresh olive oil</td>
        <td>Dinner
        Canned beans with pumpkin. For me, a good ratio of beans to pumpkin is 4:1 or 4:2. If the pumpkin is fresh, it should cook in about 15 minutes. You can also get it canned</td>
    </tr>
    <tr>
        <td>Walk for 10 mins</td>
        <td>Pelvic floor contraction exercise</td>
        <td>Deep Breathing exercise</td>
        <td>Child’s Pose exercise</td>
        <td>Leg up the wall pose exercise</td>
        <td>Wind-Relieving Pose Exercise</td>
        <td>Bound Angle Pose</td>
    </tr>
    <tr>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
        <td>Drink 0.5 liter of water</td>
    </tr>
    <tr>
        <td>Sleep</td>
        <td>Sleep</td>
        <td>Sleep</td>
        <td>Sleep</td>
        <td>Sleep</td>
        <td>Sleep</td>
        <td>Sleep</td>
    </tr>
    </tbody>
</table>
<div class="alert alert-success" id="successMsg" style="display:none">
    <strong>Mail has been sent.</strong>
</div>
<div class="p-3 mb-2 bg-info text-dark ">
Please click the accept button if you want to receive mail notification for the above schedule.
    <button type="button" id="accept" class="btn btn-primary">Accept</button>
</div>
</body>
</html>
<script type="text/javascript">
    $( "#accept" ).click(function() {
        $.ajax({
            url:"accept.php",
            type: "POST",
            data: {"treatment":"internal"},
            success:function(data)
            {
                                $("#successMsg").show();
                                 $("#successMsg").html(data);
            }

        });
    });
</script>