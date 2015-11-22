<!DOCTYPE html>
<html lang="en">
<head>
  <title>YPayMo-Shop Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  
  <script src="jquery/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
      .one, .two, .three, .four{
        position:absolute;
	margin-top:-10px;
	z-index:1;
	height:40px;
	width:40px;
	border-radius:25px;
	
}
.one{
	left:25%;
}
.two{
	left:50%;
}
.three{
	left:75%;
}
.four{
	left:100%;
}
.primary-color{
	background-color:#4989bd;
}



  </style>
</head>
	
<body>
    <?php
                require_once("mysqli_connect.php");
		$firstnameErr = $lastnameErr = $emailErr = $addressErr = $numberErr= $codeErr="";
  		$firstname = $lastname = $email = $address = $number = $code ="";
                
  		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["firstname"])) {
				$firstnameErr = "First name cannot be empty";
				
			} else {
				$firstname = test_input($_POST["firstname"]);
				
			}

			if (empty($_POST["lastname"])) {
				$lastnameErr = "Last name cannot be empty";
				
			} else {
				$lastname = test_input($_POST["lastname"]);
				
			}
                        
                        if (empty($_POST["email"])) {
				$emailErr = "Email name cannot be empty";
				
			} else {
				$email = test_input($_POST["email"]);
				
			}
                        
			if (empty($_POST["number"])) {
				$numberErr = "Phone number cannot be empty";
				
			} elseif (is_float($_POST["number"]) || is_int($_POST["number"])) {
				$numberErr = "Number is not valid";
				
			} else {
				$number = test_input($_POST["number"]);
				
			}
                        
                        if (empty($_POST["address"])) {
				$addressErr = "Address cannot be empty";
				
			} else {
				$address = test_input($_POST["address"]);
				
			}

			if (empty($_POST["code"])) {
				$codeErr = "Postal code cannot be empty";
				
			} elseif (!ctype_digit($_POST["code"])) {
				$codeErr = "Postal code not valid";
				
			} else {
				$code = test_input($_POST["code"]);
				
			}
                        
				$query = "insert into invoice 
					(firstname, lastname, email, number, address, code) 
					values ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['number']."','".$_POST['address']."','".$_POST['code']."')";
                                if (mysqli_query($dbconn, $query)) {
                                    $firstname = $lastname = $email = $address = $number = $code ="";
				} else {
				    echo "Error: " . $query . "<br>" . mysqli_error($dbconn);
				}

				mysqli_close($dbconn);
                    }
                            ?>
    <div class="navbar-header">
        <h1>Payment information</h1>
            <ul class="nav navbar-nav navbar-right"><img src="images/onepage_header.png" height=100px width=500px align="justify">
            </ul>
        </div>
    

<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

	
                    
<div class="bootstrap-iso">
 <div class="container-fluid">
     <div class="row"><br />
		<div class="col-md-12">
    	<div class="progress">
        <div class="one primary-color"></div><div class="two primary-color"></div><div class="three primary-color"></div>
        <div class="progress-bar" style="width: 25%;">
            
        </div>
		</div>
                    
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="form-group "  >
      <label class="control-label requiredField" for="name">
       First Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="name" name="firstname" type="text"  />
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="name1">
       Last Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="lastname" name="lastname" type="text"  />
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email Address
       <span class="asteriskField">
        *
       </span>
      </label>
            <input class="form-control" id="email" name="email" type="text"  />

     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="tel">
       Telephone
       <span class="asteriskField">
        *
       </span>
      </label>
         
         <input class="form-control" id="tel" name="number" size="10" type="text" />
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="text">
       Shipping Address
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control " id="text" name="address" type="text" />
      <span class="help-block" id="hint_text">
       No 107, Reid Avenue, Colombo 07
      </span>
      <span>
      Outside of Colombo 1 to 15 Fixed Rs. 300.00 will be charged
      </span>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="code">
       Postal Code
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="code" name="code" type="text" />
     </div>
     
      <div>
       <button class="btn btn-success " name="submit" type="submit" value="Add payment details">
        Continue
       </button>
          
      
      </div></form>
   </div>
  </div>
    </div>
 </div>
</div>
     
</body>
</html>