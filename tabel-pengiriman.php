<div class="card m-3">
              <div class="card-header">
                  <h3 class="card-title">Data Tujuan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <a href="index.php?page=tujuan-input" class="btn text-white mb-3" style="background-color : #001F3F">Tambah Data</a>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Kota Tujuan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
                        $no=1;
                        foreach ($rows as $row) { 
                        ?>
                      <tr>
                          <th style="width: 10px"><?php echo $no++?></th>
                          <th><?php echo $row ['kota_tujuan']?></th>
                          <th>
                            <a href="index.php?page=tujuan-edit&id=<?php echo $row['tujuan_id']; ?>" class="btn btn-warning"> <i class="fas fa-edit"></i> Edit</a>
                            <a href="index.php?page=tujuan-delete&id=<?php echo $row['tujuan_id']; ?>" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete</a>
                          </th>
                        </tr>
                        <?php }?>
                      </tbody>
                </table>
              </div>
              <!-- /.card-body -->
  </div>