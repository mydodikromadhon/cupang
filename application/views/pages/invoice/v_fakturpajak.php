<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Faktur Pajak</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Faktur Pajak
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>No Invoice</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>NPWP</th>
                            <th>No Seri Faktur Pajak</th>
                            <th>Jumlah Faktur Pajak</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>No Invoice</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>NPWP</th>
                            <th>No Seri Faktur Pajak</th>
                            <th>Jumlah Faktur Pajak</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>

                                <td><?= $datas->noinvoice ?></td>
                                <td><?= $datas->nama ?></td>
                                <td><?= $datas->alamat ?></td>
                                <td><?= $datas->npwp ?></td>
                                <td><?= $datas->no_seri ?></td>
                                <td><?= $datas->jumlah_fakturpajak ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id_fakturpajak ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_fakturpajak ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->id_fakturpajak ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Faktur Pajak</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">No Invoice</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->noinvoice ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nama:</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->nama ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Alamat :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->alamat ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="city" class="col-form-label">NPWP :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->npwp ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">No Seri Faktur Pajak :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->no_seri ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Jumlah Faktur Pajak :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->jumlah_fakturpajak ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_fakturpajak ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Faktur Pajak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('fakturpajak/update') ?>">
                                <input type="hidden" name="id_fakturpajak" value="<?= $datas->id_fakturpajak ?>">
                                <div class="form-group">
                                    <label for="" class="col-form-label">No Invoice:</label>
                                    <select class="form-control" name="noinvoice">
                                        <?php foreach ($invoice as $key => $value) {
                                        ?><option value="<?= $value->idinvoice ?>"><?= $value->noinvoice ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Nama:</label>
                                    <input type="text" name="nama" class="form-control" id="company-name" value="<?= $datas->nama ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Alamat :</label>
                                    <input type="text" name="alamat" class="form-control" id="company-name" value="<?= $datas->alamat ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">NPWP :</label>
                                    <input type="text" name="npwp" class="form-control" id="company-name" value="<?= $datas->npwp ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">No Seri Faktur Pajak :</label>
                                    <input type="text" name="no_seri" class="form-control" id="company-name" value="<?= $datas->no_seri ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Jumlah Faktur Pajak :</label>
                                    <input type="text" name="jumlah_fakturpajak" class="form-control" id="company-name" value="<?= $datas->jumlah_fakturpajak ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Faktur Pajak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="text-danger">*Wajib diisi semua!</span>
                <?php echo form_open_multipart('fakturpajak/store') ?>
                <div class="form-group">
                    <label for="" class="col-form-label">No Invoice:</label>
                    <select class="form-control" name="noinvoice">
                        <?php foreach ($invoice as $key => $value) {
                        ?><option value="<?= $value->noinvoice ?>"><?= $value->noinvoice ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal" class="col-form-label">Nama :</label>
                    <input type="text" name="nama" class="form-control tanggal" id="nama" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Alamat :</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">NPWP :</label>
                    <input type="text" name="npwp" class="form-control" id="npwp" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">No Seri Faktur Pajak :</label>
                    <input type="text" name="no_seri" class="form-control" id="no_seri" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Jumlah :</label>
                    <input type="text" name="jumlah_fakturpajak" class="form-control" id="jumlah_fakturpajak" value="" required>
                </div>
                <div>
                    <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>