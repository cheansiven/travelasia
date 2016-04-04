<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tours Management - Edit tour</title>
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
		
	});
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


var rowNum = <?php echo count($itineraries)?>;
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

var rowImage = <?php echo count($tourGalleries);?>;
function addImage(frm) {
rowImage ++;

var newRow = '<div id="gallery'+rowImage+'"><p><input type="file" autofocus="" class="round default-width-input" id="gallery'+rowImage+'" value="" name="gallery[]"></p><p><input type="button" value="Remove" onclick="removeImage('+rowImage+');"></p><hr></div>';
jQuery('#gallery').append(newRow);

}

function removeImage(rnum) {
jQuery('#gallery'+rnum).remove();
}

function deleteImage(image) {
	$("#"+image).val('');
	$("#show"+image).remove();
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
      		<li><a href="#" class="active-tab dashboard-tab">Edit tour</a></li>
    	</ul>
    	<?php include_once('application/views/admin/logo.php'); ?>
	</div>
</div>
<div id="content">
	<div class="page-full-width cf">
    	<div>
      		<div class="content-module">
        		
                <?php echo form_open_multipart('admin/tours/update', 'id="tourForm" name="tourForm"'); ?>
                
                	<div id="tour_tabs" style="float:left; width:100%;">
                        <ul>
                            <li><a href="#tabs-1">Info</a></li>
                            <li><a href="#tabs-2">Itinerary</a></li>
                            <li><a href="#tabs-3">Detail</a></li>
                            <li><a href="#tabs-4">Gallery</a></li>
                        </ul>
						<div id="tabs-1">
                            <div class="half-size-column fl"> 
                                <?php echo validation_errors(); ?>
                                 <p>
                                    <?php 
                                        echo '<br><span class="label">Active </span>';
										if ($tour->active == 1)
                                        	echo form_checkbox('active','1',true);
										else echo form_checkbox('active','1',false);
                                    ?>
                                </p>
                                <p>
                <?php
										
										  echo form_label('Ordering: ', 'ordering');
										  echo form_input('ordering',$tour->ordering, 'id="ordering" class="round small-width-input" autofocus');
										  
									    ?>
              </p>
                                <p>
                                    <?php 
                                    echo form_label('Tour Name: ', 'name');
                                    echo form_input('name',$tour->name, 'id="name" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                <p id="nameError">Please enter tour name</p>
                                
                                <p>
                                    <?php
                                    echo form_label('Code: ', 'code');
                                    echo form_input('code',$tour->code, 'id="code" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                               
                                 <p>
                                    <?php 
                                        echo '<br><span class="label">Hightlight </span>';
										if ($tour->highlight == 1)
                                        	echo form_checkbox('highlight','1',true);
										else echo form_checkbox('highlight','1',false);
                                    ?>
                                </p>
                                <div id="countrylist">
                                    <?php
                                    echo '<p>'.form_label('Country: ', 'country').'</p>';
                                    $jsCountry = 'onClick="showRegions(this);"';
                                    foreach ($countries as $country){
										$countryChecked = 1;
										foreach ($tourCountries as $tourCountry) {
											if ($country['id'] == $tourCountry)
											{
												echo '<div id="country'.$country['id'].'"><p>'.form_checkbox('country[]',$country['id'],true, $jsCountry);
												echo $country['name'].'</p>';
												echo '<div id="region_country'.$country['id'].'" style="padding-left:30px;">';
												foreach($tourRegions[$tourCountry] as $id => $region)
												{
													$regionChecked = 1;
													foreach ($regions_id as $region_id){
														if($id == $region_id){
															echo '<div id="region'.$id.'"><p>'.form_checkbox('region[]',$id,true, 'onClick="showCities(this);"');
															echo $region.'</p>';
															
															
															echo '</div>';
															$regionChecked = 2;
															break;
														}
													}
													if ($regionChecked == 1)
													{
														echo '<div id="region'.$id.'"><p>'.form_checkbox('region[]',$id,false, 'onClick="showCities(this);"');
														echo $region.'</p></div>';	
													}
												}	
												echo '</div></div>'; 
												$countryChecked = 2;
												break;
											}
										}
										if ($countryChecked == 1){
											echo '<div id="country'.$country['id'].'"><p>'.form_checkbox('country[]',$country['id'],false, $jsCountry);
											echo $country['name'].'</p></div>'; 
										}
									}
                                    ?> 
                                </div>
                                 
                                 <p>
                                    <?php
                                    echo form_label('Arrival city: ', 'arrival_city');
                                    echo form_dropdown('arrival_city', $list_cities, $tour->arrival_city, 'id="arrival_city"');  
                                    ?>
                                </p>
                                <p>
                                    <?php		
                                    echo form_label('Departure city: ', 'departure_city');
                                    echo form_dropdown('departure_city', $list_cities, $tour->departure_city, 'id="departure_city"'); 
                                    ?>
                                </p>
                               
                                <p>
                                    <?php
                                    echo form_label('Number of days: ', 'num_days');
                                    echo form_input('num_days',$tour->num_days, 'id="num_days" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    echo form_label('Number of nights: ', 'num_nights');
                                    echo form_input('num_nights',$tour->num_nights, 'id="num_nights" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                 <p>
                                    <?php
                                    echo form_label('Rates A (Rack rates): ', 'rate');
                                    echo form_input('rate',$tour->rate, 'id="rate" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    echo form_label('Rates B (Promotional rate): ', 'promo_rate');
                                    echo form_input('promo_rate',$tour->promo_rate, 'id="promo_rate" class="round default-width-input" autofocus');
                                    ?>
                                </p>
                                
                                <p>
                                    <?php
                                    echo form_input('start',$tour->start, 'id="fromDatepicker" class="round default-width-input" autofocus readonly="readonly"');
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    echo form_input('end',$tour->end, 'id="untilDatepicker" class="round default-width-input" autofocus readonly="readonly"');
                                    ?>
                                </p>
                                 <p>
                                    <?php 
                                        echo 'Valid all year round: ';
										if ($tour->year_round == 1)
                                        	echo form_checkbox('year_round','1',true);
										else echo form_checkbox('year_round','1',false);
                                    ?>
                                </p>
                               		<?php if($tour->image != '') {?>
                                <p id="showimageold">
                                    <img src="<?php echo base_url();?>upload/tours/<?php echo $tour->image?>"><input type="button" value="Remove" onclick="deleteImage('imageold');">
                                </p>
                                  	<?php } ?>
                                <p>
                                    <?php		
                                    echo form_label('Main image: ', 'image');
                                    echo form_upload('image','', 'id="image" class="round default-width-input" autofocus'); 
                                    ?>
                                    <input type="hidden" name="imageold" value="<?php echo $tour->image?>" id="imageold">
                                </p>
                            </div>
                            <div class="half-size-column fr"> 
                             <p>
                                    <?php 
                                        echo form_label('Promotion: ', 'promo_option');
										echo form_dropdown('promo_option', $promo_option, $tour->promo_option, 'id="promo_option"');  
                                    ?>
                                    
                                </p>
                                <p>
                            	<?php 
                                echo form_label('Promotion description: ', 'promo_text'); 
                                echo form_textarea('promo_text',$tour->promo_text, 'id="promo_text" class="round full-width-textarea" autofocus rows="20"'); 
                                ?>
                            </p>
                                <p>
                                    <?php
                                    echo form_label('Types of tour: ', 'category');
                                    ?>
                                </p>
                                    <?php
                                    foreach ($categories as $category){
										$checked = 1;
										foreach ($tourCategories as $tourCategory){
											if ($category['id'] == $tourCategory['category_id']) {
                                        		echo '<p>'.form_checkbox('category[]',$category['id'],true, 'id="category"');
												echo $category['name'].'</p>';
												$checked = 2;
												break;
											} 
										}
										if ($checked == 1) {
											echo '<p>'.form_checkbox('category[]',$category['id'],false, 'id="category"');
											echo $category['name'].'</p>';	
										} 
									} ?> 
                                <p>
                                    <?php
                                    echo form_label('Types of activity: ', 'activity');
                                    ?>
                                </p>
                                    <?php
                                    foreach ($activities as $activity){
										$checked = 1;
										foreach ($tourActivities as $tourActivity) {
											if ($tourActivity['tour_activity'] == $activity['id']) {
                                        		echo '<p>'.form_checkbox('activity[]',$activity['id'],true, 'id="activity"');
                                        		echo $activity['name'].'</p>'; 
												$checked = 2;
												break;
											}
											
										}
										if ($checked == 1) {
											echo '<p>'.form_checkbox('activity[]',$activity['id'],false, 'id="activity"');
                                        	echo $activity['name'].'</p>'; 	
										}
									}
									?> 
                                 <p>
                                    <?php
                                    echo form_label('Primary mode of transportation: ', 'transport');
                                    ?>
                                </p>
                                    <?php
                                    foreach ($transports as $transport){
										$checked == 1;
										foreach ($tourTransports as $tourTransport) {
											if ($transport['id'] == $tourTransport['transport_id']) {
                                        		echo '<p>'.form_checkbox('transport[]',$transport['id'],true, 'id="transport"');
                                        		echo $transport['name'].'</p>';
												$checked = 2;
												break;
											}
										}
										if ($checked == 1){
											echo '<p>'.form_checkbox('transport[]',$transport['id'],false, 'id="transport"');
                                        	echo $transport['name'].'</p>';	
										}
									} ?> 
                                <p>
                                    <?php
                                    echo form_label('Tour guides available in: ', 'langauge');
                                    ?>
                                </p>
                                    <?php
                                    foreach ($languages as $language){
										$checked = 1;
										foreach ($tourLanguages as $tourLanguage){
											if ($language['id'] == $tourLanguage['language_id'])
											{
                                        		echo '<p>'.form_checkbox('languages[]',$language['id'],true, 'id="language"');
                                        		echo $language['name'].'</p>'; 
												$checked = 2;
												break;
											}
										}
										if ($checked ==1){
											echo '<p>'.form_checkbox('languages[]',$language['id'],false, 'id="language"');
                                        	echo $language['name'].'</p>'; 
										}
									}
									?> 
                            </div>
     					</div>
                    	<div id="tabs-2">
                        	<div id="itinerary">
                            <?php
								$i = 0;
                            	foreach($itineraries as $itinerary){
							?>
                            	<div id="itinerary<?php echo $i;?>">
                                    <p>
                                        <?php
                                        echo form_label('Day: ', 'itinerary_day');
                                        echo form_input('itinerary_day'.$i, $itinerary['day'], 'id="itinerary_day" class="round default-width-input" autofocus');
                                        ?>
                                    </p>
                                     <?php if($itinerary['image'] != '') {?>
                                      <p id="showitinerary_imgold<?php echo $i;?>">
                                        <img src="<?php echo base_url();?>upload/tours/itinerary/<?php echo $itinerary['image']?>"><input type="button" value="Remove" onclick="deleteImage('itinerary_imgold<?php echo $i;?>');">
                                      </p>
                                      <?php } ?>
                                    <p>
                                        <?php		
                                        echo form_label('Image: ', 'itinerary_img'.$i);
                                        echo form_upload('itinerary_img'.$i,'', 'id="itinerary_img'.$i.'" class="round default-width-input" autofocus'); 
										echo '<input type="hidden" name="itinerary_imgold'.$i.'" id="itinerary_imgold'.$i.'" value="'.$itinerary['image'].'">';
                                        ?>
                                       
                                    </p>
                                    <p>
                                        <?php 
                                        echo form_label('Description: ', 'itinerary_desc'.$i); 
                                        echo form_textarea('itinerary_desc'.$i ,$itinerary['description'], 'id="itinerary_desc'.$i.'" class="round full-width-textarea" autofocus rows="20"'); 
                                        ?>
                                    </p>
                                   <input type="hidden" value="<?php echo $i;?>" name="rows[]">
                                    <p><input type="button" value="Remove" onclick="removeRow('<?php echo $i;?>');"></p>
                                   <hr>
                               </div>
                               <?php
								$i++;
								}
							?>
                            </div>
                            
                            
                        	 <p>
                                	<input onclick="addRow(this.form);" type="button" value="Add itinerary" />
                                </p>
                            
                        </div>
						<div id="tabs-3">
                        	 <p>
                             	<?php 
                                echo form_label('Overview: ', 'intro'); 
                                echo form_textarea('intro',$tour->intro, 'id="intro" class="round full-width-textarea" autofocus'); 
                                ?>
                           	</p>
                            <p>
                            	<?php 
                                echo form_label('Description: ', 'description'); 
                                echo form_textarea('description',$tour->description, 'id="description" class="round full-width-textarea" autofocus rows="20"'); 
                                ?>
                            </p>
                        </div>
                        <div id="tabs-4">
                        	<div id="gallery">
                            	<?php 
								$i = 0;
								foreach ($tourGalleries as $tourGallery)
								{ 
									?>
                                    <div id="gallery<?php echo $i;?>">
                                    	<p>
                                    		<img src="<?php echo base_url();?>upload/tours/thumbs/<?php echo $tourGallery['image']?>">
                                   		</p>
                                        <p>
                                            <?php		
											echo form_hidden('galleryOld[]', $tourGallery['image']);
                                            ?>
                                        </p>
                                        <p><input type="button" value="Remove" onclick="removeImage(<?php echo $i;?>);"></p>
                                        <hr>
                                    </div>
                                <?php 
									$i++;
								}
								
								?>
                                
                            	<p>
                            		<?php
                                	echo form_upload('gallery[]','', 'id="gallery" class="round default-width-input" autofocus'); 
									?>
                            	</p>
                                <hr>
                            </div>
                           
                            <p>
                            	<input onclick="addImage(this.form);" type="button" value="Add image" />
                            </p>
                        </div>
					</div>
          		<div style="clear:both;">
                <div style="padding-top:20px;">
                	 <?php echo form_hidden('tour_id',$tour->id);?>
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