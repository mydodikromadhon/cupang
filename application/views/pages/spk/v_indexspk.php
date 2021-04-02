  <div class="container-fluid">

    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">SPK</li>
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
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data SPK
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SPK Name</th>
                <th>SPK Number</th>
                <th>Total</th>
                <th>SPK TO</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>SPK Name</th>
                <th>SPK Numebr</th>
                <th>Total</th>
                <th>SPK TO</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->spktitle ?></td>
                  <td><?= $datas->spknumber ?></td>
                  <td><?= $datas->total ?></td>
                  <td><?= $datas->spkto ?></td>
                  <td><?= $datas->spkdate ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idmasterspk ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idmasterspk ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->idmasterspk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Customer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form>
                          <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                          <div class="form-group" style=" padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">SPK Title</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->spktitle ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">SPK Number:</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->spknumber ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Total:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->total ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">SPK TO:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->spkto ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Date:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->spkdate ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1_<?= $datas->idmasterspk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT SPK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('spk/update') ?>">
                  <input type="hidden" name="idmasterspk" value="<?= $datas->idmasterspk ?>">
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">SPK Title:</label>
                    <input type="text" name="spktitle" class="form-control" id="spktitle" value="<?= $datas->spktitle ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">SPK Number:</label>
                    <input type="text" name="spknumber" class="form-control" id="spknumber" value="<?= $datas->spknumber ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Total:</label>
                    <input type="text" name="total" class="uang" id="total" value="<?= $datas->total ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">SPK TO :</label>
                    <select class="form-control" name="spkto">
                      <?php foreach ($spkto as $key => $value) {
                      ?><option value="<?= $value->nama ?>"><?= $value->nama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Date:</label>
                    <input type="date" name="spkdate" class="form-control" value="<?= $datas->spkdate ?>">
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

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD SPK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>

          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('spk/store') ?>">
            <span class="text-danger">*Wajib diisi semua!</span>
            <div class="form-group">
              <label for="Company-name" class="col-form-label">SPK Title:</label>
              <input type="text" name="spktitle" class="form-control" id="spktitle" placeholder="Wajib diisi dengan menggunakan huruf" value="" required>
            </div>
            <div class="form-group">
              <label for="Company-name" class="col-form-label">SPK Number:</label>
              <input type="text" name="spknumber" class="form-control" id="spknumber" placeholder="Wajib diisi dengan menggunakan angka" value="" required>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Total:</label>
              <input type="text" name="total" class="uang" id="total" placeholder="Wajib diisi dengan menggunakan angka" value="" required>
            </div>
            <div class="form-group">
              <label for="Company-name" class="col-form-label">SPK TO :</label>
              <select class="form-control" name="spkto">
                <?php foreach ($spkto as $key => $value) {
                ?><option value="<?= $value->id_spkto ?>"><?= $value->nama ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Date:</label>
              <input type="date" name="spkdate" class="form-control" value="" required>
            </div>
            <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>