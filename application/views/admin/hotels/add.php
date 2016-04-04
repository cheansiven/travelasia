<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel Management - New hotel</title>
<?php include_once('application/views/admin/header.php'); ?>

<link href="<?php echo base_url();?>public/css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
	
<script src="<?php echo base_url();?>public/js/jquery-ui-1.10.3.custom.min.js"></script>
</head>
<script>
	$(function() {
		$( "#tour_tabs" ).tabs();
	});
	</script>
<script type="text/javascript">
$(document).ready(function(){
 
	
	$('#country').change(function(){
        $.ajax({ 
             url: "<?echo base_url();?>admin/hotels/getCities",
            data: {country_id: $(this).val()},
            type: "post",
            success: function(cities) //we're calling the response json array 'cities'
              {
               $('#city').empty();
                 for (var id in cities) {
                        $('#city').append($('<option />', {
                            value: id,
                            text: cities[id]
                        }));
                 }
               } //end success
        });
    });
	
	
	$('#hotelForm').submit(function(){
		
		if(validateName() & validateCity() & validateCategory())
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
	
	function validateCity(){ 
		if($('#city').val() == ""){
			$('#city').addClass("round error");
			$('#cityError').toggle();
			$('#cityError').show();
			return false;
		}
		//if it's valid
		else{
			$('#city').removeClass("error");
			$('#cityError').toggle();
			$('#cityError').hide();
			return true;
		}
	}
	
	function validateCategory(){ 
		
		if($('#category :checkbox:checked').length > 0) {
			$('#category').removeClass("error");
			$('#categoryError').toggle();
			$('#categoryError').hide();
			return true;
		}
		//if it's valid
		else{
			$('#category').addClass("round error");
			$('#categoryError').toggle();
			$('#categoryError').show();
			return false;
		}
	}
	
	
});
</script>
<body>
<!-- TOP BAR -->
<div id="top-bar">
  <div class="page-full-width cf">
    <ul id="nav" class="fl">
      <li class="v-sep"><a href="<?php echo site_url("../");?>" class="round button dark ic-left-arrow image-left">Main</a></li>
      <?php include_once('application/views/admin/menu.php'); ?>
    </ul>
    <!-- end nav --> 
    
  </div>
  <!-- end full-width --> 
  
</div>
<!-- end top-bar --> 

<!-- HEADER -->
<div id="header-with-tabs">
  <div class="page-full-width cf">
    <ul id="tabs" class="fl">
      <li><a href="<?php echo site_url("admin/hotels/");?>">Dashboard</a></li>
      <li><a href="<?php echo site_url("admin/hotels/add");?>" class="active-tab dashboard-tab">Add new hotel</a></li>
    </ul>
    <!-- end tabs --> 
    
    <!-- Change this image to your own company's logo --> 
    <!-- The logo will automatically be resized to 30px height. --> 
    <?php include_once('application/views/admin/logo.php'); ?> </div>
  <!-- end full-width --> 
  
</div>
<!-- end header --> 

<!-- MAIN CONTENT -->
<div id="content">
  <div class="page-full-width cf">
    <div> <!-- class="side-content fr" -->
      
      <div class="content-module">
        
        
        <?php echo form_open_multipart('admin/hotels/store', 'id="hotelForm" name="hotelForm"'); ?>
        <div id="tour_tabs" style="float:left; width:100%;">
        <ul>
                            <li><a href="#tabs-1">Info</a></li>
                             <li><a href="#tabs-2">Meta</a></li>
                        </ul>
						<div id="tabs-1">
          <div class="half-size-column fl"> 
             <?php echo validation_errors(); ?>
            <!--<form action="#">-->
            
            <fieldset>
              <p>
                <?php
										
										  echo form_label('Hotel Name: ', 'name');
										  echo form_input('name','', 'id="name" class="round default-width-input" autofocus');
										  
									    ?>
              </p>
              <p id="nameError">Please enter hotel name!</p>
               <p>
                <?php
										
										  echo form_label('Ordering: ', 'ordering');
										  echo form_input('ordering','', 'id="ordering" class="round small-width-input" autofocus');
										  
									    ?>
              </p>
               <p>
                                    <?php
                                    echo form_label('Hotel Category: ', 'category');
                                    ?>
                                </p>
                                <fieldset id="category">
                                    <?php
                                    foreach ($categories as $category):
                                        echo '<p>'.form_checkbox('category[]',$category['id'],false);
                                        echo $category['name'].'</p>'; ?>
                                    <?php endforeach ?> 
                                   </fieldset> 
               
              <p id="categoryError">Please choose hotel category!</p>
               <p>
                <?php
      echo form_label('Country: ', 'country');
	  
 echo form_dropdown('country', $country, '', 'id="country"');  
      //echo form_input('type', '', 'id="type"');
   ?>
              </p>
              
              
              <p>
             <?php echo form_label('City: ', 'city');?>
               <select name="city" id="city">
    <option value="">-- Please select --</option>
  </select>
  
              </p>
            <p id="cityError">Please choose city!</p>
              <p>
                <?php 
										
										echo form_label('Hotel description: ', 'description'); 
                                        echo form_textarea('description','', 'id="description" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										
										  echo form_label('Image: ', 'image');
      									  echo form_upload('image','', 'id="image" class="round default-width-input" autofocus'); 
										  
									    ?>
               </p>
              
               <p>
                <?php 
										
										echo form_label('Review: ', 'review'); 
                                        echo form_textarea('review','', 'id="review" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										
										  echo form_label('Image: ', 'review_image');
      									  echo form_upload('review_image','', 'id="review_image" class="round default-width-input" autofocus'); 
										  
									    ?>
               </p>
               <p>
                <?php 
										
										echo form_label('Location: ', 'location'); 
                                        echo form_textarea('location','', 'id="location" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										
										  echo form_label('Image: ', 'location_image');
      									  echo form_upload('location_image','', 'id="location_image" class="round default-width-input" autofocus'); 
										  
									    ?>
               </p>
              
            </fieldset>
            
            <!--</form>--> 
            
          </div>
          <!-- end half-size-column -->
          
          <div class="half-size-column fr"> 
            
            <!--<form action="#">-->
            
            <fieldset>
             
                <p>
                <?php 
										
										echo form_label('Rooms: ', 'rooms'); 
                                        echo form_textarea('rooms','', 'id="rooms" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										
										  echo form_label('Image: ', 'rooms_image');
      									  echo form_upload('rooms_image','', 'id="rooms_image" class="round default-width-input" autofocus'); 
										  
									    ?>
               </p>
               
               <p>
                <?php 
										
										echo form_label('Dining: ', 'dining'); 
                                        echo form_textarea('dining','', 'id="dining" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										
										  echo form_label('Image: ', 'dining_image');
      									  echo form_upload('dining_image','', 'id="dining_image" class="round default-width-input" autofocus'); 
										  
									    ?>
               </p>
               <p>
                <?php 
										
										echo form_label('Leisure: ', 'leisure'); 
                                        echo form_textarea('leisure','', 'id="leisure" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										
										  echo form_label('Image: ', 'leisure_image');
      									  echo form_upload('leisure_image','', 'id="leisure_image" class="round default-width-input" autofocus'); 
										  
									    ?>
               </p>
             
            </fieldset>
            
            <!--</form>--> 
            
          </div>
          <!-- end half-size-column --> 
          </div>
          <div id="tabs-2">
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
           
        <!-- end content-module-main --> 
        
      </div>
      <div style="clear:both;">
                <div style="padding-top:20px;">
                   	<?php echo form_submit('save', 'Save', 'class="round blue ic-right-arrow"'); ?>
                </div>
                <?php echo form_close(); ?> 
      <!-- end content-module --> 
      
    </div>
  </div>
  <!-- end side-content --> 
  
</div>
<!-- end full-width -->

</div>
<!-- end content --> 

<!-- FOOTER -->
<?php include_once('application/views/admin/footer.php'); ?>
<!-- end footer -->

</body>
</html>