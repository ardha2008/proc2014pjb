<?php  session_start();

    require_once 'config.php';
    
    $tabel=$_GET['sub'];
    $query=mysql_query("select * from $tabel order by id_info");
?>

<html data-ng-app="">
        <head>
          <meta charset="utf-8"/>
          <title>Management Procurement</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          
            <link href="css/style.css" rel="stylesheet"/>
        	<link href="css/bootstrap.min.css" rel="stylesheet"/>
          
        	<script type="text/javascript" src="js/jquery.min.js"></script>
        	<script type="text/javascript" src="js/bootstrap.min.js"></script>
        	<script type="text/javascript" src="js/scripts.js"></script>
            
            <script type="text/javascript" src="js/angular.js"></script>
            
            <!-----------------------BATAS EXTERNAL JQUERY--------------------->
            <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
        	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
        	
        	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
            <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
            <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
            <!-----------------------BATAS EXTERNAL JQUERY--------------------->
            
        </head>

	<body>
<div class="container">
	<div class="row clearfix">
    
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">PROCUREMENT</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                        
                        <?php if(isset($_SESSION['login']) && $_SESSION['login']==true){?>
                            <li><a href="#"><span class="glyphicon glyphicon-file"></span> MANAGE FILES</a></li>
                        <?php } ?>
                            
                        <?php if(isset($_SESSION['level']) && $_SESSION['level']=='su'){?>
                            <li><a href="./?sub=users"><span class="glyphicon glyphicon-user"></span> MANAGE USERS</a></li>    
                        <?php } ?>
                            
                        <?php if(!isset($_SESSION['login']) || $_SESSION['login']==false){?>
                        <div class="navbar-form navbar-left" role="search">
			                 <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#muncul_login"><span class="glyphicon glyphicon-log-in"></span> LOGIN</button>
                        </div>
                        <?php } ?>
                    </ul>
                    
                    <?php if(isset($_SESSION['login']) && $_SESSION['login']==true){?>
                    <ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-cog"></span> CHANGE PASSWORD</a></li>
                        <li><a href="proses.php?aksi=logout"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
					</ul>
                    <?php } ?>  
				</div>
			</nav>
            
                <div class="modal fade" id="muncul_login" tabindex="-1" role="dialog" aria-labelledby="LOGIN" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">LOGIN</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" role="form" method="post" action="proses.php">                          
                              <div class="form-group">
                                <label class="col-sm-2 control-label"><span class="glyphicon glyphicon-user"></span></label>
                                <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" placeholder="Username"/>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-2 control-label"><span class="glyphicon glyphicon-lock"></span></label>
                                <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control" placeholder="Password"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" name="login"><span class="glyphicon glyphicon-log-in"></span> LOGIN</button>
                          </div>
                        
                        </form>
                    </div>
                  </div>
                </div>
			
            <div class="row clearfix">
            
             <?php if(isset($_SESSION['login']) && $_SESSION['login']==true){?>
                <div class="col-md-4 column">       
                <!--
                        <div class="form-group has-success has-feedback">
                          <input type="text" class="form-control" placeholder="SEARCH ..." />
                        </div>-->
        			<div class="list-group">
        				 <a href="./" class="list-group-item active">Home</a>
                         
                         <?php if($_SESSION['level']=='kantorpusat' || $_SESSION['level']=='su'){?>
                            <a href="?sub=kantorpusat" class="list-group-item">Kantor Pusat</a>
                         <?php } ?>
                               
                         <?php if($_SESSION['level']=='brantas' || $_SESSION['level']=='su'){?>
                            <a href="?sub=brantas" class="list-group-item">Brantas</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='cirata' || $_SESSION['level']=='su'){?>
                            <a href="?sub=cirata" class="list-group-item">Cirata</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='gresik' || $_SESSION['level']=='su'){?>
                            <a href="?sub=gresik" class="list-group-item">Gresik</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='muarakarang' || $_SESSION['level']=='su'){?>
                            <a href="?sub=muarakarang" class="list-group-item">Muara Karang</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='muaratawar' || $_SESSION['level']=='su'){?>
                            <a href="?sub=muaratawar" class="list-group-item">Muara Tawar</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='paiton' || $_SESSION['level']=='su'){?>
                            <a href="?sub=paiton" class="list-group-item">Paiton</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='upharbarat' || $_SESSION['level']=='su'){?>
                            <a href="?sub=upharbarat" class="list-group-item">UPHAR Barat</a>
                         <?php } ?>
                               
                         <?php if($_SESSION['level']=='uphartimur' || $_SESSION['level']=='su'){?>
                            <a href="?sub=uphartimur" class="list-group-item">UPHAR Timur</a>
                         <?php } ?>
                         
                         
                         <?php if($_SESSION['level']=='ubjomrembang' || $_SESSION['level']=='su'){?>
                            <a href="?sub=ubjomrembang" class="list-group-item">UBJOM REMBANG</a>
                         <?php } ?>
                         
                         
                         <?php if($_SESSION['level']=='upjomindramayu' || $_SESSION['level']=='su'){?>
                            <a href="?sub=upjomindramayu" class="list-group-item">UPJOM Indramayu</a>
                         <?php } ?>      
                         
                                                  
                         <?php if($_SESSION['level']=='upjompacitan' || $_SESSION['level']=='su'){?>
                            <a href="?sub=upjompacitan" class="list-group-item">UPJOM Pacitan</a>
                         <?php } ?>      
                         
                                                  
                         <?php if($_SESSION['level']=='upjompaiton' || $_SESSION['level']=='su'){?>
                            <a href="?sub=upjompaiton" class="list-group-item">UPJOM Paiton</a>
                         <?php } ?>      
                         
                         <?php if($_SESSION['level']=='ubjomtanjungawarawar' || $_SESSION['level']=='su'){?>
                            <a href="?sub=ubjomtanjungawarawar" class="list-group-item">UPJOM Tj. Awar-awar</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='bpwc' || $_SESSION['level']=='su'){?>
                            <a href="?sub=bpwc" class="list-group-item">BPWC</a>
                         <?php } ?>      
                               
                    </div>
		
                </div>
                
                <div class="col-md-8 column">
                    
                    
                        <div class="alert alert-success alert-dismissable">
                            <strong>Selamat datang Ardha</strong>
                        </div>
                    
                        <div id="ini awal"> 
                         		
                           <form enctype="multipart/form-data" action="proses.php" method="POST">
                                <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                    <input type="hidden" name="tabel" value="<?php echo $_GET['sub']; ?>" />
                                    <label>Nama Info</label>
                                    <select name="file" class="form-control">
                                        <?php while($result=mysql_fetch_array($query)){?>
                                            <option value="<?php echo $result['id_info'] ?>"><?php echo $result['nama_info'];?></option>
                                        <?php } ?>
                                    </select>
                                    <label>File </label>
                                    <input name="userfile" class="form-control" type="file" />
                                <hr />
                                <button class="btn btn-success" name="upload"><span class="glyphicon glyphicon-upload"></span> UPLOAD</button>
                            </form>		
				        </div>
                    
                </div>
             <?php } ?>   
            </div>
		</div>
        
        <hr />
        
        <div class="col-lg-12">
            <footer>
                <p>&COPY; 2014 , Lisensi bebas, boleh di tukar tambah</p>
            </footer>
        </div>
	</div>
</div>
</body>
</html>