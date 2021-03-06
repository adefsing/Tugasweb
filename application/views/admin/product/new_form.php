<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Nama Makanan*</label>
								<input class="form-control <?php echo form_error('nama_makanan') ? 'is-invalid' : '' ?>" type="text" name="nama_makanan" placeholder="Nama Makanan" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_makanan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Harga Makanan*</label>
								<input class="form-control <?php echo form_error('harga_makanan') ? 'is-invalid' : '' ?>" type="number" name="harga_makanan" min="0" placeholder="Harga Makanan" />
								<div class="invalid-feedback">
									<?php echo form_error('harga_makanan') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Gambar Makanan</label>
								<input class="form-control-file <?php echo form_error('gambar_makanan') ? 'is-invalid' : '' ?>" type="file" name="gambar_makanan" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar_makanan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskrippsi Makanan*</label>
								<textarea class="form-control <?php echo form_error('desc_makanan') ? 'is-invalid' : '' ?>" name="desc_makanan" placeholder="Product description..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('desc_makanan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>