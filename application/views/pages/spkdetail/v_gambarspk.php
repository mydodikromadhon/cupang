<link rel="shortcut icon" href="<?= base_url() ?>assets/assets/img/ico.png">
<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">GAMBAR SPK</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Lihat Gambar SPK
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SPK Name</th>
                            <th>Gambar 1</th>
                            <th>Gambar 2</th>
                            <th>Gambar 3</th>
                            <th>Gambar 4</th>
                            <th>Gambar 5</th>
                            <th>Gambar 6</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SPK Name</th>
                            <th>Gambar 1</th>
                            <th>Gambar 2</th>
                            <th>Gambar 3</th>
                            <th>Gambar 4</th>
                            <th>Gambar 5</th>
                            <th>Gambar 6</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->spktitle ?></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambarspk1 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambarspk2 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambarspk3 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambarspk4 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambarspk5 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambarspk6 ?>" style="width:200px;"></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_gambarspk ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>

            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_gambarspk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Gambar SPK</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('gambarspk/update') ?>">
                                <input type="hidden" name="id_gambarspk" value="<?= $datas->id_gambarspk ?>">
                                <div class="form-group">
                                    <label for="" class="col-form-label">SPK Name:</label>
                                    <select class="form-control" name="idspk">
                                        <?php foreach ($spk as $key => $value) {
                                        ?><option value="<?= $value->idmasterspk ?>"><?= $value->spktitle ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address-text" class="col-form-label">Gambar:</label>
                                    <input type="file" name="gambar[]" multiple="multiple" class="form-control">
                                    <?php if ($datas->gambar1) { ?>
                                        <span><?= $datas->gambarspk1 ?>,<?= $datas->gambarspk2 ?>,<?= $datas->gambarspk3 ?>,<?= $datas->gambarspk4 ?>,<?= $datas->gambarspk5 ?>,<?= $datas->gambarspk6 ?></span>
                                    <?php } ?>
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Gambar SPK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="text-danger">*Wajib diisi semua!</span>
                <?php echo form_open_multipart('gambarspk/store') ?>
                <div class="form-group">
                    <label for="" class="col-form-label">SPK Name:</label>
                    <select class="form-control" name="idspk">
                        <?php foreach ($spk as $key => $value) {
                        ?><option value="<?= $value->idmasterspk ?>"><?= $value->spktitle ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Gambar:</label>
                    <input type="file" name="gambar[]" multiple="multiple" class="form-control" value="" required>
                    <span class="text-danger">masukkan gambar minimal 6 *</span>
                </div>
                <div>
                    <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                </div>

                <?php echo form_close() ?>
            </div>
        </div>
    </div>


</div>