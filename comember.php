<?php
include("connection.php");
include('ses_login.php');
//$username1=$_SESSION['username1'];
header("Access-Control-Allow-Origin:*"); 
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$role=$_SESSION['role'];
$emailId=$_SESSION['email_id'];
$id=$_SESSION['user_id'];

$Session_id=session_id();

$sqltab="SELECT * FROM `mom_personal_details` where email_id='$emailId'";

$resultSet=mysql_query($sqltab) or die(mysql_error());
while($rowtab=mysql_fetch_assoc($resultSet))
    {

	 	$srno=$rowtab['id'];

        $mom_full_name=$rowtab['mom_full_name'];

	 	$before_marriage_name=$rowtab['before_marriage_name'];

	 	$mom_birth_place=$rowtab['mom_birth_place'];
    
	 	$mom_city=$rowtab['mom_city'];
    
	 	$mom_state=$rowtab['mom_state'];

    }

$sql="SELECT * FROM `user_master` WHERE email_id='$emailId' and your_name='$role'";
//echo $sql;
$result=mysql_query($sql) or die ("Error Message5" . mysql_error());
    
if(mysql_num_rows($result)>0) 
{
    while($row=mysql_fetch_assoc($result))

	 {
        $username1 = $row['your_name'];
        $mbirth_date = $row['mbirth_date'];
        $dbirth_date = $row['dbirth_date'];
        $mdanni_date = $row['mdanni_date'];
        $profile_usr_name = $row['profile_usr_name'];
        //echo $username1;
        //header("location:user_dashboard.php?username1=".$username1);   
     }
} 

