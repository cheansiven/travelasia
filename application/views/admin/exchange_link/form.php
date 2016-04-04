<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Temple Management - Edit temple</title>
<?php include_once('application/views/admin/header.php'); ?>
<script type="text/javascript">
$(document).ready(function(){
 
	$('#exchangeForm').submit(function(){
		
		if(validateName())
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
      <li><a href="<?php echo site_url("admin/exchange_links/");?>">Dashboard</a></li>
      <li><a href="#" class="active-tab dashboard-tab"><?php echo (empty($exchange))?'Add New':'Edit'?> Exchange Link</a></li>
    </ul>
    <!-- end tabs --> 
    
    <!-- Change this image to your own company's logo --> 
    <!-- The logo will automatically be resized to 30px height. --> 
    <?php include_once('application/views/admin/logo.php'); ?>
    </div>
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
        
        <div class="content-module-main cf"> <?php echo form_open_multipart('admin/exchange_links/store', 'id="exchangeForm" name="exchangeForm"'); ?>
          <div class="half-size-column fl"> 
            <?php echo validation_errors(); ?>
            <!--<form action="#">-->
            
            <fieldset>
              <p>
                <?php										
				  echo form_label('Name: ', 'name');
				  echo form_input('name', (empty($exchange))?'':$exchange->name, 'id="name" class="round default-width-input" autofocus');				  
				?>
              </p>
              <p id="nameError">Please enter exchange link name!</p>
              <p>
              <?php 
					if(!empty($exchange)){
						if($exchange->logo)
							echo '<img src="'.base_url().'upload/exchange_link/'.$exchange->id.'/'.$exchange->logo.'">';
				 ?>
				<input type="hidden"  name="logo" value="<?php echo $exchange->logo?>">
				<?php }?>
                <?php										
				  echo form_label('Logo: ', 'logo');
				  echo form_upload('logo', '', 'id="logo" class="round default-width-input" autofocus'); 				  
				?>
               </p>
               <p>
                <?php										
				  echo form_label('Url: ', 'url');
				  echo form_input('url', (empty($exchange))?'':$exchange->url, 'id="url" class="round default-width-input" autofocus');				  
				?>
              </p>
               <p>
                <?php										
				  echo form_label('Text To use: ', 'text_use');
				  echo form_input('text_use', (empty($exchange))?'':$exchange->text_use, 'id="text_use" class="round default-width-input" autofocus');				  
				?>
              </p>
               <p class="activity-checkbox">
                    <?php
                    $chk = (empty($exchange))?'':($exchange->status)?true:false;
                    echo form_label('Published: ', 'published');
                    echo form_checkbox('status', 1, $chk);
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
				echo form_label('Description: ', 'description'); 
				echo form_textarea('description', (empty($exchange))?'':$exchange->description, 'id="description" class="round full-width-textarea" autofocus'); 				
				?>
              </p>              
              <?php 			 
			  echo form_hidden('id', (empty($exchange))?'':$exchange->id, set_value('id'));
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