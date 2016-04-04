<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tours Management - New tour</title>
<?php include_once('application/views/admin/header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url();?>public/css/jquery.datepick.css">
<link href="<?php echo base_url();?>public/css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
	
<script src="<?php echo base_url();?>public/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url();?>public/js/jquery.datepick.js"></script>
<script>
	$(function() {
		$( "#tour_tabs" ).tabs();
	});
	</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#fromDatepicker').datepick({
		minDate: 0,
		onSelect: function() { 
		var nextDate = $('#fromDatepicker').val();
		var nextDay = nextDate.substring(0, 2);
		nextDay = parseInt(nextDate) + 1;
		nextDay = nextDay.toString();
		if (nextDay.length < 2) nextDay = "0" + nextDay;
			nextDate = nextDay + nextDate.substring(2);
			$('#untilDatepicker').datepick('option', 'minDate', nextDate);
			$('#untilDatepicker').val(nextDate);
		} 
	});
	
	$('#untilDatepicker').datepick({minDate: 0});
	
	
	$('#tourForm').submit(function(){
		
		if(validateName() && validateRegion())
			return true
		else
			return false;
		
	});
	
	function validateName(){
		if($('#name').val() == ""){
			$('#name').addClass("error");
			$('#nameError').toggle();
			$('#nameError').show();
			return false;
		}
		//if it's valid
		else{
			$('#name').removeClass("error");
			$('#nameError').toggle();
			$('#nameError').hide();
			return true;
		}
	}
	
	
	
});

function showRegions(country)
{	
	if (country.checked){
		
		$.ajax({ 
             url: "<?echo base_url();?>admin/tours/getRegions",
            data: {country_id: $(country).val()},
            type: "post",
            success: function(regions) //we're calling the response json array 'cities'
              {
               $('#country'+$(country).val()).append('<div id="region_country'+$(country).val()+'" style="padding-left:30px;"></div>')
                 for (var id in regions) {
                        $('#region_country'+$(country).val()).append('<div id="region'+id+'"><p><input name="region[]" type="checkbox" value="'+id+'"/> ' + regions[id] + '</p></div>');
                 }
               } //end success
        });
		
	} else $('#region_country'+$(country).val()).remove();
}


var rowNum = 0;
function addRow(frm) {
rowNum ++;

var row = '<div id="itinerary'+rowNum+'"><p><label for="itinerary_day'+rowNum+'">Day: </label><input type="text" autofocus="" class="round default-width-input" value="" name="itinerary_day'+rowNum+'" id="itinerary_day'+rowNum+'"></p><p><label for="itinerary_img'+rowNum+'">Image: </label><input type="file" autofocus="" class="round default-width-input" value="" name="itinerary_img'+rowNum+'" id="itinerary_img'+rowNum+'"></p><p><label for="itinerary_desc'+rowNum+'">Description: </label><textarea autofocus="" class="round full-width-textarea" id="itinerary_desc'+rowNum+'" rows="10" cols="40" name="itinerary_desc'+rowNum+'"></textarea></p><p><input type="button" value="Remove" onclick="removeRow('+rowNum+');"></p><input type="hidden" value="'+rowNum+'" name="rows[]"><hr></div>';
jQuery('#itinerary').append(row);

tinyMCE.init({
        selector: "#itinerary_desc"+rowNum
});
//add tinymce to this
tinyMCE.execCommand("mceAddControl", false, 'description'+rowNum);

}

function removeRow(rnum) {
jQuery('#itinerary'+rnum).remove();
}

var rowImage = 0;
function addImage(frm) {
rowImage ++;

var newRow = '<div id="gallery'+rowImage+'"><p><input type="file" autofocus="" class="round default-width-input" id="gallery'+rowImage+'" value="" name="gallery[]"></p><p><input type="button" value="Remove" onclick="removeImage('+rowImage+');"></p><hr></div>';
jQuery('#gallery').append(newRow);

}

function removeImage(rnum) {
jQuery('#gallery'+rnum).remove();
}


</script>



</head>
<body>


<div id="top-bar">
	<div class="page-full-width cf">
    	<ul id="nav" class="fl">
      		<li class="v-sep"><a href="<?php echo site_url("../");?>" class="round button dark ic-left-arrow image-left">Main</a></li>
      		<?php include_once('application/views/admin/menu.php'); ?>
    	</ul>
  	</div>
</div>
<div id="header-with-tabs">
	<div class="page-full-width cf">
    	<ul id="tabs" class="fl">
      		<li><a href="<?php echo site_url("admin/tours/");?>">Dashboard</a></li>
      		<li><a href="<?php echo site_url("admin/tours/add");?>" class="active-tab dashboard-tab">Add new tour</a></li>
    	</ul>
    	<?php include_once('application/views/admin/logo.php'); ?>
	</div>
