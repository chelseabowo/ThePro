<h3><b>Daftar Sekolah</b></h3>
<a href="#" class="btn btn-success btn-sm" data-target="#modal_tambah_data" data-toggle="modal">Tambah Data Sekolah</a>
</br></br>

<div class='table-responsive' style="background-color:#E3FB71;">
	</br>
	<table id="myTable" class='table table-bordered' syle="color:#CDF76F">
		<thead>
			<tr style="background-color:#906CD7;">
				<th style="color:#CDF76F;">NO.</th>
				<th style="color:#CDF76F;">Nama Sekolah</th>
				<th style="color:#CDF76F;">ID Sekolah</th>
				<th style="color:#CDF76F;">Alamat Sekolah</th>
				<th style="color:#CDF76F;">No Telp</th>
				<th style="color:#CDF76F;">Provinsi</th>
				<th style="color:#CDF76F;">Kota/Kab.</th>
				<th style="color:#CDF76F;">Kecamatan</th>
				<th style="color:#CDF76F;">Kelurahan</th>
				<th style="color:#CDF76F;">Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no=1;
				foreach ($list_sekolah as $ls) {
			?>
			<tr style="background-color:#F7FFE6;">
				<td><?php echo $no++ ?></td>
				<td><?php echo $ls->sekolah_nama; ?></td>
				<td><?php echo $ls->sekolah_id; ?></td>
				<td><?php echo $ls->sekolah_alamat; ?></td>
				<td><?php echo $ls->sekolah_no_telp; ?></td>
				<td><?php echo $ls->provinsi_nama; ?></td>
				<td><?php echo $ls->kota_nama; ?></td>
				<td><?php echo $ls->kecamatan_nama; ?></td>
				<td><?php echo $ls->kelurahan_nama; ?></td>
				<td>
					<a href="#edit_data_sekolah" data-toggle="modal" data-id="<?php echo $ls->d_sekolah_id; ?>">Edit</a>
					</br>
					<a href="#" onclick="confirm_modal('hapus_sekolah/<?php echo $ls->d_sekolah_id; ?>');">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</br>
</div>