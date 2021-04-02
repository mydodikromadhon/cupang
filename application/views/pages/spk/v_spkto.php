<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">DATA SALES</li>
    </ol>
    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>DATA SALES
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. Sales</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Date Join</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No. Sales</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Date Join</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->nomoraddto ?></td>
                                <td><?= $datas->nama ?></td>
                                <td><?= $datas->alamat ?></td>
                                <td><?= $datas->nohp ?></td>
                                <td><?= $datas->datejoin ?></td>
                                <td width='15'>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id_spkto ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_spkto ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->id_spkto ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Sales</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nomor : </label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->nomoraddto ?>
                                                </div>
                                                <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nama : </label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->nama ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Alamat :</label>
                                                    <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->alamat ?>
                                                </div>
                                                <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                                                    <label for="city" class="col-form-label">No Hp :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->nohp ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="city" class="col-form-label">Date Join :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->datejoin ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_spkto ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT DATA SALES</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('spkto/update') ?>">
                                <input type="hidden" name="id_spkto" value="<?= $datas->id_spkto ?>">
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Nomor :</label>
                                    <input type="text" name="nomoraddto" class="form-control" id="nomoraddto" value="<?= $datas->nomoraddto ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Nama :</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $datas->nama ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="address-text" class="col-form-label">Alamat :</label>
                                    <textarea name="alamat" id="alamat" class="form-control" rows="3" required><?= $datas->alamat ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="address-text" class="col-form-label">No Hp :</label>
                                    <input type="text" name="nohp" class="no_hp form-control" id="nohp" value="<?= $datas->nohp ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="address-text" class="col-form-label">Date Join :</label>
                                    <input type="date" name="datejoin" class="form-control" id="datejoin" value="<?= $datas->datejoin ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD DATA SALES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('spkto/store') ?>">
                    <span class="text-danger">*Wajib diisi semua!</span>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Nomor :</label>
                        <input type="text" name="nomoraddto" class="form-control" id="nomoraddto" placeholder="Wajib diisi dengan menggunakan angka" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Nama :</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Wajib diisi dengan menggunakan huruf" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Alamat :</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Wajib diisi dengan menggunakan huruf" value="" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">No Hp:</label>
                        <input type="text" name="nohp" class="no_hp form-control" id="nohp" placeholder="Wajib diisi dengan menggunakan angka" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Date Join :</label>
                        <input type="date" name="datejoin" class="form-control" id="datejoin" placeholder="Wajib diisi dengan menggunakan huruf" value="" required>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>