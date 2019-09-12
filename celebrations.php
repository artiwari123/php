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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- styles -->
    <link href="fileuploader/dist/jquery.fileuploader.min.css" media="all" rel="stylesheet">

    <!-- js -->
    <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>-->
    <script src="fileuploader/dist/jquery.fileuploader.min.js" type="text/javascript"></script>
    <script src="fileuploader/examples/default/js/custom.js" type="text/javascript"></script>

    <style>


        #exTab1 .tab-content {
          color : white;
          background-color: #428bca;
          padding : 5px 15px;
        }

        #exTab2 h3 {
          color : white;
          background-color: #428bca;
          padding : 5px 15px;
        }

        /* remove border radius for the tab */

        #exTab1 .nav-pills > li > a {
          border-radius: 0;
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
        
    </style>

</head>

<body style="background-color:#f4e9f4">

    <!-- Top Bar -->
    <div id="page">
        <!-- Top Bar -->

      
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
                            <font color="#eb008b">BIRTHDAY & ANNIVERSARY WISHES</font>
                        </b>
                    </h2>
                    <form method="post" enctype="multipart/form-data" action="mom_healthcare_submit.php" class="form-box11">
                        <br />
                        <div class="row">
                            <div class="col-md-12">

                                <div id="exTab2" class="container">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#1" data-toggle="tab" style="background-color:#eb008b;">MOM'S B'DAY DETAILS</a>
                                        </li>
                                        <li>
                                            <a href="#2" data-toggle="tab" style="background-color:#eb008b;">DAD'S B'DAY DETAILS</a>
                                        </li>
                                        <li>
                                            <a href="#3" data-toggle="tab" style="background-color:#eb008b;">ANNIVERSARY DETAILS</a>
                                        </li>

                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="1">
                                            <br />
                                            <div class="col-sm-12">

                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">My dearest Mom’s Birthday on:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <div class="input-group date date-picker">
                                                                    <input type="text" class="form-control" name="medicine_stockdate" id="medicine_stockdate" placeholder="Date" value="" />
                                                                    <span class="input-group-addon">
                                                                        <span class="icon-calendar12 fa-1x"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4">Send Birthday Message on:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="mom_mobile_no" id="mom_mobile_no" placeholder=" Mom’s Mobile Number" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Bouquet Delivery Details:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8 radio">
                                                            <div class="form-group">
                                                                <label><input type="radio" name="optradio" value="need home delivery" checked>Rose Bouquet</label>
                                                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                <label><input type="radio" name="optradio" value="call to confirm the list">Mix Flowers Bouquet</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Cake Delivery Details:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-12 radio">
                                                            <div class="form-group">
															 <div class="col-sm-6">
                                                                <label><input type="radio" name="optradio" value="need home delivery" checked>1 Pack of 4 Cupcakes</label>
																<image src="cake/4.jpg" id="f1">
                                                                </div> <div class="col-sm-6">
                                                                <label><input type="radio" name="optradio" value="call to confirm the list">1/4kg Cream Cake</label>
                                                 <image src="cake/2.jpg" id="f2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
												
												 <div class="form-group">
                                                    <label class="control-label col-sm-4" for="pwd" >Choose Cake Flavours:</label>
                                                    <div class="col-sm-8">
                                                       
 <select class="form-control" name="Choose Flavours" id="mombd">
                                                            <option value="double_chocolate">Choose Flavours</option>
                                                                        <option value="doublechocolate">Double Chocolate</option>
                                                                        <option value="vanilla">Vanilla</option>
                                                                        <option value="strawberry">Strawberry</option>
                                                                        <option value="caramel">Caramel</option>
 </select>


													   </div>
                                                </div>
                                               
												
												
												
								
												
												
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-12">


                                                        <div class="col-sm-2" for="pwd">Time to deliver a boquet:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time1" id="reminder_time1" placeholder="" value="">
                                                        </div>
                                                        <div class="col-sm-2" for="pwd">Time to deliver a cake:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time2" id="reminder_time2" placeholder="" value="">
                                                        </div>
                                                        <div class="col-sm-2" for="pwd">Send both together at:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time3" id="reminder_time3" placeholder="" value="">
                                                        </div>


                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Gift & Message Card Details</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label><input type="checkbox" name="remember1"><span> I want to send a gift to my Mom</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label>Message for Message Card</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="2" name="mbf_sp_memories" placeholder="A sweet message to your Mom"><?php echo $friendship_special_memories; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd"></div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <div class="control-label">Delivery Address Details</div><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <!--<label class="control-label col-sm-3" for="pwd"></label>-->
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <input type="checkbox" name="remember1"><span> Same as registered address</span>
                                                                <input type="checkbox" name="remember1"><span> Another address</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-3" for="pwd" style="visibility:hidden">SSSS</div>
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="dad_full_name" id="dad_full_name" placeholder="Full Address" value="">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="Pin Code" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_clinic_address" id="dad_clinic_address" placeholder="City" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="State" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="Any Landmark" value="">
                                                                </div>
                                                                <div class="col-sm-12 checkbox">
                                                                    <label style="color:#333333;font-weight:bold;"><input type="checkbox" name="remember"><span>Notify me on every delivery</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />


                                            </div>
                                        </div>

                                        <div class="tab-pane" id="2">
                                            <br />
                                            <div class="col-sm-12">

                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">My dearest Dad’s Birthday on:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <div class="input-group date date-picker">
                                                                    <input type="text" class="form-control" name="medicine_stockdate" id="medicine_stockdate" placeholder="Date" value="" />
                                                                    <span class="input-group-addon">
                                                                        <span class="icon-calendar12 fa-1x"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Send Birthday Message on:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="mom_mobile_no" id="mom_mobile_no" placeholder="Dad’s Mobile Number" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Bouquet Delivery Details:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8 radio">
                                                            <div class="form-group">
                                                                <label><input type="radio" name="optradio" value="need home delivery" checked>Rose Bouquet</label>
                                                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                <label><input type="radio" name="optradio" value="call to confirm the list">Mix Flowers Bouquet</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                               
												
												
												   <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Cake Delivery Details:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-12 radio">
                                                            <div class="form-group">
															 <div class="col-sm-6">
                                                                <label><input type="radio" name="optradio" value="need home delivery" checked>1 Pack of 4 Cupcakes</label>
																<image src="cake/1.jpg" id="f3">
                                                                </div> <div class="col-sm-6">
                                                                <label><input type="radio" name="optradio" value="call to confirm the list">1/4kg Cream Cake</label>
                                                 <image src="cake/2.jpg" id="f4">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
												
												 <div class="form-group">
                                                    <label class="control-label col-sm-4" for="pwd">Choose Cake Flavours:</label>
                                                    <div class="col-sm-8">
                                                       
 <select class="form-control" name="Choose Flavours" id="momdb">
                                                            <option value="">Choose Flavours</option>
                                                                        <option value="doublechocolate">Double Chocolate</option>
                                                                        <option value="vanilla">Vanilla</option>
                                                                        <option value="strawberry">Strawberry</option>
                                                                        <option value="caramel">Caramel</option>
 </select>


													   </div>
                                                </div>
                                               
												
												
												
												
												
												
												
												
												
												
												
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-12">


                                                        <div class="col-sm-2" for="pwd">Time to deliver a boquet:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time1" id="reminder_time1" placeholder="" value="">
                                                        </div>
                                                        <div class="col-sm-2" for="pwd">Time to deliver a cake:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time2" id="reminder_time2" placeholder="" value="">
                                                        </div>
                                                        <div class="col-sm-2" for="pwd">Send both together at:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time3" id="reminder_time3" placeholder="" value="">
                                                        </div>


                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Gift & Message Card Details</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-9">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input type="checkbox" name="remember1"><span> I want to send a gift to my Dad</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-9">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <div>Message for Message Card</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-9">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="2" name="mbf_sp_memories" placeholder="A sweet message to your Dad"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-3" for="pwd"></div>
                                                    <div class="col-sm-9">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <div class="control-label">Delivery Address Details</div>
																
																<br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <!--<label class="control-label col-sm-3" for="pwd"></label>-->
                                                    <div class="col-sm-9">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input type="checkbox" name="remember1"><span> Same as registered address</span>
                                                                <input type="checkbox" name="remember1"><span> Another address</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="control-label col-sm-3" for="pwd" style="visibility:hidden">SSSS</div>
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="dad_full_name" id="dad_full_name" placeholder="Full Address" value="">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="Pin Code" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_clinic_address" id="dad_clinic_address" placeholder="City" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="State" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="Any Landmark" value="">
                                                                </div>
                                                                <div class="col-sm-12 checkbox">
                                                                    <div style="color:#333333;font-weight:bold;"><input type="checkbox" name="remember"><span>Notify me on every delivery</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />


                                            </div>
                                        </div>

                                        <div class="tab-pane" id="3">
                                            <br />
                                            <div class="col-sm-12">

                                                <div class="form-group">
                                                    <div class="col-sm-5" for="pwd">It’s my dearest MomDads’s Anniversary on:</div>
                                                    <div class="col-sm-7">
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <div class="input-group date date-picker">
                                                                    <input type="text" class="form-control" name="medicine_stockdate" id="medicine_stockdate" placeholder="Date" value="" />
                                                                    <span class="input-group-addon">
                                                                        <span class="icon-calendar12 fa-1x"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Send Anniversary Message on:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="mom_mobile_no" id="mom_mobile_no" placeholder="Mom’s Mobile Number" value="">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">

                                                                <input type="text" class="form-control" name="mom_mobile_no" id="mom_mobile_no" placeholder="Dad’s Mobile Number" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Bouquet Delivery Details:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8 radio">
                                                            <div class="form-group">
                                                                <label><input type="radio" name="optradio" value="need home delivery" checked>Rose Bouquet</label>
                                                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                <label><input type="radio" name="optradio" value="call to confirm the list">Mix Flowers Bouquet</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                              
												
												
												   <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Cake Delivery Details:</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-12 radio">
                                                            <div class="form-group">
															 <div class="col-sm-6">
                                                                <label><input type="radio" name="optradio" value="need home delivery" checked>1 Pack of 4 Cupcakes</label>
																<image src="cake/1.jpg" id="f5">
                                                                </div> <div class="col-sm-6">
                                                                <label><input type="radio" name="optradio" value="call to confirm the list">1/4kg Cream Cake</label>
                                                 <image src="cake/3.jpg" id="f6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
												
												 <div class="form-group">
                                                    <label class="control-label col-sm-4" for="pwd">Choose Cake Flavours:</label>
                                                    <div class="col-sm-8">
                                                       
 <select class="form-control" name="Choose Flavours" id="momdb1">
                                                            <option value="double_chocolate">Choose Flavours</option>
                                                                        <option value="doublechocolate">Double Chocolate</option>
                                                                        <option value="vanilla">Vanilla</option>
                                                                        <option value="strawberry">Strawberry</option>
                                                                        <option value="caramel">Caramel</option>
 </select>


													   </div>
                                                </div>
                                               
												
												
												
												
												
												
												
												
												
												
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-12">


                                                        <div class="col-sm-2" for="pwd">Time to deliver a boquet:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time1" id="reminder_time1" placeholder="" value="">
                                                        </div>
                                                        <div class="col-sm-2" for="pwd">Time to deliver a cake:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time2" id="reminder_time2" placeholder="" value="">
                                                        </div>
                                                        <div class="col-sm-2" for="pwd">Send both together at:</div>
                                                        <div class="col-sm-2">
                                                            <input type="time" class="form-control" name="reminder_time3" id="reminder_time3" placeholder="" value="">
                                                        </div>


                                                    </div>
                                                </div>
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-4" for="pwd">Gift & Message Card Details</div>
                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <input type="checkbox" name="remember1"><span> I want to send a gift to my Mom</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-8">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <div>Message for Message Card</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">

                                                    <div class="col-sm-9">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="2" name="mbf_sp_memories" placeholder="A sweet message to your MomDad"><?php echo $friendship_special_memories; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-3" for="pwd"></div>
                                                    <div class="col-sm-9">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                Delivery Address Details
                                                            </div>
															<br>
                                                        </div>
                                                    </div>
                                                </div><br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <!--<label class="control-label col-sm-3" for="pwd"></label>-->
                                                    <div class="col-sm-9">
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input type="checkbox" name="remember1"><span> Same as registered address</span>
                                                                <input type="checkbox" name="remember1"><span> Another address</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />
                                                <span>&nbsp;&nbsp;&nbsp;</span>
                                                <div class="form-group">
                                                    <div class="col-sm-3" for="pwd" style="visibility:hidden">SSSS</div>
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="dad_full_name" id="dad_full_name" placeholder="Full Address" value="">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="Pin Code" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_clinic_address" id="dad_clinic_address" placeholder="City" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="State" value="">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="dad_doctor_no" id="dad_doctor_no" placeholder="Any Landmark" value="">
                                                                </div>
                                                                <div class="col-sm-12 checkbox">
                                                                    <div style="color:#333333;font-weight:bold;"><input type="checkbox" name="remember"><span>Notify me on every delivery</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />


                                            </div>
                                        </div>






                                    </div>

                                    <input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">

                                </div>
                                <div style="float:right;">
                                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    <button type="button" class="btn btn-primary"><a href="user_dashboard.php">Previous</a></button>
                                </div>
                            </div>



                        </div>

                    </form>

                </div>
            </div>

        </section>

        <section class="page-section">
        </section>


	
	<script>
	
	
	$(document).ready(function() {
    $("#mombd").change(function() {
		 var sdf = $(this).val();
		
		//alert(sdf);
		
		if(sdf == 'vanilla')
		{
			var imgUrl = 'cake/7.jpg';
			var imgUrl1 = 'cake/8.jpg';
       // var imgUrl = $(this).val();
        $("#f1").attr("src", imgUrl);
        $("#f2").attr("src", imgUrl1);
		
		}
		
		
		else if(sdf == 'doublechocolate')
		{
			var imgUrl2 = 'cake/6.jpg';
			var imgUrl13 = 'cake/5.jpg';
       // var imgUrl = $(this).val();
        $("#f1").attr("src", imgUrl2);
        $("#f2").attr("src", imgUrl13);
		
		}
		
		
		else if(sdf == 'strawberry')
		{
			var imgUrl = 'cake/9.jpg';
			var imgUrl1 = 'cake/10.jpg';
       // var imgUrl = $(this).val();
        $("#f1").attr("src", imgUrl);
        $("#f2").attr("src", imgUrl1);
		
		}
		
		
		else if(sdf == 'caramel')
		{
			var imgUrl = 'cake/11.jpg';
			var imgUrl1 = 'cake/12.jpg';
       // var imgUrl = $(this).val();
        $("#f1").attr("src", imgUrl);
        $("#f2").attr("src", imgUrl1);
		
		}
		else
		{
			
		}
		
		
    });
});



