<div class="w3l-news_info_agile_its">
	<div class="col-md-6 w3l-news">
		<?php
		include "koneksi.php";
		$sql=mysql_query("SELECT foto,judul,link,date_format(tanggal,'%d %M %Y') AS tanggal,isi,link FROM berita ORDER BY noid DESC LIMIT 3");
			while ($d=mysql_fetch_array($sql)) 
					
		{?>
		<div class="media response-info">
						
		<div class="media-left response-text-left">
			<a href="#" data-toggle="modal" data-target="#myModal">
				<img class="media-object" src="images/<?php echo $d['foto'];?>" alt="" width="223px" height="213px">
			</a>
		</div>
		<div class="media-body response-text-right">
			<h5><?php echo $d['judul']; ?></h5>
				<ul>
					<li><i class="fa fa-calendar" aria-hidden="true"></i>
						<?php echo $d['tanggal']; ?>
					</li>
				</ul>
				<p><?php echo $d['isi']; ?></p>
				<div class="read">
					<a href="<?php echo $d['link'];?>" class="view resw3">Read More</a>
				</div>
		</div>
						
		<div class="clearfix"> </div>
	</div>
	<?php } ?>

	<div class="clearfix"> </div>
</div>