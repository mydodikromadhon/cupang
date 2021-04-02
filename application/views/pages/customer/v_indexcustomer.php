  <div class="container-fluid">
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Customer</li>
    </ol>
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Total</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $countcustomer ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body">New Customer</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $countcustomer ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body">Customer Aktif</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $activecustomer ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body">Customer Non Aktif</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $deactivecustomer ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Customer
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama </th>
                
                <th>Alamat</th>
                <th>Kota</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nama </th>
                
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
                  <td><?= $datas->companyname ?></td>
                 
                  <td><?= $datas->address01 ?></td>
                  <td><?= $datas->city01 ?></td>
                  <td><?= $datas->phone ?></td>
                  <td><?= $datas->email ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idcustomer ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idcustomer ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->idcustomer ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="company-nameview<?= $datas->idcustomer ?>" class="col-form-label">Company Name:</label>
                            <input type="text" class="form-control" id="company-nameview<?= $datas->idcustomer ?>" value="" hidden><?= $datas->companyname ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-textview<?= $datas->idcustomer ?>" class="col-form-label">Alamat 1:</label>
                            <textarea class="form-control" id="address-textview<?= $datas->idcustomer ?>" hidden></textarea><?= $datas->address01 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="cityview<?= $datas->idcustomer ?>" class="col-form-label">Kota 1:</label>
                            <input type="text" class="form-control" id="cityview<?= $datas->idcustomer ?>" hidden><?= $datas->city01 ?>
                          </div>
                          
                          
                          <div class="form-group" style="padding-left: 10px">
                            <label for="hpview<?= $datas->idcustomer ?>" class="col-form-label">Phone Number:</label>
                            <textarea class="form-control" id="hpview<?= $datas->idcustomer ?>" hidden></textarea><?= $datas->phone ?>
                          </div>
                          
                          <div class="form-group" style="padding-left: 10px">
                            <label for="emailview<?= $datas->idcustomer ?>" class="col-form-label">Email:</label>
                            <textarea class="form-control" id="emailview<?= $datas->idcustomer ?>" hidden></textarea><?= $datas->email ?>
                          </div>
                          
                          
                            
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="noteview<?= $datas->idcustomer ?>" class="col-form-label">Note:</label>
                            <input type="text" class="form-control" id="noteview<?= $datas->idcustomer ?>" hidden><?= $datas->note ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1_<?= $datas->idcustomer ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('customer/update') ?>">
                  <input type="hidden" name="idcustomer" value="<?= $datas->idcustomer ?>">
                  <div class="form-group">
                    <label for="kodeedit<?= $datas->idcustomer ?>" class="col-form-label">Costumer Kode:</label>
                    <input type="text" name="codecustomer" class="form-control" id="kodeedit<?= $datas->idcustomer ?>" value="<?= $datas->codecustomer ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="namaedit<?= $datas->idcustomer ?>" class="col-form-label">Company Name:</label>
                    <input type="text" name="companyname" class="form-control" id="namaedit<?= $datas->idcustomer ?>" value="<?= $datas->companyname ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-textedit<?= $datas->idcustomer ?>" class="col-form-label">Alamat 1:</label>
                    <textarea name="address01" class="form-control" id="address-textedit<?= $datas->idcustomer ?>"><?= $datas->address01 ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="kotaedit<?= $datas->idcustomer ?>" class="col-form-label">Kota 1:</label>
                    <select name="city01" id="kotaedit<?= $datas->idcustomer ?>" class="form-control js-basic-single">
                      <?php foreach ($city as $citys) { ?>
                        <option <?php if ($citys->city == $datas->city01) {
                                  echo 'selected';
                                } ?> value="<?= $citys->city ?>"><?= $citys->city ?></option>
                      <?php } ?>
                    </select>
                  </div>
 
                  <div class="form-group">
                    <label for="nama1edit<?= $datas->idcustomer ?>" class="col-form-label">Nama 1:</label>
                    <input name="name01" type="text" class="form-control" id="nama1edit<?= $datas->idcustomer ?>" value="<?= $datas->name01 ?>">
                  </div>
                  <div class="form-group">
                    <label for="jabatanedit<?= $datas->idcustomer ?>" class="col-form-label">Jabatan 1:</label>
                    <input type="text" name="jabatan01" class="form-control" id="jabatanedit<?= $datas->idcustomer ?>" value="<?= $datas->jabatan01 ?>">
                  </div>
                  <div class="form-group">
                    <label for="hpedit<?= $datas->idcustomer ?>" class="col-form-label">Phone Number:</label>
                    <input type="text" name="phone" class="form-control" id="hpedit<?= $datas->idcustomer ?>" value="<?= $datas->phone ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="emailedit<?= $datas->idcustomer ?>" class="col-form-label">Email:</label>
                    <input type="text" name="email" class="form-control" id="emailedit<?= $datas->idcustomer ?>" value="<?= $datas->email ?>">
                  </div>
                  <div class="form-group">
                    <label for="negaraedit<?= $datas->idcustomer ?>" class="col-form-label">Country:</label>
                    <select name="country" id="negaraedit<?= $datas->idcustomer ?>" class="form-control">
                      <?php foreach ($country as $countrys) { ?>
                        <option <?php if ($countrys->country == $datas->country) {
                                  echo 'selected';
                                } ?> value="<?= $countrys->country ?>"><?= $countrys->country ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="statusedit<?= $datas->idcustomer ?>" class="col-form-label">Status:</label>
                    <select name="status" id="statusedit<?= $datas->idcustomer ?>" class="form-control">
                      <?php if ($datas->status == 1) { ?>
                        <option value="1">Active</option>
                      <?php } else { ?>
                        <option value="0">Deactive</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div>
                    <label for="noteedit<?= $datas->idcustomer ?>" class="col-form-label">Note:</label>
                    <textarea name="note" class="form-control" id="noteedit<?= $datas->idcustomer ?>"><?= $datas->note ?></textarea>
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
          <h5 class="modal-title" id="exampleModalLabel">ADD Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('customer/store') ?>">
            <div class="form-group">
              <label for="kode" class="col-form-label">Costumer Kode:</label>
              <input type="text" name="codecustomer" class="form-control" id="kode" value="<?= $kodebarang  ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama" class="col-form-label">Company Name:</label>
              <input type="text" name="companyname" class="form-control" id="nama" value="" required>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Alamat 1:</label>
              <textarea name="address01" class="form-control" id="address-text"></textarea>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Kota 1:</label>
              <select name="city01" id="city" class="form-control js-basic-single">
                <?php foreach ($city as $citys) { ?>
                  <option value="<?= $citys->city ?>"><?= $citys->city ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="nama1" class="col-form-label">Nama 1:</label>
              <input name="name01" type="text" class="form-control" id="nama1" Value="" required>
              
            </div>
            <div class="form-group">
              <label for="jabatan" class="col-form-label">Jabatan 1:</label>
              <input type="text" name="jabatan01" class="form-control" id="jabatan" value="">
            </div>
            
           
            <div class="form-group">
              <label for="hp" class="col-form-label">Phone Number:</label>
              <input type="text" name="phone" class="form-control" id="hp" value="">
            </div>
           
            <div class="form-group">
              <label for="email" class="col-form-label">Email:</label>
              <input type="text" name="email" class="form-control" id="email" value="">
            </div>
            <div class="form-group">
              <label for="negara" class="col-form-label">Country:</label>
              <select name="country" id="negara" class="form-control">
                <?php foreach ($country as $countrys) { ?>
                  <option value="<?= $countrys->country ?>"><?= $countrys->country ?></option>
                <?php } ?>
              </select>
            </div>
            <div>
              <label for="note" class="col-form-label">Note:</label>
              <textarea name="note" class="form-control" id="note"></textarea>
            </div>
            <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>