<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title> Hotel Management -Edit hotel</title>
<?php include_once('application/views/admin/header.php'); ?>
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
</head>
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
      <li><a href="#" class="active-tab dashboard-tab">Edit hotel</a></li>
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
        <div class="content-module-heading cf">
          <h3 class="fl">Form Elements</h3>
          <span class="fr expand-collapse-text">Click to collapse</span> <span class="fr expand-collapse-text initial-expand">Click to expand</span> </div>
        <!-- end content-module-heading -->
        
        <div class="content-module-main cf"> <?php echo form_open_multipart('admin/hotels/update', 'id="hotelForm" name="hotelForm"'); ?>
          <div class="half-size-column fl"> 
            <?php echo validation_errors(); ?>
            <!--<form action="#">-->
            
            <fieldset>
              <p>
                <?php
										
										  echo form_label('Hotel Name: ', 'name');
										  echo form_input('name',$hotel->name, 'id="name" class="round default-width-input" autofocus');
										  
									    ?>
              </p>
               <p id="nameError">Please enter hotel name!</p>
               <p>
                <?php
										
										  echo form_label('Ordering: ', 'ordering');
										  echo form_input('ordering',$hotel->ordering, 'id="ordering" class="round small-width-input" autofocus');
										  
									    ?>
              </p>
                <p><?php
               echo form_label('HOtel Category: ', 'category');
			  ?></p>
               <fieldset id="category">
               	<?php
               
			   foreach ($categories as $category){
				$checked = 1;
				foreach ($hotelCategories as $hotelCategory) {
					if($category['id'] == $hotelCategory['category_id']){
						echo '<p>'.form_checkbox('category[]',$category['id'],true, 'id="category"');
						
							echo $category['name'].'</p>';
							$checked = 0;
							break;
					}
				}
				if($checked ==1) {
					echo '<p>'.form_checkbox('category[]',$category['id'],false, 'id="category"');
					echo $category['name'].'</p>'; 
				}
			}
			   ?> 
				</fieldset>
				
                <p id="categoryError">Please choose hotel category!</p>
               <p>
                <?php
      echo form_label('Country: ', 'country');
	  
 echo form_dropdown('country', $country, $hotel->country_id, 'id="country"');  
      //echo form_input('type', '', 'id="type"');
   ?>
              </p>
              
               
              <p>
                <?php
      echo form_label('City: ', 'city');
	  
 echo form_dropdown('city', $city, $hotel->city_id, 'id="city"');  
      //echo form_input('type', '', 'id="type"');
   ?>
              </p>
              
               <p id="cityError">Please choose city!</p>
            
            <p>
                <?php 
										
										echo form_label('Hotel description: ', 'description'); 
                                        echo form_textarea('description',$hotel->description, 'id="description" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										if ($hotel->image != '')
											echo '<img src="'.base_url().'upload/hotels/'.$hotel->image.'">';
										  echo form_label('Image: ', 'image');
      									  echo form_upload('image','', 'id="image" class="round default-width-input" autofocus'); 
										  echo form_hidden('image_old',$hotel->image, set_value('image_old'));
									    ?>
               </p>
               <p>
                <?php 
										
										echo form_label('Review: ', 'review'); 
                                        echo form_textarea('review',$hotel->review, 'id="review" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										if ($hotel->review_image != '')
											echo '<img src="'.base_url().'upload/hotels/'.$hotel->review_image.'">';
										  echo form_label('Image: ', 'review_image');
      									  echo form_upload('review_image','', 'id="review_image" class="round default-width-input" autofocus'); 
										  echo form_hidden('review_image_old',$hotel->review_image, set_value('review_image_old'));
									    ?>
               </p>
               <p>
                <?php 
										
										echo form_label('Location: ', 'location'); 
                                        echo form_textarea('location',$hotel->location, 'id="location" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										if ($hotel->location_image != '')
											echo '<img src="'.base_url().'upload/hotels/'.$hotel->location_image.'">';
										  echo form_label('Image: ', 'location_image');
      									  echo form_upload('location_image','', 'id="location_image" class="round default-width-input" autofocus'); 
										   echo form_hidden('location_image_old',$hotel->location_image, set_value('location_image_old'));
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
                                        echo form_textarea('rooms',$hotel->rooms, 'id="rooms" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										if ($hotel->rooms_image != '')
											echo '<img src="'.base_url().'upload/hotels/'.$hotel->rooms_image.'">';
										  echo form_label('Image: ', 'rooms_image');
      									  echo form_upload('rooms_image','', 'id="rooms_image" class="round default-width-input" autofocus'); 
										   echo form_hidden('rooms_image_old',$hotel->rooms_image, set_value('rooms_image_old'));
									    ?>
               </p>
               
               <p>
                <?php 
										
										echo form_label('Dining: ', 'dining'); 
                                        echo form_textarea('dining',$hotel->dining, 'id="dining" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										if ($hotel->dining_image != '')
											echo '<img src="'.base_url().'upload/hotels/'.$hotel->dining_image.'">';
										  echo form_label('Image: ', 'dining_image');
      									  echo form_upload('dining_image','', 'id="dining_image" class="round default-width-input" autofocus'); 
										  echo form_hidden('dining_image_old',$hotel->dining_image, set_value('dining_image_old'));
									    ?>
               </p>
               <p>
                <?php 
										
										echo form_label('Leisure: ', 'leisure'); 
                                        echo form_textarea('leisure',$hotel->leisure, 'id="leisure" class="round full-width-textarea" autofocus'); 
										
										?>
              </p>
              <p>
                <?php
										if ($hotel->leisure_image != '')
											echo '<img src="'.base_url().'upload/hotels/'.$hotel->leisure_image.'">';
										  echo form_label('Image: ', 'leisure_image');
      									  echo form_upload('leisure_image','', 'id="leisure_image" class="round default-width-input" autofocus'); 
										  echo form_hidden('leisure_image_old',$hotel->leisure_image, set_value('leisure_image_old'));
									    ?>
               </p>
              
              <?php 
			  echo form_hidden('hotel_id',$hotel->id);
			
			  echo form_submit('save', 'Save', 'class="round blue ic-right-arrow"'); ?>
            </fieldset>
            
            <!--</form>--> 
            
          </div>
          <!-- end half-size-column --> 
          
          <?php echo form_close(); ?> 
          
          </div>
        <!-- end content-module-main --> 
        
      </div>
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