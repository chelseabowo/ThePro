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

<!-- Edit Data Sekolah -->
<div class="modal fade" id="edit_data_sekolah" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Data Sekolah</h4>
            </div>
            <div class="modal-body">
                <div class="hasil-data"></div>
            </div>
            
        </div>
	</div>
</div>
<!-- Edit Data Sekolah -->

<!-- Hapus Data Sekolah --> 
<div class="modal fade" id="modal_hapus_data_sekolah">
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
<!-- Hapus Data Sekolah -->

<!-- Tambah Data Sekolah -->
<div id="modal_tambah_data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Login Admin</h4>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url('admin/tambah_sekolah'); ?>" method="POST">
          <div class="form-group has-feedback">
          	<label for="">Nama Sekolah</label>
            <input name="in_nama_sekolah" type="text" class="form-control" placeholder="Nama Sekolah">
          </div>
          <div class="form-group has-feedback">
          	<label for="">ID Sekolah</label>
            <input name="in_id_sekolah" type="text" class="form-control" placeholder="ID Sekolah">
          </div>
          <div class="form-group has-feedback">
          	<label for="">Alamat Sekolah</label>
            <input name="in_alamat" type="text" class="form-control" placeholder="Alamat Sekolah">
          </div>
          <div class="form-group has-feedback">
          	<label for="">No. Telpon</label>
            <input name="in_no_telp" type="text" class="form-control" placeholder="No. Telpon">
          </div>
          <div class="form-group has-feedback">
          	<label for="">Provinsi</label>
            <select name="in_provinsi" id="provinsi" class="form-control" required>
            	<option value="">Please Select</option>
            	<?php 
            	foreach ($provinsi as $pro) {
            	?>
				      <option value="<?php echo $pro->m_provinsi_id;?>"><?php echo $pro->provinsi_nama; ?></option>
            	<?php	
            	}
            	?>
            </select>
          </div>
          <div class="form-group has-feedback">
          	<label for="">Kota/Kabupaten</label>
            <select name="in_kota" id="kota" class="form-control" requiered>
            	<option value="">Please Select</option>
            	<?php
            	foreach ($kota as $kt) {
            	?>
				      <option id='kota' class="<?php echo $kt->m_provinsi_id ?>" value="<?php echo $kt->m_kota_id ?>"><?php echo $kt->kota_nama ?>
              </option>
            	<?php
            	}
            	?>
            </select>
          </div>
          <div class="form-group has-feedback">
          	<label for="">Kecamatan</label>
            <select name="in_kecamatan" id="kecamatan" class="form-control" requiered>
            	<option value="">Please Select</option>
            	<?php
            	foreach ($kecamatan as $kc) {
            	?>
				      <option id='kecamatan' class="<?php echo $kc->m_kota_id ?>" value="<?php echo $kc->m_kecamatan_id ?>"><?php echo $kc->kecamatan_nama ?>
				      </option>
            	<?php
            	}
            	?>
            </select>
          </div>
          <div class="form-group has-feedback">
          	<label for="">Kelurahan</label>
            <select name="in_kelurahan" id="kelurahan" class="form-control" requiered>
            	<option value="">Please Select</option>
            	<?php
            	foreach ($kelurahan as $kl) {
            	?>
              <option id='kelurahan' class="<?php echo $kl->m_kecamatan_id ?>" value="<?php echo $kl->m_kelurahan_id ?>"><?php echo $kl->kelurahan_nama ?>
				      </option>
            	<?php
            	}
            	?>
            </select>
          </div>
          <div class="form-group has-feedback">
            <input name="in_created_by" type="hidden" class="form-control" value="<?php echo $itsme['m_user_id'] ?>">
          </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit">
          Submit
        </button>
        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
          Cancel
        </button>
      </div>
      
        </form>
      </div> 
    </div>
  </div>
</div>
<!-- Tambah Data Sekolah -->