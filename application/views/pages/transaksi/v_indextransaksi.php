<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
    .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-selection__arrow { 
        height: calc(1.5em + 0.75rem + 2px)!important;
        padding: 0.375rem 0.75rem!important;
    }
</style>
<div class="container-fluid">
    .
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Transaksi Pembelian Ikan Cupang</li>
    </ol>
    <div class="card-header">
        <?php if ($this->session->flashdata('danger')) : ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $this->session->flashdata('danger') ?>
            </div>
        <?php endif; ?>
    </div>
    <?php echo validation_errors(); ?>

    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Data Transaksi
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>No Transaksi</th>
                            <th>Sales</th>
                            <th>Customer</th>
                            <th>Farm</th>
                            <th>Source</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                            <th>Print PDF</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>No Transaksi</th>
                            <th>Sales</th>
                            <th>Customer</th>
                            <th>Farm</th>
                            <th>Source</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                            <th>Print PDF</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= date("d/m/Y", strtotime($datas->dateadd)) ?></td>
                                <td><?= $datas->nomor ?></td>
                                <td><?= $datas->nama ?></td>
                                <td><?= $datas->companyname ?></td>
                                <td><?= $datas->farmname ?></td>
                                <td><?= $datas->note ?></td>
                                <td>
                                    <?php if ($datas->status == 'Lunas') { ?>
                                    <p style='color:blue'>Lunas</p>
                                    <?php }else if($datas->status == 'Pending'){ ?>
                                    <p style='color:Red'>Pending</p>
                                    <?php } ?>
                                </td>
                                <td width="15">
                                    <div class="btn-group">
                                        <a href="#" onclick="changestatus('<?= $datas->status ?>',<?= $datas->id ?>)" class="btn btn-small">
                                            <i class="fas fa-edit"></i>Edit</a>
                                    </div>
                                </td>
                                <td width="15">
                                    <div class="btn-group">
                                        <a href="<?= base_url('transaksi/deletetransaksi/'.$datas->id) ?>" class="btn btn-small">
                                            <i class="fas fa-trash"></i>Hapus</a>
                                    </div>
                                </td>
                                <!--<td width="15">-->
                                <!--    <div class="btn-group">-->
                                        <!-- <a href="<?php echo site_url('transaksi/edit/' . $datas->id) ?>" class="btn btn-small">
                                            <i class="fas fa-edit"></i>Edit</a> -->

                                        <!--<button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id ?>"><i class="fas fa-eye"></i></button>-->
                                        <!-- <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id ?>"><i class="fas fa-edit"></i></button> -->
                                <!--    </div>-->
                                <!--</td>-->
                                <td width="15">
                                    <div class="btn-group">
                                        <!-- <button class="btn btn-sm btn-success btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id ?>"><i class="fas fa-edit"></i></button> -->
                                        <a href="<?php echo site_url('transaksi/pdf/' . $datas->id) ?>" class="btn btn-small" name="id">
                                            <i class="fas fa-print"></i>PDF</a>
                                        <!-- <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id ?>"><i class="fas fa-edit"></i></button> -->
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Print Nota</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <object type="application/pdf" data="printna.pdf" width="500" height="500">
                                            </object>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <!--<div class="modal fade" id="exampleModal1_<?= $datas->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">EDIT Transaksi</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('transaksi/update') ?>">
                                <input type="hidden" name="id_transaksi" value="<?= $datas->id ?>">
                                 <div class="form-group">
                        <label for="tanggal pengajuan" class="col-form-label">Tanggal Pengajuan</label>
                        <input type="date" name="tanggalpengajuan" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Nomor :</label>
                        <input type="text" name="nomor" class="form-control" id="nomor" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Sales :</label>
                        <?php echo form_dropdown('sales', $Sales, '', "class='form-control' id='sales'"); ?>
                    </div>                    
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Customer :</label>
                        <?php echo form_dropdown('cust', $Cust, '', "class='form-control' id='cust'"); ?>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Farm :</label>
                        <?php echo form_dropdown('farm', $Farm, '', "class='form-control' id='farm'"); ?>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Source :</label>
                        <?php echo form_dropdown('source', $Source, '', "class='form-control' id='source'"); ?>
                    </div>      
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Catatan :</label>
                        <textarea name="catatan" class='form-control'></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="status" class="col-form-label">Status</label>
                        <select name="status">
                            <option value="Lunas" class="form-control">Lunas</option>
                            <option value="Hutang" class="form-control">Hutang</option>
                        </select>
                    </div>
                                <div>
                                    <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>-->
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
                <h3 class="modal-title" id="exampleModalLabel">ADD Transaksi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="<?= base_url('transaksi/store') ?>">
                    <div class="form-group">
                        <label for="tanggal pengajuan" class="col-form-label">Tanggal Pengajuan</label>
                        <input type="date" name="tanggalpengajuan" class="form-control" value="" required>
                        <label for="nomor" class="col-form-label">Nomor :</label>
                        <!-- <input type="text" name="nomor" class="form-control" id="nomor" readonly value="<?php echo set_value('nomor1', $nomor1); ?>" required> -->
                        <input type="text" name="nomor" class="form-control" id="nomor" readonly value="<?php echo set_value('nomor', $nomor); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Sales :</label>
                        <?php echo form_dropdown('sales', $Sales, '', "class='form-control' id='sales'"); ?>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Customer : <a href="#" style="width:30px" onclick="createcustomer()"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></label>
                        <?php echo form_dropdown('cust', $Cust, '', "class='form-control js-basic-single-cust' id='cust'"); ?>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Farm :</label>
                        <?php echo form_dropdown('farm', $Farm, '', "class='form-control' id='farm'"); ?>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Source :</label>
                        <?php echo form_dropdown('source', $Source, '', "class='form-control' id='source'"); ?>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Catatan :</label>
                        <textarea name="catatan" class='form-control'></textarea>
                    </div>

                    <!-- <div class="form-group">
                        <label for="status" class="col-form-label">Status</label>
                        <select name="status">
                            <option value="Lunas" class="form-control">Lunas</option>
                            <option value="Hutang" class="form-control">Hutang</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <fieldset>
                            <label for="status" class="col-form-label">Status :</label><br>
                            <input type="radio" name="status" id="rad1" value="Lunas" class="rad" /> Lunas
                            <input type="radio" style="margin-left: 20%;" name="status" id="rad2" value="Pending" class="rad" /> Piutang
                            <!-- form yang mau ditampilkan-->
                            <br>
                            <div id="form1" style="display:none">
                                <label for="carabayar" class="col-form-label">Membayar dengan :</label><br>
                                <input type="radio" name="carabayar" value="Cash" /> Cash <br>
                                <input type="radio" name="carabayar" value="Transfer" /> Transfer <br>
                                <input type="radio" name="carabayar" value="Credit Card" /> Debit / Credit Card <br>
                            </div>
                            <div id="form2" style="display:none">
                                <input style="display:none" type="radio" name="carabayar" value="" /> <br>
                                <!-- <input type="hidden" name="carabayar" value="" /><br> -->
                            </div>
                            <label style="display:none" for="tanggal pengajuan" id="lbltanggallunas1" class="col-form-label">Tanggal Lunas</label>
                            <input style="display:none" type="date" name="tanggallunas" id="tanggallunas1" class="form-control" value="">                           
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="status" class="col-form-label">Ongkos Kirim :</label><br>
                                <div class="input-group"> 
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="number" class="form-control" name="ongkir" id="ongkir" min=0 required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="status" class="col-form-label">Packing :</label><br>
                                <div class="input-group"> 
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="number" class="form-control" name="packing" id="packing" min=0 required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <h3>Transaksi</h3><br>

                    <div class="table-responsive">
                        <!-- <div><b>Transaksi</b></div><br><br> -->

                        <div>
            				<input name="hidden" type="hidden" id="indexrow" value="0" />
            				<button type="button" title="Add" class="btn btn-sm btn-primary" onclick="addNewRow();"><span class="fa fa-plus"></span></button>
            				<div id="menu"></div>
                            <table width="100%" id="tableedit">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Cupang</th>
                                        <th>Harga</th>
                                        <th>Input Qty</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody id='tadjust'>
                                    <!--<tr class="tr_input">-->
                                    <!--    <td>-->
                                    <!--        <select class="form-control js-basic-single" id="cupang_1" name="codecupang[]" onchange="ambilcupang(this,1);" required style="">-->
                                    <!--            <option value=""><?php echo $this->lang->line('purchase_select_product'); ?>--Please-select---</option>-->
                                                <?php
                                                // foreach ($ikan as $value) {
                                                    // echo "<option value='$value->codecupang'" . set_select('codecupang', $value->codecupang) . ">$value->codecupang</option>";
                                                // }
                                                ?>
                                    <!--        </select>-->
                                    <!--    </td>-->
                                    <!--    <td>-->
                                    <!--        <select class="form-control js-basic-single" name="cupang_name[]" id="cupang_detail_1" style="width: 200px;">-->
                                    <!--            <option value="">--Please-select---</option>-->
                                    <!--        </select>-->
                                    <!--    </td>-->

                                        <!--<td><select class="form-control select2" name="harga[]" id="hrg_1" onkeyup="sum();" style="width: 200px;">-->
                                        <!--       <option value="">--Please-select---</option>-->
                                        <!--   </select></td> -->
                                        <!-- 
                                        <td id="hrg_1">

                                        </td> -->

                                    <!--    <td>-->
                                    <!--        <div class="input-group"> -->
                                    <!--            <div class="input-group-prepend">-->
                                    <!--                <span class="input-group-text">Rp</span>-->
                                    <!--            </div>-->
                                    <!--            <input type="number" class="form-control" name="harga[]" onkeyup="sum();" style="width:160px;" min=0 id="hrg_1" required>-->
                                    <!--        </div>-->
                                    <!--    </td>-->
                                    <!--    <td>-->
                                    <!--        <div class="input-group"> -->
                                    <!--            <div class="input-group-prepend">-->
                                    <!--                <span class="input-group-text">Rp</span>-->
                                    <!--            </div>-->
                                    <!--            <input type="number" style="width:160px" class="form-control" onkeyup="sum();" name="qty[]" min=0 id="qty_1" required>-->
                                    <!--        </div>-->
                                    <!--    </td>-->
                                    <!--    <td>-->
                                    <!--        <div class="input-group"> -->
                                    <!--            <div class="input-group-prepend">-->
                                    <!--                <span class="input-group-text">Rp</span>-->
                                    <!--            </div>-->
                                    <!--            <input type="number" style="width:160px" class="form-control" readonly name="total[]" min=0 id="total_1" required>-->
                                    <!--        </div>-->
                                    <!--    </td>-->
                                    <!--    <td style="vertical-align:middle">-->
                                    <!--        <button type="button" title="Delete" class="btn btn-sm btn-danger" onclick="removeRowEdit(this);"><span class="fa fa-times"></span></button>-->
                                    <!--    </td>-->
                                    <!--</tr>-->
                                </tbody>
                            </table>
                            <!-- <input type='button' value='Tambah Transaksi' id='addmore'> -->
                        </div>
                    </div>


                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabeledit">Edit Transaksi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="<?= base_url('transaksi/changestatus') ?>">
                    <div class="form-group">
                        <input type="hidden" name="idtransaksi" id="idtransaksi" readonly>
                        <label for="tanggal pengajuan" class="col-form-label">Tanggal Pengajuan</label>
                        <input type="text" name="tanggalpengajuan" id="etglpeng" class="form-control" readonly>
                        <label for="nomor" class="col-form-label">Nomor :</label>
                        <input type="text" name="nomor" class="form-control" id="enomor" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Sales :</label>
                        <input type="text" name="sales" class="form-control" id="esales" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Customer :</label>
                        <input type="text" name="cust" class="form-control" id="ecust" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Farm :</label>
                        <input type="text" name="farm" class="form-control" id="efarm" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Source :</label>
                        <input type="text" name="source" class="form-control" id="esource" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-form-label">Catatan :</label>
                        <textarea name="catatan" class='form-control' id="ecatatan" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <label for="status" class="col-form-label">Status :</label><br>
                            <input type="radio" name="estatus" id="erad1" value="Lunas" class="rad" /> Lunas
                            <input type="radio" style="margin-left: 20%;" name="estatus" id="erad2" value="Pending" class="rad" /> Piutang
                            <!-- form yang mau ditampilkan-->
                            <br>
                            <div id="eform1" style="display:none">
                                <label for="carabayar" class="col-form-label">Membayar dengan :</label><br>
                                <input type="radio" name="carabayar" id="ebayar1" value="Cash" /> Cash <br>
                                <input type="radio" name="carabayar" id="ebayar2" value="Transfer" /> Transfer <br>
                                <input type="radio" name="carabayar" id="ebayar3" value="Credit Card" /> Debit / Credit Card <br>
                            </div>
                            <div id="eform2" style="display:none">
                                <input style="display:none" type="radio" name="carabayar" value="" /> <br>
                            </div>
                            <label style="display:none" for="tanggal pengajuan" id="lbltanggallunas" class="col-form-label">Tanggal Lunas</label>
                            <input style="display:none" type="date" name="tanggallunas" id="tanggallunas" class="form-control" value="">                           
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="status" class="col-form-label">Ongkos Kirim :</label><br>
                                <div class="input-group"> 
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="number" class="form-control" name="ongkir" id="eongkir" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="status" class="col-form-label">Packing :</label><br>
                                <div class="input-group"> 
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="number" class="form-control" name="packing" id="epacking" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <h3>Transaksi</h3><br>

                    <div class="table-responsive">
                        <div>
                            <table width="100%" id="tableedit1">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Cupang</th>
                                        <th>Harga</th>
                                        <th>Input Qty</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody id='tadjust'>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModaledit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabeledit2">Add Customer</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
          <form id="addcustomer">
            <div class="form-group">
              <label for="kodecust" class="col-form-label">Costumer Kode:</label>
              <input type="text" name="codecustomer" class="form-control" id="kodecust" readonly>
            </div>
            <div class="form-group">
              <label for="namacust" class="col-form-label">Company Name:</label>
              <input type="text" name="companyname" class="form-control" id="namacust" value="" required>
            </div>
            <div class="form-group">
              <label for="addresscust" class="col-form-label">Alamat 1:</label>
              <textarea name="address01" class="form-control" id="addresscust" required></textarea>
            </div>
            <div class="form-group">
              <label for="citycust" class="col-form-label">Kota 1:</label>
              <select name="city01" id="citycust" class="form-control js-basic-single">
                <?php foreach ($city as $citys) { ?>
                  <option value="<?= $citys->city ?>"><?= $citys->city ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="nama1cust" class="col-form-label">Nama 1:</label>
              <input name="name01" type="text" class="form-control" id="nama1cust" Value="" required>
              
            </div>
            <div class="form-group">
              <label for="jabatancust" class="col-form-label">Jabatan 1:</label>
              <input type="text" name="jabatan01" class="form-control" id="jabatancust" value="">
            </div>
            
           
            <div class="form-group">
              <label for="hpcust" class="col-form-label">Phone Number:</label>
              <input type="text" name="phone" class="form-control" id="hpcust" value="" required>
            </div>
           
            <div class="form-group">
              <label for="emailcust" class="col-form-label">Email:</label>
              <input type="text" name="email" class="form-control" id="emailcust" value="" required>
            </div>
            <div class="form-group">
              <label for="negaracust" class="col-form-label">Country:</label>
              <select name="country" id="negaracust" class="form-control">
                <?php foreach ($country as $countrys) { ?>
                  <option value="<?= $countrys->country ?>"><?= $countrys->country ?></option>
                <?php } ?>
              </select>
            </div>
            <div>
              <label for="notecust" class="col-form-label">Note:</label>
              <textarea name="note" class="form-control" id="notecust"></textarea>
            </div>
            <div>
              <button name="btn-submit-vendor" type="button" class="btn btn-success" 
              style="margin-top:20px" onclick="savecustomer()">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>

          </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('keydown', '.cupang', function() {

        var id = this.id;
        var splitid = id.split('_');
        var index = splitid[1];

        // Initialize jQuery UI autocomplete
        $('#' + id).autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "/transaksi/cp",
                    type: 'post',
                    dataType: "json",
                    data: {
                        search: request.term,
                        request: 1
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            select: function(event, ui) {
                $(this).val(ui.item.label); // display the selected text
                var kodeid = ui.item.value; // selected value

                // AJAX
                $.ajax({
                    url: '/transaksi/cp',
                    type: 'post',
                    data: {
                        kodeid: kodeid,
                        request: 2
                    },
                    dataType: 'json',
                    success: function(response) {
                        var len = response.length;

                        if (len > 0) {
                            var id = response[0]['id'];
                            var rawad = response[0]['code'];
                            var proad = response[0]['description'];
                            var hrgad = response[0]['price'];

                            // Set value to textboxes
                            document.getElementById('cupang_' + index).value = rawad;
                            document.getElementById('cupname_' + index).value = proad;
                            document.getElementById('idcup_' + index).value = id;
                            document.getElementById('hrg_' + index).value = hrgad;
                        }
                        $('#qty_' + index).focus();
                    }
                });
                return false;
            }
        });
    });


    // Add more
    $('#addmore').click(function() {
        if ($('.tr_input input[type=text]:nth-child(1)').last().attr('id')) {
            // Get last id 
            var lastname_id = $('.tr_input input[type=text]:nth-child(1)').last().attr('id');
            var split_id = lastname_id.split('_');

            // New index
            var index = Number(split_id[1]) + 1;
        } else {
            var index = 1
        }

        var html = "<tr class='tr_input'><td><select type='text' class='form-control select2' name='cupang_name[]' required id='cupname_5" + index +
            "' ><option value=''><?php echo $this->lang->line('purchase_select_product'); ?>PILIH IKAN CUPANG</option><?php foreach ($ikan as $value) {
                                                                                                                            echo "<option value=\'$value->codecupang\'" . set_select('codecupang', $value->codecupang) . ">$value->codecupang</option>";
                                                                                                                        } ?> </select></td>     <td><select type='text' class='form-control select2' name='cupang_name[]' required id='cupname_5" + index +
            "' ><option value=''><?php echo $this->lang->line('purchase_select_product'); ?>PILIH IKAN CUPANG</option><?php foreach ($ikan as $value) {
                                                                                                                            echo "<option value=\'$value->cupangname\'" . set_select('cupangname', $value->cupangname) . ">$value->cupangname</option>";
                                                                                                                        } ?> </select></td>     <td><input type='text' class='hrg' readonly='readonly' name='harga[]' style='width:120px' required id='hrg_" + index + "' ></td>    <td><input type='text' class='qty' name='qty[]' style='width:120px' required id='qty_" + index + "' ></td>  </td></tr>";

        // Append data

        // <input type='text' name='idcupang[]' style='width:120px' class='cupang' required id='cupang_" + index +
        //     "' placeholder='Enter Code'><select type='text' class='form-control select2' name='cupang_name[]' required id='cupname_5" + index +
        //     "' ></td><td><input type='text' class='hrg' name='harga[]' style='width:120px' required id='hrg_" + index +
        //     "' ></td><td><input type='text' class='qty' name='qty[]' style='width:120px' required id='qty_" + index +
        //     "' ></td><td>



        $('#tadjust').append(html);

    });

    function remove_character(str_to_remove, str) {
        let reg = new RegExp(str_to_remove)
        return str.replace(reg, '')
    }

    function sum(id) {
        var hrg = remove_character(',', document.getElementById('hrg_'+id).value);
        console.log(hrg);
        var qty = remove_character(',', document.getElementById('qty_'+id).value);
        console.log(qty);
        var result = parseFloat(hrg) * parseFloat(qty);
        if (!isNaN(result)) {
            document.getElementById('total_'+id).value = result;
        }
    }

    function createcustomer(){
        $.ajax({
            type: "GET",
            url: "<?php echo base_url("Transaksi/getlastidcustomer/"); ?>",
            success: function(response) {
                console.log(response);
                if (response) {
                    $("#kodecust").val(response);
                    $('#exampleModaledit2').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) { 
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    function savecustomer() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("Customer/store/trans"); ?>",
            data: {
                codecustomer: $('#kodecust').val(),
                companyname: $('#namacust').val(),
                address01: $('#addresscust').val(),
                city01: $('#citycust').val(),
                name01: $('#nama1cust').val(),
                jabatan01: $('#jabatancust').val(),
                phone: $('#hpcust').val(),
                email: $('#emailcust').val(),
                country: $('#negaracust').val(),
                note: $('#notecust').val(),
            },
            dataType: "json",
            beforeSend: function(e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response) {
                console.log(response);
                if (response) {
                    var o = new Option(response.text, response.val);
                    $("#cust").append(o);
                    $('#exampleModaledit2').modal('hide');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) { 
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }
    
    function changestatus(type,id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("Transaksi/gettransaksi/"); ?>",
            data: {
                id: id
            },
            dataType: "json",
            beforeSend: function(e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response) {
                console.log(response.list);
                if (response) {
                    tgladd = (response.list.tanggalpengajuan == null)?response.list.dateadd:response.list.tanggalpengajuan;
                    let dateadd = new Date(tgladd);
                    let tgldateadd = dateadd.toLocaleDateString("id-ID");

                    if (type == 'Lunas') { 
                        $("#erad1").prop("checked", true);
                        if (response.list.carabayar == 'Cash')
                            $("#ebayar1").prop("checked", true);
                        else if (response.list.carabayar == 'Transfer')
                            $("#ebayar2").prop("checked", true);
                        else
                            $("#ebayar3").prop("checked", true);
                        $("#eform1").show();
                        $("#lbltanggallunas").show();
                        $("#tanggallunas").show();
                        $("#tanggallunas").val(response.list.tanggallunas);
                    } else { 
                        $("#erad2").prop("checked", true);
                        $("#ebayar1").prop("checked", false);
                        $("#ebayar2").prop("checked", false);
                        $("#ebayar3").prop("checked", false);
                        $("#eform1").hide();
                        $("#lbltanggallunas").hide();
                        $("#tanggallunas").hide();
                        $("#tanggallunas").val('');
                    }
                    
                    $("#tableedit1 tbody").html(response.list_detail);
                    $("#idtransaksi").val(id);
                    $("#etglpeng").val(tgldateadd);
                    $("#enomor").val(response.list.nomor);
                    $("#esales").val(response.list.nama);
                    $("#ecust").val(response.list.companyname);
                    $("#efarm").val(response.list.farmname);
                    $("#esource").val(response.list.note);
                    $("#ecatatan").val(response.list.catatan);
                    $("#eongkir").val(response.list.ongkir);
                    $("#epacking").val(response.list.packing);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) { 
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
        $('#exampleModaledit').modal('show');
    }
    
    function addNewRow() {
		var zInd = document.getElementById('tableedit').tBodies[0].rows.length;
        var tbodyRef = document.getElementById('tableedit').getElementsByTagName('tbody')[0];
        var x  = tbodyRef.insertRow(zInd);
		var indexrow  = parseInt(document.getElementById('indexrow').value);

        x.innerHTML = `<td><input type="hidden" name="hidcupang[]" id="hidcupang_${indexrow}"><div id="menu_${indexrow}"></div></td>
        <td><input type="hidden" name="hidcupang_detail[]" id="hidcupang_detail_${indexrow}"><div id="menu2_${indexrow}"></div></td>
        <td>
            <div class="input-group"> 
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" name="harga[]" onkeyup="sum(${indexrow});" style="width:160px;" min=0 id="hrg_${indexrow}" required>
            </div>
        </td>
        <td>
            <input type="number" style="width:160px" class="form-control" onkeyup="sum(${indexrow});" name="qty[]" min=0 id="qty_${indexrow}" required>
        </td>
        <td>
            <div class="input-group"> 
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="number" style="width:160px" class="form-control" readonly name="total[]" min=0 id="total_${indexrow}" required>
            </div>
        </td>
        <td style="vertical-align:middle">
            <button type="button" title="Delete" class="btn btn-sm btn-danger" onclick="removeRowEdit(this);"><span class="fa fa-times"></span></button>
        </td>`;
        let menu = document.getElementById('menu_'+indexrow);
        let select = document.createElement('select');
        select.className = 'myselect form-control';
        select.id = 'cupang_'+indexrow;
        select.name = "codecupang[]";
        select.required = true;
        select.style.width = "200px";
		$.post("<?php echo base_url("Transaksi/addnewdetail"); ?>",{'indexrow':indexrow}, function(data){ 
            select.innerHTML = `<option value="">--Please-select---</option>${data}`;
		});
        select.setAttribute("onchange", `ambilcupang(this,'kode',${indexrow})`);
        menu.appendChild(select);
        
        $(select).select2();
        
        let menu2 = document.getElementById('menu2_'+indexrow);
        let select2 = document.createElement('select');
        select2.className = 'myselect form-control';
        select2.id = 'cupang_detail_'+indexrow;
        select2.name = "cupang_name[]";
        select2.required = true;
        select2.style.width = "200px";
		$.post("<?php echo base_url("Transaksi/addnewdetail2"); ?>",{'indexrow':indexrow}, function(data){ 
            select2.innerHTML = `<option value="">--Please-select---</option>${data}`;
		});
        select2.setAttribute("onchange", `ambilcupang(this,'nama',${indexrow})`);
        menu2.appendChild(select2);
        
        $(select2).select2();

		document.getElementById('indexrow').value = indexrow+1;
	}
	
	function removeRowEdit(drow,NO_PRANOTA,ID){
		var i=drow.parentNode.parentNode.rowIndex;
		document.getElementById('tableedit').deleteRow(i);
		document.getElementById('indexrow').value = document.getElementById('indexrow').value-1;
	}
	
	function ambilcupang(row,tipe,id) {
	    if (tipe == 'nama') {
    	    if ($(row).val() == $("#hidcupang_detail_"+id).val()) {
    	        return;
    	    }
	    } else if (tipe == 'kode') {
	        if ($(row).val() == $("#hidcupang_"+id)) {
	            return;
	        }
	    }
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("Transaksi/checkcupang/"); ?>"+tipe,
            data: {
                id: $(row).val()
            },
            dataType: "json",
            beforeSend: function(e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response) {
                console.log(response);
                if (response) {
                    if (tipe == 'nama') {
                        console.log(tipe + response.list_kota);
                        $("#hidcupang_"+id).val(response.list_kota);
                        $("#cupang_"+id).select2().val(response.list_kota).trigger("change");
                    } else if(tipe == 'kode') {
                        console.log(tipe + response.list_kota);
                        $("#hidcupang_detail_"+id).val(response.list_kota);
                        $("#cupang_detail_"+id).select2().val(response.list_kota).trigger("change");
                    }
                    $("#hrg_"+id).val(response.list_harga);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) { 
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }
    
</script>

<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
<script type="text/javascript">
    $(function() {
        $(":radio.rad").click(function() {
            $("#form1, #form2").hide();
            if ($(this).val() == "Lunas") {
                $("#form1").show();
                $("#lbltanggallunas1").show();
                $("#tanggallunas1").show();
            } else {
                $("#form1").hide();
                $("#lbltanggallunas1").hide();
                $("#tanggallunas1").hide();
            }

        });
        $('input[type=radio][name=estatus]').change(function() {
            if (this.value == "Lunas") {
                $("#eform1").show();
                $("#lbltanggallunas").show();
                $("#tanggallunas").show();
            } else {
                $("#eform1").hide();
                $("#lbltanggallunas").hide();
                $("#tanggallunas").hide();
            }
        });
    });
</script>