<link rel="shortcut icon" href="<?= base_url() ?>assets/assets/img/ico.png">
<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">GAMBAR</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Lihat Gambar
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
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
                            <th>No.</th>
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
                                <td width='10'><?= $datas->id_gambar ?></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambar1 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambar2 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambar3 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambar4 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambar5 ?>" style="width:200px;"></td>
                                <td style="width:200px;"><img src="<?php echo base_url(); ?>/assets/images/<?= $datas->gambar6 ?>" style="width:200px;"></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_gambar ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>

            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_gambar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Gambar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('gambar/update') ?>">
                                <input type="hidden" name="id_gambar" value="<?= $datas->id_gambar ?>">
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Gambar 1</label>
                                    <input type="file" name="gambar1" class="form-control" id="gambar1" value="<?= $datas->gambar1 ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Gambar 2</label>
                                    <input type="file" name="gambar2" class="form-control" id="gambar2" value="<?= $datas->gambar2 ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Gambar 3</label>
                                    <input type="file" name="gambar3" class="form-control" id="gambar3" value="<?= $datas->gambar3 ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Gambar 4 :</label>
                                    <input type="file" name="gambar4" class="form-control" id="gambar4" value="<?= $datas->gambar4 ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Gambar 5 :</label>
                                    <input type="file" name="gambar5" class="form-control" id="gambar5" value="<?= $datas->gambar5 ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Gambar 6 :</label>
                                    <input type="file" name="gambar6" class="form-control" id="gambar6" value="<?= $datas->gambar6 ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('gambar/store') ?>
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