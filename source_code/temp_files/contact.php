<!--
 * Contact.php
 * Contact Us Page
 * @author     Lewis Mckaig
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<div id = "Form">

	<form action="" method="post">
	
		<div class="form-group col-sm-8 offset-sm-2">
            <label>Your Email:</label>
            <input type="email" name="email" class="form-control rounded" value="" required>
            <span class="help-block"></span>
		</div> 
		<div class="form-group col-sm-8 offset-sm-2">                
			<label>Your Message:</label>
            <textarea name = "message" rows="4" cols="50" value = "" class="form-control rounded"></textarea>
            <span class="help-block"></span>
		</div> 
		<div class="form-group col-sm-8 offset-sm-2">
                <input type="submit" class="btn btn-primary" value="Submit" style ="background-color:#003881">
        </div>
	
	</form>
	
</div>


</body>
</html>