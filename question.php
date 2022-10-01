<?php
//include('db.php');
include("cdn.php");
include("nav2.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questions</title>
    <style type="text/css">
        h3 {
  -moz-animation-duration: 5s;
  -webkit-animation-duration: 5s;
  -moz-animation-name: slidein-left;
  -webkit-animation-name: slidein-left;
}

@-moz-keyframes slidein-left {
  from {
    margin-left: 100%;
    width: 300%
  }
  to {
    margin-left: 0%;
    width: 100%;
  }
}

@-webkit-keyframes slidein-left {
  from {
    margin-left: 100%;
    width: 300%
  }
  to {
    margin-left: 0%;
    width: 100%;
  }
}

h1 {
  -moz-animation-duration: 5s;
  -webkit-animation-duration: 5s;
  -moz-animation-name: slidein-right;
  -webkit-animation-name: slidein-right;
}

@-moz-keyframes slidein-right {
  from {
    margin-right: 100%;
    width: 300%
  }
  to {
    margin-right: 0%;
    width: 100%;
  }
}

@-webkit-keyframes slidein-right {
  from {
    margin-right: 100%;
    width: 300%
  }
  to {
    margin-right: 0%;
    width: 100%;
  }
}
#form{
    display: none;
}
.bg{
    background-image: url("img/bkg.PNG");
     height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */


}

  

    </style>

</head>
<body>
    <div class="bg">
        <div style="display: flex; align-items: center; justify-content: center;height: 200px;"><button style="background-color: #999966;padding: 20px; color: #ffffb3; border:1px solid white ; border-radius: 50px;
      font-size: 16px;"><h2>Pop Up Questions</h2></button></div>
    </div>
<div class="modal-body" id="form">
	
<h1 style="text-align: center;">Pop up Questions</h2>
<h3 style="color:  #44cc00;">Please answer all the questions!!!</h3>
<form id="target">
<p>1.bright red blood after you poo? </p>
<input type="radio" name="one" value="yes" checked class="mr-1">Yes
<input type="radio" name="one" value="no" class="mr-1">No
<hr>
<p>2.painless bleeding after pooping? </p>
<input type="radio" name="two" value="yes" checked class="mr-1">Yes
<input type="radio" name="two" value="no" class="mr-1">No
<hr>
<p>3.an itchy anus whenever after pooping? </p>
<input type="radio" name="three" value="yes" checked class="mr-1">Yes
<input type="radio" name="three" value="no" class="mr-1">No
<hr>
<p>4.feeling like you still need to poo after going to the toilet? </p>
<input type="radio" name="four" value="yes" checked class="mr-1">Yes
<input type="radio" name="four" value="no" class="mr-1">No
<hr>
<p>5.slimy mucus in your underwear or on toilet paper after wiping your bottom?</p>
<input type="radio" name="five" value="yes" checked class="mr-1">Yes
<input type="radio" name="five" value="no" class="mr-1">No
<hr>
<p>6.lumps around your anus?</p>
<input type="radio" name="six" value="yes" checked class="mr-1">Yes
<input type="radio" name="six" value="no" class="mr-1">No
<hr>
<p>7.pain around your anus?</p>
<input type="radio" name="seven" value="yes" checked class="mr-1">Yes
<input type="radio" name="seven" value="no" class="mr-1">No
<hr>
<p>8.Are you pregnant?</p>
<input type="radio" name="eight" value="yes" checked class="mr-1">Yes
<input type="radio" name="eight" value="no" class="mr-1">No
<hr>
<p>9.Are you older than 60?</p>
<input type="radio" name="nine" value="yes" checked class="mr-1">Yes
<input type="radio" name="nine" value="no" class="mr-1">No
<hr>
<p>10.Do you sit more than 3 hours a day?</p>
<input type="radio" name="ten" value="yes" checked class="mr-1">Yes
<input type="radio" name="ten" value="no" class="mr-1">No
<hr>
<p>11.Do you have constipation problem?</p>
<input type="radio" name="eleven" value="yes" checked class="mr-1">Yes
<input type="radio" name="eleven" value="no" class="mr-1">No
<hr>
<p>12.Don't you eat enough fibres per day?</p>
<input type="radio" name="twelve" value="yes" checked class="mr-1">Yes
<input type="radio" name="twelve" value="no" class="mr-1">No
<hr>

<p><input type="submit" value="Submit"></p>
</form>
<!--<h3>Result:</h3>-->
<!--<iframe name="result" style="height:100px;width:200px;">-->
<!---->
<!--</iframe>-->
</div>
</body>
</html>
<script type="text/javascript">

    $('button').click(function () {
        $('#form').show();
        $('button').hide();
        $('.bg').hide();
    })
    function myFunction() {
        confirm("Press a button!");
    }
    $("#target").submit(function( event ) {
        var two = $("input[name='two']:checked").val();
        var three = $("input[name='three']:checked").val();
        if(two == "yes" && three == "yes") {
            //confirm('Are you sure');
            if (confirm("Your result is internal haemorrhoids.Would you like to see scheduled activities plan?Important information: Scheduled activities plan is a advice of a recommended life-style adjustment which includes adaptation methods in regards to diet and exercise and doesn’t include illegal medicinal practices such as intake of drugs.") == true) {
                $(this).attr("action", 'internal_treatment.php');
            }
        }else {
            if (confirm("Your result is external haemorrhoids.Would you like to see scheduled activities plan?<br>Important information: Scheduled activities plan is a advice of a recommended life-style adjustment which includes adaptation methods in regards to diet and exercise and doesn’t include illegal medicinal practices such as intake of drugs.") == true) {
                $(this).attr("action", 'external_treatment.php');
            }
        }
    });
    function ConfirmDialog(message) {
        $('<div></div>').appendTo('body')
                .html('<div><h6>' + message + '?</h6></div>')
                .dialog({
                    modal: true,
                    title: 'Delete message',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function() {
                            // $(obj).removeAttr('onclick');
                            // $(obj).parents('.Parent').remove();

                            $('body').append('<h1>Confirm Dialog Result: <i>Yes</i></h1>');

                            $(this).dialog("close");
                        },
                        No: function() {
                            $('body').append('<h1>Confirm Dialog Result: <i>No</i></h1>');

                            $(this).dialog("close");
                        }
                    },
                    close: function(event, ui) {
                        $(this).remove();
                    }
                });
    };
</script>