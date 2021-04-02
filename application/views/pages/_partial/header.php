			<meta charset="utf-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
			<meta name="description" content="" />
			<meta name="author" content="" />
			<title>Sistem Management Asset dan Monitoring Penjualan Ikan Cupang</title>
			<link rel="shortcut icon" href="<?= base_url();?>assets/assets/img/ico.png">
			<link href="<?= base_url();?>assets/css/styles.css" rel="stylesheet" />
			<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
			<!--<link rel="stylesheet" href="<?= base_url();?>assets/datepicker/datepicker3.css" />-->
			<!-- Add fancyBox -->
			<!--<link rel="stylesheet" href="<?= base_url();?>/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />-->
			<!-- Optionally add helpers - button, thumbnail and/or media -->
			<!--<link rel="stylesheet" href="<?= base_url();?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />-->
			<!--<link rel="stylesheet" href="<?= base_url();?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />-->
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
			<style>
				.form-group {
					margin-bottom: 0 !important;
				}
				ul.ui-autocomplete {
    z-index: 1100;
}
			</style>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/assets/demo/chart-area-demo.js"></script>
<script src="<?= base_url() ?>assets/assets/demo/chart-bar-demo.js"></script>
<!--<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>-->
<!--<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>-->
<!--<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
<!--<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>-->
<!--<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>-->
<!--<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>-->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<!--<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>-->
<script src="<?= base_url() ?>assets/assets/demo/datatables-demo.js"></script>

			<script type="text/javascript">
				$('#hp').blur(function() {
					var hp = $(this).val();
					var len = hp.length;
					if (len > 0 && len <= 10) {
						$(this).parent().find('.text-warning').text("");
						$(this).parent().find('.text-warning').text("Nomer HP terlalu pendek");
						return apply_feedback_error(this);
					} else {
						if (!valid_hp(hp)) {
							$(this).parent().find('.text-warning').text("");
							$(this).parent().find('.text-warning').text("Format nomer hp tidak sah.(ex: +6285736262623)");
							return apply_feedback_error(this);
						} else {
							if (len > 13) {
								$(this).parent().find('.text-warning').text("");
								$(this).parent().find('.text-warning').text("Nomer HP terlalu Panjang");
								return apply_feedback_error(this);
							}
						}
					}
				});
			</script>