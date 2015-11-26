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
      .two, .three, .four{
        position:absolute;
	margin-top:-10px;
	z-index:1;
	height:40px;
	width:40px;
	border-radius:25px;
	
}

.two{
	left:33%;
}
.three{
	left:66%;
}
.four{
	left:100%;
}
.primary-color{
	background-color:#4989bd;
}

.thumbnail a{
    display:block;
    text-align:center;
}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
        $("#panel2").slideUp("slow");
        $("#panel3").slideUp("slow");
        $("#panel4").slideUp("slow");
    });
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
        $("#panel").slideUp("slow");
        $("#panel3").slideUp("slow");
        $("#panel4").slideUp("slow");
    });
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
        $("#panel").slideUp("slow");
        $("#panel2").slideUp("slow");
        $("#panel4").slideUp("slow");
    });
    $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
        $("#panel2").slideUp("slow");
        $("#panel3").slideUp("slow");
        $("#panel").slideUp("slow");
    });
});
</script>
 
<style> 
#panel,#panel2,#panel3,#panel4,#flip,#flip2,#flip3,#flip4 {
    //padding: 50px;
    text-align: justify ;
    //background-color: #e5eecc;
   // border: solid 1px #c3c3c3;
}

#panel,#panel3, #panel2,#panel4 {
    //padding: 0px;
    display: none;
}
</style>
</head>
<body>
    <div class="navbar-header">
        <h1>Please select a payment method</h1><br> <br>
            <ul class="nav navbar-nav navbar-right">
            </ul>  
        
    </div>
    
    
   
           <form name = "payment_method" class="form-horizontal col-md-10 col-md-offset-1" role="form" align = "left" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
    <div class="progress">
        <div class="one primary-color"></div><div class="two primary-color"></div><div class="three primary-color"></div>
        <div class="progress-bar" style="width: 50%;">
            
        </div><br><br>
		</div>
    <div id="flip">
        <img class="img-responsive" src="images/cash.png" height=100px width=100px align="left">
        <br>
    </div>
               <br><br> <br><br>
             <div id ="panel" class="form-group centered">
              <label class="control-label requiredField col-xs-2" for="nic">
               NIC Number
               <span class="asteriskField">
                *
               </span>
              </label>
                <div class="col-xs-4">
                    <input class="form-control" id="name" name="name" type="text"/>
                </div>
                 <div>
       <button class="btn btn-success " name="submit" type="submit" value="Add payment details">
        Continue
       </button>
          
      
      </div>
             </div>
               
               <div id="flip2">
                        <img class="img-responsive" src="images/mobitel.png" height=100px width=100px align="left">   
                        <br>
            </div>           
               <br><br> <br><br>
               <div id ="panel2" class="form-group centered">
                    <label class="control-label requiredField col-xs-10" for="dialog">
                        <p align ="left">
                        Pay Using Dialog eZ Cash<br>
                        Step 1: Dial #111# and select "Send Money" / Send Money with Withdrawal Charges<br>
                        Step 2: Enter PIN<br>
                        Step 3: Enter recipient's 0772331442<br>
                        Step 4: Enter amount<br>
                        Step 5: Confirm transaction<br>
                        Step 6: You will receive a receipt via SMS<br><br>
                        Confirm by entering mobile number
                        </p>
                    </label>
                   <br>
                   
                <div class="col-xs-4">
                    <input class="form-control" id="name" name="name" type="text"/>
                    <br>
       <button class="btn btn-success " name="submit" type="submit" value="Add payment details">
        Continue
       </button>

      </div>
               </div>
              
               
                <div id="flip3">
                  <img class="img-responsive" src="images/banktransfer.gif" height=100px width=100px align="left">   
                     <br>
                </div>           
               <br><br> <br><br>
               <div id ="panel3" class="form-group centered">
                    <label class="control-label requiredField col-xs-10" for="bank">
                        <p align = "left">
                            Bank: Commercial Bank<br>
                        Account Name: YPayMo (PVT) LTD<br>
                        Account No: 1030017077<br>
                        Branch: Foreign Branch<br>
                        <br>
                        Bank: Sampath Bank<br>
                        Account Name: YPayMo (PVT) LTD<br>
                        Account No: 002930022244<br>
                        Branch: Headquarters<br>
                        <br>
                        Bank: Nations Trust Bank PLC<br>
                        Account Name: YPayMo (PVT) LTD<br>
                        Account No: 502100008989<br>
                        Branch: Mount Lavinia Branch<br><br>
                        
                        Confirm by entering your account Number and Bank
                        </p>
                    </label>
                   <div class="col-xs-4">
                       <input class="form-control" id="name" name="name" type="text" placeholder="13001231 - Sampath Bank"/>
                    <br>
       <button class="btn btn-success " name="submit" type="submit" value="Add payment details">
        Continue
       </button>

      </div>
             </div>
            
               <div id="flip4">
                   <img class="img-responsive" src="images/hosted.gif" height=200px width=100px align="left">
        <br>
    </div>
               <br><br>
             <div id ="panel4" class="form-group centered">
              <label class="control-label requiredField col-xs-10" for="nic">
                  <p align ="left" >We are not accepting master cards at the moment. </p>
              </label>
                
                 
             </div>
   
               

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
       </form>
    </body>
</html>
