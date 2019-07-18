<main class="app-content">

  <div class="app-title">
    <div>
      <h5>Data Gejala</h5>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fas fa-list-ul fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Data Gejala</a></li>
    </ul>
  </div>

  <div style="width: 100%;" >
    <div class="btn-group">
      <form>
        <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus-circle"></i> Tambah data pengendalian penyakit
        </button>
      </form>
    </div>
  </div>
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Pengendalian Penyakit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
        <div class="modal-body">
         <form action="<?php echo base_url().'Admin/tambah_data_kendali'; ?>" method="post" class='tambah_data_kendali'>
          <div class="card-mb">
            <div class="form-group">
              <div class="col-sm-5">
                <label for="usr">Kode Kendali</label>
                <input type="text" name="kd_kendali" class="form-control" required="true">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <label for="usr">Kendali</label>
                <textarea name="kendali" class="form-control" required="true"></textarea>
                <!-- <input type="textarea" name="penyakit" class="form-control" required="true"> -->
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-5">
                <button type="submit" name="upload" class="btn btn-info btn-sm"><i class="fas fa-check"></i> Simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

    <div class="card-body" style="background-color: #f5f6fa ">
        <div class="table-responsive">
            <table id="example" class="table" style="width: 100%">
                <thead style="background-color: #f6e58d;">
                    <tr>
                        <th>No</th>
                        <th>Kode Kendali</th>
                        <th>Kendali</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no_urut = 1;
                    foreach ($kendali as $hasil) {
                        ?>
                        <tr>
                            <td><?php  echo $no_urut++ ?></td>
                            <td><?php  echo $hasil->kd_kendali ?></td>
                            <td><?php  echo $hasil->kendali ?></td>
                            <td>
                                <center>
                                    <div class="btn-group">
                                        <form action="hapus_data_kendali" method="post" class="delete_kendali">
                                            <input type="hidden" name="kd_kendali" value="<?php echo $hasil->kd_kendali;?>">
                                            <input type="hidden" name="kendali" value="<?php echo $hasil->kendali;?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                        <form action="<?php echo base_url().'Admin/edit_data_kendali/'.$hasil->kd_kendali; ?>" method="post" class="edit_kendali">
                                            <button type="submit" class="btn btn-info btn-sm">Edit</button>
                                        </form>
                                    </div>
                                </center>
                            </td>
                        </tr>  
                    <?php
                    }
                    ?>
                </tbody>
            </table>
          </div>
</main>