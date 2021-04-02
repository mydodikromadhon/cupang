  <div class="container-fluid">
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">DATA SOURCE</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Source
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
               <th>Nama</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->name ?></td>
                  <td><?= $datas->note ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">View Source</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form>
                          <div class="form-group"  padding-left: 10px;">
                            <label for="city" class="col-form-label">Nama Source:</label>
                            <input type="text" class="form-control" id="name" hidden><?= $datas->name ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px">
                            <label for="address-text" class="col-form-label">Catatan:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->note ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1_<?= $datas->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">EDIT DATASOURCE</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('source/update') ?>">
                  <input type="hidden" name="id" value="<?= $datas->id ?>">
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?= $datas->name ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Keterangan:</label>
                    <input type="text" name="note" class="form-control" id="note" value="<?= $datas->note ?>">
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
          <h3 class="modal-title" id="exampleModalLabel">TAMBAH DATA SOURCE</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('source/store') ?>">
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Name:</label>
              <input type="text" name="name" class="form-control" id="name" value="">
            </div>
            <div>
              <label for="city" class="col-form-label">Keterangan:</label>
              <textarea name="note" class="form-control" id="note"></textarea>
            </div>
            <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>