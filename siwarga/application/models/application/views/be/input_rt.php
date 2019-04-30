<!DOCTYPE html>
<html lang="en">
<!-- header -->
<?php $this->load->view("be/header.php") ?>
<!-- end header -->
<body>
<section id="container" >
<!-- navbar -->
<?php $this->load->view("be/navbar.php") ?>
<!-- end navbar -->
<!-- sidebar -->
<?php $this->load->view("be/sidebar.php") ?>
<!-- end sidebar -->
	 <!--main content start-->
	 <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> TAMBAH DATA RT</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
		<h4 align="center">Tambah Data RT</h4>
		<div align="center">
		<p>
		<form method="post" action="input_rt">
		<table class="table">	
			<tr>
				<td>id_RT</td>
				<td>
				<input type="text" name="id_rt" size="10" maxlength="10" value="<?php echo $kode_rt;?>">
				</td>
			</tr>
			<tr>
				<td>RT</td>
				<td>
				<input type="text" name="rt" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->rt; } ?>">
				</td>
			</tr>
			<tr>
				<td>RW</td>
				<td>
				<input type="text" name="rw" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->rw; } ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Ketua</td>
				<td>
				<input type="text" name="nama_ketua" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->nama_ketua; } ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
				<input type="text" name="alamat" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->alamat; } ?>">
				</td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>
				<input type="text" name="telp" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->telp; } ?>">
				</td>
			</tr>
			<tr>
				<td>No KK</td>
				<td>
				<input type="text" name="no_kk" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->no_kk; } ?>">
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
				<input type="text" name="status" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->status; } ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnTambah" value="Simpan"/></td>
				<td> <a href="<?php echo base_url()?>be/Landing/rt">Kembali</a></td>
			</tr>
		</table>
    </form>
		</p>
		</div>
	</body>
</html>