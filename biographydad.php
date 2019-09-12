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

$sqltab="SELECT * FROM `dad_bio` where email_id='$emailId'";

$resultSet=mysql_query($sqltab) or die(mysql_error());
while($rowtab=mysql_fetch_assoc($resultSet))
    {

	 	$srno=$rowtab['id'];

        $mom_full_name=$rowtab['mom_full_name'];

	 	$before_marriage_name=$rowtab['before_marriage_name'];

	 	$mom_birth_place=$rowtab['mom_birth_place'];
	 	$mom_birth_date=$rowtab['mom_birth_date'];
    
	 	$mom_city=$rowtab['mom_city'];
    
	 	$mom_state=$rowtab['mom_state'];


  $ms_school_name=$rowtab['ms_school_name'];

	 	$ms_primary_secondary=$rowtab['ms_primary_secondary'];

	 	$ms_city=$rowtab['ms_city'];
	 	$ms_state=$rowtab['ms_state'];
	 	$ms_year_start=$rowtab['ms_year_start'];
	 	$ms_year_end=$rowtab['ms_year_end'];
	 	$ms_special_memories=$rowtab['ms_special_memories'];
	 	$ms_upload_photo=$rowtab['ms_upload_photo'];

		  $mc_college_name=$rowtab['mc_college_name'];

	 	$mc_course=$rowtab['mc_course'];

	 	$mc_city=$rowtab['mc_city'];
	 	$mc_state=$rowtab['mc_state'];
	 	$mc_year_start=$rowtab['mc_year_start'];
	 	$mc_year_end=$rowtab['mc_year_end'];
	 	$mc_special_memories=$rowtab['mc_special_memories'];
	 	$mc_upload_photo=$rowtab['mc_upload_photo'];

		  $mh_hostel_name=$rowtab['mh_hostel_name'];

	 	$mh_course=$rowtab['mh_course'];

	 	$mh_city=$rowtab['mh_city'];
	 	$mh_state=$rowtab['mh_state'];
	 	$mh_year_start=$rowtab['mh_year_start'];
	 	$mh_year_end=$rowtab['mh_year_end'];
	 	$mh_special_memories=$rowtab['mh_special_memories'];
	 	$mh_upload_photo=$rowtab['mh_upload_photo'];

		 $her_company_name=$rowtab['her_company_name'];

	 	$her_designation=$rowtab['her_designation'];

	 	$her_city=$rowtab['her_city'];
	 	$her_state=$rowtab['her_state'];
	 	$her_year_start=$rowtab['her_year_start'];
	 	$her_year_end=$rowtab['her_year_end'];
	 	$her_special_achievements=$rowtab['her_special_achievements'];
		$her_sp_achieve_year = $rowtab['her_sp_achieve_year'];
	 	$her_special_memories=$rowtab['her_special_memories'];
	 	$her_upload_photo=$rowtab['her_upload_photo'];
		
		$her_company_name1=$rowtab['her_company_name1'];

	 	$her_designation1=$rowtab['her_designation1'];

	 	$her_city1=$rowtab['her_city1'];
	 	$her_state1=$rowtab['her_state1'];
	 	$her_year_start1=$rowtab['her_year_start1'];
	 	$her_year_end1=$rowtab['her_year_end1'];
	 	$her_special_achievements1=$rowtab['her_special_achievements1'];
		$her_sp_achieve_year1=$rowtab['her_sp_achieve_year1'];
	 	$her_special_memories1=$rowtab['her_special_memories1'];
	 	$her_upload_photo1=$rowtab['her_upload_photo1'];
	 	$not_done=$rowtab['not_done'];

		 $meet_place_name=$rowtab['meet_place_name'];

	 	$meet_city=$rowtab['meet_city'];

	 	$meet_state=$rowtab['meet_state'];
	 	 $meet_date=$rowtab['meet_date'];
	 	$meet_timing=$rowtab['meet_timing'];
	 	 $her_dressing=$rowtab['meet_her_dressing'];
	 	 $dad_dressing=$rowtab['meet_dad_dressing'];
	 	$any_special_memories_meet=$rowtab['meet_any_special_memories'];
	 	$her_upload_photo=$rowtab['her_upload_photo'];
		
		 $honeymoon_place_name=$rowtab['honeymoon_place_name'];

	 	$honeymoon_city=$rowtab['honeymoon_city'];

	 	$honeymoon_state=$rowtab['honeymoon_state'];
	 	$honeymoon_date=$rowtab['honeymoon_date'];
	 	$meet_timing1=$rowtab['honeymoon_meet_timing'];
	 	$her_dressing1=$rowtab['honeymoon_her_dressing'];
	 	$dad_dressing1=$rowtab['honeymoon_dad_dressing'];
	 	$any_special_memories1=$rowtab['honeymoon_any_special_memories'];
	 	$her_upload_photo1=$rowtab['her_upload_photo'];
		
		$anniversary_place_name=$rowtab['anniversary_place_name'];

	 	$anniversary_city=$rowtab['anniversary_city'];

	 	$anniversary_state=$rowtab['anniversary_state'];
	 	$anniversary_date=$rowtab['anniversary_date'];
	 	$anniversary_timing=$rowtab['anniversary_timing'];
	 	$her_dressing2=$rowtab['anniversary_her_dressing'];
	 	$dad_dressing2=$rowtab['anniversary_dad_dressing'];
	 	$any_special_memories2=$rowtab['anniversary_any_special_memories'];
	 	$her_upload_photo2=$rowtab['her_upload_photo'];

		$marriage_place_name=$rowtab['marriage_place_name'];

	 	$marriage_city=$rowtab['marriage_city'];

	 	$marriage_state=$rowtab['marriage_state'];
	 	$marriage_date=$rowtab['marriage_date'];
	 	$marriage_timing=$rowtab['marriage_timing'];
	 	$her_dressing3=$rowtab['marriage_her_dressing'];
	 	$dad_dressing3=$rowtab['marriage_dad_dressing'];
	 	$any_special_memories3=$rowtab['marriage_any_special_memories'];
	 	$her_upload_photo3=$rowtab['her_upload_photo'];

		$childhood_photograph=$rowtab['childhood_photograph'];
        $teenage_photograph=$rowtab['teenage_photograph'];
        $youngage_photograph=$rowtab['youngage_photograph'];
        $marriage_photograph=$rowtab['marriage_photograph'];
        $honeymoon_photograph=$rowtab['honeymoon_photograph'];
        $first_pregnancy_photograph=$rowtab['first_pregnancy_photograph'];
        $second_pregnancy_photograph=$rowtab['second_pregnancy_photograph'];
        $with_complete_family=$rowtab['with_complete_family'];
        $current_age=$rowtab['current_age'];

		$my_life_inwords=$rowtab['my_life_inwords'];

	 	$her_feelings_for_dad=$rowtab['her_feelings_for_dad'];
	 	$her_feelings_for_dad=$rowtab['her_feelings_for_dad'];
	 	$her_feelings_for_you=$rowtab['her_feelings_for_you'];
	 	$her_feelings_for_siblings=$rowtab['her_feelings_for_siblings'];

		$any_special_memories=$rowtab['any_special_memories'];

	 	$choose_options=$rowtab['choose_options'];
		
		
		$frem_id=$rowtab['frem_id'];
$frname=$rowtab['frname'];
$frpet=$rowtab['frpet'];
$frfrisince=$rowtab['frfrsince'];
$frstate=$rowtab['frstate'];
$frcity=$rowtab['frcity'];
$frlocation=$rowtab['frlocation'];
$frspmem=$rowtab['frspmem'];


$frem_id1=$rowtab['frem_id1'];
$frname1=$rowtab['frname1'];
$frpet1=$rowtab['frpet1'];
$frfrisince1=$rowtab['frfrsince1'];
$frstate1=$rowtab['frstate1'];
$frcity1=$rowtab['frcity1'];
$frlocation1=$rowtab['frlocation1'];
$frspmem1=$rowtab['frspmem1'];


$frem_id2=$rowtab['frem_id2'];
$frname2=$rowtab['frname2'];
$frpet2=$rowtab['frpet2'];
$frfrisince2=$rowtab['frfrsince2'];
$frstate2=$rowtab['frstate2'];
$frcity2=$rowtab['frcity2'];
$frlocation2=$rowtab['frlocation2'];
$frspmem2=$rowtab['frspmem2'];

$frem_id3=$rowtab['frem_id3'];
$frname3=$rowtab['frname3'];
$frpet3=$rowtab['frpet3'];
$frfrisince3=$rowtab['frfrsince3'];
$frstate3=$rowtab['frstate3'];
$frcity3=$rowtab['frcity3'];
$frlocation3=$rowtab['frlocation3'];
$frspmem3=$rowtab['frspmem3'];


$frem_id4=$rowtab['frem_id4'];
$frname4=$rowtab['frname4'];
$frpet4=$rowtab['frpet4'];
$frfrisince4=$rowtab['frfrsince4'];
$frstate4=$rowtab['frstate4'];
$frcity4=$rowtab['frcity4'];
$frlocation4=$rowtab['frlocation4'];
$frspmem4=$rowtab['frspmem4'];
$print=$rowtab['print'];
//$frspmem4=$rowtab['frspmem4'];




    }
	
	
	
