<?php $this->load->view('templates/login_header'); ?>

	<?php foreach ($upload_data as $item => $value):?>
		<li><?php echo $item;?>: <?php echo $value;?></li>
	<?php endforeach; ?>
    
<?php $this->load->view('templates/login_footer'); ?>