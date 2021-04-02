<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Monitoring Non Kontrak</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Monitoring Non Kontrak
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Media</th>
                            <th>Brand</th>
                            <th>Kota / Kabupaten</th>
                            <th>Tema</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Media</th>
                            <th>Brand</th>
                            <th>Kota / Kabupaten</th>
                            <th>Tema</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>

                                <td><?= $datas->media ?></td>
                                <td><?= $datas->brand ?></td>
                                <td><?= $datas->kota_kab ?></td>
                                <td><?= $datas->tema ?></td>
                                <td><?= $datas->total ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_nonkontrak ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>

            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_nonkontrak ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Monitoring Non Kontrak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('nonkontrak/update') ?>">
                                <input type="hidden" name="id_nonkontrak" value="<?= $datas->id_nonkontrak ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Media :</label>
                                    <input type="text" name="media" class="form-control" id="media" value="<?= $datas->media ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Brand :</label>
                                    <input type="text" name="brand" class="form-control" id="brand" value="<?= $datas->brand ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Kota / Kabupaten :</label>
                                    <input type="text" name="kota_kab" class="form-control" id="kota_kab" value="<?= $datas->kota_kab ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">Tema :</label>
                                    <textarea name="tema" id="tema" class="form-control" rows="3"><?= $datas->tema ?></textarea>
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Total :</label>
                                    <input type="text" name="total" class="uang form-control" id="total" value="<?= $datas->total ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Monitoring Non Kontrak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('nonkontrak/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Media :</label>
                        <input type="text" name="media" class="form-control" id="media" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Brand :</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Kota / Kabupaten :</label>
                        <input type="text" name="kota_kab" class="form-control" id="kota_kab" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Tema :</label>
                        <textarea name="tema" id="tema" class="form-control" rows="3" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Total :</label>
                        <input type="text" name="total" class="uang form-control" id="total" value="" required>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>