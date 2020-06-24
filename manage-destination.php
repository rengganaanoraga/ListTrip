<?php
    session_start();
    if (@$_SESSION['login']==false) { 
        ?>
        <script type="text/javascript">
            alert('anda belum login');
            window.location = "index.php";
        </script>
        <?php
      }
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
                            <li ><a href="manage-user.php"><span class="fa fa-users"></span> User</a></li>
                            <li class="active"><a href="manage-destination.php"><span class="fa fa-plane"></span> Destination</a></li>                           
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
                    <!-- TOGGLE NAVIGATION -->
                    <!-- END TOGGLE NAVIGATION -->
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
                    <h2><span class="fa fa-plane"></span> Manage Destination</h2>
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
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Destination</h5>
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
                                                        <label class="col-md-3 col-xs-12 control-label">location</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-location-arrow"></span></span>
                                                                <input type="text" name="location" class="form-control"/>
                                                            </div>            
                                                            <span class="help-block">location is required</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">price</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-ticket"></span></span>
                                                                <input type="number" name="price" class="form-control" minlength="11">                                            
                                                            </div>
                                                            <span class="help-block">price required</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">description</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <textarea  class="form-control" rows="5" name="description"></textarea>
                                                            <span class="help-block">description</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">                                        
                                                        <label class="col-md-3 col-xs-12 control-label">Photo</label>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><span class="fa fa-location-arrow"></span></span>
                                                                <input type="text"  name="photo" class="form-control"/>
                                                            </div>            
                                                            <span class="help-block">Photo</span>
                                                        </div>
                                                    </div>
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
                                                <th>Photo</th>
                                                <th>Location</th>
                                                <th>Ticket</th>
                                                <th>Description</th>
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


                                            @$sql = mysqli_query($connect_db,"SELECT * FROM destination LIMIT $posisi,$batas");
                                            @$sql3 = mysqli_query($connect_db,"SELECT * FROM destination ");
                                            @$jumlahData = mysqli_num_rows($sql3);
                                            @$jumlahHalaman = ceil($jumlahData/$batas);

                                            while ($data = mysqli_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $data['name'] ?></td>
                                                <td><img src="<?php echo $data['photo']; ?>"style="width: 400px;"></td>
                                                <td><?php echo $data['location'] ?></td>
                                                <td><?php echo $data['ticket'] ?></td>
                                                <td><?php echo $data['description'] ?></td>
                                                <td><a href="change-data-destination.php?id=<?php echo $data['id'] ?>"><button class="btn btn-success"><i class="fa fa-info"></i>Update</button></a></td>
                                                <td><a href="delete-destination.php?id=<?php echo $data['id'] ?>" onclick = "return confirm('Are you sure you want to delete this destination ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</button></a></td>
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
                                                  <a class="page-link" href="manage-destination.php?page=<?php echo $lokasimundur ?>" tabindex="-1" >Previous</a>
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
                                                  <a class="page-link" href="manage-destination.php?page=<?php echo $lokasimaju ?>">Next</a>
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
    @$location = $_POST['location'];
    @$price = $_POST['price'];
    @$description = $_POST['description'];
    @$photo = $_POST['photo'];
    @$submit = $_POST['submit'];

    if ($submit) {
        $sql = mysqli_query($connect_db, "INSERT INTO destination VALUES(NULL,'$name','$location','$price','$description','$photo','','')");
        if ($sql) {
            echo "
        <script > alert('add destination succes'); window.location = 'manage-destination.php'</script>";
        }
    }
?>