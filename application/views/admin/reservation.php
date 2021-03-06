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
                        <a href="<?php echo base_url('index.php/admin/customer') ?>"><i class="fa fa-user"></i> Customer</a>
                    </li>
					<li>
                        <a class="active-menu" href="<?php echo base_url('index.php/admin/reservation') ?>"><i class="fa fa-bar-chart-o"></i> Reservation</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/payment') ?>"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/profit') ?>"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/auth/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                  
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Nama Lengkap</th>
                                                <th>Nomor Telepon</th>
                                                <th>Email</th>
                                                <th>Nama Hotel</th>
                                                <th>Rating</th>
                                                <th>Jumlah Kamar</th>
                                                <th>Tanggal Check-in</th>
                                                <th>Tanggal Check-out</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no = 1;
                                                foreach($reservation as $r) : ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $r->nama_customer ?></td>
                                                        <td><?php echo $r->no_telepon ?></td>
                                                        <td><?php echo $r->email ?></td>
                                                        <td><?php echo $r->nama_hotel ?></td>
                                                        <td><?php echo $r->rating ?></td>
                                                        <td><?php echo $r->jumlah_kamar ?></td>
                                                        <td><?php echo $r->checkin ?></td>
                                                        <td><?php echo $r->checkout ?></td>
                                                        <td>Rp. 
                                                            <?php 
                                                                $awal = new DateTime($r->checkin);
                                                                $akhir = new DateTime($r->checkout);
                                                                $diff = $akhir->diff($awal);
                                                                echo number_format($r->harga * $r->jumlah_kamar * $diff->d,0,',','.');
                                                            ?>
                                                        </td>
                                                    </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
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
