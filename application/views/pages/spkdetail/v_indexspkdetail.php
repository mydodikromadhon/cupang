  <div class="container-fluid">
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">SPK-Detail</li>
    </ol>
    <!-- <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Dashboard</div>
                                    <div class="card-footer" style="text-align: right"><h2><?= $countcustomer ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">New Customer</div>
                                    <div class="card-footer" style="text-align: right"><h2><?= $countcustomer ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Customer Aktif</div>
                                   <div class="card-footer" style="text-align: right"><h2><?= $activecustomer ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Customer Non Aktif</div>
                                   <div class="card-footer" style="text-align: right"><h2><?= $deactivecustomer ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div> -->

    <div class="card">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data SPK DETAIL
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SPK Name</th>
                <th>SPK Number</th>
                <th>Tema</th>
                <th>Lokasi</th>
                <th>Pembuat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>SPK Name</th>
                <th>SPK Number</th>
                <th>Tema</th>
                <th>Lokasi</th>
                <th>Pembuat</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->spktitle ?></td>
                  <td><?= $datas->spknumber ?></td>
                  <td><?= $datas->tema ?></td>
                  <td><?= $datas->lokasi ?></td>
                  <td><?= $datas->dibuatoleh ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idspkdetail ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idspkdetail ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->idspkdetail ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View SPK Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form>
                          <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                          <div class="form-group" style=" padding-left: 10px;">
                            <label for="" class="col-form-label">SPK Title:</label>
                            <input type="text" class="form-control" id="" value="" hidden><?= $datas->spktitle ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="" class="col-form-label">Lokasi:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->tema ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Ukuran:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->ukuran ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Jumlah:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->jumlah ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Spesifikasi:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->spkdate ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Periode Tayang:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->periode_tayang ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Harga:</label>
                            <input type="text" class="uang form-control" id="" hidden><?= $datas->harga ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Pembayaran Via:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->pembayaranvia ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Biaya:</label>
                            <input type="text" class="uang form-control" id="" hidden><?= $datas->biaya ?>
                          </div>

                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Direktur:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->direktur ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">diSetujui:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->disetujui ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">diBuat:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->dibuatoleh ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">diPeriksa:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->diperiksa ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px;">
                            <label for="city" class="col-form-label">Tanggal Approve:</label>
                            <input type="text" class="form-control" id="" hidden><?= $datas->tanggalapproval ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Status:</label>
                            <input type="text" class="form-control" id="" hidden><?php if ($datas->status == 1) {
                                                                                    echo "Active";
                                                                                  } else {
                                                                                    echo "Deactive";
                                                                                  } ?>
                          </div>


                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1_<?= $datas->idspkdetail ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT SPK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php echo form_open_multipart('spkdetail/update') ?>
                <input type="hidden" name="idspkdetail" value="<?= $datas->idspkdetail ?>">
                <div class="form-group">
                  <label for="" class="col-form-label">SPK:</label>
                  <select class="form-control" name="idspk">
                    <?php foreach ($spk as $key => $value) {
                    ?><option value="<?= $value->idmasterspk ?>"><?= $value->spktitle ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="" class="col-form-label">Tema:</label>
                  <textarea name="tema" id="" class="form-control" rows="3"><?= $datas->tema ?></textarea>
                </div>
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Lokasi:</label>
                  <input type="text" name="lokasi" class="form-control" id="lokasi" value="<?= $datas->lokasi ?>" required>
                </div>
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Ukuran:</label>
                  <input type="text" name="ukuran" class="form-control" id="ukuran" value="<?= $datas->ukuran ?>" required>
                </div>
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Jumlah:</label>
                  <input type="number" name="jumlah" class="form-control" value="<?= $datas->jumlah ?>">
                </div>
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Spesifikasi:</label>
                  <input type="text" name="spesifikasi" class="form-control" value="<?= $datas->spesifikasi ?>">
                </div>
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Periode Tayang:</label>
                  <input type="date" name="periode_tayang" class="form-control" value="<?= $datas->periode_tayang ?>">
                </div>
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Harga:</label>
                  <input type="text" name="harga" class="uang form-control" value="<?= $datas->harga ?>">
                </div>
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Pembayaran Via:</label>
                  <input type="text" name="pembayaranvia" class="form-control" value="<?= $datas->pembayaranvia ?>">
                </div>
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Biaya:</label>
                  <input type="number" name="biaya" class="uang form-control" value="<?= $datas->biaya ?>">
                </div>


                <!--          <div class="form-group">
                                <label for="address-text" class="col-form-label">Direktur:</label>
                                <input type="text" name="direktur" class="form-control"> 
                              </div>
                              <div class="form-group">
                                <label for="address-text" class="col-form-label">DiSetujui:</label>
                                <input type="text" name="disetujuir" class="form-control"> 
                              </div>
                              <div class="form-group">
                                <label for="address-text" class="col-form-label">DiBuat Oleh:</label>
                                <input type="text" name="dibuatoleh" class="form-control"> 
                              </div>
                              <div class="form-group">
                                <label for="address-text" class="col-form-label">DiPeriksa:</label>
                                <input type="text" name="direktur" class="form-control"> 
                              </div> -->
                <div class="form-group">
                  <label for="address-text" class="col-form-label">Tanggal Approve:</label>
                  <input type="date" name="tanggalapproval" class="form-control" value="<?= $datas->tanggalapproval ?>">
                </div>
                <div>
                  <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:50px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD SPK-Detail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <span class="text-danger">*Wajib diisi semua!</span>
          <?php echo form_open_multipart('spkdetail/store') ?>
          <div class="form-group">
            <label for="" class="col-form-label">SPK Name:</label>
            <select class="form-control" name="idspk">
              <?php foreach ($spk as $key => $value) {
              ?><option value="<?= $value->idmasterspk ?>"><?= $value->spktitle ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="" class="col-form-label">Tema:</label>
            <textarea name="tema" id="tema" class="form-control" rows="3" value="" required></textarea>
          </div>
          <div class="form-group">
            <label for="address-text" class="col-form-label">Lokasi:</label>
            <input type="text" name="lokasi" class="form-control" id="lokasi" value="" required>
          </div>
          <div class="form-group">
            <label for="address-text" class="col-form-label">Ukuran:</label>
            <input type="text" name="ukuran" class="form-control" id="ukuran" value="" required>
          </div>
          <div class="form-group">
            <label for="address-text" class="col-form-label">Jumlah:</label>
            <input type="number" name="jumlah" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="address-text" class="col-form-label">Spesifikasi:</label>
            <input type="text" name="spesifikasi" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="address-text" class="col-form-label">Periode Tayang:</label>
            <input type="date" name="periode_tayang" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="address-text" class="col-form-label">Harga:</label>
            <input type="number" name="harga" class="uang form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="address-text" class="col-form-label">Pembayaran Via:</label>
            <input type="text" name="pembayaranvia" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="address-text" class="col-form-label">Biaya:</label>
            <input type="number" name="biaya" class="uang form-control" value="" required>
          </div>


          <!--          <div class="form-group">
                                <label for="address-text" class="col-form-label">Direktur:</label>
                                <input type="text" name="direktur" class="form-control"> 
                              </div>
                              <div class="form-group">
                                <label for="address-text" class="col-form-label">DiSetujui:</label>
                                <input type="text" name="disetujuir" class="form-control"> 
                              </div>
                              <div class="form-group">
                                <label for="address-text" class="col-form-label">DiBuat Oleh:</label>
                                <input type="text" name="dibuatoleh" class="form-control"> 
                              </div>
                              <div class="form-group">
                                <label for="address-text" class="col-form-label">DiPeriksa:</label>
                                <input type="text" name="direktur" class="form-control"> 
                              </div> -->
          <div class="form-group">
            <label for="address-text" class="col-form-label">Tanggal Approve:</label>
            <input type="date" name="tanggalapproval" class="form-control" value="" required>
          </div>
          <div>
            <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:50px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
          </div>

          </form>
        </div>
      </div>
    </div>
  </div>