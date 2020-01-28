<!DOCTYPE html>
<html>
<head>
	<title>Belajar Menambahkan Sweet Alert Notification</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">

	<!-- load css sweetalert -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/sweet.css">
</head>
<body>
	<div class="container">
		<h2>Belajar Menambahkan Sweet Alert Notification</h2>
		<h3>Data Siswa</h3>
		<a href="<?php echo base_url() ?>index.php/siswa/tambah"><button type="button" class="btn btn-primary btn-sm">Tambah Siswa</button></a>
		<br><br>
		<table id="myTable" class="table table-striped table-bordered" style="width:100%">
		    <thead class="thead-dark">
		        <tr>
		            <th>No</th>
		            <th>Nama</th>
		            <th>Jenis Kelamin</th>
		            <th>Alamat</th>
		            <th>Opsi</th>
		        </tr>
		    </thead>
		    <tbody>
		    <?php $no=1; foreach ($data_siswa as $row) {
		    ?>
		        <tr>
		            <td><?php echo $no++; ?></td>
		            <td><?php echo $row->nama ?></td>
		            <td><?php echo $row->jenis_kelamin ?></td>
		            <td><?php echo $row->alamat ?></td>
		            <td>
		            	<a href="<?php echo base_url() ?>index.php/siswa/lihat/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-success btn-sm">Lihat</button></a>
		            	<a href="<?php echo base_url() ?>index.php/siswa/edit/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
		            	<a href="<?php echo base_url() ?>index.php/siswa/hapus/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
		            </td>
		        </tr>
		    <?php } ?>
		    </tbody>
		</table>
	</div>

	<!-- terima session dari controller -->
	<div class="pesan" data-flashdata="<?php echo $this->session->flashdata('pesan'); ?>"></div>

</body>
</html>

<script src="<?php echo base_url()?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>

<!-- load js sweetalert -->
<script src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/js/sweet.js"></script>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>

<script type="text/javascript">
    const flashData = $('.pesan').data('flashdata');

    if(flashData == 'simpan_sukses'){
      Swal.fire({
          type: 'success',
          title: 'Sukses',
          text: 'Tambah Data Berhasil',
          showConfirmButton: false,
          timer: 2300
        })
    }else if(flashData == 'hapus_sukses'){
      Swal.fire({
          type: 'success',
          title: 'Sukses',
          text: 'Hapus Data Berhasil',
          showConfirmButton: false,
          timer: 2300
        })
    }else if(flashData == 'update_sukses'){
      Swal.fire({
          type: 'success',
          title: 'Sukses',
          text: 'Edit Data Penanganan Berhasil',
          showConfirmButton: false,
          timer: 2300
        })
    }
</script>
