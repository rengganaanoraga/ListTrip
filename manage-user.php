<?php 
    include 'db_connect.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">List Trip - App</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li>
                        <a href="dashboard.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>
                    <li class="xn-openable active">
                        <a href="#"><span class="fa fa-cog"></span> <span class="xn-text">Manage</span></a>
                        <ul>                            
                            <li class="active"><a href="manage-user.php"><span class="fa fa-users"></span> User</a></li>
                            <li ><a href="manage-destination.php"><span class="fa fa-plane"></span> Destination</a></li>                           
                        </ul>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">
                
               <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="logout.php" onclick="return confirm('Are you sure?')"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                 
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Tables</a></li>
                    <li class="active">Data Tables</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-users"></span> Manage User</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Destination Data</h3>
                                    <ul class="panel-controls">
                                        <li><a class="ambilData" style="cursor: pointer;" title="Tambah Data" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="fa fa-plus"></span></a></li>
                                    </ul>    
                                </div>
                                <div class="panel-body">
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Iuran</h5>
                                              </div>
                                              <div class="modal-body">
                                                <form class="form-horizontal" action="" method="POST">
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                                <input type="text" class="form-control" name="name" />
                                                            </div>                                            
                                                            <span class="help-block">Name is required</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">email</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-location-arrow"></span></span>
                                                                <input type="email" name="email" class="form-control"/>
                                                            </div>            
                                                            <span class="help-block">email is required</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">phone</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-ticket"></span></span>
                                                                <input type="number" name="phone" class="form-control" minlength="11">                                            
                                                            </div>
                                                            <span class="help-block">phone required</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">address</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <textarea  class="form-control" rows="5" name="address"></textarea>
                                                            <span class="help-block">address</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-location-arrow"></span></span>
                                                                <input type="password" minlength="8" maxlength="32" name="password1" class="form-control"/>
                                                            </div>            
                                                            <span class="help-block">Password is required</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Retype Your Password</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-location-arrow"></span></span>
                                                                <input type="password" name="password2" minlength="8" maxlength="32" class="form-control"/>
                                                            </div>            
                                                            <span class="help-block">Retype your password</span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="submit" name="submit" class="btn btn-primary" value="submit"> -->
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <input type="submit" name="submit" class="btn btn-primary" value="submit">
                                              </div>
                                            </div>
                                            
                                                    </form>
                                        </div>
                                    </div>
                                    <table class="table datatable" style="margin-top: 10px">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>phone</th>
                                                <th>Address</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            @$pagingValue = $_POST['pagingValue'];
                                            if (isset($pagingValue)) {
                                                @$batas = $pagingValue;
                                            }else{
                                                $batas = 5;
                                            }

                                            @$halaman = @$_GET['page'];
                                            if (empty($halaman)) {
                                                 $posisi = 0;
                                                 $halaman = 1;
                                             } else{
                                                $posisi = ($halaman-1) * $batas;
                                             }


                                            @$sql = mysqli_query($connect_db,"SELECT * FROM user LIMIT $posisi,$batas");
                                            @$sql3 = mysqli_query($connect_db,"SELECT * FROM user ");
                                            @$jumlahData = mysqli_num_rows($sql3);
                                            @$jumlahHalaman = ceil($jumlahData/$batas);

                                            while ($data = mysqli_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $data['name'] ?></td>
                                                <td><?php echo $data['email'] ?></td>
                                                <td><?php echo $data['phone'] ?></td>
                                                <td><?php echo $data['address'] ?></td>
                                                <td><a href="change-data-user.php?id=<?php echo $data['id_user']; ?>"><button class="btn btn-success"><i class="fa fa-info"></i>Update</button></a></td>
                                                <td><a href="delete-user.php?id=<?php echo $data['id_user'] ?>" onclick = "return confirm('Are you sure you want to delete this destination ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button></a></td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <nav aria-label="...">
                                      <ul class="pagination">
                                         <?php 
                                            $lokasimundur = $halaman - 1;
                                            $lokasimaju = $halaman + 1;
                                            if ($lokasimundur == 0) {
                                                ?>
                                                <li class="page-item disabled">
                                                  <a class="page-link" href="#" tabindex="-1" >Previous</a>
                                                </li>
                                                <?php
                                             } else{
                                                ?>
                                                <li class="page-item">
                                                  <a class="page-link" href="manage-user.php?page=<?php echo $lokasimundur ?>" tabindex="-1" >Previous</a>
                                                </li>
                                                <?php
                                             }
                                        ?>
                                        <li class="page-item"><a class="page-link" href="#"><?php echo $halaman ; ?></a></li>
                                        <?php 
                                            if ($lokasimaju > $jumlahHalaman) {
                                                ?>
                                                <li class="page-item disabled">
                                                  <a class="page-link" href="#">Next</a>
                                                </li>
                                                <?php
                                             } else{
                                                ?>
                                                <li class="page-item">
                                                  <a class="page-link" href="manage-user.php?page=<?php echo $lokasimaju ?>">Next</a>
                                                </li>
                                                <?php
                                             }
                                        ?>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
    </body>
</html>
<?php 
    @$name = $_POST['name'];
    @$email = $_POST['email'];
    @$phone = $_POST['phone'];
    @$address = $_POST['address'];
    @$password1 = $_POST['password1'];
    @$password2 = $_POST['password2'];
    @$pengacak = 'PengacakBerat709808098';
    @$passwordAcak = md5($pengacak. md5($password1));
    @$submit = $_POST['submit'];

    if ($submit) {
        if ($password1 == $password2) {
            $sql = mysqli_query($connect_db, "INSERT INTO `user` VALUES(NULL,'".$name."','".$email."','".$phone."','".$address."','".$passwordAcak."')");
            if ($sql) {
                echo "<script > alert('add user succes'); window.location = 'manage-user.php'</script>";
            }else{
                echo "<script > alert('add user failed'); window.location = 'manage-user.php'</script>";
            }
        }else{
                echo "<script > alert('Your Password Not Same');</script>";
        }
    }
?>