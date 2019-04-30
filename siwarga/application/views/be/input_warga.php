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
          	<h3><i class="fa fa-angle-right"></i> TAMBAH WARGA</h3>
				<div class="row">				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
		<h4 align="center">Tambah Data Warga</h4>
		<div align="center">
		<p>
		<form method="post" action="input_warga">
		<table class="table">	
			<tr>
				<td>NIK</td>
				<td>
				<input type="text" name="nik" size="10" maxlength="10" value="<?php if(isset($data)) { echo $data[0]->nik; } ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Warga</td>
				<td>
				<input type="text" name="nama" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->nama; } ?>">
				</td>
			</tr>
			<tr>
				<td> No KK</td>
				<td>
				<input type="text" name="no_kk" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->no_kk; } ?>">
				</td>
			</tr>
			<tr>
				<td> Tempat Lahir</td>
				<td>
				<input type="text" name="tmp_lahir" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->tmp_lahir; } ?>">
				</td>
			</tr>
			<tr>
				<td>  Tanggal Lahir</td>
				<td>
				<input type="date" name="tgl_lahir" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->tgl_lahir; } ?>">
				</td>
			</tr>
			<tr>
				<td> Telepon</td>
				<td>
				<input type="text" name="telp" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->telp; } ?>">
				</td>
			</tr>
			<tr>
				<td> Status</td>
				<td>
				<input type="text" name="status" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->status; } ?>">
				</td>
			</tr>
			<tr>
				<td>RT</td>
				<td>
				<select name="id_rt">
			        <?php
			        
						foreach ($id_rt as $row){ 
			        	echo '<option value="'.$row->id_rt.'">'. $row->rt.'</option>';
			        	}
					?>
        		</select>
				</td>
			</tr>
			<tr>
				<td> RW</td>
				<td>
				<input type="text" name="rw" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[0]->rw; } ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnTambah" value="Simpan"/></td>
				<td> <a href="<?php echo base_url()?>be/Landing/warga">Kembali</a></td>
			</tr>
		</table>
    </form>
		</p>
		</div>
		</div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		</section>
		<?php $this->load->view("be/footer.php") ?>
	  </section><!-- /MAIN CONTENT -->
	  <?php $this->load->view("be/js.php") ?>
	</body>
</html>