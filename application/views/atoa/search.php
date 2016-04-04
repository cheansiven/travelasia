<script type="text/javascript">
$(document).ready(function() {
	
	$('#titlesearch_hotel').click(function(){ 
	
	 $.ajax({ 
             url: "<?php echo base_url();?>atoa/hotelSearchCriteria",
            success: function(results) //we're calling the response json array 'cities'
              {
               $('#region').empty();
			    
				regions = results['regions'];
                 for (var id in regions) {
                        $('#region').append($('<option />', {
                            value: id.substring(1),
                            text: regions[id]
                        }));
                 }
				
               } //end success
        });
	
	$('#hotelsearch').show();
	$('#toursearch').hide();
	$('#titlesearch_tour img').replaceWith('<img src="<?php echo base_url();?>public/images/pointer-02.png" class="searchpointer2" alt="Travel Asia"/>');
	$('#titlesearch_hotel img').replaceWith('<img src="<?php echo base_url();?>public/images/pointer-01.png" class="searchpointer2" alt="Travel Asia"/>');
	return false;
	});
	
	$('#titlesearch_tour').click(function(){ 
	$('#hotelsearch').hide();
	$('#toursearch').show();
	$('#titlesearch_tour img').replaceWith('<img src="<?php echo base_url();?>public/images/pointer-01.png" class="searchpointer2" alt="Travel Asia"/>');
	$('#titlesearch_hotel img').replaceWith('<img src="<?php echo base_url();?>public/images/pointer-02.png" class="searchpointer2" alt="Travel Asia"/>');
	return false;
	});
});
</script>
<div class="mainsearch">
	
    <div class="titlesearch">
        <a href="#" id="titlesearch_tour">FIND YOUR PERFECT TOUR
        <img src="<?php echo base_url();?>public/images/pointer-01.png" class="searchpointer1" alt="Travel Asia"/></a>
    </div>
    <?php if(isset($_GET['search_hotel'])) {
		echo '<div id="toursearch" style="display:none;">';
	} else echo '<div id="toursearch">';?>
   
    <?php
    	if (isset($_GET['destination']))
			$search_destination = $_GET['destination'];
		else $search_destination = '';
		if (isset($_GET['category']))
			$search_category = $_GET['category'];
		else $search_category = '';
		if (isset($_GET['duration']))
			$search_duration = $_GET['duration'];
		else $search_duration = '';
	?>
   <form name="searchtour" id="searchtour" method="get" action="<?php echo site_url("find-tour")?>">
        <?php echo form_dropdown('destination', $destinationsList, $search_destination, 'id="destination" class="search"');  ?>
       <?php echo form_dropdown('duration', $duration, $search_duration, 'id="duration" class="search"');  ?>
        <?php echo form_dropdown('category', $categoriesList, $search_category, 'id="category" class="search"');  ?>
        <?php echo form_submit('search_tour', 'SEARCH', 'class="button blue"'); ?>
        </form>
       </div> 
   
   
        <div class="searchfind">
            <a id="titlesearch_hotel" href="#">FIND YOUR HOTEL <img src="<?php echo base_url();?>public/images/pointer-02.png" class="searchpointer2" alt="Travel Asia"/></a>
           
        </div>
         <form name="searchhotel" id="searchhotel" method="get" action="<?php echo site_url("find-hotel")?>">
         <?php if(isset($_GET['search_hotel']))
		 {
			 echo '<div id="hotelsearch" style="display:block;">';
			 echo form_dropdown('region', $hotel_regions, $_GET['region'], 'id="region" class="search"');
			 //echo form_dropdown('hotel_category', $hotel_categories, $_GET['hotel_category'], 'id="hotel_category" class="search"');
		 }
		 else {
		 ?>
    	 <div id="hotelsearch">
          
           
        <select name="region" id="region" class="search">
  		</select>
      
        <?php } ?>
        <?php echo form_submit('search_hotel', 'SEARCH', 'class="button blue"'); ?>
        
     	</div>
        </form>
       
</div> 