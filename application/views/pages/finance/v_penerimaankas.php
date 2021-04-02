<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Jurnal Penerimaan Kas</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Jurnal Penerimaan Kas
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Ref</th>
                            <th>Debet Kas</th>
                            <th>Kredit Piutang</th>
                            <th>Kredit Pendapatan</th>
                            <th>Kredit Serba - Serbi Ref</th>
                            <th>Kredit Serba - Serbi Akun</th>
                            <th>Kredit Serba - Serbi Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Ref</th>
                            <th>Debet Kas</th>
                            <th>Kredit Piutang</th>
                            <th>Kredit Pendapatan</th>
                            <th>Kredit Serba - Serbi Ref</th>
                            <th>Kredit Serba - Serbi Akun</th>
                            <th>Kredit Serba - Serbi Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>

                                <td><?= $datas->tanggal ?></td>
                                <td><?= $datas->keterangan ?></td>
                                <td><?= $datas->ref ?></td>
                                <td><?= $datas->debet_kas ?></td>
                                <td><?= $datas->kredit_piutang ?></td>
                                <td><?= $datas->kredit_pendapatan ?></td>
                                <td><?= $datas->kredit_serbaserbi_ref ?></td>
                                <td><?= $datas->kredit_serbaserbi_akun ?></td>
                                <td><?= $datas->kredit_serbaserbi_jumlah ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_penerimaankas ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>

            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_penerimaankas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Jurnal Penerimaan Kas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('penerimaankas/update') ?>">
                                <input type="hidden" name="id_penerimaankas" value="<?= $datas->id_penerimaankas ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Tanggal :</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $datas->tanggal ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Keterangan :</label>
                                    <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $datas->keterangan ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Ref :</label>
                                    <input type="text" name="ref" class="form-control" id="ref" value="<?= $datas->ref ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">Debet Kas :</label>
                                    <input type="text" name="debet_kas" class="uang form-control" id="debet_kas" value="<?= $datas->debet_kas ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Kredit Piutang :</label>
                                    <input type="text" name="kredit_piutang" class="uang form-control" id="kredit_piutang" value="<?= $datas->kredit_piutang ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Kredit Pendapatan :</label>
                                    <input type="text" name="kredit_pendapatan" class="uang form-control" id="kredit_pendapatan" value="<?= $datas->kredit_pendapatan ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Kredit Serba - Serbi Ref :</label>
                                    <input type="text" name="kredit_serbaserbi_ref" class="form-control" id="kredit_serbaserbi_ref" value="<?= $datas->kredit_serbaserbi_ref ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Kredit Serba - Serbi Akun :</label>
                                    <input type="text" name="kredit_serbaserbi_akun" class="form-control" id="kredit_serbaserbi_akun" value="<?= $datas->kredit_serbaserbi_akun ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">Kredit Serba - Serbi Jumlah :</label>
                                    <input type="text" name="kredit_serbaserbi_jumlah" class="form-control" id="kredit_serbaserbi_jumlah" value="<?= $datas->kredit_serbaserbi_jumlah ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Jurnal Penerimaan Kas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('penerimaankas/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Tanggal :</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Keterangan :</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Ref :</label>
                        <input type="text" name="ref" class="form-control" id="ref" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-form-label">Debet Kas :</label>
                        <input type="text" name="debet_kas" class="uang form-control" id="debet_kas" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Kredit Piutang :</label>
                        <input type="text" name="kredit_piutang" class="uang form-control" id="kredit_piutang" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Kredit Pendapatan :</label>
                        <input type="text" name="kredit_pendapatan" class="uang form-control" id="kredit_pendapatan" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Kredit Serba - Serbi Ref :</label>
                        <input type="text" name="kredit_serbaserbi_ref" class="form-control" id="kredit_serbaserbi_ref" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Kredit Serba - Serbi Akun :</label>
                        <input type="text" name="kredit_serbaserbi_akun" class="form-control" id="kredit_serbaserbi_akun" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-form-label">Kredit Serba - Serbi Jumlah :</label>
                        <input type="text" name="kredit_serbaserbi_jumlah" class="form-control" id="kredit_serbaserbi_jumlah" value="" required>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>