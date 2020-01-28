<!DOCTYPE html>
<html>
<head>
	<title>Belajar Menambahkan Sweet Alert Notification</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<!-- load css sweetalert -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/sweet.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Belajar Menambahkan Sweet Alert Notification</h2>
				<h3>Data Siswa</h3>
				<a href="<?php echo base_url() ?>index.php/siswa"><button type="button" class="btn btn-warning btn-sm">Kembali</button></a>
				<br><br>
					
				<form action="<?php echo base_url() ?>index.php/siswa/simpan" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama</label>
				    <input type="text" class="form-control" name="nama">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Jenis Kelamin</label>
				    <select class="form-control" name="jenis_kelamin">
				    	<option value="Laki - Laki">Laki - Laki</option>
				    	<option value="Perempuan">Perempuan</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Alamat</label>
				    <input type="text" class="form-control" name="alamat">
				  </div>
				  <button type="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
		</div>
	</div>

	<!-- terima session dari controller -->
	<div class="pesan" data-flashdata="<?php echo $this->session->flashdata('pesan'); ?>"></div>

</body>
</html>

<!-- load js sweetalert -->
<script src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/js/sweet.js"></script>

<script type="text/javascript">
    const flashData = $('.pesan').data('flashdata');

    if(flashData == 'simpan_gagal'){
      Swal.fire({
          type: 'error',
          title: 'Gagal',
          text: 'Tambah Data Gagal',
          showConfirmButton: false,
          timer: 2300
        })
    }
</script>