$momdate=date_create($mbirth_date);
$mombirthdate=date_format($momdate,"d/m/Y H:i:s");
//echo $mombirthdate;

 

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>lumd</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="lumd">
    <meta name="author" content="lumd">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/hover-dropdown-menu.css" rel="stylesheet" />
    <!-- Icomoon Icons -->
    <link href="css/icons.css" rel="stylesheet" />
    <!-- Revolution Slider -->
    <link href="css/revolution-slider.css" rel="stylesheet" />
    <link href="rs-plugin/css/settings.css" rel="stylesheet" />
    <!-- Animations -->
    <link href="css/animate.min.css" rel="stylesheet" />
    <!-- Owl Carousel Slider -->
    <link href="css/owl/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl/owl.theme.css" rel="stylesheet" />
    <link href="css/owl/owl.transitions.css" rel="stylesheet" />
    <!-- PrettyPhoto Popup -->
    <link href="css/prettyPhoto.css" rel="stylesheet" />
    <!-- Date Picker -->
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style1.html" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- fancy Select -->
    <link href="css/fancySelect.css" rel="stylesheet">
    <link href="css/photostack.css" rel="stylesheet">
    <!-- Color Scheme -->
    <link href="css/color.css" rel="stylesheet" />

    <style>
        .form-box{
         background-color: #ffffff;
        }
        #exTab2 h3 {
          color : white;
          background-color: #428bca;
          padding : 5px 15px;
        }

        /* change border radius for the tab , apply corners on top*/

        #exTab3 .nav-pills > li > a {
          border-radius: 4px 4px 0 0 ;
        }

        #exTab3 .tab-content {
          color : white;
          background-color: #428bca;
          padding : 5px 15px;
        }
        
        .form-box11{
            background-color: white;
        }
        
        table {
          border-collapse: collapse;
          border-spacing: 0;
          border: 1px solid #ddd;
          
        }

        th, td {
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
    </style>
<script>

function cologin(emailid){
	$.post('comemberlogin.php', {emailid:emailid,action:'cologin'}, function(response) {
		window.location.reload();
			if(response != 'N'){
			$('#msg').html('Shop Deleted successfully.');
			window.location.reload();
		}else{
			$('#msg').html('Some Error.');
		}
			
		});
	
}
</script>


</head>

<body style="background-color:#f4e9f4">

    <!-- Top Bar -->
    <div id="page">
        <!-- Top Bar -->

        <!-- Top Bar -->
        <!-- Sticky Navbar -->
      <?php
	  
	  include 'header.php';
	  
	  ?>




        <div class="page-header" style="background-color:#fcc0f6;display:none;">

            <div class="container"><br><br><br>
                <div class="col-md-3">
                    <img src="img/u1.jpg"><br><br>
                    <img src="img/u2.jpg">
                </div>

                <div class="col-md-9">
                    <img src="img/u3.jpg">
                    <i class="fa fa-toggle-off fa-2x" aria-hidden="true" style="float:right"></i>
                </div>
            </div>


        </div><img style="margin-top:-21px;visibility:hidden;" src="img/hr.jpg">




        <div class="page-header" style="margin-top:-20px;display:none">
            <div class="breadcrumb-box">
                <div class="container">
                    <b><a href="#">
                            <font color="#eb008b">Home</font>
                        </a>&nbsp; | &nbsp;<a href="#">
                            <font color="#eb008b">Other Services
                            </font>
                        </a></b>
                </div>
            </div>
        </div>








        <section id="about-us" class="page-section" style="margin-bottom:-50px;">
            <div class="container">



                <div class="col-sm-10 col-md-10">
                    <!--<h4 class="title"><b>
                            <font color="#330066">LET’S CREATE BIOGRAPHY OF YOUR MOMDAD </font>
                        </b></h4>
                    <h2 class="title"><b>
                            <font color="#eb008b">Mom Personal Details</font>
                        </b></h2>-->
                </div>

                <!--<div class="col-sm-2 col-md-2" >
                    <h4 class="title"><b>
                            <font color="#000">Goto </font>
                        </b></h4>
                    <img src="img/icon/u4.png" style="float:right;width:110px;height:100px;padding-right:10px;margin-top:-100px" />
                </div>-->


            </div>
        </section>



        <br>

        <section class="slider rs-slider-full">

            <!--Find Form -->
            <div class="find-form">
                <div class="container">
                   
                    <h2 class="title">
                        <b>
                            <font color="#eb008b">Co-Member Details</font>
                        </b>
                    </h2>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <div id="exTab2" class="container">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#mom_friend_mail" data-toggle="tab" style="background-color:#eb008b;">ADD Co-Member</a>
                                    </li>
                                    <li>
                                        <a href="#dad_friend_mail" data-toggle="tab" style="background-color:#eb008b;">List You Co-Member Another Account</a>
                                    </li>

                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="mom_friend_mail">
                                        <form method="post" class="form-box register-form contact-form no-margin" id="motors" name="motors" action="comember_mail.php">
                                            <br />
                                           
                                                <!--<h2>Bordered Table</h2>
                                            <p>The .table-bordered class adds borders to a table:</p>-->
                                                <input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">
                                                <input type="hidden" name="user_name1" id="user_name1" value="<?php echo $role; ?>">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th align='center'>Sr No.</th>
                                                            <th align='center'>Name</th>
                                                            <th align='center'>Email Id</th>
                                                            <th align='center'>Invite Co-Member </th>
                                                            <!--<th align='center'>ADD More</th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                       
                                                        <tr>
                                                            <td align='center'>
                                                               #
                                                            </td>
                                                            <td align='center'>
                                                                <input type="text" class="form-control" id="friends_name" name="friends_name[]" placeholder="Friend's Name" value="">
                                                            </td>
                                                            <td align='center'>
                                                                <input type="text" class="form-control" id="friends_email" name="friends_email[]" placeholder="Friend's Email Id" value="">
                                                            </td>
                                                            <td align='center'>
                                                               <button class="btn btn-general btn-primary" type="submit">Invite</button> 
                                                            </td>
                                                        </tr>
                                                      
													  <?php
                
                $sqltab="SELECT * FROM `comember` where p_emailid='$emailId'";
                $resultSet=mysql_query($sqltab) or die(mysql_error());
                
                    if(mysql_num_rows($resultSet)>0)
                {
                
                $ii = 1;
                        while($rowtab=mysql_fetch_assoc($resultSet))
                        {

                            //$srno=$rowtab['id'];

                            $comember_name=$rowtab['c_name'];
                            $comember_emailid=$rowtab['c_emailid'];
                            $comember_status=$rowtab['status'];

                            
echo "<tr>
                                                            <td align='center'>
                                                               ".$ii."
                                                            </td>
                                                            <td align='center'>
                                                                ".$comember_name."
                                                            </td>
                                                            <td align='center'>
                                                               ".$comember_emailid." 
                                                            </td>
                                                            <td align='center'>
                                                                ".$comember_status."
                                                            </td>
                                                        </tr>	";
                       
                ?>
													  
													  
							 					  
													  
													  
													  <?php 
										 $ii++; 
                                        }        
                                          } ?>
													  
													  
													  
                                                    </tbody>

                                                </table>
                                           
                                        </form>



                                    </div>
                                   
                                    <div class="tab-pane" id="dad_friend_mail">
                                        <form method="post" class="form-box register-form contact-form no-margin" id="motors" name="motors" action="mail.php">
                                            <br />
                                            <div class="container">
                                                <!--<h2>Bordered Table</h2>
                                            <p>The .table-bordered class adds borders to a table:</p>-->
                                                <input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">
                                                <input type="hidden" name="user_name1" id="user_name1" value="<?php echo $role; ?>">
                                                <table class="table table-bordered">
                                                    <thead>
                                                       <tr>
                                                            <th align='center'>Sr No.</th>
                                                            <th align='center'>Name</th>
                                                            <th align='center'>Email Id</th>
                                                            <th align='center'>Status </th>
                                                            <th align='center'>Login </th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                       <?php
                
                $sqltab="SELECT * FROM `comember` where c_emailid='$emailId'";
                $resultSet=mysql_query($sqltab) or die(mysql_error());
                
                    if(mysql_num_rows($resultSet)>0)
                {
                
                $iii = 1;
                        while($rowtab=mysql_fetch_assoc($resultSet))
                        {

                            //$srno=$rowtab['id'];

                            $comember_name1=$rowtab['p_name'];
                            $comember_emailid1=$rowtab['p_emailid'];
                            $comember_status1=$rowtab['status'];
                            $user_id1=$rowtab['user_id'];
  $comember_emailid=$rowtab['c_emailid'];
echo "<tr>
                                                            <td align='center'>
                                                               ".$iii."
                                                            </td>
                                                            <td align='center'>
                                                                ".$comember_name1."
                                                            </td>
                                                            <td align='center'>
                                                               ".$comember_emailid1." 
                                                            </td>
                                                            <td align='center'>
                                                                ".$comember_status1."
                                                            </td> 
															<td >
		
              <a href='comemberlogin.php?pem=".$comember_emailid1."&cem=".$comember_emailid."' type='button' class='btn btn-danger btn-sm' >Login</a>                                         
                       </td>
					   </tr>	";
                ?>
                       
              
													  
													  
										  
													  
													  
													  <?php 
										 $ii++; 
                                        }        
                                          } ?>
													  
                                                    </tbody>

                                                </table>
                                            </div>
                                        </form>



                                        
                                    </div>
                                </div>
                                <!--main tab pane closing-->
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					
					
                </div>
            </div>

        </section>

        <section class="page-section">
        </section>


 <?php
	  
	  include 'footer.php';
	  
	  ?>
</body>

</html>
