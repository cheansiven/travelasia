<div class="sub-menu">
	<ul>
		<li><a href="<?php echo base_url();?>">Home</a></li>
		<li><a href="<?php echo base_url($this->uri->segment(1)); ?>"> <?php echo $name; ?> </a></li>
		<li><?php echo $this->uri->segment(1); ?></li>
		
	</ul>
</div>	