$momdate=date_create($mbirth_date);
$mombirthdate=date_format($momdate,"d/m/Y H:i:s");


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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<SCRIPT>
function addMore() {
	$("<DIV>").load("addmorefri.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</SCRIPT>
<script type="text/javascript">
$(document).ready(function(){
	//alert('hhh');
    $('#mom_birth_state').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#mom_birth_city').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	$('#hostel_state_name').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#hostel_city_name').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	$('#ms_state').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#ms_city').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	$('#college_state_name').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#college_city_name').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
    
	$('#mom_state1').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#mom_city1').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	$('#mom_state_last').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#mom_city_last').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
    
	$('#jwd_state_first_meet').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#jwd_city_first_meet').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	$('#jwd_state_anniversary').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#jwd_city_anniversary').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
	
	$('#jwd_state_marriage').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#jwd_city_marriage').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
	
	$('#jwd_state_honeymoon').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#jwd_city_honeymoon').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
	$('#frstate').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#frcity').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
	$('#frstate1').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#frcity1').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
	$('#frstate2').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#frcity2').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
	$('#frstate3').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#frcity3').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
	$('#frstate4').on('change',function(){
		//alert('hhhf');
        var countryID = $(this).val();
		//var cust_name = $('#cust_name').val();
		var cust_name1 = {countryID:countryID};
        if(countryID){
            $.ajax({
                type:'POST',
                url:'statecityback.php',
                data:{countryID:countryID},
                success:function(html){
                    $('#frcity4').html(html);
					
                }
            }); 
        }else{
           
        }
    });
	
	
	
    
    $('#cregion').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'zoneData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#cdivision').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});



</script>
<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>



</head>

<body style="background-color:#f4e9f4">

    <!-- Top Bar -->
    <div id="page">
        <!-- Top Bar -->

      
		  <?php
	  
	  include 'header.php';
	  
	  
	  
	  
	 
	  
	  ?>














        <section id="about-us" class="page-section " style="margin-bottom:-50px">
            <div class="container">
            <div class="row">
			
			
             <h2 class="title">
                       <center> <b>
                            <font color="#eb008b">Dad Details</font>
                        </b></center>
                    </h2>
					
					<?php 
					
					 $er = $_GET['er'];
	  
	  if ($_SESSION['er']== 1 )
	  {
		echo '<div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Success! </strong>
    your information is saved successfully..!!!.
</div>';  
		unset($_SESSION['er']);  
	  }
		if ($_SESSION['er']== 2 )
	  {
echo '<div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Failed! </strong>
    Please enter data before submitting..!!!.
</div>';  
unset($_SESSION['er']);  
		}
			
					
					?>

		<div class="tab" style="background-color:#f4e9f4">
  <button class="tablinks" onclick="openCity(event, 'Personal')" id="defaultOpen">Personal</button>
  <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
  <button class="tablinks" onclick="openCity(event, 'Professional')">Professional</button>
  <button class="tablinks" onclick="openCity(event, 'WithDad')" >With Mom</button>
  <button class="tablinks" onclick="openCity(event, 'PhotoUpload')">Photo Upload</button>
  <button class="tablinks" onclick="openCity(event, 'MomLifeinherwords')">Dad Life in his own words</button>
  <button class="tablinks" onclick="openCity(event, 'Friends')">Friends</button>
  <button class="tablinks" onclick="openCity(event, 'Feelingsforher')">Feelings for his</button>
  <button class="tablinks" onclick="window.open('dadbio','_blank');" >View Biography</button>
</div>



 
			  <?php
			  
			  if ($print == 'print')
			  {
			  ?>
			  
			  
			 <style type="text/css">
  input {
    pointer-events: none;
   }
  textarea {
    pointer-events: none;
   }
 #forma button {
     pointer-events: none;
  cursor: not-allowed;
}
   #forma1  {
     pointer-events: none;
  cursor: not-allowed;
}
  select {
    pointer-events: none;
   }
 </style>
            
			  <?php } ?>  
             




