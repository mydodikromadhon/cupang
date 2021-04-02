  <div class="container-fluid">
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Farm</li>
    </ol>
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Farm</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $countfarm ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body">New Farm</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $countfarm ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body">Farm Aktif</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $activefarm ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body">Farm Non Aktif</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $deactivefarm ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Farm
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>PIC</th>
                <th>Nama Farm</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>PIC</th>
                <th>Nama Farm</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->name01 ?></td>
                  <td><?= $datas->farmname ?></td>
                  <td><?= $datas->address01 ?></td>
                  <td><?= $datas->city01 ?></td>
                  <td><?= $datas->phone ?></td>
                  <td><?= $datas->email ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idfarm ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idfarm ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->idfarm ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Farm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form>
                          <div class="form-group" style=" padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">Farm Code:</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->codefarm ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">Farm Name:</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->farmname ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Alamat 1:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->address01 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Kota 1:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->city01 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Nama 1:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->name01 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Jabatan 1:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->jabatan01 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Phone Number:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->phone ?>
                          </div>
                          
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Email:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->email ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Country:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->country ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Note:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->note ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1_<?= $datas->idfarm ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT Farm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('farm/update') ?>">
                  <input type="hidden" name="idfarm" value="<?= $datas->idfarm ?>">
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Farm Kode:</label>
                    <input type="text" name="codefarm" class="form-control" id="company-name" value="<?= $datas->codefarm ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Farm Name:</label>
                    <input type="text" name="farmname" class="form-control" id="company-name" value="<?= $datas->farmname ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Alamat 1:</label>
                    <textarea name="address01" class="form-control" id="address-text"><?= $datas->address01 ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Kota 1:</label>
                    <select name="city01" id="" class="form-control">
                      <?php foreach ($city as $citys) { ?>
                        <option <?php if ($citys->city == $datas->city01) {
                                  echo 'selected';
                                } ?> value="<?= $citys->city ?>"><?= $citys->city ?></option>
                      <?php } ?>
                    </select>
                  </div>
 
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Nama Pemilik Farm:</label>
                    <input name="name01" type="text" class="form-control" id="company-name" value="<?= $datas->name01 ?>">
                    <textarea class="form-control" id="address-text" hidden></textarea>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Jabatan:</label>
                    <input type="text" name="jabatan01" class="form-control" id="company-name" value="<?= $datas->jabatan01 ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Phone Number:</label>
                    <input type="text" name="phone" class="form-control" id="company-name" value="<?= $datas->phone ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Email:</label>
                    <input type="text" name="email" class="form-control" id="company-name" value="<?= $datas->email ?>">
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Country:</label>
                    <select name="country" id="" class="form-control">
                      <?php foreach ($country as $countrys) { ?>
                        <option <?php if ($countrys->country == $datas->country) {
                                  echo 'selected';
                                } ?> value="<?= $countrys->country ?>"><?= $countrys->country ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Status:</label>
                    <select name="status" id="" class="form-control">
                      <?php if ($datas->status == 1) { ?>
                        <option value="1">Active</option>
                      <?php } else { ?>
                        <option value="0">Deactive</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div>
                    <label for="city" class="col-form-label">Note:</label>
                    <textarea name="note" class="form-control" id="address-text"><?= $datas->note ?></textarea>
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
          <h5 class="modal-title" id="exampleModalLabel">ADD farm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('farm/store') ?>">
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Farm Kode:</label>
              <input type="text" name="codefarm" class="form-control" id="farmnamr" value="<?= $kodebarang  ?>" readonly>
            </div>
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Farm Name:</label>
              <input type="text" name="farmname" class="form-control" id="farmname" value="" required>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Alamat:</label>
              <textarea name="address01" class="form-control" id="address-text" required></textarea>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Kota 1:</label>
              <select name="city01" id="" class="form-control">
                <?php foreach ($city as $citys) { ?>
                  <option value="<?= $citys->city ?>"><?= $citys->city ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Nama Pemilik:</label>
              <input name="name01" type="text" class="form-control" id="pemilik" Value="" required>
              
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Jabatan:</label>
              <input type="text" name="jabatan01" class="form-control" id="company-name" value="">
            </div>
            
           
            <div class="form-group">
              <label for="address-text" class="col-form-label">Phone Number:</label>
              <input type="text" name="phone" class="form-control" id="company-name" value="" required>
            </div>
           
            <div class="form-group">
              <label for="address-text" class="col-form-label">Email:</label>
              <input type="text" name="email" class="form-control" id="company-name" value="" required>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Country:</label>
              <select name="country" id="" class="form-control">
                <?php foreach ($country as $countrys) { ?>
                  <option value="<?= $countrys->country ?>"><?= $countrys->country ?></option>
                <?php } ?>
              </select>
            </div>
            <div>
              <label for="city" class="col-form-label">Note:</label>
              <textarea name="note" class="form-control" id="address-text"></textarea>
            </div>
            <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>