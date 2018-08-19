	<h3><b>Daftar Admin Sekolah</b></h3>
<a href="#" class="btn btn-success btn-sm" data-target="#modal_tambah_data" data-toggle="modal">Tambah Data Admin Sekolah</a>
</br></br>

<div class='table-responsive' style="background-color:#E3FB71;">
	</br>
	<table id="myTable" class='table table-bordered' syle="color:#CDF76F">
		<thead>
			<tr style="background-color:#906CD7;">
				<th style="color:#CDF76F;" width="5%">NO.</th>
				<th style="color:#CDF76F;" width="15%">Nama Admin</th>
				<th style="color:#CDF76F;" width="10%">Password</th>
				<th style="color:#CDF76F;" width="10%">Role</th>
				<th style="color:#CDF76F;" width="25%">Sekolah</th>
				<th style="color:#CDF76F;" width="15%">Status</th>
				<th style="color:#CDF76F;" width="20%">Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no=1;
				foreach ($a_s as $as) {
			?>
			<tr style="background-color:#F7FFE6;">
				<td><?php echo $no++ ?></td>
				<td><?php echo $as->user_nama; ?></td>
				<td><?php echo $as->user_password; ?></td>
				<td><?php echo $as->role_nama; ?></td>
				<td><?php echo $as->sekolah_nama; ?></td>
				<td><?php echo $as->status; ?></td>
				<td>
					<a class="btn btn-info btn-xs" href="#" onclick="confirm_verifikasi_admin_sekolah('C_admin_sekolah/verifikasi_admin_sekolah/<?php echo $as->d_user_role_id; ?>');">Verifikasi</a>
					&nbsp;
					<a class="btn btn-success btn-xs" href="#edit_data_admin_sekolah" data-toggle="modal" data-id="<?php echo $as->d_user_role_id;?>">Edit</a>
					&nbsp;
					<a class="btn btn-danger btn-xs" href="#" onclick="confirm_hapus_admin_sekolah('hapus_admin_sekolah/<?php echo $as->d_user_role_id; ?>');">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</br>
</div>

<!-- Verifikasi Data Admin Sekolah --> 
<div class="modal fade" id="modal_verifikasi_data_admin_sekolah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Apakah anda yakin akan memverifikasi data ini ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Ya</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
<!-- Verifikasi Admin Sekolah -->

<!-- Hapus Data Admin Sekolah --> 
<div class="modal fade" id="modal_hapus_data_admin_sekolah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Apakah anda yakin akan menghapus data ini ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Ya</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
<!-- Hapus Data Admin Sekolah -->