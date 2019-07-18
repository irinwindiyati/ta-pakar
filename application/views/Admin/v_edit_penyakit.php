 <main class="app-content">
  <div class="app-title" style="margin-top: 1px">
    <div>
      <h5>Edit Data Penyakit</h5>
    </div>
  <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fas fa-list-ul fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Edit Data Penyakit</a></li>
  </ul>
</div>
<form action ="<?php echo base_url('Admin/update_data_penyakit')?>" method="post">
  <?php 
  foreach($penyakit as $hasil){ 
      ?>
      <input type="hidden" name="kd_penyakit" class="form-control" id="kd" value="<?php echo $hasil->kd_penyakit ?>">
      <div class="form-group">
        <label >Penyakit</label>
        <input type="text" name="penyakit" class="form-control" id="penyakit" value="<?php echo $hasil->penyakit ?>" >
    </div>
    <div class="form-group">
        <label >Deskripsi</label>
        <textarea name="deskripsi" ><?php echo $hasil->deskripsi ?></textarea>
    </div>
<?php } ?>
<button type="submit" class="btn btn-info btn-sm">Update</button>
</form>