<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Temple Management</title>
<?php include_once('application/views/admin/header.php'); ?>
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
      <li><a href=""<?php echo site_url("admin/exchange_links/");?>"" class="active-tab dashboard-tab">Dashboard</a></li>
      <li><a href="<?php echo site_url("admin/exchange_links/form");?>">Add new Exchange Link</a></li>
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
    <div class="content-module">
      <div class="content-module-heading cf">
        <h3 class="fl">Exchange Link</h3>
        <span class="fr expand-collapse-text">Click to collapse</span> <span class="fr expand-collapse-text initial-expand">Click to expand</span> </div>
      <!-- end content-module-heading -->
      
      <div class="content-module-main">
        <p>Found <?php echo $num_results; ?> exchange link(s) </p>
        <table>
          <thead>
            <tr>              
              <th width="5%">ID</th>
              <th>Name</th>
              <th width="35%">Url</th>
              <th width="9%">Published</th>
              <th width="9%">Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <td colspan="5" class="table-footer"><?php if (strlen($links)): ?>
                Pages: <?php echo $links; ?>
                <?php endif; ?></td>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach($exchanges as $item): 
                $img = ($item->status)?'confirmation.png':'error.png'; 
				echo '
				<tr>
					
					<td>'.$item->id.'</td>
					<td><a href="'.site_url("admin/exchange_links/form?id=$item->id").'">'.$item->name.'</a></td>	
					<td>'.$item->url.'</td>
					<td align="center"><img src="'.base_url().'/public/images/icons/message-boxes/'.$img.'"></td>			
					<td>
						<a href="'.site_url("admin/exchange_links/form?id=$item->id").'" class="table-actions-button ic-table-edit"></a>
						<a onClick="return window.confirm(\'Delete '.$item->name.'?\');" href="'.site_url("admin/exchange_links/delete?id=$item->id").'" class="table-actions-button ic-table-delete"></a>
					</td>
				</tr>
				';
				
				endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- end content-module-main --> 
      
    </div>
    <!-- end content-module --> 
    
  </div>
  <!-- end full-width --> 
  
</div>
<!-- end content --> 

<!-- FOOTER -->
<?php include_once('application/views/admin/footer.php'); ?>
<!-- end footer -->

</body>
</html>