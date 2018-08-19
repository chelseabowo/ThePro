<form action="<?php echo base_url('admin/update_sekolah'); ?>" method="POST">
<input name="in_id" type="hidden" class="form-control" value="<?php echo $edit['d_sekolah_id'] ?>" disabled>
<div class="form-group has-feedback">
	<label for="">Nama Sekolah</label>
	<input name="in_nama_sekolah" type="text" class="form-control" placeholder="Nama Sekolah" value="<?php echo $edit['sekolah_nama'] ?>">
</div>
<div class="form-group has-feedback">
	<label for="">ID Sekolah</label>
	<input name="in_id_sekolah" type="text" class="form-control" placeholder="ID Sekolah" value="<?php echo $edit['sekolah_id'] ?>">
</div>
<div class="form-group has-feedback">
	<label for="">Alamat Sekolah</label>
	<input name="in_alamat" type="text" class="form-control" placeholder="Alamat Sekolah" value="<?php echo $edit['sekolah_alamat'] ?>">
</div>
<div class="form-group has-feedback">
	<label for="">No. Telpon</label>
	<input name="in_no_telp" type="text" class="form-control" placeholder="No. Telpon" value="<?php echo $edit['sekolah_no_telp'] ?>">
</div>
<div class="form-group has-feedback">
    <label for="">Provinsi</label>   
    <select id="provinsi" name="in_provinsi" class="form-control" required>
        <option value="">Please Select</option>
            <?php
            foreach ($provinsi as $pro) {
            if ($pro->m_provinsi_id == $edit['m_provinsi_id']){ $cek='selected'; }else{ $cek=''; }
                echo "<option value='$pro->m_provinsi_id' $cek >$pro->provinsi_nama</option>\n";
            }
            ?>
    </select>

</div>
<div class="form-group has-feedback">
	<label for="">Kota/Kabupaten</label>
    <select id="kota" name="in_kota" class="form-control" required>
        <option value="">Please Select</option>
        <?php
            foreach ($kota as $kt) {
                if($kt->m_kota_id==$edit['m_kota_id']){$cek='selected';}else{$cek='';}
                echo "<option id='kota' class='$kt->m_provinsi_id' value='$kt->m_kota_id' $cek >$kt->kota_nama</option>\n";
            }
        ?>
    </select>
</div>
<div class="form-group has-feedback">
	<label for="">Kecamatan</label>
    <select id="kecamatan" name="in_kecamatan" class="form-control" required>
        <option value="">Please Select</option>
        <?php
            foreach ($kecamatan as $kc) {
                if($kc->m_kecamatan_id==$edit['m_kecamatan_id']){$cek='selected';}else{$cek='';}
                echo "<option id='kecamatan' class='$kc->m_kota_id' value='$kc->m_kecamatan_id' $cek >$kc->kecamatan_nama</option>\n";
            }
        ?>
    </select>
</div>
<div class="form-group has-feedback">
    <label for="">Kelurahan</label>
    <select id="kelurahan" name="in_kelurahan" class="form-control" required>
        <option value="">Please Select</option>
        <?php
            foreach ($kelurahan as $kl) {
                if($kl->m_kelurahan_id==$edit['m_kelurahan_id']){$cek='selected';}else{$cek='';}
                echo "<option id='kelurahan' class='$kl->m_kecamatan_id' value='$kl->m_kelurahan_id' $cek >$kl->kelurahan_nama</option>\n";
            }
        ?>
    </select>
</div>
<div class="form-group has-feedback">
	<input name="in_update_by" type="text" class="form-control" value="<?php echo $itsme['m_user_id']; ?>" disabled>
</div>

<div class="modal-footer">
	<button class="btn btn-success" type="submit">
        Submit
    </button>
	<button type="button" class="btn btn-danger" data-dismiss="modal">
		Cancel
	</button>
</div>
</form>

<!-- Auto Dropdown Changed -->
<script src="<?php echo base_url(); ?>/admin/jquery.chained.min.js"></script>
<script>
    $("#kota").chained("#provinsi");
    $("#kecamatan").chained("#kota");
    $("#kelurahan").chained("#kecamatan");
</script>
<!-- Auto Dropdown Changed -->