        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="<?php echo base_url('index.php/admin/home') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/hotel') ?>"><i class="fa fa-desktop"></i> Hotel</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo base_url('index.php/admin/kamar') ?>"><i class="fa fa-desktop"></i> Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/customer') ?>"><i class="fa fa-user"></i> Customer</a>
                    </li>
					<li>
                        <a href="<?php echo base_url('index.php/admin/reservation') ?>"><i class="fa fa-bar-chart-o"></i> Reservation</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/payment') ?>"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/profit') ?>"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Tambah Kamar
                        </h1>
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="<?php echo base_url('index.php/admin/kamar/tambah_kamar_aksi') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Hotel</label>
                                        <!-- <select class="form-control" required>
                                            <option value selected ></option>
                                            <?php foreach($hotel as $h) ?>
                                            <option value="<?php echo $h->id_hotel ?>"><?php echo $h->nama_hotel ?></option>
                                        </select> -->
                                        <?php echo form_error('id_hotel','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Tipe Kamar</label>
                                        <select name="tipe_kamar" class="form-control" required>
                                            <option value selected ></option>
                                            <option value="Single Room">Single Room</option>
                                            <option value="Deluxe Room">Deluxe Room</option>
                                        </select>
                                        <?php echo form_error('fasilitas','<div class="text-small text-danger">','</div') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Kamar</label>
                                        <input type="number" name="jumlah_kamar" class="form-control" required>
                                        <?php echo form_error('jumlah_kamar','<div class="text-small text-danger">','</div') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" name="harga" class="form-control" required>
                                        <?php echo form_error('harga','<div class="text-small text-danger">','</div') ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>  
            </div>
			 <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url('assets/assets_admin/') ?>js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url('assets/assets_admin/') ?>js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url('assets/assets_admin/') ?>js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="<?php echo base_url('assets/assets_admin/') ?>js/custom-scripts.js"></script>
</body>
</html>