</script>


	<script>
	
	
	$(document).ready(function() {
    $("#momdb").change(function() {
		 var sdf1 = $(this).val();
		
		//alert(sdf);
		
		if(sdf1 == 'vanilla')
		{
			var imgUrl = 'cake/7.jpg';
			var imgUrl1 = 'cake/8.jpg';
       // var imgUrl = $(this).val();
        $("#f3").attr("src", imgUrl);
        $("#f4").attr("src", imgUrl1);
		
		}
		
		
		else if(sdf1 == 'doublechocolate')
		{
			var imgUrl = 'cake/6.jpg';
			var imgUrl1 = 'cake/5.jpg';
       // var imgUrl = $(this).val();
        $("#f3").attr("src", imgUrl);
        $("#f4").attr("src", imgUrl1);
		
		}
		
		
		else if(sdf1 == 'strawberry')
		{
			var imgUrl = 'cake/9.jpg';
			var imgUrl1 = 'cake/10.jpg';
       // var imgUrl = $(this).val();
        $("#f3").attr("src", imgUrl);
        $("#f4").attr("src", imgUrl1);
		
		}
		
		
		else if(sdf1 == 'caramel')
		{
			var imgUrl = 'cake/11.jpg';
			var imgUrl1 = 'cake/12.jpg';
       // var imgUrl = $(this).val();
       $("#f3").attr("src", imgUrl);
        $("#f4").attr("src", imgUrl1);
		
		}
		else
		{
			
		}
		
		
    });
});



