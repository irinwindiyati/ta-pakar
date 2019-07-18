<main class="app-content">
    <div>
        <div class="app-title" style="margin-top: 1px">
    <div>
      <h5>Data Penyakit</h5>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fas fa-list-ul fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Data Penyakit</a></li>
    </ul>
  </div>

  <div style="width: 100%;" >
    <div class="btn-group">
      <form>
        <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus-circle"></i> Tambah data penyakit
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
          <h4 class="modal-title">Tambah Data Penyakit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
        <div class="modal-body">
         <form action="<?php echo base_url().'Admin/tambah_data_penyakit'; ?>" method="post" class='tambah_data_penyakit'>
          <div class="card-mb">
            <div class="form-group">
              <div class="col-sm-5">
                <label for="usr">Kode Penyakit</label>
                <input type="text" name="kd_penyakit" class="form-control" required="true">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <label for="usr">Penyakit</label>
                <input type="text" name="penyakit" class="form-control" required="true">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <label for="usr">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" required="true">
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

    <div class="card-body" style="background-color: #f5f6fa ">
        <div class="table-responsive">
            <table id="example" class="table" style="width: 100%">
                <thead style="background-color: #f6e58d;">
                    <tr>
                        <th>No</th>
                        <th>Kode Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no_urut = 1;
                    foreach ($penyakit as $hasil) {
                        ?>
                        <tr>
                            <td><?php  echo $no_urut++ ?></td>
                            <td><?php  echo $hasil->kd_penyakit ?></td>
                            <td><?php  echo $hasil->penyakit ?></td>
                            <td><?php  echo $hasil->deskripsi ?></td>
                            <td>
                                <center>
                                    <div class="btn-group">
                                        <form action="<?php echo base_url().'Admin/hapus_data_penyakit'; ?>" method="post" class="delete_penyakit">
                                            <input type="hidden" name="kd_penyakit" value="<?php echo $hasil->kd_penyakit;?>">
                                              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        <form action="<?php echo base_url().'Admin/edit_data_penyakit/'.$hasil->kd_penyakit; ?>" method="post" class="edit_penyakit">
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
        </div>
    </div>
</main>

