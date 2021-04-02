<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container-fluid">
	<br>
	<?php if ($button == '1') { ?>
		<left>
			<a target="_blank" class="btn btn-primary" href="<?= base_url(); ?>notaspk/printPdf/<?= $id ?>">Print</a>
		</left>
	<?php } ?>

	<div class="col-md-12">
		<center><img src="assets/assets/img/logona.png" alt=""></center>
		<br>
		<h3 class="text-center"><?= $data->spktitle ?></h3>
		<h5 class="text-center"><?= date('Y-m-d') ?></h5>
		<h3 class="text-center"><b><?= $data->spknumber ?></b></h3>
	</div>
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead style="background-color:#b2bec3;">
				<tr>
					<th>No</th>
					<th>Lokasi/Posisi Gambar</th>
					<th>Tema</th>
					<th>Ukuran(M)</th>
					<th>Jumlah</th>
					<th>Spesifikasi</th>
					<th>Periode Tayang</th>
					<th>Harga Per Unit</th>
					<th>Pembayaran Via</th>
					<th>Biaya</th>
				</tr>
			</thead>
			<tbody>

				<?php $no = 1;
				foreach ($spkdetail as $key => $value) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td>
							<div class="row">
								<div class="col-md-6">
									<label for=""><?= $value->lokasi ?></label>
								</div>
								<div class="col-md-6">
									<img src="assets/images/<?= $value->gambar1 ?>" alt="" height="85" width="70">
								</div>
							</div>
						</td>
						<td><?= $value->tema ?></td>
						<td><?= $value->ukuran ?></td>
						<td><?= $value->jumlah ?></td>
						<td><?= $value->spesifikasi ?></td>
						<td><?= $value->periode_tayang ?></td>
						<td><?= $value->harga ?></td>
						<td><?= $value->pembayaranvia ?></td>
						<td><b>IDR </b><?= number_format($value->biaya) ?></td>
					</tr>
				<?php } ?>
				<tr>
					<td colspan="8" class="text-center">Total</td>
					<td></td>
					<td><b>IDR</b><?= number_format($max) ?></td>
				</tr>
			</tbody>
		</table>
		<h5 class="text-left"><b>TERBILANG: <?= strtoupper($terbilang) ?></b></h5>
	</div>
	<br>
	<div class="col-md-12">
		<table style="width:100%;" class="text-center">
			<tr>
				<th class="text-center">DISETUJUI :</th>
				<th class="text-center">DIBUAT OLEH :</th>
				<th class="text-center">DIPERIKSA :</th>
			</tr>
			<tr style="height: 200px;">
				<td style="height: 150px;" class="text-center align-bottom">
					<hr style="width:50%"><?= $data->disetujui ?></td>
				<td style="height: 150px;" class="text-center align-bottom">
					<hr style="width:50%"><?= $data->dibuatoleh ?></td>
				<td style="height: 150px;" class="text-center align-bottom">
					<hr style="width:50%"><?= $data->diperiksa ?></td>
			</tr>
		</table>
	</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>