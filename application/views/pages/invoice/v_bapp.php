<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Berita Acara Penyelesaian Pekerjaan (BAPP)</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Berita Acara Penyelesaian Pekerjaan (BAPP)
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Nama Perusahaan</th>
                            <th>No Kontrak</th>
                            <th>Deskripsi</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Tanggal Kembali Berkas</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>Nama Perusahaan</th>
                            <th>No Kontrak</th>
                            <th>Deskripsi</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Tanggal Kembali Berkas</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>

                                <td><?= $datas->namaperusahaan ?></td>
                                <td><?= $datas->no_kontrak ?></td>
                                <td><?= $datas->deskripsi ?></td>
                                <td><?= $datas->nomor ?></td>
                                <td><?= $datas->tanggal ?></td>
                                <td><?php if ($datas->status_bapp == '1') {
                                        echo "<p style='color:blue'>Dikirim ke cabang</p>";
                                    } else if ($datas->status_bapp == '2') {
                                        echo "<p style='color:green'>Diterima dari cabang</p>";
                                    } else if ($datas->status_bapp == '3') {
                                        echo "<p style='color:Red'>Dikirim ke pusat</p>";
                                    } else if ($datas->status_bapp == '4') {
                                        echo "<p style='color:green'>Diterima dari pusat</p>";
                                    } else {
                                        echo "Sudah Tertagihkan";
                                    } ?>
                                <td><?= $datas->tanggal_kembali ?></td>
                                <td><?= $datas->keterangan ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id_bapp ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_bapp ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->id_bapp ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View BAPP</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nama Perusahaan</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->namaperusahaan ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">No Kontrak:</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->no_kontrak ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Deskripsi :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->deskripsi ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="city" class="col-form-label">Nomor :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->nomor ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Tanggal :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->tanggal ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Status :</label>
                                                    <?php if ($datas->status_bapp == '1') {
                                                        echo "<p style='color:blue'>Dikirim ke cabang</p>";
                                                    } else if ($datas->status_bapp == '2') {
                                                        echo "<p style='color:green'>Diterima dari cabang</p>";
                                                    } else if ($datas->status_bapp == '3') {
                                                        echo "<p style='color:Red'>Dikirim ke pusat</p>";
                                                    } else if ($datas->status_bapp == '4') {
                                                        echo "<p style='color:green'>Diterima dari pusat</p>";
                                                    } else {
                                                        echo "Sudah Tertagihkan";
                                                    } ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Tanggal Kembali Berkas :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->tanggal_kembali ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Keterangan :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->keterangan  ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_bapp ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT BAPP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('bapp/update') ?>">
                                <input type="hidden" name="id_bapp" value="<?= $datas->id_bapp ?>">
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Nama Perusahaan:</label>
                                    <select class="form-control" name="namaperusahaan">
                                        <?php foreach ($customer as $key => $value) {
                                        ?><option value="<?= $value->companyname ?>"><?= $value->companyname ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">No Kontrak :</label>
                                    <select class="form-control" name="no_kontrak">
                                        <?php foreach ($po as $key => $value) {
                                        ?><option value="<?= $value->nokontrak ?>"><?= $value->nokontrak ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">Deskripsi :</label>
                                    <select class="form-control" name="deskripsi">
                                        <?php foreach ($penawaran as $key => $value) {
                                        ?><option value="<?= $value->namabrand ?>"><?= $value->namabrand ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Nomor :</label>
                                    <input type="text" name="nomor" class="form-control" id="company-name" value="<?= $datas->nomor ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Tanggal :</label>
                                    <input type="date" name="tanggal" class="form-control" id="company-name" value="<?= $datas->tanggal ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Status :</label>
                                    <select name="status_bapp">
                                        <option value="1" class="form-control">Dikirim ke cabang</option>
                                        <option value="2" class="form-control">Diterima dari cabang</option>
                                        <option value="3" class="form-control">Dikirim ke pusat</option>
                                        <option value="4" class="form-control">Diterima dari pusat</option>
                                        <option value="5" class="form-control">Sudah tertagihkan</option>
                                    </select>
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Tanggal Kembali Berkas :</label>
                                    <input type="date" name="tanggal_kembali" class="form-control" id="company-name" value="<?= $datas->tanggal_kembali ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Keterangan :</label>
                                    <input type="text" name="keterangan" class="form-control" id="company-name" value="<?= $datas->keterangan ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD BAPP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="text-danger">*Wajib diisi semua!</span>
                <?php echo form_open_multipart('bapp/store') ?>
                <div class="form-group">
                    <label for="tanggal" class="col-form-label">Nama Perusahaan :</label>
                    <select class="form-control" name="namaperusahaan">
                        <?php foreach ($customer as $key => $value) {
                        ?><option value="<?= $value->companyname ?>"><?= $value->companyname ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">No Kontrak :</label>
                    <select class="form-control" name="no_kontrak">
                        <?php foreach ($po as $key => $value) {
                        ?><option value="<?= $value->nokontrak ?>"><?= $value->nokontrak ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Deskripsi :</label>
                    <select class="form-control" name="deskripsi">
                        <?php foreach ($penawaran as $key => $value) {
                        ?><option value="<?= $value->namabrand ?>"><?= $value->namabrand ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Nomor :</label>
                    <input type="text" name="nomor" class="form-control" id="nomor" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Tanggal :</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Status :</label>
                    <select name="status_bapp">
                        <option value="1" class="form-control">Dikirim ke cabang</option>
                        <option value="2" class="form-control">Diterima dari cabang</option>
                        <option value="3" class="form-control">Dikirim ke pusat</option>
                        <option value="4" class="form-control">Diterima dari pusat</option>
                        <option value="5" class="form-control">Sudah tertagihkan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Tanggal Kembali Berkas :</label>
                    <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Keterangan :</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" value="" required>
                </div>
                <div>
                    <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>