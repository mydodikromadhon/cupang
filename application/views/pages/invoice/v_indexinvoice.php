<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Monitoring Invoice</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Monitoring Invoice
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Nama</th>
                            <th>Tema</th>
                            <th>No Invoice</th>
                            <th>Date Invoice</th>
                            <th>Jasa</th>
                            <th>PPN</th>
                            <th>PPH</th>
                            <th>Nominal</th>
                            <th>Nomor Faktur</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Pengiriman Via</th>
                            <th>Rencana Pembayaran</th>
                            <th>Terbayarkan Tanggal</th>
                            <th>Terbayarkan Nominal</th>
                            <th>Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>Nama</th>
                            <th>Tema</th>
                            <th>No Invoice</th>
                            <th>Date Invoice</th>
                            <th>Jasa</th>
                            <th>PPN</th>
                            <th>PPH</th>
                            <th>Nominal</th>
                            <th>Nomor Faktur</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Pengiriman Via</th>
                            <th>Rencana Pembayaran</th>
                            <th>Terbayarkan Tanggal</th>
                            <th>Terbayarkan Nominal</th>
                            <th>Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->nama ?></td>
                                <td><?= $datas->tema ?></td>
                                <td><?= $datas->noinvoice ?></td>
                                <td><?= $datas->dateinvoice ?></td>
                                <td><?= $datas->jasa ?></td>
                                <td><?= $datas->ppn ?></td>
                                <td><?= $datas->pph ?></td>
                                <td><?= $datas->nominal ?></td>
                                <td><?= $datas->nofaktur ?></td>
                                <td><?= $datas->tglpengiriman ?></td>
                                <td><?= $datas->pengirimanvia ?></td>
                                <td><?= $datas->rencanapembayaran ?></td>
                                <td><?= $datas->bayartanggal ?></td>
                                <td><?= $datas->bayarnominal ?></td>
                                <td><?= $datas->pembayaran ?></td>
                                <td><?= $datas->keterangan ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idinvoice ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idinvoice ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->idinvoice ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Monitoring Invoice</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nama :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->nama ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Tema :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->tema ?>
                                                </div>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">No Invoice :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->noinvoice ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Date Invoice:</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->dateinvoice ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Jasa :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->jasa ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="city" class="col-form-label">PPN :</label>
                                                    <input type="text" class="uang form-control" id="company-name" hidden><?= $datas->ppn ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">PPH :</label>
                                                    <input type="text" class="uang form-control" id="company-name" hidden><?= $datas->pph ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                                    <input type="text" class="uang" id="company-name" hidden><?= $datas->nominal ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nomor Faktur :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->nofaktur ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Tanggal Pengiriman :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->tglpengiriman ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="city" class="col-form-label">Pengiriman Via :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->pengirimanvia ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Rencana Pembayaran :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->rencanapembayaran ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Terbayarkan Tanggal :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->bayartanggal ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="city" class="col-form-label">Terbayarkan Nominal :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->bayarnominal ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Pembayaran :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->rencanapembayaran ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Keterangan :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->keterangan ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->idinvoice ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Monitoring Invoice</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('invoice/update') ?>">
                                <input type="hidden" name="idinvoice" value="<?= $datas->idinvoice ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Nama :</label>
                                    <input type="text" name="nama" class="form-control" id="company-name" value="<?= $datas->nama ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Tema :</label>
                                    <input type="text" name="tema" class="form-control" id="company-name" value="<?= $datas->tema ?>">
                                </div>
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">No Invoice :</label>
                                    <input type="text" name="noinvoice" class="form-control" id="company-name" value="<?= $datas->noinvoice ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Date Invoice :</label>
                                    <input type="date" name="dateinvoice" class="form-control" id="company-name" value="<?= $datas->dateinvoice ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Jasa :</label>
                                    <input type="text" name="jasa" class="form-control" id="company-name" value="<?= $datas->jasa ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">PPN :</label>
                                    <input type="text" name="ppn" class="form-control" id="company-name" value="<?= $datas->ppn ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">PPH :</label>
                                    <input type="text" name="pph" class="form-control" id="company-name" value="<?= $datas->pph ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                    <input type="text" name="nominal" class="uang" id="company-name" value="<?= $datas->nominal ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Nomor Faktur :</label>
                                    <input type="text" name="nofaktur" class="form-control" id="company-name" value="<?= $datas->nofaktur ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Pengiriman Tanggal :</label>
                                    <input type="date" name="tglpengiriman" class="form-control" id="company-name" value="<?= $datas->tglpengiriman ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Pengiriman Via :</label>
                                    <input type="text" name="pengirimanvia" class="form-control" id="company-name" value="<?= $datas->pengirimanvia ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Rencana Pembayaran :</label>
                                    <input type="text" name="rencanapembayaran" class="form-control" id="company-name" value="<?= $datas->rencanapembayaran ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Terbayarkan Tanggal :</label>
                                    <input type="date" name="bayartanggal" class="form-control" id="company-name" value="<?= $datas->bayartanggal ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Terbayarkan Nominal :</label>
                                    <input type="text" name="bayarnominal" class="uang" id="company-name" value="<?= $datas->bayarnominal ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Pembayaran :</label>
                                    <input type="text" name="pembayaran" class="form-control" id="company-name" value="<?= $datas->pembayaran ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Monitoring Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('invoice/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Nama :</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Tema :</label>
                        <input type="text" name="tema" class="form-control" id="tema" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">No Invoice :</label>
                        <input type="text" name="noinvoice" class="form-control" id="noinvoice" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Date Invoice :</label>
                        <input type="date" name="dateinvoice" class="form-control tanggal" id="dateinvoice" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Jasa :</label>
                        <input type="text" name="jasa" class="form-control" id="jasa" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">PPN :</label>
                        <input type="text" name="ppn" class="form-control" id="ppn" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">PPH :</label>
                        <input type="text" name="pph" class="form-control" id="pph" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Nominal :</label>
                        <input type="text" name="nominal" class="uang" id="nominal" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Nomor Faktur :</label>
                        <input type="text" name="nofaktur" class="form-control" id="nofaktur" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Pengiriman Tanggal :</label>
                        <input type="date" name="tglpengiriman" class="form-control" id="tglpengiriman" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Pengiriman Via :</label>
                        <input type="text" name="pengirimanvia" class="form-control" id="pengirimanvia" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Rencana Pembayaran :</label>
                        <input type="text" name="rencanapembayaran" class="form-control" id="rencanapembayaran" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Terbayarkan Tanggal :</label>
                        <input type="date" name="bayartanggal" class="form-control" id="bayartanggal" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Terbayarkan Nominal :</label>
                        <input type="text" name="bayarnominal" class="uang" id="bayarnominal" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Pembayaran :</label>
                        <input type="text" name="pembayaran" class="form-control" id="pembayaran" value="" required>
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