</script>



	<script>
	
	
	$(document).ready(function() {
    $("#momdb1").change(function() {
		//alert('Hello');
		 var sdf2 = $(this).val();
		
		//alert(sdf2);
		
		if(sdf2 == 'vanilla')
		{
			var imgUrl = 'cake/7.jpg';
			var imgUrl1 = 'cake/8.jpg';
       // var imgUrl = $(this).val();
        $("#f5").attr("src", imgUrl);
        $("#f6").attr("src", imgUrl1);
		
		}
		
		
		else if(sdf2 == 'doublechocolate')
		{
			var imgUrl = 'cake/6.jpg';
			var imgUrl1 = 'cake/5.jpg';
       // var imgUrl = $(this).val();
         $("#f5").attr("src", imgUrl);
        $("#f6").attr("src", imgUrl1);
		
		}
		
		
		else if(sdf2 == 'strawberry')
		{
			var imgUrl = 'cake/9.jpg';
			var imgUrl1 = 'cake/10.jpg';
       // var imgUrl = $(this).val();
        $("#f5").attr("src", imgUrl);
        $("#f6").attr("src", imgUrl1);
		
		}
		
		
		else if(sdf2 == 'caramel')
		{
			var imgUrl = 'cake/11.jpg';
			var imgUrl1 = 'cake/12.jpg';
       // var imgUrl = $(this).val();
         $("#f5").attr("src", imgUrl);
        $("#f6").attr("src", imgUrl1);
		
		}
		else
		{
			
		}
		
		
    });
});



</script>

</body>

</html>
