
	<h1>Data Mahasiswa</h1>
  <div class="table-responsive">
	<table id="example" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NO.</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Status</th>
            </tr>
        </thead>

		<tbody>
			<?php
			include "koneksi.php";

      $query = mysql_query("SELECT * FROM mahasiswa ORDER BY noid DESC");
      $i=1;

      while($d = mysql_fetch_array($query)){?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $d['email']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['tanggal_lahir']; ?></td>
					<td><?php echo $d['no_telp']; ?></td>
          <td><?php echo $d['status']; ?></td>
      <?php
			}
			?>
		</tbody>
		<tfoot>
            <tr>
              <th>NO.</th>
              <th>Email</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Nomor Telepon</th>
              <th>Status</th>
            </tr>
        </tfoot>
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

