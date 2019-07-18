 <main class="app-content">
  <div class="app-title" style="margin-top: 1px">
    <div>
      <h5>Edit Data Gejala</h5>
    </div>
  <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fas fa-list-ul fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Edit Data Gejala</a></li>
  </ul>
</div>
<form action ="<?php echo base_url('Admin/update_data_gejala')?>" method="post">
  <?php 
  foreach($gejala as $hasil){ 
      ?>
      <input type="hidden" name="kd_gejala" class="form-control" id="kd" value="<?php echo $hasil->kd_gejala ?>">
      <div class="form-group">
        <label >Gejala</label>
        <input type="text" name="gejala" class="form-control" id="gejala" value="<?php echo $hasil->gejala ?>" >
    </div>
<?php } ?>
<button type="submit" class="btn btn-info btn-sm">Update</button>
</form>