 <main class="app-content">
  <div class="app-title" style="margin-top: 1px">
    <div>
      <h5>Edit Data Detail Rule</h5>
    </div>
  <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fas fa-list-ul fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Edit Data Detail Rule</a></li>
  </ul>
</div>

<div class="card-body" style="background-color: #f5f6fa;">
  <form id="myForm" action="<?php echo base_url('Admin/tambah_detailrule');?>" method="post">
        <input type="hidden" name="kd_rule" value="<?php  echo $kd_rule ?>">
        <div class="table-responsive">
            <table class="table" style="width: 100%;">
                <thead style="background-color: #f6e58d;">
                    <tr>
                        <th>No</th>
                        <th>Kode Gejala</th>
                        <th>Gejala</th>
                        <th>Bobot</th>
                        <th>Nilai Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no_urut = 1;
                    foreach ($kd_gejala as $hasil) {
                        ?>
                        <tr>
                            <td><?php  echo $no_urut ?></td>
                            <td><?php  echo $hasil->kd_gejala ?></td>
                            <td><?php  echo $hasil->gejala?></td>
                            <td>
                                <center>
                                  <input type="checkbox" name="kd_gejala[]" value="<?php echo $hasil->kd_gejala;?>" <?php echo 'id="checkBox'.$no_urut.'"'; ?> />
                                </center>
                            </td>
                            <td>
                              <center>
                                  <input type="text" name="bobot[]" <?php echo 'id="textBox'.$no_urut.'"'; ?> disabled="">                 
                              </center>
                            </td>
                        </tr>  
                    <?php
                      $no_urut++;
                    }
                  ?>

                  
                </tbody>
            </table>
          <button type="submit" class="btn btn-info btn-sm">Simpan</button>
        </div>
    </form>
    
    <script src="<?php echo base_url('assets/admin/docs/js/jquery-3.2.1.min.js')?>"></script>


<script type="text/javascript">
jQuery(document).ready(function() {
  for (var i = 0; i < 5; i++) {
    $("#checkBox1").click(function() {
        $("#textBox1").removeAttr("disabled", $(this).is(":checked"));
     });
  }
         
});

</script>