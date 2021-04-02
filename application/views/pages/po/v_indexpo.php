<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Purchasing Order</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Data Purchasing Order
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Invoice Date</th>
                            <th>Nominal</th>
                            <th>Pay Date</th>
                            <th>Status Bayar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Invoice Date</th>
                            <th>Nominal</th>
                            <th>Pay Date</th>
                            <th>Status Bayar</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->nopo ?></td>
                                <td><?= $datas->startdate ?></td>
                                <td><?= $datas->enddate ?></td>
                                <td><?= $datas->invoicedate ?></td>
                                <td>Rp <?= $datas->nominal ?></td>
                                <td><?= $datas->paydate ?></td>
                                <td><?= $datas->statusbayar ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id_po ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_po ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->id_po ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Purchasing Order</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nomor</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->nopo ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Start Date :</label>
                                                    <input type="date" class="form-control" id="company-name" value="" hidden><?= $datas->startdate ?>
                                                </div>
                                                <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">End Date :</label>
                                                    <input type="date" class="form-control" id="company-name" value="" hidden><?= $datas->enddate ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Invoice Date :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->invoicedate ?>
                                                </div>
                                                <div class="form-group" style="background: #ebebeb; padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                                    <input type="date" class="uang form-control" id="company-name" hidden><?= $datas->nominal ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Pay Date :</label>
                                                    <input type="date" class="form-control" id="company-name" hidden><?= $datas->paydate ?>
                                                </div>
                                                <div class="form-group" style="background: #ebebeb; padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Status Bayar :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->statusbayar ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_po ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Purchasing Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('po/update') ?>">
                                <input type="hidden" name="id_po" value="<?= $datas->id_po ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Nomor</label>
                                    <input type="text" name="nopo" class="form-control" id="company-name" value="<?= $datas->nopo ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Start Date :</label>
                                    <input type="date" name="startdate" class="form-control" id="company-name" value="<?= $datas->startdate ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">End Date :</label>
                                    <input type="date" name="enddate" class="form-control" id="company-name" value="<?= $datas->enddate ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Invoice Date :</label>
                                    <input type="date" name="invoicedate" class="form-control" id="company-name" value="<?= $datas->invoicedate ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                    <input type="text" name="nominal" class="uang form-control" id="company-name" value="<?= $datas->nominal ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Pay Date :</label>
                                    <input type="date" name="paydate" class="form-control" id="company-name" value="<?= $datas->paydate ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Status Bayar :</label>
                                    <br>
                    <input type="radio" name="statusbayar" id="statusbayar" value="Belum bayar">Belum Bayar<br>
                    <input type="radio" name="statusbayar" id="statusbayar" value="Hutang"> Hutang<br>
                    <input type="radio" name="statusbayar" id="statusbayar" value="Lunas"> Lunas<br>
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Purchasing Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('po/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Nomor :</label>
                        <input type="text" name="nopo" class="form-control" id="nopo" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Start Date :</label>
                        <input type="date" name="startdate" class="form-control tanggal" id="startdate" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">End Date :</label>
                        <input type="date" name="enddate" class="form-control" id="enddate" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Invoice Date :</label>
                        <input type="date" name="invoicedate" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Nominal :</label>
                        <input type="text" name="nominal" class="uang form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Pay Date</label>
                        <input type="date" name="paydate" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Status Bayar</label>
                        <br><input type="radio" name="statusbayar" id="statusbayar" value="">Belum Bayar<br>
                    <input type="radio" name="statusbayar" id="statusbayar" value="">Belum Bayar<br>
                    <input type="radio" name="statusbayar" id="statusbayar" value="">Hutang<br>
                    <input type="radio" name="statusbayar" id="statusbayar" value="">Lunas<br>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>