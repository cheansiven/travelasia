<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="enquire about cambodia, how to travel to cambodia" />
<meta name="title" content="enquiry form from A touch of Asia Travel: design your own journey" />
<meta name="description" content="A touch of Asia Travel will create the perfect luxury package for your party or family" />
<title>Book tour package : Travel Asia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/menu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/likebox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/bgstretcher.css" />
<!--<link rel="shortcut icon" href="<?php /*echo base_url();*/?>public/images/favicon.ico" />-->
<?php include('application/views/atoa/detect-browser.php');?>
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/bgstretcher.js"></script>
<script src="<?php echo base_url();?>public/js/mootools-core.js" type="text/javascript"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_GB/all.js#xfbml=1"></script>
<script src="<?php echo base_url();?>public/js/mootools.likebox.js" type="text/javascript"></script>
<link type="text/css" href="<?php echo base_url();?>public/css/jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.datepick.js"></script>
<?php include('application/views/atoa/background.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		$("html, body").animate({scrollTop: $("#body").offset().top - 150},'slow');
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		
	
	var form = $("#enquiryForm");
	var last_name = $("#last_name");
	var first_name = $("#first_name");
	var email = $("#email");
	var message = $("#message");
	var hearing = $("#hearing");
	var arrival_date = $("#arrival_date");
	var arrival_dateInfo = $("#arrival_dateInfo");
	var lenght_stay = $("#lenght_stay");
	var adults = $("#adults");
	var children = $("#children");
	var infants = $("#infants");
	var country = $("#country");
	var hotel_category = $("#hotel_category");
	var destination = $("#destination");
	
	var last_name_val = "YOUR LAST NAME*";
	var first_name_val = "YOUR FIRST NAME*";
	var email_val = "YOUR EMAIL*";
	var arrival_date_val = "EXPECTED ARRIVAL DATE*";
	var adults_val = "ADULTS*"
	var children_val = "CHILDREN*"
	var infants_val = "INFANTS*"
	var lenght_stay_val = "LENGTH OF STAY*"
	var country_val = "COUNTRY OF RESIDENCE*";
	var hotel_category_val = "Preferred Hotel Category*";
	var destination_val = "Preferred Destination*";
	
		
	$('#arrival_date').datepick({
		minDate: 0,
		onSelect: function() { 
						var nextDate = $('#arrival_date').val();
						var nextDay = nextDate.substring(0, 2);
						nextDay = parseInt(nextDate) + 1;
						nextDay = nextDay.toString();
						if (nextDay.length < 2) nextDay = "0" + nextDay;
						nextDate = nextDay + nextDate.substring(2);
						$('#untilDatepicker').datepick('option', 'minDate', nextDate);
						$('#untilDatepicker').val(nextDate);
						} 
		});
	
	
	 last_name.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
   
	last_name.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	 first_name.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
   first_name.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	
	 email.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
   
	 email.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	 country.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
   	country.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	
	 
	 adults.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
	 adults.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	children.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
	 children.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
   	infants.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
	 infants.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	
	lenght_stay.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
	 lenght_stay.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
   	
		arrival_date.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			$(this).removeClass("error");
        }
    });
	 arrival_date.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	
	 hotel_category.focus(function() {
		$(this).removeClass("error");
     });
	 
	 destination.focus(function() {
		$(this).removeClass("error");
     });
	 
	 message.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			
        }
    });
	
	message.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	
	 hearing.focus(function() {
        if($(this).val() == $(this).data('default_val') || !$(this).data('default_val')) {
            $(this).data('default_val', $(this).val());
            $(this).val('');
			
        }
    });
	
	hearing.blur(function() {
       if($(this).val() == "") $(this).val($(this).data('default_val'));
    });
	
	//On Submitting
	form.submit(function(){
		if(validateLastName() & validateFirstName() & validateEmail() & validateArrivalDate() & validateLenghtStay() & validateAdults() & validateChildren() & validateInfants() & validateCountry() & validateHotelCategory() & validateDestination())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = email.val();
		var filter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,10})$/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			if(email.val() == email.data('default_val') || email.val() == "")
				email.val(email.data('default_val'));
			
			return false;
		}
	}
	function validateLastName(){
		if(last_name.val() == last_name_val || last_name.val() == ""){
			last_name.addClass("error");
			last_name.val(last_name_val); 
			return false;
		}
		//if it's valid
		else{
			last_name.removeClass("error");
			return true;
		}
		
	}
	
	function validateFirstName(){
		//if it's NOT valid
		if(first_name.val() == first_name_val || first_name.val() == ""){
			first_name.addClass("error");
			first_name.val(first_name_val);
			return false;
		}
		//if it's valid
		else{
			first_name.removeClass("error");
			return true;
		}
	}
	
	
	
	
	function validateArrivalDate(){
		//if it's NOT valid
		if(arrival_date.val() == arrival_date_val || arrival_date.val() == ""){
			arrival_date.addClass("error");
			arrival_date.val(arrival_date_val);
			return false;
		}
		//if it's valid
		else{
			arrival_date.removeClass("error");
			return true;
		}
	}
	
	
	function validateLenghtStay(){
		//if it's NOT valid
		if(lenght_stay.val() == lenght_stay_val || lenght_stay.val() == ""){
			lenght_stay.addClass("error");
			lenght_stay.val(lenght_stay_val);
			return false;
		}
		//if it's valid
		else{
			lenght_stay.removeClass("error");
			return true;
		}
	}
	
	
	function validateNumberGuest(){
		//if it's NOT valid
		if(nbr_guest.val() == nbr_guest_val || nbr_guest.val() == ""){
			nbr_guest.addClass("error");
			nbr_guest.val(nbr_guest_val);
			return false;
		}
		//if it's valid
		else{
			nbr_guest.removeClass("error");
			return true;
		}
	}
	
	
	function validateCountry(){
		//if it's NOT valid
		if(country.val() == country_val || country.val() == ""){
			country.addClass("error");
			country.val(country_val);
			return false;
		}
		//if it's valid
		else{
			country.removeClass("error");
			return true;
		}
	}
	
	
	function validateHotelCategory(){
		//if it's NOT valid
		if(hotel_category.val() == ""){
			hotel_category.addClass("error");
			return false;
		}
		//if it's valid
		else{
			hotel_category.removeClass("error");
			return true;
		}
	}
	
	function validateDestination(){
		//if it's NOT valid
		if(destination.val() == ""){
			destination.addClass("error");
			return false;
		}
		//if it's valid
		else{
			destination.removeClass("error");
			return true;
		}
	}
	
	function validateAdults(){
		//if it's NOT valid
		if(adults.val() == adults_val || adults.val() == ""){
			adults.addClass("error");
			adults.val(adults_val);
			return false;
		}
		//if it's valid
		else{
			adults.removeClass("error");
			return true;
		}
	}
	
	
	function validateChildren(){
		//if it's NOT valid
		if(children.val() == children_val || children.val() == ""){
			children.addClass("error");
			children.val(children_val);
			return false;
		}
		//if it's valid
		else{
			children.removeClass("error");
			return true;
		}
	}
	
	
	function validateInfants(){
		//if it's NOT valid
		if(infants.val() == infants_val || infants.val() == ""){
			infants.addClass("error");
			infants.val(infants_val);
			return false;
		}
		//if it's valid
		else{
			infants.removeClass("error");
			return true;
		}
	}
	
});
	
