  <link rel="shortcut icon" href="<?= base_url() ?>assets/assets/img/ico.png">
  <div class="container-fluid">
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Nota Invoice</li>
      </ol>
      <div class="card">
          <div class="card-header"><i class="fas fa-table mr-1"></i>Data Nota
              <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No Invoice</th>
                              <th>Tanggal</th>
                              <th>Code Cupang</th>
                              <th>Nama Pembeli</th>
                              <th>Qty</th>
                              <th>Price</th>
                              <th>No Sales</th>
                              <th>Sales</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>No Invoice</th>
                              <th>Tanggal</th>
                              <th>Code Cupang</th>
                              <th>Nama Pembeli</th>
                              <th>Qty</th>
                              <th>Price</th>
                              <th>No Sales</th>
                              <th>Sales</th>
                          </tr>
                      </tfoot>
                      <tbody>
                          <?php $no = 1;
                            foreach ($data as $datas) { ?>
                              <tr>
                                  <td>123</td>
                                  <td>2 November 2020</td>
                                  <td>1</td>
                                  <td>Dodik</td>
                                  <td>150.000</td>
                                  <td>Joko</td>
                                  <td>
                                      
                                  </td>
                              </tr>
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
                      <h5 class="modal-title" id="exampleModalLabel">ADD Nota SPK</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <span class="text-danger">*Wajib diisi semua!</span>
                      <?php echo form_open_multipart('notaspk/store') ?>
                      <div class="form-group">
                          <label for="" class="col-form-label">No Invoice:</label>
                          <select class="form-control" name="idspk">
                              123
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="" class="col-form-label">Tanggal</label>
                          <textarea name="tema" id="" class="form-control" rows="3" value="" required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="address-text" class="col-form-label">Code Cupang:</label>
                          <input type="text" name="lokasi" class="form-control" id="lokasi" value="" required>
                      </div>
                      <div class="form-group">
                          <label for="address-text" class="col-form-label">Nama Pembeli:</label>
                          <input type="text" name="ukuran" class="form-control" id="ukuran" value="" required>
                      </div>
                      <div class="form-group">
                          <label for="address-text" class="col-form-label">Jumlah:</label>
                          <input type="number" name="jumlah" class="form-control" value="" required>
                      </div>
                      <div class="form-group">
                          <label for="address-text" class="col-form-label">Harga:</label>
                          <input type="text" name="spesifikasi" class="form-control" value="" required>
                      </div>
                      
                      <div class="form-group">
                          <label for="address-text" class="col-form-label">Nama Seles:</label>
                          <input type="number" name="harga" class="form-control" value="" required>
                      </div>
                      <div class="form-group">
                          <label for="address-text" class="col-form-label">Pembayaran Via:</label>
                          <input type="text" name="pembayaranvia" class="form-control" value="" required>
                      </div>
                      <div class="form-group">
                          <label for="address-text" class="col-form-label">Status:</label>
                          <input type="number" name="biaya" class="form-control" value="" required>
                      </div>

                      <div>
                          <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                      </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>