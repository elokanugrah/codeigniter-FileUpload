<?php $this->load->view('templates/login_header'); ?>

    <?php echo $error;?>
 
	<?php echo form_open_multipart('upload/aksi_upload');?>
 
	<input type="file" name="berkas" />
 
	<br /><br />
 
	<input type="submit" value="upload" />
 
</form>
    
<?php $this->load->view('templates/login_footer'); ?>