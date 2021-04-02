<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Monitoring Pendapatan penjualan Ikan Cupang</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Monitoring Pendapatan penjualan Ikan Cupang
            <!--<a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>--></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <th>Farm</th>
                            <th>Alamat</th>
                            <th>Kota / Kabupaten</th>
                            <th>Periode Kontrak</th>
                            <th>Total</th>
                            <th>Januari</th>
                            <th>Febuari</th>
                            <th>Maret</th>
                            <th>April</th>
                            <th>Mei</th>
                            <th>Juni</th>
                            <th>Juli</th>
                            <th>Agustus</th>
                            <th>September</th>
                            <th>Oktober</th>
                            <th>November</th>
                            <th>Desember</th>
                           <!-- <th>Action</th>-->
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Farm</th>
                            <th>Alamat</th>
                            <th>Kota / Kabupaten</th>
                            <th>Periode Kontrak</th>
                            <th>Total</th>
                            <th>Januari</th>
                            <th>Febuari</th>
                            <th>Maret</th>
                            <th>April</th>
                            <th>Mei</th>
                            <th>Juni</th>
                            <th>Juli</th>
                            <th>Agustus</th>
                            <th>September</th>
                            <th>Oktober</th>
                            <th>November</th>
                            <th>Desember</th>
                            <!--<th>Action</th>-->
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->brand ?></td>
                                <td><?= $datas->alamat ?></td>
                                <td><?= $datas->kota_kab ?></td>
                                <td><?= $datas->periode_kontrak ?></td>
                                <td><?= $datas->total ?></td>
                                <td><?= $datas->januari ?></td>
                                <td><?= $datas->febuari ?></td>
                                <td><?= $datas->maret ?></td>
                                <td><?= $datas->april ?></td>
                                <td><?= $datas->mei ?></td>
                                <td><?= $datas->juni ?></td>
                                <td><?= $datas->juli ?></td>
                                <td><?= $datas->agustus ?></td>
                                <td><?= $datas->september ?></td>
                                <td><?= $datas->oktober ?></td>
                                <td><?= $datas->november ?></td>
                                <td><?= $datas->desember ?></td>
                                <!--<td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_mediarcm ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>-->
                            </tr>

            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_mediarcm ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Media RCM</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('monitoringmediarcm/update') ?>">
                                <input type="hidden" name="id_mediarcm" value="<?= $datas->id_mediarcm ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Jenis Media :</label>
                                    <input type="text" name="jenis_media" class="form-control" id="jenis_media" value="<?= $datas->jenis_media ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Brand :</label>
                                    <input type="text" name="brand" class="form-control" id="brand" value="<?= $datas->brand ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Alamat :</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $datas->alamat ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">Kota / Kabupaten :</label>
                                    <input type="text" name="kota_kab" class="form-control" id="kota_kab" value="<?= $datas->kota_kab ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Periode Kontrak :</label>
                                    <input type="text" name="periode_kontrak" class="form-control" id="periode_kontrak" value="<?= $datas->periode_kontrak ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Total :</label>
                                    <input type="text" name="total" class="uang uang form-control" id="total" value="<?= $datas->total ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Januari :</label>
                                    <input type="text" name="januari" class="uang form-control" id="januari" value="<?= $datas->januari ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Febuari :</label>
                                    <input type="text" name="febuari" class="uang form-control" id="febuari" value="<?= $datas->febuari ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">Maret :</label>
                                    <input type="text" name="maret" class="uang form-control" id="maret" value="<?= $datas->maret ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">April :</label>
                                    <input type="text" name="april" class="uang form-control" id="april" value="<?= $datas->april ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Mei :</label>
                                    <input type="text" name="mei" class="uang form-control" id="mei" value="<?= $datas->mei ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Juni :</label>
                                    <input type="text" name="juni" class="uang form-control" id="juni" value="<?= $datas->juni ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Juli :</label>
                                    <input type="text" name="juli" class="uang form-control" id="juli" value="<?= $datas->juli ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Agustus :</label>
                                    <input type="text" name="agustus" class="uang form-control" id="agustus" value="<?= $datas->agustus ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">September :</label>
                                    <input type="text" name="september" class="uang form-control" id="september" value="<?= $datas->september ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Oktober :</label>
                                    <input type="text" name="oktober" class="uang form-control" id="oktober" value="<?= $datas->oktober ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">November :</label>
                                    <input type="text" name="november" class="uang form-control" id="desember" value="<?= $datas->november ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Desember :</label>
                                    <input type="text" name="desember" class="uang form-control" id="desember" value="<?= $datas->desember ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Monitoring Media RCM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('monitoringmediarcm/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Jenis Media :</label>
                        <input type="text" name="jenis_media" class="form-control" id="jenis_media" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Brand :</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Alamat :</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-form-label">Kota / Kabupaten :</label>
                        <input type="text" name="kota_kab" class="form-control" id="kota_kab" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Periode Kontrak :</label>
                        <input type="text" name="periode_kontrak" class="form-control" id="periode_kontrak" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Total :</label>
                        <input type="text" name="total" class="uang form-control" id="total" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Januari :</label>
                        <input type="text" name="januari" class="uang form-control" id="januari" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Febuari :</label>
                        <input type="text" name="febuari" class="uang form-control" id="febuari" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Maret :</label>
                        <input type="text" name="maret" class="uang form-control" id="maret" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">April :</label>
                        <input type="text" name="april" class="uang form-control" id="april" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Mei :</label>
                        <input type="text" name="mei" class="uang form-control" id="mei" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Juni :</label>
                        <input type="text" name="juni" class="uang form-control" id="juni" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Juli :</label>
                        <input type="text" name="juli" class="uang form-control" id="juli" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Agustus :</label>
                        <input type="text" name="agustus" class="uang form-control" id="agustus" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">September :</label>
                        <input type="text" name="september" class="uang form-control" id="september" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Oktober :</label>
                        <input type="text" name="oktober" class="uang form-control" id="oktober" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">November :</label>
                        <input type="text" name="november" class="uang form-control" id="november" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Desember :</label>
                        <input type="text" name="desember" class="uang form-control" id="desember" value="" required>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>