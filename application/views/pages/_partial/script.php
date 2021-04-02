<!--<script src="bootstrap/js/bootstrap.js"></script>-->
<!--<script src="datepicker/bootstrap-datepicker.js"></script>-->
<script>
  $(document).ready(function() {
    $('#dataTable1').dataTable({
      "order": [[ 0, "desc" ]]
    });

    // $(".fancybox").fancybox({
    //   openEffect: 'elastic',
    //   closeEffect: 'elastic',

    //   helpers: {
    //     title: {
    //       type: 'inside'
    //     }
    //   }
    // });
    // Format mata uang.
    $('.uang').mask('0.000.000.000.000', {
      reverse: true
    });

    // Format nomor HP.
    $('.no_hp').mask('0000-0000-0000');
      $('.js-basic-single').select2({ width: '100%' });
      $('.js-basic-single-cust').select2({ width: '100%' });
    //   $('.js-basic-single1').select2({ width: '100%' });
    //   $('.js-basic-single2').select2({ width: '100%' });
    //   $('.js-basic-single3').select2({ width: '100%' });
    //   $('.js-basic-single4').select2({ width: '100%' });
    //   $('.js-basic-single5').select2({ width: '100%' });
    //   $('.js-basic-single6').select2({ width: '100%' });
    //   $('.js-basic-single7').select2({ width: '100%' });
    //   $('.js-basic-single8').select2({ width: '100%' });
    //   $('.js-basic-single9').select2({ width: '100%' });
    //   $('.js-basic-single10').select2({ width: '100%' });
    //   $('.js-basic-single11').select2({ width: '100%' });
    //   $('.js-basic-single12').select2({ width: '100%' });
    //   $('.js-basic-single13').select2({ width: '100%' });
    //   $('.js-basic-single14').select2({ width: '100%' });
    //   $('.js-basic-single15').select2({ width: '100%' });
    //   $('.js-basic-single16').select2({ width: '100%' });
    // $('.tanggal').datepicker({
    //   format: "dd-mm-yyyy",
    //   autoclose: true
    // });
  });
</script>