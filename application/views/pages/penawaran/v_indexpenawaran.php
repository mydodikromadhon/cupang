<div class="container-fluid">
    .
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Penawaran Pembelian Ikan Cupang</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Data Penawaran
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No Surat Penawaran</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Direktur</th>
                            <th>Masa Kontrak Awal</th>
                            <th>Masa Kontrak Akhir</th>
                            <th>Kota</th>
                            <th>Nominal Harga Penawaran</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No Surat Penawaran</th>
                            <th>Nama Perusahaan</th>
                            <th>Nama Direktur</th>
                            <th>Masa Kontrak Awal</th>
                            <th>Masa Kontrak Akhir</th>
                            <th>Kota</th>
                            <th>Nominal Harga Penawaran</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->nomor ?></td>
                                <td><?= $datas->namaperusahaan ?></td>
                                <td><?= $datas->namadirektur ?></td>
                                <td><?= $datas->masakontrak_awal ?></td>
                                <td><?= $datas->masakontrak_akhir ?></td>
                                <td><?= $datas->kota ?></td>
                                <td>Rp. <?= $datas->nominal ?></td>
                                <td><?= $datas->tanggalpengajuan ?></td>
                                <td><?php if ($datas->status == '1') {
                                        echo "<p style='color:blue'>Diterima</p>";
                                    } else if ($datas->status == '2') {
                                        echo "<p style='color:green'>Revisi</p>";
                                    } else if ($datas->status == '3') {
                                        echo "<p style='color:Red'>Ditolak</p>";
                                    } else {
                                        echo "Lainnya";
                                    } ?>
                                </td>
                                <td width="15">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id_penawaran ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_penawaran ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->id_penawaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Penawaran</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nomor</label>
                                                    <?= $datas->nomor ?>
                                                </div>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nama Perusahaan</label>
                                                    <?= $datas->namaperusahaan ?>
                                                </div>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nama Direktur</label>
                                                    <?= $datas->namadirektur ?>
                                                </div>
                                                
                                               
                                               
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Masa Kontrak Awal:</label>
                                                    <?= $datas->masakontrak_awal ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Masa Kontrak Akhir:</label>
                                                    <?= $datas->masakontrak_akhir ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Kota:</label>
                                                    <?= $datas->kota ?>
                                                </div>
                                                
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                                    Rp.<?= $datas->nominal ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Tanggal Pengajuan :</label>
                                                    <?= $datas->tanggalpengajuan ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Status :</label>
                                                    <?php if ($datas->status == '1') {
                                                        echo "<p style='color:blue'>Diterima</p>";
                                                    } else if ($datas->status == '2') {
                                                        echo "<p style='color:green'>Revisi</p>";
                                                    } else if ($datas->status == '3') {
                                                        echo "<p style='color:Red'>Ditolak</p>";
                                                    } else {
                                                        echo "Lainnya";
                                                    } ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_penawaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">EDIT Penawaran</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('penawaran/update') ?>">
                                <input type="hidden" name="id_penawaran" value="<?= $datas->id_penawaran ?>">
                                <div class="form-group">
                                    <label for="Nomor" class="col-form-label">Nomor :</label>
                                    <input type="text" name="nomor" class="form-control" id="nomor" value="<?= $datas->nomor ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Nama Perusahaan :</label>
                                    <input type="text" name="namaperusahaan" class="form-control" id="namaperusahaan" value="<?= $datas->namaperusahaan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Director-name" class="col-form-label">Nama Direktur :</label>
                                    <input type="text" name="namadirektur" class="form-control" id="namadirektur" value="<?= $datas->namadirektur ?>">
                                </div>
                               
                              
                               
                                <div class="form-group">
                                    <label for="masa-kontrak-awal" class="col-form-label">Masa Kontrak Awal:</label>
                                    <input type="date" name="masakontrak_awal" class="form-control" value="<?= $datas->masakontrak_awal ?>">
                                </div>
                                <div class="form-group">
                                    <label for="masa-kontrak-akhir" class="col-form-label">Masa Kontrak Akhir:</label>
                                    <input type="date" name="masakontrak_akhir" class="form-control" value="<?= $datas->masakontrak_akhir ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kota" class="col-form-label">Kota:</label>
                                    <input type="text" name="kota" class="form-control" value="<?= $datas->kota ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="nomimal" class="col-form-label">Nominal : Rp.</label>
                                    <input type="text" name="nominal" id="nominal" class="uang" value="<?= $datas->nominal ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggalpengajuan" class="col-form-label">Tanggal Pengajuan : </label>
                                    <input type="date" name="tanggalpengajuan" id="tanggalpengajuan" class="form-control" value="<?= $datas->tanggalpengajuan ?>">
                                </div>
                                <div class="form-group">
                                    <label for="status" class="col-form-label">Status : </label>
                                    <select name="status">
                                        <option value="1" class="form-control">Diterima</option>
                                        <option value="2" class="form-control">Revisi</option>
                                        <option value="3" class="form-control">Ditolak</option>
                                        <option value="4" class="form-control">Lainnya</option>
                                    </select>
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
                <h3 class="modal-title" id="exampleModalLabel">ADD Penawaran</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('penawaran/store') ?>">
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Nomor :</label>
                        <input type="text" name="nomor" class="form-control" id="nomor" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="namaperusahaan" class="col-form-label">Nama Perusahaan :</label>
                        <input type="text" name="namaperusahaan" class="form-control" id="namaperusahaan" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="namadirektur" class="col-form-label">Nama Direktur :</label>
                        <input type="text" name="namadirektur" class="form-control" id="namadirektur" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="masakontrak-awal" class="col-form-label">Masa Kontrak Awal :</label>
                        <input type="date" name="masakontrak_awal" id="masakontrak_awal" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="masakontrak-akhir" class="col-form-label">Masa Kontrak Akhir:</label>
                        <input type="date" name="masakontrak_akhir" id="masakontrak_akhir" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="kota" class="col-form-label">Kota:</label>
                        <input type="text" name="kota" id="kota" class="form-control" value="" required>
                    </div>
                   
                    <div class="form-group">
                        <label for="nominal" class="col-form-label">Nominal : Rp.</label>
                        <input type="text" name="nominal" class="uang" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal pengajuan" class="col-form-label">Tanggal Pengajuan</label>
                        <input type="date" name="tanggalpengajuan" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-form-label">Status</label>
                        <select name="status">
                            <option value="1" class="form-control">Diterima</option>
                            <option value="2" class="form-control">Revisi</option>
                            <option value="3" class="form-control">Ditolak</option>
                            <option value="4" class="form-control">Lainnya</option>
                        </select>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>