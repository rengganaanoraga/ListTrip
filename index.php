<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
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
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div class="login-title"><strong>ListTrip</strong>-App</div>
                    <form class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input  name="Username" type="text" class="form-control" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input name="password" type="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                        	<input type="submit" name="submit" class="btn btn-info btn-block" value="login">
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                   &copy; 2020 ListTrip-App
                </div>
            </div>
            
        </div>
        
    </body>
</html>
<?php 
@$Username = $_POST['Username'];
@$password = $_POST['password'];
@$submit = $_POST['submit'];
if ($submit) {
	if ($Username=='admin'&&$password=='admin') {
		$_SESSION['login'] = true;
		?>
		<script type="text/javascript">
			alert('Berhasil');
			window.location = 'dashboard.php';
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert('username atau password salah!');
		</script>
		<?PHP
	}
}
?>