</script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/main.js"></script>
<?php include('application/views/atoa/analytics.html');?>
</head>
<body onLoad="showModal();">
<div id="container">
  <?php include('application/views/atoa/header.php');?>
  <div id="body"> 
    <!-- Body start --> 
    <div id="left-side-link">
		<a href="<?php echo base_url();?>">
			<img src="<?php echo base_url();?>public/images/homes-left-side.png" alt="Home left side"/>
		</a>
	</div>
	<div id="right-side-link">
		<a href="#enquiryForm">
			<img src="<?php echo base_url();?>public/images/white-envelope.png" alt="Contact us"/>
		</a>
		<a href="https://www.facebook.com/travelasia.travel" target="_blank">
			<img src="<?php echo base_url();?>public/images/fb-right-side.png" alt="Facebook page"/>
		</a>
		<a href="https://plus.google.com/+TravelasiaTravelalacarte/about" rel="publisher" target="_blank">
			<img src="<?php echo base_url();?>public/images/gg-right-side.png" alt="G+ profile page"/>
		</a>
    </div>
    <!-- Body end --> 
  </div>
  <div id="footer"> 
    <!-- Footer start -->
    <div id="tooltip_contain">
      <?php //include('application/views/atoa/popup-contain.php'); ?>
    </div>
    <div class="nav-wrap">
      <div class="wrapper_inner">
        <?php include('application/views/atoa/menu.php'); ?>
      </div>
    </div>
    <div id="bg_footer">
      <div id="bg_contents">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">
                <div class="blogBookTour">
                    
                    <div>
                    <p>Thank you for your interest in Travel Asia a la carte. Please complete the request form or <a href="mailto:info@travelasia.travel" class="red_link">click here</a> if you prefer to contact us by email. One of our travel consultants will answer your request within the next 24 hours.</p>
                    </div>
                    
                   
                </div> 
            </td>
            <td class="bordertemplate"></td>
            <td valign="top">
            <?php echo form_open_multipart('atoa/sendEnquiry', 'id="enquiryForm" name="enquiryForm"'); ?>
            <div class="blogContentsBookTour">
                <h1>Your Details</h1>
    			<select id="title" name="title" class="slectSex">
                	<option value="MR.">MR.</option>
                    <option value="MRS.">MISS</option>
                    <option value="MRS.">MRS.</option>
                    <option value="MS.">MS.</option>
                </select>
                <input type="text" name="last_name" id="last_name" class="boxLastName" value="YOUR LAST NAME*">
                
                <input type="text" name="first_name" id="first_name" class="boxFirstName" value="YOUR FIRST NAME*">
                
                <input type="text" name="email" id="email" class="boxYourEmail" value="YOUR EMAIL*">
                
                <input type="text" name="country" id="country" class="boxCountryOfResidence" value="COUNTRY OF RESIDENCE*">
            </div>
            
            <div class="blogContentsBookTour">
                <h1>Your Request</h1>
                <input type="text" name="arrival_date" id="arrival_date" class="boxArrivalDate" value="EXPECTED ARRIVAL DATE*">
                <input type="text" name="lenght_stay" id="lenght_stay" value="LENGTH OF STAY*" class="boxInfants">
                 
               <input type="text" name="adults" id="adults" class="boxAdults" value="ADULTS*">
                
                <input type="text" name="children" id="children" value="CHILDREN*" class="boxChildren" >
                
                <input type="text" name="infants" id="infants" value="INFANTS*" class="boxInfants">
                
                
                <?php echo form_dropdown('destination', $destination, '', 'id="destination" class="boxDestination"');  ?>	
                <?php echo form_dropdown('hotel_category', $category, '', 'id="hotel_category" class="boxPreferred"');  ?>
                 <?php //echo form_dropdown('language', $language, '', 'id="language" class="boxDesiredLanguage"');  ?>
                 
                 <textarea id="message" name="message" class="boxAdditional">If you have a set budget, a specific interest or particular activity that you would like to include, we can tailor the proposal to meet your needs. Tell Travel Asia a la carte about your personal interests/special requirements so we can provide your dream holiday.</textarea>
                 
                  <textarea id="hearing" name="hearing" class="boxHear">How do you hear about us?</textarea>
                 
            </div>
            <div class="cancelReset">
                <a href="javascript:history.back()">Cancel</a>&nbsp;&nbsp;&nbsp;
                <a href="javascript:document.getElementById('enquiryForm').reset();">Reset</a>
            </div>
            
            <input type="submit" value="SEND NOW" name="" id="" class="buttons blue">
            <?php echo form_close(); ?> 
            </td>
          </tr>
        </table>
      </div>
      <?php include('application/views/atoa/footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>