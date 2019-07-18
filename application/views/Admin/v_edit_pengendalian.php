 <main class="app-content">
  <div class="app-title">
    <div>
      <h5>Edit Data Pengendalian Penyakit</h5>
    </div>
  <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fas fa-list-ul fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Edit Data Pengendalian Penyakit</a></li>
  </ul>
</div>
<form action ="<?php echo base_url('Admin/update_data_kendali')?>" method="post">
  <?php 
  foreach($kendali as $hasil){ 
      ?>
      <input type="hidden" name="kd_kendali" class="form-control" id="kd" value="<?php echo $hasil->kd_kendali ?>">
      <div class="form-group">
        <label >Kendali</label>
        <input type="text" name="kendali" class="form-control" id="kendali" value="<?php echo $hasil->kendali ?>" >
    </div>
<?php } ?>
<button type="submit" class="btn btn-info btn-sm">Update</button>
</form>