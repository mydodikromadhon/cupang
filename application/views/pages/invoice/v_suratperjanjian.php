<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Surat Perjanjian</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Data Surat Perjanjian
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>No Invoice</th>
                            <th>Nama Perusahaan</th>
                            <th>Nomor Perjanjian</th>
                            <th>Tentang</th>
                            <th>Tahap Perjanjian</th>
                            <th>Tanggal</th>
                            <th>PIC 1</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>No Invoice</th>
                            <th>Nama Perusahaan</th>
                            <th>Nomor Perjanjian</th>
                            <th>Tentang</th>
                            <th>Tahap Perjanjian</th>
                            <th>Tanggal</th>
                            <th>PIC 1</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>

                                <td><?= $datas->noinvoice ?></td>
                                <td><?= $datas->namaperusahaan ?></td>
                                <td><?= $datas->no_perjanjian ?></td>
                                <td><?= $datas->title ?></td>
                                <td><?= $datas->tahap_perjanjian ?></td>
                                <td><?= $datas->tanggal ?></td>
                                <td><?= $datas->pic1 ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id_suratperjanjian ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_suratperjanjian ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->id_suratperjanjian ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Surat Perjanjian</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">No Invoice</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->no_invoice ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nama Perusahaan:</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->namaperusahaan ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="city" class="col-form-label">No Perjanjian :</label>
                                                    <input type="text" class="uang form-control" id="company-name" hidden><?= $datas->no_perjanjian ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Tentang :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->title ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Tahap Perjanjian :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->tahap_perjanjian ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Tanggal :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->tanggal ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">PIC 1 :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->pic1 ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_suratperjanjian ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Surat Perjanjian</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('suratperjanjian/update') ?>
                            <input type="hidden" name="id_suratperjanjian" value="<?= $datas->id_suratperjanjian ?>">
                            <div class="form-group">
                                <label for="Company-name" class="col-form-label">No Invoice:</label>
                                <select class="form-control" name="no_invoice">
                                    <?php foreach ($invoice as $key => $value) {
                                    ?><option value="<?= $value->noinvoice ?>"><?= $value->noinvoice ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group" style="padding-left: 10px;">
                                <label for="Company-name" class="col-form-label">Nama Perusahaan:</label>
                                <input type="text" name="namaperusahaan" class="form-control" id="company-name" value="<?= $datas->namaperusahaan ?>">
                            </div>
                            <div class="form-group" style="padding-left: 10px;">
                                <label for="Company-name" class="col-form-label">No Perjanjian :</label>
                                <input type="text" name="no_perjanjian" class="form-control" id="company-name" value="<?= $datas->no_perjanjian ?>">
                            </div>
                            <div class="form-group" style="padding-left: 10px;">
                                <label for="city" class="col-form-label">Tentang :</label>
                                <textarea name="title" id="" class="form-control" rows="3"><?= $datas->title ?></textarea>
                            </div>
                            <div class="form-group" style="padding-left: 10px">
                                <label for="address-text" class="col-form-label">Tahap Perjanjian :</label>
                                <input type="text" name="tahap_perjanjian" class="form-control" id="company-name" value="<?= $datas->tahap_perjanjian ?>">
                            </div>
                            <div class="form-group" style="padding-left: 10px">
                                <label for="address-text" class="col-form-label">Tanggal :</label>
                                <input type="date" name="tanggal" class="form-control" id="company-name" value="<?= $datas->tanggal ?>">
                            </div>
                            <div class="form-group" style="padding-left: 10px">
                                <label for="address-text" class="col-form-label">Pic 1 :</label>
                                <input type="text" name="pic1" class="form-control" id="company-name" value="<?= $datas->pic1 ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Surat Perjanjian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="text-danger">*Wajib diisi semua!</span>
                <?php echo form_open_multipart('suratperjanjian/store') ?>
                <div class="form-group">
                    <label for="Company-name" class="col-form-label">No Invoice:</label>
                    <select class="form-control" name="no_invoice">
                        <?php foreach ($invoice as $key => $value) {
                        ?><option value="<?= $value->noinvoice ?>"><?= $value->noinvoice ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Company-name" class="col-form-label">Nama Perusahaan :</label>
                    <input type="text" name="namaperusahaan" class="form-control" id="namaperusahaan" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Nomor Perjanjian :</label>
                    <input type="text" name="no_perjanjian" class="form-control" id="no_perjanjian" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Tentang :</label>
                    <textarea name="title" id="tema" class="form-control" rows="3" value="" required></textarea>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Tahap Perjanjian :</label>
                    <input type="text" name="tahap_perjanjian" class="form-control" id="tahap_perjanjian" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Tanggal :</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="" required>
                </div>
                <div class="form-group">
                    <label for="address-text" class="col-form-label">Pic 1 :</label>
                    <input type="text" name="pic1" class="form-control" id="pic1" value="" required>
                </div>
                <div>
                    <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>