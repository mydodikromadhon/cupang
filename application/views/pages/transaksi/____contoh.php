<h6 style="padding:0;margin:0;"><b>BOSTON PREMIUM FARM</b></h6>
<a style="font-size: 10px;">No. ID Transaksi : <?php echo $dispo['id']; ?></a><br>
<a style="font-size: 10px;">Tanggal =

    <?php
    $tgl = date('d-m-Y');
    echo $tgl;
    ?></a>
<br>
<br>

<table class="table table-responsive" border=1 cellspacing="0">

    <thead>
        <tr style="font-size: 14px; font-weight: bold;">
            <th>Ikan</th>
            <th>Harga</th>
            <th>Quantity</th>
            <th>Total</th>


        </tr>
    </thead>
    <tbody>
        <?php
        // $this->db->query("SUM(total) as grandtotal WHERE idtransaksi FROM m_detailtransaksi")->row_array();

        foreach ($dispolan as $datas) { ?>
            <tr style="font-size: 10px;">
                <td><?php echo $datas['cupang_name']; ?></td>
                <td><?php echo $datas['harga']; ?></td>
                <td><?php echo $datas['qty']; ?></td>
                <td><?php echo $datas['total']; ?></td>

            </tr>


        <?php } ?>


    </tbody>

</table>
<br>
<h6 style="padding-left:80px;margin:0;"><b>Packing = </b>
    <?php
    echo $dispo['packing'];
    ?>
</h6><h6 style="padding-left:80px;margin:0;"><b>Ongkos Kirim = </b>
    <?php
    echo $dispo['ongkir'];
    ?>
</h6><h6 style="padding-left:80px;margin:0;"><b>GrandTotal = </b>
    <?php
    echo $test+$dispo['ongkir']+$dispo['packing'];
    ?>
</h6>