<div id="Personal" class="tabcontent">
 <form method="post"  class="form-box register-form contact-form no-margin" id="forma" name="motors" action="dadbio_submitn.php" enctype="multipart/form-data">
  
  <center><h3>Personal Details</h3></center>
                          
					   <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="mom_full_name" placeholder="Full Name" value="<?php echo $mom_full_name;?>" enctype="multipart/form-data">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="before_marriage_name" placeholder="Pet Name" value="<?php echo $before_marriage_name;?>">
                                                        </div>
                                                    </div>
                                                    <!-- check in -->
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <div class="input-group date date-picker">
                                                                <input type="text" class="form-control" name="mom_birth_date" placeholder="Birth Date" value="<?php echo $mom_birth_date;?>" />
                                                                <span class="input-group-addon">
                                                                    <span class="icon-calendar12 fa-1x"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <!-- check Out -->
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="mom_birth_place" placeholder="Birth Place" value="<?php echo $mom_birth_place;?>">
                                                        </div>
                                                    </div>
													
													
													
													   <div class="col-sm-3">
                                                        <select class="form-control" name="mom_birth_state" id="mom_birth_state" value="<?php echo $mom_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($mom_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mom_birth_city"  id="mom_birth_city" value="<?php echo $mom_city;?>">
														<?php
														if($mom_city != '')
														{
                                                            echo "<option value='".$mom_city."'>$mom_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>
                                                    <!-- Adults -->
                                                 
                                                    <input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">  
						<center>  <button type="submit" id="forma1" class="btn btn-primary">Save</button></center>  
						 
						  
						  
                    

</div>




<div id="Education" class="tabcontent">
  <center><h3>Mom Educational Journey
</h3></center>

                        <div class="row">
                            <div class="col-md-12">
                                <div role="tabpanel" class="travel-tab">
                                    <!-- Nav tabs -->



                                    <!-- Tab panes -->
                                    <br /><br />
                                    <h5>Schooling</h5>
                                    <!-- Tab panes -->
                                    <div class="tab-content" id="mom_followup">
                                        <!-- Hotels Tab -->



                                        <div role="tabpanel" class="tab-pane active">

                                            <div class="row">


                                                <input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="school_name" placeholder="School Name" value="<?php echo $ms_school_name; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" value="primary" <?php echo ($ms_primary_secondary== 'primary') ?  "checked" : "" ;  ?>/> Primary
																
																
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" value="secondary" <?php echo ($ms_primary_secondary== 'secondary') ?  "checked" : "" ;  ?>/> Secondary
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                  
													   <div class="col-sm-3">
                                                        <select class="form-control" name="ms_state" id="ms_state" value="<?php echo $ms_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($ms_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="ms_city"  id="ms_city" value="<?php echo $ms_city;?>">
														<?php
														if($ms_city != '')
														{
                                                            echo "<option value='".$ms_city."'>$ms_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="start_year" value="<?php echo $ms_year_start; ?>">
                                                            <option>Start Year</option>
                                                            <option <?php if ($ms_year_start == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($ms_year_start == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($ms_year_start == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($ms_year_start == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($ms_year_start == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($ms_year_start == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($ms_year_start == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($ms_year_start == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($ms_year_start == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($ms_year_start == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($ms_year_start == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($ms_year_start == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($ms_year_start == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($ms_year_start == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($ms_year_start == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($ms_year_start == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($ms_year_start == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($ms_year_start == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($ms_year_start == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($ms_year_start == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($ms_year_start == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($ms_year_start == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($ms_year_start == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($ms_year_start == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($ms_year_start == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($ms_year_start == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($ms_year_start == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($ms_year_start == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($ms_year_start == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($ms_year_start == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($ms_year_start == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($ms_year_start == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($ms_year_start == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($ms_year_start == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($ms_year_start == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($ms_year_start == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($ms_year_start == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($ms_year_start == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($ms_year_start == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($ms_year_start == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($ms_year_start == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($ms_year_start == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($ms_year_start == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($ms_year_start == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($ms_year_start == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($ms_year_start == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($ms_year_start == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="end_year" value="<?php echo $ms_year_end; ?>">
                                                            <option>End Year</option>
                                                            <option <?php if ($ms_year_end == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($ms_year_end == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($ms_year_end == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($ms_year_end == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($ms_year_end == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($ms_year_end == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($ms_year_end == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($ms_year_end == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($ms_year_end == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($ms_year_end == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($ms_year_end == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($ms_year_end == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($ms_year_end == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($ms_year_end == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($ms_year_end == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($ms_year_end == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($ms_year_end == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($ms_year_end == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($ms_year_end == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($ms_year_end == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($ms_year_end == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($ms_year_end == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($ms_year_end == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($ms_year_end == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($ms_year_end == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($ms_year_end == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($ms_year_end == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($ms_year_end == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($ms_year_end == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($ms_year_end == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($ms_year_end == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($ms_year_end == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($ms_year_end == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($ms_year_end == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($ms_year_end == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($ms_year_end == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($ms_year_end == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($ms_year_end == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($ms_year_end == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($ms_year_end == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($ms_year_end == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($ms_year_end == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($ms_year_end == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($ms_year_end == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($ms_year_end == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($ms_year_end == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($ms_year_end == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="any_sp_memories" rows="3" placeholder="Any special memories"><?php echo $ms_special_memories; ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'SCHOOLING'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#SCHOOLING" class="btn btn-primary  active"  target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                   <!--  <a href="#"><button type="button" class="btn btn-primary" id="add_mom_followup">Add More</button></a>-->


                                    <!-- Tab panes -->
                                    <br /><br />
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->

                                        <h5>College / Graduation</h5>

                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">




                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="college_name" value="<?php echo $mc_college_name; ?>" placeholder="College Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="course_name" value="<?php echo $mc_course; ?>" placeholder="Course">
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-sm-12">

                                                   
													   <div class="col-sm-3">
                                                        <select class="form-control" name="college_state_name" id="college_state_name" value="<?php echo $mc_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($mc_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="college_city_name"  id="college_city_name" value="<?php echo $mc_city;?>">
														<?php
														if($mc_city != '')
														{
                                                            echo "<option value='".$mc_city."'>$mc_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="college_start_year" value="<?php echo $mc_year_start; ?>">
                                                            <option>Start Year</option>
                                                            <option <?php if ($mc_year_start == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($mc_year_start == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($mc_year_start == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($mc_year_start == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($mc_year_start == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($mc_year_start == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($mc_year_start == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($mc_year_start == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($mc_year_start == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($mc_year_start == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($mc_year_start == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($mc_year_start == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($mc_year_start == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($mc_year_start == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($mc_year_start == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($mc_year_start == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($mc_year_start == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($mc_year_start == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($mc_year_start == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($mc_year_start == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($mc_year_start == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($mc_year_start == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($mc_year_start == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($mc_year_start == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($mc_year_start == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($mc_year_start == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($mc_year_start == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($mc_year_start == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($mc_year_start == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($mc_year_start == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($mc_year_start == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($mc_year_start == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($mc_year_start == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($mc_year_start == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($mc_year_start == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($mc_year_start == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($mc_year_start == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($mc_year_start == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($mc_year_start == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($mc_year_start == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($mc_year_start == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($mc_year_start == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($mc_year_start == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($mc_year_start == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($mc_year_start == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($mc_year_start == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($mc_year_start == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="college_end_year" value="<?php echo $mc_year_end; ?>">
                                                            <option>End Year</option>
                                                            <option <?php if ($mc_year_end == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($mc_year_end == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($mc_year_end == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($mc_year_end == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($mc_year_end == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($mc_year_end == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($mc_year_end == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($mc_year_end == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($mc_year_end == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($mc_year_end == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($mc_year_end == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($mc_year_end == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($mc_year_end == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($mc_year_end == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($mc_year_end == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($mc_year_end == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($mc_year_end == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($mc_year_end == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($mc_year_end == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($mc_year_end == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($mc_year_end == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($mc_year_end == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($mc_year_end == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($mc_year_end == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($mc_year_end == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($mc_year_end == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($mc_year_end == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($mc_year_end == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($mc_year_end == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($mc_year_end == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($mc_year_end == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($mc_year_end == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($mc_year_end == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($mc_year_end == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($mc_year_end == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($mc_year_end == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($mc_year_end == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($mc_year_end == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($mc_year_end == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($mc_year_end == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($mc_year_end == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($mc_year_end == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($mc_year_end == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($mc_year_end == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($mc_year_end == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($mc_year_end == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($mc_year_end == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="college_any_special_memories" placeholder="Any special memories"><?php echo $mc_special_memories; ?></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files1[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'COLLEGE'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#COLLEGE" class="btn btn-primary  active" role="button"  target="_blank"  aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>




                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!--<a href="#"><button type="button" class="btn btn-primary" disabled>Add More</button></a>-->
                                    <br /><br />
                                    <!-- Cars -->

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->

                                        <h5>Hostel</h5>

                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <!-- <div class="col-sm-12">
                                                No Hostel<input type="checkbox" class="form-control" id="exampleInputName1">
                                            </div>-->


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="hostel_name" value="<?php echo $mh_hostel_name; ?>" placeholder="Hostel Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="text" class="form-control" name="hostel_course_name" value="<?php echo $mh_course; ?>" placeholder="Course">
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>








                                                <div class="col-sm-12">

                                                   
													   <div class="col-sm-3">
                                                        <select class="form-control" name="hostel_state_name" id="hostel_state_name" value="<?php echo $mh_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($mh_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="hostel_city_name"  id="hostel_city_name" value="<?php echo $mh_city;?>">
														<?php
														if($mh_city != '')
														{
                                                            echo "<option value='".$mh_city."'>$mh_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mwork_start_year1" value="<?php echo $mh_year_start; ?>">
                                                            <option>Start Year</option>
                                                            <option <?php if ($mh_year_start == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($mh_year_start == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($mh_year_start == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($mh_year_start == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($mh_year_start == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($mh_year_start == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($mh_year_start == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($mh_year_start == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($mh_year_start == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($mh_year_start == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($mh_year_start == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($mh_year_start == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($mh_year_start == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($mh_year_start == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($mh_year_start == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($mh_year_start == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($mh_year_start == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($mh_year_start == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($mh_year_start == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($mh_year_start == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($mh_year_start == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($mh_year_start == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($mh_year_start == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($mh_year_start == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($mh_year_start == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($mh_year_start == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($mh_year_start == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($mh_year_start == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($mh_year_start == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($mh_year_start == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($mh_year_start == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($mh_year_start == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($mh_year_start == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($mh_year_start == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($mh_year_start == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($mh_year_start == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($mh_year_start == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($mh_year_start == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($mh_year_start == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($mh_year_start == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($mh_year_start == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($mh_year_start == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($mh_year_start == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($mh_year_start == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($mh_year_start == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($mh_year_start == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($mh_year_start == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mwork_end_year1" value="<?php echo $mh_year_end; ?>">
                                                            <option>End Year</option>
                                                            <option <?php if ($mh_year_end == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($mh_year_end == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($mh_year_end == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($mh_year_end == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($mh_year_end == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($mh_year_end == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($mh_year_end == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($mh_year_end == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($mh_year_end == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($mh_year_end == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($mh_year_end == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($mh_year_end == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($mh_year_end == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($mh_year_end == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($mh_year_end == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($mh_year_end == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($mh_year_end == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($mh_year_end == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($mh_year_end == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($mh_year_end == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($mh_year_end == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($mh_year_end == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($mh_year_end == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($mh_year_end == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($mh_year_end == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($mh_year_end == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($mh_year_end == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($mh_year_end == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($mh_year_end == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($mh_year_end == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($mh_year_end == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($mh_year_end == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($mh_year_end == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($mh_year_end == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($mh_year_end == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($mh_year_end == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($mh_year_end == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($mh_year_end == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($mh_year_end == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($mh_year_end == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($mh_year_end == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($mh_year_end == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($mh_year_end == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($mh_year_end == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($mh_year_end == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($mh_year_end == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($mh_year_end == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="hostel_any_special_memories" placeholder="Any special memories"><?php echo $mh_special_memories; ?></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files2[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'HOSTEL'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#HOSTEL" class="btn btn-primary  active" target="_blank"  role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>




                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->


                                </div>
                            </div>
                        </div>


                       <center>
                                <button type="submit" id="forma1"  class="btn btn-primary">Save</button>
                                
                           </center>




                   

</div>



<div id="Professional" class="tabcontent">
  <center><h3>Dad Professional Journey</h3></center>
                        <div class="row">
                            <div class="col-md-12">
                                <div role="tabpanel" class="travel-tab">
                                    <!-- Nav tabs -->



                                    <br />
                                    <!-- Tab panes -->
                                    <br /><br />
                                    <!-- Tab panes -->
                                    <div class="tab-content">
									
									
                                        <!-- Hotels Tab -->
                                        <input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">
                                        <h5>His 1st Job</h5>

                                        <div role="tabpanel" class="tab-pane active" id="hotels">
										<style>
										 .big-checkbox {width: 20px; height: 20px;}
										 </style>
 <label><input type="checkbox" class="big-checkbox" value="Not_Done_Any_Job" name="notdone" <?php echo ($not_done== 'Not_Done_Any_Job') ?  "checked" : "" ;  ?>/>Not Done Any Job?</label><br>
 
                                            <div class="row">




                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="mom_company_name1" value="<?php echo $her_company_name; ?>" placeholder="Company Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="mom_designation1" value="<?php echo $her_designation; ?>" placeholder="Designation">
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-sm-12">

                                                     <div class="col-sm-3">
                                                        <select class="form-control" name="mom_state1" id="mom_state1" value="<?php echo $her_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($her_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mom_city1"  id="mom_city1" value="<?php echo $her_city;?>">
														<?php
														if($her_city != '')
														{
                                                            echo "<option value='".$her_city."'>$her_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mwork_start_year1" value="<?php echo $her_year_start; ?>">
                                                            <option> Start Year</option>
                                                            <option <?php if ($her_year_start == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($her_year_start == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($her_year_start == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($her_year_start == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($her_year_start == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($her_year_start == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($her_year_start == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($her_year_start == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($her_year_start == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($her_year_start == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($her_year_start == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($her_year_start == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($her_year_start == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($her_year_start == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($her_year_start == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($her_year_start == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($her_year_start == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($her_year_start == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($her_year_start == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($her_year_start == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($her_year_start == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($her_year_start == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($her_year_start == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($her_year_start == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($her_year_start == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($her_year_start == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($her_year_start == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($her_year_start == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($her_year_start == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($her_year_start == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($her_year_start == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($her_year_start == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($her_year_start == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($her_year_start == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($her_year_start == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($her_year_start == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($her_year_start == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($her_year_start == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($her_year_start == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($her_year_start == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($her_year_start == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($her_year_start == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($her_year_start == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($her_year_start == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($her_year_start == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($her_year_start == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($her_year_start == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mwork_end_year1" value="<?php echo $her_year_end; ?>">
                                                            <option>Year</option>
															<option <?php if ($her_year_end == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($her_year_end == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($her_year_end == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($her_year_end == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($her_year_end == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($her_year_end == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($her_year_end == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($her_year_end == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($her_year_end == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($her_year_end == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($her_year_end == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($her_year_end == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($her_year_end == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($her_year_end == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($her_year_end == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($her_year_end == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($her_year_end == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($her_year_end == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($her_year_end == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($her_year_end == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($her_year_end == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($her_year_end == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($her_year_end == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($her_year_end == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($her_year_end == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($her_year_end == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($her_year_end == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($her_year_end == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($her_year_end == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($her_year_end == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($her_year_end == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($her_year_end == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($her_year_end == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($her_year_end == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($her_year_end == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($her_year_end == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($her_year_end == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($her_year_end == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($her_year_end == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($her_year_end == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($her_year_end == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($her_year_end == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($her_year_end == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($her_year_end == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($her_year_end == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($her_year_end == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($her_year_end == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="<?php echo $her_special_achievements; ?>" name="mwork_special_achievement1" placeholder="Special Achievements">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <select class="form-control" name="mwork_special_achievement_year1" value="<?php echo $her_sp_achieve_year; ?>">
                                                                <option>Year</option>
                                                               <option <?php if ($her_sp_achieve_year == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($her_sp_achieve_year == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($her_sp_achieve_year == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($her_sp_achieve_year == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($her_sp_achieve_year == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($her_sp_achieve_year == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($her_sp_achieve_year == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($her_sp_achieve_year == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($her_sp_achieve_year == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($her_sp_achieve_year == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($her_sp_achieve_year == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($her_sp_achieve_year == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($her_sp_achieve_year == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($her_sp_achieve_year == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($her_sp_achieve_year == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($her_sp_achieve_year == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($her_sp_achieve_year == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($her_sp_achieve_year == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($her_sp_achieve_year == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($her_sp_achieve_year == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($her_sp_achieve_year == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($her_sp_achieve_year == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($her_sp_achieve_year == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($her_sp_achieve_year == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($her_sp_achieve_year == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($her_sp_achieve_year == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($her_sp_achieve_year == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($her_sp_achieve_year == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($her_sp_achieve_year == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($her_sp_achieve_year == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($her_sp_achieve_year == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($her_sp_achieve_year == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($her_sp_achieve_year == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($her_sp_achieve_year == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($her_sp_achieve_year == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($her_sp_achieve_year == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($her_sp_achieve_year == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($her_sp_achieve_year == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($her_sp_achieve_year == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($her_sp_achieve_year == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($her_sp_achieve_year == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($her_sp_achieve_year == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($her_sp_achieve_year == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($her_sp_achieve_year == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($her_sp_achieve_year == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($her_sp_achieve_year == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($her_sp_achieve_year == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="work_special_memories1" rows="3" placeholder="Any special memories"><?php echo $her_special_memories; ?></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'FIRSTJOB'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#FIRSTJOB" class="btn btn-primary  active"  target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>


                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->



                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <!-- Cars -->

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->

                                        <h5>His Last Job</h5>

                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <!-- <div class="col-sm-12">
                                                No Hostel<input type="checkbox" class="form-control" id="exampleInputName1">
                                            </div>-->


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="<?php echo $her_company_name1; ?>" name="mom_company_name_last" placeholder="Company Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="text" class="form-control" value="<?php echo $her_designation1; ?>" name="mom_designation_last" placeholder="Designation">
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>




                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                   <div class="col-sm-3">
                                                        <select class="form-control" name="mom_state_last" id="mom_state_last" value="<?php echo $her_state1;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($her_state1 == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mom_city_last"  id="mom_city_last" value="<?php echo $her_city1;?>">
														<?php
														if($her_city1 != '')
														{
                                                            echo "<option value='".$her_city1."'>$her_city1</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mwork_start_year_last" value="<?php echo $her_year_start1; ?>">
                                                            <option>Start Year</option>
                                                            <option <?php if ($her_year_start1 == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($her_year_start1 == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($her_year_start1 == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($her_year_start1 == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($her_year_start1 == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($her_year_start1 == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($her_year_start1 == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($her_year_start1 == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($her_year_start1 == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($her_year_start1 == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($her_year_start1 == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($her_year_start1 == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($her_year_start1 == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($her_year_start1 == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($her_year_start1 == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($her_year_start1 == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($her_year_start1 == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($her_year_start1 == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($her_year_start1 == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($her_year_start1 == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($her_year_start1 == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($her_year_start1 == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($her_year_start1 == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($her_year_start1 == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($her_year_start1 == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($her_year_start1 == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($her_year_start1 == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($her_year_start1 == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($her_year_start1 == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($her_year_start1 == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($her_year_start1 == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($her_year_start1 == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($her_year_start1 == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($her_year_start1 == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($her_year_start1 == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($her_year_start1 == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($her_year_start1 == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($her_year_start1 == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($her_year_start1 == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($her_year_start1 == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($her_year_start1 == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($her_year_start1 == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($her_year_start1 == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($her_year_start1 == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($her_year_start1 == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($her_year_start1 == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($her_year_start1 == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="mwork_end_year_last" value="<?php echo $her_year_end1; ?>">
                                                            <option>End Year</option>
                                                            <option <?php if ($her_year_end1 == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($her_year_end1 == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($her_year_end1 == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($her_year_end1 == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($her_year_end1 == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($her_year_end1 == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($her_year_end1 == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($her_year_end1 == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($her_year_end1 == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($her_year_end1 == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($her_year_end1 == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($her_year_end1 == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($her_year_end1 == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($her_year_end1 == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($her_year_end1 == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($her_year_end1 == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($her_year_end1 == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($her_year_end1 == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($her_year_end1 == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($her_year_end1 == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($her_year_end1 == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($her_year_end1 == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($her_year_end1 == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($her_year_end1 == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($her_year_end1 == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($her_year_end1 == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($her_year_end1 == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($her_year_end1 == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($her_year_end1 == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($her_year_end1 == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($her_year_end1 == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($her_year_end1 == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($her_year_end1 == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($her_year_end1 == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($her_year_end1 == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($her_year_end1 == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($her_year_end1 == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($her_year_end1 == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($her_year_end1 == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($her_year_end1 == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($her_year_end1 == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($her_year_end1 == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($her_year_end1 == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($her_year_end1 == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($her_year_end1 == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($her_year_end1 == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($her_year_end1 == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="<?php echo $her_special_achievements1; ?>" name="mwork_special_achievement2" placeholder="Special Achievements">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <select class="form-control" value="<?php echo $her_sp_achieve_year1; ?>" name="mwork_special_achievement_year2">
                                                                <option>Year</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1947 ) echo 'selected' ; ?> value='1947'>1947</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1948 ) echo 'selected' ; ?> value='1948'>1948</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1949 ) echo 'selected' ; ?> value='1949'>1949</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1950 ) echo 'selected' ; ?> value='1950'>1950</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1951 ) echo 'selected' ; ?> value='1951'>1951</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1952 ) echo 'selected' ; ?> value='1952'>1952</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1953 ) echo 'selected' ; ?> value='1953'>1953</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1954 ) echo 'selected' ; ?> value='1954'>1954</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1955 ) echo 'selected' ; ?> value='1955'>1955</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1956 ) echo 'selected' ; ?> value='1956'>1956</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1957 ) echo 'selected' ; ?> value='1957'>1957</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1958 ) echo 'selected' ; ?> value='1958'>1958</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1959 ) echo 'selected' ; ?> value='1959'>1959</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1960 ) echo 'selected' ; ?> value='1960'>1960</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1961 ) echo 'selected' ; ?> value='1961'>1961</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1962 ) echo 'selected' ; ?> value='1962'>1962</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1963 ) echo 'selected' ; ?> value='1963'>1963</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1964 ) echo 'selected' ; ?> value='1964'>1964</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1965 ) echo 'selected' ; ?> value='1965'>1965</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1966 ) echo 'selected' ; ?> value='1966'>1966</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1967 ) echo 'selected' ; ?> value='1967'>1967</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1968 ) echo 'selected' ; ?> value='1968'>1968</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1969 ) echo 'selected' ; ?> value='1969'>1969</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1970 ) echo 'selected' ; ?> value='1970'>1970</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1971 ) echo 'selected' ; ?> value='1971'>1971</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1972 ) echo 'selected' ; ?> value='1972'>1972</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1973 ) echo 'selected' ; ?> value='1973'>1973</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1974 ) echo 'selected' ; ?> value='1974'>1974</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1975 ) echo 'selected' ; ?> value='1975'>1975</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1976 ) echo 'selected' ; ?> value='1976'>1976</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1977 ) echo 'selected' ; ?> value='1977'>1977</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1978 ) echo 'selected' ; ?> value='1978'>1978</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1979 ) echo 'selected' ; ?> value='1979'>1979</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1980 ) echo 'selected' ; ?> value='1980'>1980</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1981 ) echo 'selected' ; ?> value='1981'>1981</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1982 ) echo 'selected' ; ?> value='1982'>1982</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1983 ) echo 'selected' ; ?> value='1983'>1983</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1984 ) echo 'selected' ; ?> value='1984'>1984</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1985 ) echo 'selected' ; ?> value='1985'>1985</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1986 ) echo 'selected' ; ?> value='1986'>1986</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1987 ) echo 'selected' ; ?> value='1987'>1987</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1988 ) echo 'selected' ; ?> value='1988'>1988</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1989 ) echo 'selected' ; ?> value='1989'>1989</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1990 ) echo 'selected' ; ?> value='1990'>1990</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1991 ) echo 'selected' ; ?> value='1991'>1991</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1992 ) echo 'selected' ; ?> value='1992'>1992</option>
                                                            <option <?php if ($her_sp_achieve_year1 == 1993 ) echo 'selected' ; ?> value='1993'>1993</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="work_special_memories2" placeholder="Any special memories"><?php echo $her_special_memories1; ?> </textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files4[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'LASTJOB'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#LASTJOB" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>


                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->



                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->


                                </div>
                            </div>
                        </div>


                       
                             
                               <center> <button type="submit" id="forma1"  class="btn btn-primary">Save</button></center>
                               
                           

                   

</div>		 

	
	
<div id="WithDad" class="tabcontent">
  <center><h3>Dad Journey with Mom</h3></center>
 
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <div role="tabpanel" class="travel-tab">
                                    <!-- Nav tabs -->


                                    <!-- Tab panes -->
                                    <br />
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->

                                        <h5>About Mom’s 1st Meet</h5>

                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">




                                                <div class="col-sm-12">
                                                    <input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">
                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_place_name_first_meet" value="<?php echo $meet_place_name; ?>" placeholder="Place Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jwd_state_first_meet" id="jwd_state_first_meet" value="<?php echo $meet_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($meet_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jwd_city_first_meet"  id="jwd_city_first_meet" value="<?php echo $meet_city;?>">
														<?php
														if($meet_city != '')
														{
                                                            echo "<option value='".$meet_city."'>$meet_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>



                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="jwd_date_first_meet" placeholder="Date" value="<?php echo $meet_date;?>" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_timing_first_meet" value="<?php echo $meet_timing; ?>" placeholder="Timing">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_her_dressing_first_meet" value="<?php echo $her_dressing; ?>" placeholder="Her Dressing">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_dads_dressing_first_meet" value="<?php echo $dad_dressing; ?>" placeholder="Dad's Dressing">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                           <textarea class="form-control" name="jwd_special_memories_first_meet" rows="3" placeholder="Any special memories"><?php echo $any_special_memories_meet; ?></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="files5[]" id="jwd_upload_photos_first_meet" multiple>
                                                        </div>
                                                    </div>

                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->



                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <!-- Cars -->

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->

                                        <h5>Anniversary</h5>

                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">




                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_place_name_anniversary" value="<?php echo $anniversary_place_name; ?>" placeholder="Place Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jwd_state_anniversary" id="jwd_state_anniversary" value="<?php echo $anniversary_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($anniversary_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jwd_city_anniversary"  id="jwd_city_anniversary" value="<?php echo $anniversary_city;?>">
														<?php
														if($anniversary_city != '')
														{
                                                            echo "<option value='".$anniversary_city."'>$anniversary_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>



                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="jwd_date_anniversary" value="<?php echo $anniversary_date; ?>" placeholder="Date" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_timing_anniversary" value="<?php echo $anniversary_timing; ?>" placeholder="Timing">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_her_dressing_anniversary" value="<?php echo $her_dressing2; ?>" placeholder="Her Dressing">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_dads_dressing_anniversary" value="<?php echo $dad_dressing2; ?>" placeholder="Dad's Dressing">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="jwd_special_memories_anniversary" placeholder="Any special memories"><?php echo $any_special_memories2; ?></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="files6[]" id="jwd_upload_photos_anniversary" multiple>
                                                        </div>
                                                    </div>

                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->



                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->
                                    <br /><br />

                                    <div class="tab-content">
                                        <!-- Hotels Tab -->

                                        <h5>Marriage</h5>

                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">




                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_place_name_marriage" value="<?php echo $marriage_place_name; ?>" placeholder="Place Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jwd_state_marriage" id="jwd_state_marriage" value="<?php echo $marriage_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($marriage_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jwd_city_marriage"  id="jwd_city_marriage" value="<?php echo $marriage_city;?>">
														<?php
														if($marriage_city != '')
														{
                                                            echo "<option value='".$marriage_city."'>$marriage_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>

                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="jwd_date_marriage" value="<?php echo $marriage_date; ?>" placeholder="Date" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_timing_marriage" value="<?php echo $marriage_timing; ?>" placeholder="Timing">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_her_dressing_marriage" value="<?php echo $her_dressing3; ?>" placeholder="Her Dressing">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_dads_dressing_marriage" value="<?php echo $dad_dressing3; ?>" placeholder="Dad's Dressing">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="jwd_special_memories_marriage" placeholder="Any special memories"><?php echo $any_special_memories3; ?></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="files7[]" id="jwd_upload_photos_marriage" multiple>
                                                        </div>
                                                    </div>

                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->



                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->
                                    <br /><br />

                                    <div class="tab-content">
                                        <!-- Hotels Tab -->

                                        <h5>Honeymoon</h5>

                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">




                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_place_name_honeymoon" value="<?php echo $honeymoon_place_name; ?>" placeholder="Place Name">
                                                        </div>
                                                    </div>



 <div class="col-sm-3">
                                                        <select class="form-control" name="jwd_state_honeymoon" id="jwd_state_honeymoon" value="<?php echo $honeymoon_state;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($honeymoon_state == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="jwd_city_honeymoon"  id="jwd_city_honeymoon" value="<?php echo $honeymoon_city;?>">
														<?php
														if($honeymoon_city != '')
														{
                                                            echo "<option value='".$honeymoon_city."'>$honeymoon_city</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>



                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="jwd_date_honeymoon" value="<?php echo $honeymoon_date; ?>" placeholder="Date" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_timing_honeymoon" value="<?php echo $meet_timing1; ?>" placeholder="Timing">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_her_dressing_honeymoon" value="<?php echo $her_dressing1; ?>" placeholder="Her Dressing">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="jwd_dads_dressing_honeymoon" value="<?php echo $dad_dressing1; ?>" placeholder="Dad's Dressing">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="jwd_special_memories_honeymoon" placeholder="Any special memories"><?php echo $any_special_memories1; ?></textarea>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="files8[]" id="jwd_upload_photos_honeymoon" multiple>
                                                        </div>
                                                    </div>

                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->



                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->


                                </div>
                            </div>
                        </div>


                        
                               
                             <center>   <button type="submit" id="forma1"  class="btn btn-primary">Save</button></center>
                          
                   

</div>



<div id="PhotoUpload" class="tabcontent">
  <center><h3>Mom Photographs</h3></center>
 
  <div class="col-md-12"><br>

                    <div data-example-id="togglable-tabs" role="tabpanel" class="bs-example bs-example-tabs" style="background-color:#fff">
                        <div class="tab-content" id="myTabContent" style="color:#fff">

                                <h3 class="title"><b>
                                        <font color="#eb008b">Useful Tips For Image Uploading</font>
                                    </b></h3>
                                <h5>
                                    <font color="#000"><b>In Windows, you normally can only select ONE file at a time (“select” means clicking on a file to highlight it).</b></font>
                                </h5>
                                <h5>
                                    <font color="#000"><b>But holding down the CTRL key or the Shift key as you click a file, allows you to select more than one.</b></font>
                                </h5>
                                <h5>
                                    <font color="#000"><b>CTRL – allows you to click and select multiple files that are anywhere on your file list, not necessarily next to each other.</b></font>
                                </h5>
                                <h5>
                                    <font color="#000"><b>Shift – allows you to select a group of files that are contiguous (i.e. next to each other) by clicking one file, and then holding Shift and clicking the last file.  All the files in between are then selected.</b></font>
                                </h5>
<h4>Please Select multiple images attime.
                                <br>
                           
                        </div>
                    </div>
                </div>
				
				
	                    <br />
                        <div class="row">
                            <div class="col-md-12">
                                <div role="tabpanel" class="travel-tab">
                                    <!-- Nav tabs -->

                                    <br />

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">
                                                <input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">
                                                <div class="col-sm-12">Childhood</div>


                                                <div class="col-sm-12">

                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files9[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'CHILDHOOD'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#CHILDHOOD" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>


                                                    <!-- <div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <!-- Cars -->

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">Teen Age</div>


                                                <div class="col-sm-12">

                                                   
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files10[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'TEENAGE'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#TEENAGE" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>



                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->
                                    <br /><br />

                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">Young Age</div>


                                                <div class="col-sm-12">

                                                   
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files11[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'YOUNGAGE'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#YOUNGAGE" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>



                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->
                                    <br /><br />

                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">Marriage</div>


                                                <div class="col-sm-12">

                                                   
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files12[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'MARRIAGE'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#MARRIAGE" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>



                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->
                                    <br /><br />

                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">Honeymoon</div>


                                                <div class="col-sm-12">

                                                  
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files13[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'HONEYMOON'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#HONEYMOON" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>



                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">With Complete Family</div>


                                                <div class="col-sm-12">

                                                    
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files17[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'FAMILY'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#FAMILY" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>



                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <br /><br />

                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">Current Age</div>


                                                <div class="col-sm-12">

                                                 
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group"><br>
                                                                    <input type="file" name="files18[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId' AND category = 'CURRENTAGE'";
																	$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#CURRENTAGE" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>



                                                    <!--<div class="col-sm-1" style="margin-top:-27px;margin-left:-28px">
                                                        <button type="submit" class="btn btn-primary">Browse</button>
                                                    </div>-->

                                                </div>


                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>


                        
                               <center> <button type="submit" id="forma1"  class="btn btn-primary">Save</button></center>
                               

                    			
				
 
</div>



<div id="MomLifeinherwords" class="tabcontent">
  <center><h3>Dad life in his own words</h3></center>
  
  
                           <br />
                           <div class="row">
                            <div class="col-md-12">

                                <div role="tabpanel" class="travel-tab">
                                    <!-- Nav tabs -->
                                    <br />
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">
<input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="3" name="her_feelings_for_life"  placeholder="My Life is..."><?php echo $my_life_inwords; ?></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <br /><br />
                                    <!-- Cars -->

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">His feelings for Mom</div>


                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="3" name="her_feelings_for_dad"  placeholder="Your dad is..."><?php echo $her_feelings_for_dad; ?></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->
                                    <br /><br />

                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">His feelings for you</div>


                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="3" name="her_feelings_for_me"  placeholder="You are a..."><?php echo $her_feelings_for_you; ?></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->
                                    <br /><br />

                                    <div class="tab-content">
                                        <!-- Hotels Tab -->
                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">His feelings for your sibling</div>


                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="3" name="her_feelings_for_sibling"  placeholder="Your brother / sister is..."><?php echo $her_feelings_for_siblings; ?></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cars -->
                                    <br /><br />

                                </div>
                            </div>
                        </div>


                       
                               <center> <button type="submit" id="forma1"  class="btn btn-primary">Save</button></center>
                                
                   

</div>		 

	

	
<div id="Friends" class="tabcontent">
 <center> <h3>Dad best friends</h3></center>
  
 


									   <div class="row" id="mom_followup">

                 

                                                <div class="col-sm-12">
												<center> <h4>First Best Friend<h4></center>
                                                    <input type="hidden" name="frem_id" id="frem_id" value="<?php echo $emailId; ?>">
                                                    <!-- Destination -->
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frname" id="frname" value="<?php echo $frname; ?>" placeholder="Friend Full Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frpet" id="frpet" value="<?php echo $frpet; ?>" placeholder="Pet Name">
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="frfrisince" id="frfrisince" value="<?php echo $frfrisince; ?>" placeholder="Friendship since" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>


 <div class="col-sm-3">
                                                        <select class="form-control" name="frstate" id="frstate" value="<?php echo $frstate;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($frstate == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="frcity"  id="frcity" value="<?php echo $frcity;?>">
														<?php
														if($frcity != '')
														{
                                                            echo "<option value='".$frcity."'>$frcity</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frlocation"  id="frlocation" value="<?php echo $frlocation; ?>" placeholder="Select Location">
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="frspmem"  id="frspmem" placeholder="Any special memories"><?php echo $frspmem; ?></textarea>
                                                        </div>
                                                    </div>



                                                  
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group">
                                                                    <input type="file" name="frfile[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId'  AND category = 'BESTFRIEND' AND frid= '1'";							$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#BESTFRIEND1" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>





                  

                                                <div class="col-sm-12">
												<center><h4>Second Best Friend<h4></center>
                                                    <input type="hidden" name="frem_id1" id="frem_id" value="<?php echo $emailId; ?>">
                                                    <!-- Destination -->
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frname1" id="frname" value="<?php echo $frname1; ?>" placeholder="Friend Full Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frpet1" id="frpet" value="<?php echo $frpet1; ?>" placeholder="Pet Name">
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="frfrisince1" id="frfrisince" value="<?php echo $frfrisince1; ?>" placeholder="Friendship since" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>


 <div class="col-sm-3">
                                                        <select class="form-control" name="frstate1" id="frstate1" value="<?php echo $frstate1;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($frstate1 == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="frcity1"  id="frcity1" value="<?php echo $frcity1;?>">
														<?php
														if($frcity1 != '')
														{
                                                            echo "<option value='".$frcity1."'>$frcity1</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frlocation1"  id="frlocation" value="<?php echo $frlocation1; ?>" placeholder="Select Location">
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="frspmem1"  id="frspmem" placeholder="Any special memories"><?php echo $frspmem1; ?></textarea>
                                                        </div>
                                                    </div>



                                                  
                                                  
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group">
                                                                    <input type="file" name="frfile1[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId'  AND category = 'BESTFRIEND' AND frid= '2'";							$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#BESTFRIEND2" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>





                

                                                <div class="col-sm-12">
												 <center> <h4>Third Best Friend<h4></center>
                                                    <input type="hidden" name="frem_id2" id="frem_id" value="<?php echo $emailId; ?>">
                                                    <!-- Destination -->
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frname2" id="frname" value="<?php echo $frname2; ?>" placeholder="Friend Full Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frpet2" id="frpet" value="<?php echo $frpet2; ?>" placeholder="Pet Name">
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="frfrisince2" id="frfrisince" value="<?php echo $frfrisince2; ?>" placeholder="Friendship since" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>


 <div class="col-sm-3">
                                                        <select class="form-control" name="frstate2" id="frstate2" value="<?php echo $frstate2;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($frstate2 == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="frcity2"  id="frcity2" value="<?php echo $frcity2;?>">
														<?php
														if($frcity2 != '')
														{
                                                            echo "<option value='".$frcity2."'>$frcity2</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frlocation2"  id="frlocation" value="<?php echo $frlocation2; ?>" placeholder="Select Location">
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="frspmem2"  id="frspmem" placeholder="Any special memories"><?php echo $frspmem2; ?></textarea>
                                                        </div>
                                                    </div>



                                                  
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group">
                                                                    <input type="file" name="frfile2[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId'  AND category = 'BESTFRIEND' AND frid= '3'";							$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#BESTFRIEND3" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>





               
                                                <div class="col-sm-12">
												 <center>  <h4>Fourth Best Friend<h4></center>

                                                    <input type="hidden" name="frem_id3" id="frem_id" value="<?php echo $emailId; ?>">
                                                    <!-- Destination -->
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frname3" id="frname" value="<?php echo $frname3; ?>" placeholder="Friend Full Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frpet3" id="frpet" value="<?php echo $frpet3; ?>" placeholder="Pet Name">
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="frfrisince3" id="frfrisince" value="<?php echo $frfrisince3; ?>" placeholder="Friendship since" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>


 <div class="col-sm-3">
                                                        <select class="form-control" name="frstate3" id="frstate3" value="<?php echo $frstate3;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($frstate3 == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="frcity3"  id="frcity3" value="<?php echo $frcity3;?>">
														<?php
														if($frcity3 != '')
														{
                                                            echo "<option value='".$frcity3."'>$frcity3</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frlocation3"  id="frlocation" value="<?php echo $frlocation3; ?>" placeholder="Select Location">
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="frspmem3"  id="frspmem" placeholder="Any special memories"><?php echo $frspmem3; ?></textarea>
                                                        </div>
                                                    </div>



                                                  
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group">
                                                                    <input type="file" name="frfile3[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId'  AND category = 'BESTFRIEND' AND frid= '4'";							$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#BESTFRIEND4" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>




              

                                                <div class="col-sm-12">
												    <h4>Fifth Best Friend<h4></center>
                                                    <input type="hidden" name="frem_id4" id="frem_id" value="<?php echo $emailId; ?>">
                                                    <!-- Destination -->
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frname4" id="frname" value="<?php echo $frname4; ?>" placeholder="Friend Full Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frpet4" id="frpet" value="<?php echo $frpet4; ?>" placeholder="Pet Name">
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-sm-12">

                                                    <!-- Destination -->
                                                    <div class="col-sm-3">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" class="form-control" name="frfrisince4" id="frfrisince" value="<?php echo $frfrisince4; ?>" placeholder="Friendship since" />
                                                            <span class="input-group-addon">
                                                                <span class="icon-calendar12 fa-1x"></span>
                                                            </span>
                                                        </div>
                                                    </div>


 <div class="col-sm-3">
                                                        <select class="form-control" name="frstate4" id="frstate4" value="<?php echo $frstate4;?>">
                                                            <option> Select State</option>
                                                           
														   <?php
			$sup=mysql_query('select distinct State from statecity where status = "Y"');
			while($suparr=mysql_fetch_assoc($sup)){
	$ssall =			($frstate4 == $suparr['State']) ? 'selected' : '';
				echo '<option value="'.$suparr['State'].'" '.$ssall.'>'.$suparr['State'].'</option>';
			}
			?>
														   
														   
                                                        </select>
                                                    </div>
                                                    <!-- No of Rooms -->
                                                    <div class="col-sm-3">
                                                        <select class="form-control" name="frcity4"  id="frcity4" value="<?php echo $frcity4;?>">
														<?php
														if($frcity4 != '')
														{
                                                            echo "<option value='".$frcity4."'>$frcity4</option>";
															
														}else
														{
                                                            echo "<option > Select City</option>";
														}
 ?>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="frlocation4"  id="frlocation" value="<?php echo $frlocation4; ?>" placeholder="Select Location">
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="3" name="frspmem4"  id="frspmem" placeholder="Any special memories"><?php echo $frspmem4; ?></textarea>
                                                        </div>
                                                    </div>



                                                  
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-8">
                                                                <div class="form-group">
                                                                    <input type="file" name="frfile4[]" class='form-control' multiple>
																	
                                                                                                                      </div>
                                                        </div>  
														<div class="col-sm-4">
                                                            
																	<?php
																	$sqltab="SELECT id FROM `dadpicture` where emailid='$emailId'  AND category = 'BESTFRIEND' AND frid= '5'";							$asdfg=mysql_query($sqltab) ;
																		$num2 = mysql_num_rows($asdfg);
																		if($num2 != 0)
																		{

																	echo '<a href="dadbio/index.php?contacttab=#BESTFRIEND5" class="btn btn-primary  active" target="_blank" role="button" aria-pressed="true">VIEW PHOTO</a>
';
																			
																		}
																	?>
																	</div>
                                                    </div>









                                                </div>

											  <center> <button type="submit" id="forma1"  class="btn btn-primary">Save</button></center>
                            
                                            </div> 
  
  
  
  



<div id="Feelingsforher" class="tabcontent">
  <center><h3>Your feeling for him</h3></center>
                           <br />
                           <div class="row">
                            <div class="col-md-12">
                                <div role="tabpanel" class="travel-tab">
                                    <!-- Nav tabs -->
                                    <br />
<input type="hidden" name="em_id" id="em_id" value="<?php echo $emailId; ?>">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Hotels Tab -->

                                        <div role="tabpanel" class="tab-pane active" id="hotels">

                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control"  rows="3" name="mom_final_any_sp_memories" placeholder="Any special memories"><?php echo $any_special_memories; ?></textarea>
                                                        </div>
                                                    </div>
													
													
													
													  <input type="radio" style="height: 20px;width: 20px;" name="choose_template" value="story_template" <?php echo ($choose_options== 'story_template') ?  "checked" : "" ;  ?> >Choose our pre-maid Sotry Template (Select Template)<br>
                                <input type="radio" name="choose_template" style="height: 20px;width: 20px;" value="customise_story" <?php echo ($choose_options== 'customise_story') ?  "checked" : "" ;  ?>>Create customise story (See Pricing)
                           
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>


                           


                            <!--<div class="col-sm-12">-->
                           <br>
                               <center> <button type="submit" class="btn btn-primary"  id="forma1" >Save</button></center>
                                
                            
                        </div>
                 

</div>

  </form>

	 

				 
				  
              
              </div>
			  
			  
			  
              </div>
       
        </section>




        

        <section class="page-section">
        </section>


	 <br><br>
						
	  
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    
	
 <?php
	  
	  include 'footer1.php';
	  
	  ?>
	 <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/photostack.js"></script>
    <!-- Date Picker -->
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
    <!-- Menu jQuery plugin -->
    <script type="text/javascript" src="js/hover-dropdown-menu.js"></script>
    <!-- Menu jQuery Bootstrap Addon -->
    <script type="text/javascript" src="js/jquery.hover-dropdown-menu-addon.js"></script>
    <!-- Scroll Top Menu -->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <!-- Sticky Menu -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <!-- Bootstrap Validation -->
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
    <!-- Revolution Slider -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/revolution-custom.js"></script>
    <!-- Portfolio Filter -->
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <!-- Animations -->
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/effect.js"></script>
    <!-- Owl Carousel Slider -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!-- Pretty Photo Popup -->
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!-- Parallax BG -->
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <!-- Fun Factor / Counter -->
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <!-- Twitter Feed -->
    <script type="text/javascript" src="js/tweet/carousel.js"></script>
    <script type="text/javascript" src="js/tweet/scripts.js"></script>
    <script type="text/javascript" src="js/tweet/tweetie.min.js"></script>
    <!-- Background Video -->
    <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
    <!-- Fancy select -->
    <script type="text/javascript" src="js/fancySelect.js"></script>
    <!-- Custom Js Code -->
    <script>
        new Photostack(document.getElementById('photostack-1'), {
            callback: function(item) {
                //console.log(item)
            }
        });

    </script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- Scripts -->




    <script type="text/javascript" src="./5a_files/js"></script>
</body>

</html>
