  <div class="container-fluid">
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">DATA IKAN CUPANG</li>
    </ol>
    <div class="row">
      <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Total Ikan Cupang</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $countcupang ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body">Data Ikan Cupang</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $countcupang ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body">Ikan Cupang Baru</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $activecupang ?></h2>
          </div>
        </div>
      </div>
      
    </div>
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Ikan Cupang
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                
                <th>Kode Ikan Cupang</th>
                <th>Nama Ikan Cupang</th>
                <th>Type</th>
                <th>Warna</th>
                <th>Price</th>
                <th>Size</th>
                <th>Jenis Kelamin</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                
                <th>Kode Ikan Cupang</th>
                <th>Nama Ikan Cupang</th>
                <th>Type</th>
                <th>Warna</th>
                <th>Price</th>
                <th>Size</th>
                <th>Jenis Kelamin</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  
                  <td><?= $datas->codecupang ?></td>
                  <td><?= $datas->cupangname ?></td>
                  <td><?= $datas->type ?></td>
                  <td><?= $datas->warna ?></td>
                  <td><?= $datas->price ?></td>
                  <td><?= $datas->size ?></td>
                  <td><?= $datas->jeniskelamin ?></td>
                  <td><?= $datas->note ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idcupang ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idcupang ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->idcupang ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">View Data Ikan Cupang</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form>
                          <div class="form-group" style=" padding-left: 10px;">
                            <label for="viewno<?= $datas->idcupang ?>" class="col-form-label">Ikan Cupang No:</label>
                            <input type="text" class="form-control" id="viewno<?= $datas->idcupang ?>" value="" hidden><?= $datas->cupangno ?>
                          </div>
                          <div class="form-group" style=" padding-left: 10px;">
                            <label for="viewcode<?= $datas->idcupang ?>" class="col-form-label">Code Ikan Cupang :</label>
                            <input type="text" class="form-control" id="viewcode<?= $datas->idcupang ?>" value="" hidden><?= $datas->codecupang ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="viewnama<?= $datas->idcupang ?>" class="col-form-label">Nama Ikan Cupang:</label>
                            <input type="text" class="form-control" id="viewnama<?= $datas->idcupang ?>" value="" hidden><?= $datas->cupangname ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="viewtipe<?= $datas->idcupang ?>" class="col-form-label">Type Ikan Cupang:</label>
                            <textarea class="form-control" id="viewtipe<?= $datas->idcupang ?>" hidden></textarea><?= $datas->type ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="viewwarna<?= $datas->idcupang ?>" class="col-form-label">Warna:</label>
                            <input type="text" class="form-control" id="viewwarna<?= $datas->idcupang ?>" hidden><?= $datas->warna ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="viewharga<?= $datas->idcupang ?>" class="col-form-label">Harga:</label>
                            <textarea class="form-control" id="viewharga<?= $datas->idcupang ?>" hidden></textarea>Rp <?= $datas->price ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="viewjk<?= $datas->idcupang ?>" class="col-form-label">Jenis Kelamin:</label>
                            <input type="text" class="form-control" id="viewjk<?= $datas->idcupang ?>" hidden><?= $datas->jeniskelamin ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="viewukuran<?= $datas->idcupang ?>" class="col-form-label">Ukuran:</label>
                            <textarea class="form-control" id="viewukuran<?= $datas->idcupang ?>" hidden></textarea><?= $datas->size ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="viewket<?= $datas->idcupang ?>" class="col-form-label">Keterangan:</label>
                            <input type="text" class="form-control" id="viewkat<?= $datas->idcupang ?>" hidden><?= $datas->note ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1_<?= $datas->idcupang ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">EDIT DATA IKAN CUPANG</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('addcupang/update') ?>">
                  <input type="hidden" name="idcupang" value="<?= $datas->idcupang ?>">
                  <div class="form-group">
                    <label for="cupangno<?= $datas->idcupang ?>" class="col-form-label">Ikan Cupang No:</label>
                    <input type="hidden" name="cupangno" class="form-control" id="cupangno<?= $datas->idcupang ?>" value="<?= $datas->cupangno ?>">
                  </div>
                  <div class="form-group">
                    <label for="codecupang<?= $datas->idcupang ?>" class="col-form-label">Code Ikan Cupang:</label>
                    <input type="text" name="codecupang" class="form-control" id="codecupang<?= $datas->idcupang ?>" value="<?= $datas->codecupang ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="cupangname<?= $datas->idcupang ?>" class="col-form-label">Nama Ikan Cupang:</label>
                    <input type="text" name="cupangname" class="form-control" id="cupangname<?= $datas->idcupang ?>" value="<?= $datas->cupangname ?>">
                  </div>
                  <div class="form-group">
                    <label for="type<?= $datas->idcupang ?>" class="col-form-label">Type Ikan Cupang:</label>
                    <input type="text" name="type" class="form-control" id="type<?= $datas->idcupang ?>" value="<?= $datas->type ?>">
                  </div>
                  <div class="form-group">
                    <label for="warna<?= $datas->idcupang ?>" class="col-form-label">Warna Ikan Cupang</label>
                    <input type="text" name="warna" class="form-control" id="warna<?= $datas->idcupang ?>" value="<?= $datas->warna ?>">
                  </div>
                  <div class="form-group">
                    <label for="price<?= $datas->idcupang ?>" class="col-form-label">Harga :</label>
                    <input type="number" name="price" class="form-control" id="price<?= $datas->idcupang ?>" value="<?= $datas->price ?>">
                  </div>
                  <div class="form-group">
                    <label for="size<?= $datas->idcupang ?>" class="col-form-label">Ukuran Ikan Cupang :</label>
                    <input type="text" name="size" class="form-control" id="size<?= $datas->idcupang ?>" value="<?= $datas->size ?>">
                  </div>
                  <div class="form-group">
                    <label for="jeniskelamin<?= $datas->idcupang ?>" class="col-form-label">Jenis Kelamin :</label>
                    <br><input type="radio" name="jeniskelamin" id="jeniskelaminjantan<?= $datas->idcupang ?>" value="Male" 
                    <?php echo ($datas->jeniskelamin == 'Male')?'checked':''; ?>> Male<br>
                    <input type="radio" name="jeniskelamin" id="jeniskelaminbetina<?= $datas->idcupang ?>" value="Female"
                    <?php echo ($datas->jeniskelamin == 'Female')?'checked':''; ?>> Female<br>
                  </div>
                  <div>
                    <label for="note<?= $datas->idcupang ?>" class="col-form-label">Note:</label>
                    <textarea name="note" class="form-control" id="note<?= $datas->idcupang ?>"><?= $datas->note ?></textarea>
                  </div>
                  <div class="form-group" hidden="">
                    <label for="status<?= $datas->idcupang ?>" class="col-form-label">Status:</label>
                    <select name="status" id="status<?= $datas->idcupang ?>" class="form-control">
                      <?php if ($datas->status == 1) { ?>
                        <option value="1">Ikan Ada</option>
                      <?php } else { ?>
                        <option value="0">Ikan Sudah Terjual</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div>
                    <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </tbody>
      </table>
      </div>
    </div>
  </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">TAMBAH DATA IKAN CUPANG</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('addcupang/store') ?>">
            <div class="form-group">
              <input type="hidden" name="cupangno" class="form-control" id="cupangno" value="<?= $cupangno  ?>">
            </div>
            <div class="form-group">
              <label for="codecupang" class="col-form-label">Kode Ikan Cupang:</label>
              <input type="text" name="codecupang" class="form-control" id="codecupang" value="" required>
            </div>
            <div class="form-group">
              <label for="cupangname" class="col-form-label">Nama Ikan Cupang:</label>
              <input type="text" name="cupangname" class="form-control" id="cupangname" value="" required>
            </div>
            <div class="form-group">
              <label for="type" class="col-form-label">Type Ikan Cupang:</label>
              <input type="text" name="type" class="form-control" id="type" value="" required>
            </div>
            <div class="form-group">
              <label for="warna" class="col-form-label">Warna:</label>
              <input type="text" name="warna" class="form-control" id="warna" value="" required>
            </div>
            <div class="form-group">
              <label for="price" class="col-form-label">Harga:</label>
               <input type="number" name="price" class="form-control" id="price" value="0" required>
               <input type="hidden" name="status" class="form-control" id="status" value="1">
            </div>
            <div class="form-group">
              <label for="size" class="col-form-label">Ukuran:</label>
              <input type="text" name="size" class="form-control" id="size" value="" required>
            </div>
            <div class="form-group">
              <label for="jeniskelamin" class="col-form-label">Jenis Kelamin :</label>
                    <br><input type="radio" name="jeniskelamin" id="jeniskelaminmale" value="Male" checked=""> Male<br>
                    <input type="radio" name="jeniskelamin" id="jeniskelaminfemale" value="Female"> Female<br>
            </div>
            <div>
              <label for="note" class="col-form-label">Keterangan:</label>
              <textarea name="note" class="form-control" id="note"></textarea>
            </div>
            <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>