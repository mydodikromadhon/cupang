<link rel="shortcut icon" href="<?= base_url() ?>assets/assets/img/ico.png">
<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Nota-Invoice</li>
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
        <div class="card-header"><i class="fas fa-table mr-1"></i>Data Nota Invoice
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Invoice</th>
                            <th>Tanggal</th>
                            <th>Jasa</th>
                            <th>PPN</th>
                            <th>PPH</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No Invoice</th>
                            <th>Tanggal</th>
                            <th>Jasa</th>
                            <th>PPN</th>
                            <th>PPH</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->noinvoice ?></td>
                                <td><?= $datas->dateinvoice ?></td>
                                <td><?= $datas->jasa ?></td>
                                <td><?= $datas->ppn ?></td>
                                <td><?= $datas->pph ?></td>
                                <td><?= $datas->nominal ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?= base_url(); ?>notainvoice/printpdf/<?= $datas->idinvoice ?>" class="btn btn-sm btn-info btnViewItem"><i class="fas fa-print"></i></a>
                                    </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">ADD Nota Invoice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= base_url('invoice/store') ?>">
                        <div class="form-group">
                            <label for="Company-name" class="col-form-label">No Invoice :</label>
                            <select class="form-control" name="idspk">
                                <?php foreach ($invoice as $key => $value) {
                                ?><option value="<?= $value->idinvoice ?>"><?= $value->noinvoice ?></option>
                                <?php } ?>
                            </select>
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
                            <input type="text" name="nominal" class="uang form-control" id="nominal" value="" required>
                        </div>
                        <div>
                            <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>