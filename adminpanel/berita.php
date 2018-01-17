
	<h1>Berita</h1>
  <a href="home.php?page=6">Berita Baru</a>
  <div class="table-responsive">
	<table id="example" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Isi</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>

		<tbody>
			<?php
			include "koneksi.php";

      $query = mysql_query("SELECT * FROM berita ORDER BY noid DESC");
      $i=1;

      while($d = mysql_fetch_array($query)){?>
				<tr>
  					<td><?php echo $i++; ?></td>
  					<td><img class="card-img-top item" src="../images/<?php echo $d['foto']; ?>" alt="" data-aos="fade-right" widht="100" height="100" ></td>
  					<td><?php echo $d['judul']; ?></td>
  					<td><?php echo $d['tanggal']; ?></td>
  					<td><?php echo $d['isi']; ?></td>
            <td><?php echo $d['link']; ?></td>
            <td><a href="home.php?page=7&id=<?php echo $d['noid'];?>">Hapus</a></td>
        </tr>
      <?php
			}
			?>
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

