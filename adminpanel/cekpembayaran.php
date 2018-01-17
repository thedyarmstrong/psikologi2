
<h1>List Pembayaran</h1>
<div class="table-responsive">
    <table id="example" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>No</th>
              <th>Nama Mahasiswa</th>
              <th>Nama Rekening</th>
              <th>Transfer Tujuan</th>
              <th>Jumlah Transfer</th>
              <th>Nama Bank Mhs</th>
              <th>No. Rek Mahasiswa</th>
              <th>Tanggal Transfer</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
              <?php
              include "koneksi.php";

              $query = mysql_query("SELECT * FROM pembayaran ORDER BY noid DESC");
              $i=1;

              while($d = mysql_fetch_array($query)){



                ?>
        
            <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $d['nama_mahasiswa'];?></td>
                <td><?php echo $d['nama_rekening'];?></td>
                <td><?php echo $d['transfer_ke'];?></td>
                <td><?php echo $d['jumlah_transfer'];?></td>
                <td><?php echo $d['nm_bank_mhs'];?></td>
                <td><?php echo $d['no_rek_mhs'];?></td>
                <td><?php echo $d['tanggal_transfer'];?></td>
                <td><?php echo $d['status_pembayaran'];?></td>
                <td>
                    <?php
                        if($d['status_pembayaran']=='DONE'){?>
                            <a href="home.php?page=4&code=del&id=<?php echo $d['noid'];?>" title="Hapus">
                            <img src="../images/unchecked.png"></a>
                        <?php }else{ ?>
                            <a href="home.php?page=4&code=done&id=<?php echo $d['noid'];?>&email=<?php echo $d['email'];?>" title="Status Done">
                            <img src="../images/checked.png"></a>&nbsp;
                            <a href="home.php?page=4&code=del&id=<?php echo $d['noid'];?>&email=<?php echo $d['email'];?>" title="Hapus">
                            <img src="../images/unchecked.png"></a>

                        <?php } ?>
                </td>
                    
            </tr>
            <?php } ?>
        </tbody>        
    </table>

    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
  </script>

