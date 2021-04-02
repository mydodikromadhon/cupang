<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Monitoring Hutang</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Monitoring Hutang
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Brand</th>
                            <th>Nomor</th>
                            <th>Nama Media</th>
                            <th>Deskripsi</th>
                            <th>Unit</th>
                            <th>Ukuran</th>
                            <th>Harga Per Unit</th>
                            <th>Total</th>
                            <th>Persentasi Kerja</th>
                            <th>Total Pengambilan Tanggal</th>
                            <th>Total Pengambilan Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>Brand</th>
                            <th>Nomor</th>
                            <th>Nama Media</th>
                            <th>Deskripsi</th>
                            <th>Unit</th>
                            <th>Ukuran</th>
                            <th>Harga Per Unit</th>
                            <th>Total</th>
                            <th>Persentasi Kerja</th>
                            <th>Total Pengambilan Tanggal</th>
                            <th>Total Pengambilan Total</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>

                                <td><?= $datas->tanggal ?></td>
                                <td><?= $datas->brand ?></td>
                                <td><?= $datas->nomor ?></td>
                                <td><?= $datas->nama_media ?></td>
                                <td><?= $datas->deskripsi ?></td>
                                <td><?= $datas->unit ?></td>
                                <td><?= $datas->ukuran ?></td>
                                <td><?= $datas->harga_per_unit ?></td>
                                <td><?= $datas->total ?></td>
                                <td><?= $datas->persentasi_pekerjaan ?></td>
                                <td><?= $datas->totalpengambilan_tanggal ?></td>
                                <td><?= $datas->totalpengambilan_total ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_monitoringhutang ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>

            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_monitoringhutang ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Monitoring Hutang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('monitoringhutang/update') ?>">
                                <input type="hidden" name="id_monitoringhutang" value="<?= $datas->id_monitoringhutang ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Tanggal :</label>
                                    <input type="date" name="tanggal" class="form-control" value="<?= $datas->tanggal ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Brand :</label>
                                    <input type="text" name="brand" class="form-control" value="<?= $datas->brand ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Nomor :</label>
                                    <input type="text" name="nomor" class="form-control" value="<?= $datas->nomor ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Nama Media :</label>
                                    <input type="text" name="nama_media" class="form-control" value="<?= $datas->nama_media ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Deskripsi :</label>
                                    <input type="text" name="deskripsi" class="form-control" value="<?= $datas->deskripsi ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Ukuran :</label>
                                    <input type="text" name="ukuran" class="form-control" value="<?= $datas->ukuran ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="Company-name" class="col-form-label">Unit :</label>
                                    <input type="text" name="unit" class="form-control" value="<?= $datas->unit ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="Company-name" class="col-form-label">Harga per Unit :</label>
                                    <input type="text" name="harga_per_unit" class="uang form-control" value="<?= $datas->harga_per_unit ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Total :</label>
                                    <input type="text" name="total" class="uang form-control" value="<?= $datas->total ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Persentasi Kerja :</label>
                                    <input type="text" name="persentasi_pekerjaan" class="form-control" value="<?= $datas->persentasi_pekerjaan ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Total Pengambilan Tanggal :</label>
                                    <input type="text" name="totalpengambilan_tanggal" class="form-control" value="<?= $datas->totalpengambilan_tanggal ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="Company-name" class="col-form-label">Total Pengambilan Jumlah :</label>
                                    <input type="text" name="totalpengambilan_total" class="form-control" value="<?= $datas->totalpengambilan_total ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Monitoring Hutang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('monitoringhutang/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Tanggal :</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="">
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Brand :</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Nomor :</label>
                        <input type="text" name="nomor" class="form-control" id="nomor" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Nama Media :</label>
                        <input type="text" name="nama_media" class="form-control" id="nama_media" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Deskripsi :</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Unit :</label>
                        <input type="text" name="unit" class="form-control" id="unit" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Ukuran :</label>
                        <input type="text" name="ukuran" class="form-control" id="ukuran" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Harga per Unit :</label>
                        <input type="text" name="harga_per_unit" class="uang form-control" id="harga_per_unit" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Total :</label>
                        <input type="text" name="total" class="uang form-control" id="total" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Persentasi Kerja :</label>
                        <input type="text" name="persentasi_pekerjaan" class="form-control" id="persentasi_pekerjaan" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Total Pengambilan Tanggal :</label>
                        <input type="text" name="totalpengambilan_tanggal" class="form-control" id="totalpengambilan_tanggal" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Total Pengambilan Jumlah :</label>
                        <input type="text" name="totalpengambilan_total" class="form-control" id="totalpengambilan_total" value="" required>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>