</div>
<div id="content">
	<div class="page-full-width cf">
    	<div>
      		<div class="content-module">
        		
                <?php echo form_open_multipart('admin/tours/store', 'id="tourForm" name="tourForm"'); ?>
                
                	<div id="tour_tabs" style="float:left; width:100%;">
                        <ul>
                            <li><a href="#tabs-1">Info</a></li>
                            <li><a href="#tabs-2">Itinerary</a></li>
                            <li><a href="#tabs-3">Detail</a></li>
                            <li><a href="#tabs-4">Gallery</a></li>
                             <li><a href="#tabs-5">Meta</a></li>
                        </ul>
						<div id="tabs-1">
                            <div class="half-size-column fl"> 
                                <?php echo validation_errors(); ?>
                                 <p>
                                    <?php 
                                        echo '<br><span class="label">Active </span>';
                                        echo form_checkbox('active','1',true);
                                    ?>
                                </p>
                                <p>
                <?php
										
										  echo form_label('Ordering: ', 'ordering');
										  echo form_input('ordering','', 'id="ordering" class="round small-width-input" autofocus');
										  
									    ?>
              </p>
                                <p>
                                    <?php 
                                    echo form_label('Tour Name: ', 'name');
                                    echo form_input('name','', 'id="name" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                <p id="nameError">Please enter tour name</p>
                                <p>
                                    <?php
                                    echo form_label('Code: ', 'code');
                                    echo form_input('code','', 'id="code" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                
                                 <p>
                                    <?php 
                                        echo '<br><span class="label">Hightlight </span>';
										echo form_checkbox('highlight','1',false);
                                    ?>
                                </p>
                                <div id="countrylist">
                                    <?php
                                    echo '<p>'.form_label('Country: ', 'country').'</p>';
                                    $jsCountry = 'onClick="showRegions(this);"';
                                    foreach ($countries as $country):
                                        echo '<div id="country'.$country['id'].'"><p>'.form_checkbox('country[]',$country['id'],false, $jsCountry);
                                        echo $country['name'].'</p></div>'; ?>
                                    <?php endforeach ?> 
                                </div>
                               
                                 <p>
                                    <?php
                                    echo form_label('Arrival city: ', 'arrival_city');
                                    echo form_dropdown('arrival_city', $list_cities, '', 'id="arrival_city"');  
                                    ?>
                                </p>
                                <p>
                                    <?php		
                                    echo form_label('Departure city: ', 'departure_city');
                                   echo form_dropdown('departure_city', $list_cities, '', 'id="departure_city"'); 
                                    ?>
                                </p>
                              
                                <p>
                                    <?php
                                    echo form_label('Number of days: ', 'num_days');
                                    echo form_input('num_days','', 'id="num_days" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    echo form_label('Number of nights: ', 'num_nights');
                                    echo form_input('num_nights','', 'id="num_nights" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                 <p>
                                    <?php
                                    echo form_label('Rates A (Rack rates): ', 'rate');
                                    echo form_input('rate','', 'id="rate" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    echo form_label('Rates B (Promotional rate): ', 'promo_rate');
                                    echo form_input('promo_rate','', 'id="promo_rate" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                
                                <p>
                                    <?php
                                    echo form_input('start','Valid from month', 'id="fromDatepicker" class="round default-width-input" autofocus readonly="readonly"');
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    echo form_input('end','Valid until month', 'id="untilDatepicker" class="round default-width-input" autofocus readonly="readonly"');
                                    ?>
                                </p>
                                 <p>
                                    <?php 
                                        echo 'Valid all year round: ';
                                        echo form_checkbox('year_round','1',true);
                                    ?>
                                </p>
                               
                                <p>
                                    <?php		
                                    echo form_label('Main image: ', 'image');
                                    echo form_upload('image','', 'id="image" class="round default-width-input" autofocus'); 
                                    ?>
                                </p>
                            </div>
                            <div class="half-size-column fr"> 
                             <p>
                                    <?php 
                                        echo form_label('Promotion: ', 'promo_option');
										echo form_dropdown('promo_option', $promo_option, '', 'id="promo_option"');  
                                    ?>
                                    
                                </p>
                                 <p>
                            	<?php 
                                echo form_label('Promotion description: ', 'promo_text'); 
                                echo form_textarea('promo_text','', 'id="promo_text" class="round full-width-textarea" autofocus rows="20"'); 
                                ?>
                            </p>
                                <p>
                                    <?php
                                    echo form_label('Types of tour: ', 'category');
                                    ?>
                                </p>
                                    <?php
                                    foreach ($categories as $category):
                                        echo '<p>'.form_checkbox('category[]',$category['id'],false, 'id="category"');
                                        echo $category['name'].'</p>'; ?>
                                    <?php endforeach ?> 
                                <p>
                                    <?php
                                    echo form_label('Types of activity: ', 'activity');
                                    ?>
                                </p>
                                    <?php
                                    foreach ($activities as $activity):
                                        echo '<p>'.form_checkbox('activity[]',$activity['id'],false, 'id="activity"');
                                        echo $activity['name'].'</p>'; ?>
                                    <?php endforeach ?> 
                                 <p>
                                    <?php
                                    echo form_label('Primary mode of transportation: ', 'transport');
                                    ?>
                                </p>
                                    <?php
                                    foreach ($transports as $transport):
                                        echo '<p>'.form_checkbox('transport[]',$transport['id'],false, 'id="transport"');
                                        echo $transport['name'].'</p>'; ?>
                                    <?php endforeach ?> 
                                <p>
                                    <?php
                                    echo form_label('Tour guides available in: ', 'langauge');
                                    ?>
                                </p>
                                    <?php
                                    foreach ($languages as $language):
                                        echo '<p>'.form_checkbox('languages[]',$language['id'],false, 'id="language"');
                                        echo $language['name'].'</p>'; ?>
                                    <?php endforeach ?> 
                               
                                 
                            </div>
     					</div>
                    	<div id="tabs-2">
                        	<div id="itinerary">
                                <p>
                                    <?php
                                    echo form_label('Day: ', 'itinerary_day');
                                    echo form_input('itinerary_day0','', 'id="itinerary_day" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                <p>
                                    <?php		
                                    echo form_label('Image: ', 'itinerary_img');
                                    echo form_upload('itinerary_img0','', 'id="itinerary_img0" class="round default-width-input" autofocus'); 
                                    ?>
                                </p>
                                <p>
                                    <?php 
                                    echo form_label('Description: ', 'itinerary_desc0'); 
                                    echo form_textarea('itinerary_desc0','', 'id="itinerary_desc0" class="round full-width-textarea" autofocus rows="20"'); 
                                    ?>
                                </p>
                                <input type="hidden" value="0" name="rows[]">
                               <hr>
                            </div>
                            
                        	 <p>
                                	<input onclick="addRow(this.form);" type="button" value="Add itinerary" />
                                </p>
                            
                        </div>
						<div id="tabs-3">
                        	 <p>
                             	<?php 
                                echo form_label('Overview: ', 'intro'); 
                                echo form_textarea('intro','', 'id="intro" class="round full-width-textarea" autofocus'); 
                                ?>
                           	</p>
                            <p>
                            	<?php 
                                echo form_label('Description: ', 'description'); 
                                echo form_textarea('description','', 'id="description" class="round full-width-textarea" autofocus rows="20"'); 
                                ?>
                            </p>
                        </div>
                        <div id="tabs-4">
                        	<div id="gallery">
                                <p>
                                    <?php		
                                    echo form_label('Gallery: ', 'gallery');
                                    echo form_upload('gallery[]','', 'id="gallery" class="round default-width-input" autofocus'); 
                                    ?>
                                </p>
                                <hr>
                            </div>
                            
                            <p>
                            	<input onclick="addImage(this.form);" type="button" value="Add image" />
                            </p>
                        </div>
                         <div id="tabs-5">
                        	<p>

                                        <?php
										
										  echo form_label('Meta title: ', 'meta_title').'<br>';
										  echo form_input('meta_title','', 'id="meta_title" class="round default-width-input" autofocus');
										  
									    ?>
									</p>
                                     <p>

                                        <?php
										
										  echo form_label('URL: ', 'url').'<br>';
										  echo form_input('url','', 'id="url" class="round default-width-input" autofocus');
										  
									    ?>
									</p>
                                    <p>

                                        <?php
										
										  echo form_label('Meta keyword: ', 'meta_keyword').'<br>';
										  echo form_input('meta_keyword','', 'id="meta_keyword" class="round default-width-input" autofocus');
										  
									    ?>
									</p>
                                    
                                   
                                    
                                    <p>

                                        <?php
										
										  echo form_label('Meta description: ', 'meta_description').'<br>';
										  echo form_input('meta_description','', 'id="meta_description" class="round" style="width:1000px;" autofocus');
										  
									    ?>
									</p>
                        </div>
					</div>
          		<div style="clear:both;">
                <div style="padding-top:20px;">
                   	<?php echo form_submit('save', 'Save', 'class="round blue ic-right-arrow"'); ?>
                </div>
                <?php echo form_close(); ?> 
			</div>
		</div>
	</div>
</div>
<?php include_once('application/views/admin/footer.php'); ?>
</body>
</html>