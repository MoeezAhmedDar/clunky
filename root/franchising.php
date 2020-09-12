<!DOCTYPE html>
<html>
<head>
	<title>Franchising</title>
	<link rel="icon" href="../assets/images/footer-logo.png" type="image/jpg">
  <link rel="stylesheet" href="../assets/css/style.css"/>
  <link rel="stylesheet" href="../assets/css/style(1).css" />
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
    .fixed#scroll-top{
opacity:1;
visibility:visible;
-webkit-transform:translateY(0px);
transform:translateY(0px);
} 

#scroll-top:hover, #scroll-top:focus{
background-color:#555;
}
#scroll-top{
height:40px;
position:fixed;
right:15px;
width:40px;
z-index:9999;
bottom:0px;
background-color:#5d1029;
font-size:16px;
color:#fff;
text-align:center;
line-height:1;
padding:11px 0;
visibility:hidden;
opacity:0;
border-radius:0;
transition:all .3s;
-webkit-transform:translateY(40px);
transform:translateY(40px);
}

a:focus{
outline:none;
} 

a:hover, a:focus{
color:#1b65a9;
text-decoration:underline;
}
a:hover{
color:#0056b3;
text-decoration:underline;
}
a{
transition:all .3s;
color:#1b65a9;
text-decoration:none;
} 
a{
color:#007bff;
text-decoration:none;
background-color:transparent;
Error:
-webkit-text-decoration-skip:objects;
} 
*, ::after, ::before{
box-sizing:border-box;
}

   
</style>

<body>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <a href="index.html">
      <img src="../assets/images/logo[1].png" width="280" height="100">
          </a>  
    </div>
    <div class="col-sm-5">
  
    </div>
    <div class="col-sm-3">
      <br>
      <p>
    <img src="../assets/images/phone.png" width="40" height="30" style="background-color:yellow";>
    <a style="padding-left: 8px">FOR ORDERS</a>
    <a href="tel:111258259" style="padding-left: 8px">111 258 259</a>
  </p>
</div>
</div>
</div>



<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="../root/index.php">HOME</a>
      <a class="nav-item nav-link" href="../root/store.html">MENU</a>
      <a class="nav-item nav-link" href="../root/deals.html">DEALS</a>
    </div>
  </div>
</nav>






<main class="main">

    <div class="container-fluid">
        <div class="container-box">
            <h1 class="light-title rotate-title mt-3">
                <strong class="word-rotater">FRANCHISING</strong>
            </h1>
            <div class="container">
                <form method="post">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3>Personal info</h3>

                            <div class="form-group required-field">
                                <label>Applicant Name </label>
                                <input type="text" class="form-control" name="Applicant_Name" required>
                            </div>
                            <div class="form-group required-field">
                                <label>Email </label>
                                <input type="email" class="form-control" name="Applicant_Email" required>
                            </div>
                            <div class="form-group required-field">
                                <label>Phone Number </label>
                                <div class="form-control-tooltip">
                                    <input type="tel" class="form-control" name="Applicant_Number" required>
                                    <span class="input-tooltip" data-toggle="tooltip" title="" data-placement="right" data-original-title="For delivery questions."><i class="icon-question-circle"></i></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group required-field">
                                        <label>Country </label>
                                        <input type="text" class="form-control" name="Applicant_Country" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group required-field">
                                        <label>City </label>
                                        <input type="text" class="form-control" name="Applicant_City" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3>Bussiness Detail</h3>

                            <div class="form-group">
                                <label>Company </label>
                                <input type="text" name="company_Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Company Description</label>
                                <input type="text" name="company_Description" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Current Bussiness </label>
                                <input type="text" name="current_bussiness" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Previous Experience in Restaurant </label>
                                <select class="form-control" name="experience">
                                    <option value=1>Yes</option>
                                    <option value=0>No</option>
                                </select>

                            </div>


                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="clearfix text-center">
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              <!--  <a href="#" class="btn btn-primary btn-lg">Submit</a>-->
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <hr>
        </div>
    </div>
</main>


<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle" style="background-color: #030302">
  <div class="container">
    <div class="row">
    	<div class="col-md-1 col-sm-3">
        <div class="footer-pad">
          <img src="../assets/images/footer-logo.png">
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="footer-pad">
          <h4>SECURE PAYMENT WITH</h4>
          <img src="../assets/images/master.jpg">
          <img src="../assets/images/visa.jpg">
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        
        <div class="footer-pad">
          <h4>INFORMATION</h4>
          <ul class="list-unstyled">
            <li><a href="aboutUs.html">ABOUT US</a></li>
            <li><a href="franchising.php">FRANCHISING</a></li>
            <li><a href="contactUs.php">CONTACT US</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
       
        <div class="footer-pad">
          <h4>CONTACT US</h4>
          <ul class="list-unstyled">
            <li><a href="tel:111258259">111 258 259</a></li>
            <li>clucks@cluckys.pk</li>	
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    	<div class="col-md-2">
    		<h4>Follow Us</h4>
             <ul class="social-network social-circle">
             <li><a href="#"><img src="../assets/images/OIP.jpg" class="rounded-circle" alt="Cinque Terre" width="100%" height="100%"></a></li>
             <li><a href="#"><img src="../assets/images/OIP(1).jpg" class="rounded-circle" alt="Cinque Terre" width="100%" height="100%"></a></li>
            </ul>			
		</div>
    </div>
    <br>
    <br>
	<div class="row" style="background-color: green">
		<div class="col-sm-12">
			<p class="aligncenter">
    <img src="../assets/images/footer.png"  width="200" height="25" />
</p
		</div>
	</div>
  </div>
</footer>


<a title="Top" class="fixed" id="scroll-top" role="button" href="#top">
  <i class="icon-angle-up"></i></a>


</body>
</html>


  <?php
$servername = "localhost";
$username = "root";
$password = "";

  try {
  $conn = new PDO("mysql:host=$servername;dbname=contact_form", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if (isset($_POST['submit'])){
  $Name=$_POST['Applicant_Name'];
  $Email=$_POST['Applicant_Email'];
  $phone_No=$_POST['Applicant_Number'];
  $Country=$_POST['Applicant_Country'];
  $City=$_POST['Applicant_City'];

  $company_name=$_POST['company_Name'];
  $company_description=$_POST['company_Description'];
  $current_Bussiness=$_POST['current_bussiness'];
  $Experience=$_POST['experience'];

  $stmt = $conn->prepare("INSERT INTO `personal_info` (`Name`, `Email`, `Phone_No`, `country`, `city`) VALUES (:Name, :Email,:phone_No,:Country,:City)");
  $stmt->bindParam(':Name', $Name);
$stmt->bindParam(':Email', $Email);
$stmt->bindParam(':phone_No', $phone_No);
$stmt->bindParam(':Country', $Country);
$stmt->bindParam(':City', $City);
$stmt->execute();

  $stmt = $conn->prepare("INSERT INTO `bussiness_detail` (`Company`, `Company_Details`, `current_Bussines`, `Experience`) VALUES (:company_name, :company_description, :current_Bussiness, :Experience);");
  $stmt->bindParam(':company_name', $company_name);
$stmt->bindParam(':company_description', $company_description);
$stmt->bindParam(':current_Bussiness', $current_Bussiness);
$stmt->bindParam(':Experience', $Experience);

$stmt->execute();
    }
    
?>