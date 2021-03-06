<?php error_reporting(0);
    session_start();
    require_once 'config.php';

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
            
            
            <?php if($_SESSION['login']==true){?>
            <!-----------------------BATAS EXTERNAL JQUERY--------------------->
            <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
        	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
        	
        	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
            <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
            <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
            <!-----------------------BATAS EXTERNAL JQUERY--------------------->
                
            <?php }?>
            
            <?php if($_SESSION['login']==false){?>
               <link rel="stylesheet" type="text/css" href="./media/css/jquery.dataTables.css">
		<script type="text/javascript" language="javascript" src="./media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="./media/js/jquery.dataTables.js"></script>
                
                <script type="text/javascript" language="javascript" class="init">
                        $(document).ready(function() {
            	   $('#example').dataTable();
                    } );
            
            
            	</script>
                
            <?php } ?>
            
        </head>

	<body>
<div class="container">
	<div class="row clearfix">
    
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="./">PROCUREMENT</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                        <!--
                        <?php if(isset($_SESSION['login']) && $_SESSION['login']==true){?>
                            <li><a href="#"><span class="glyphicon glyphicon-file"></span> MANAGE FILES</a></li>
                        <?php } ?>-->
                            
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
						<li><a href="./?change-password"><span class="glyphicon glyphicon-cog"></span> CHANGE PASSWORD</a></li>
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
<!--
=========================================================================================================
====================================JIKA LOGIN INI TAMPIL================================================
=========================================================================================================
-->            
             <?php if(isset($_SESSION['login']) && $_SESSION['login']==true){?>
                <div class="col-md-4 column">       
                <!--
                        <div class="form-group has-success has-feedback">
                          <input type="text" class="form-control" placeholder="SEARCH ..." />
                        </div>-->
        			<div class="list-group">
        				 <a href="./" class="list-group-item active">Home</a>
                         
                         <?php if($_SESSION['level']=='kantorpusat' || $_SESSION['level']=='su' ){?>
                            <a href="?sub=kantorpusat" class="list-group-item">Kantor Pusat</a>
                         <?php } ?>
                               
                         <?php if($_SESSION['level']=='brantas' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'  ){?>
                            <a href="?sub=brantas" class="list-group-item">Brantas</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='cirata' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'  ){?>
                            <a href="?sub=cirata" class="list-group-item">Cirata</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='gresik' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'  ){?>
                            <a href="?sub=gresik" class="list-group-item">Gresik</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='muarakarang' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'  ){?>
                            <a href="?sub=muarakarang" class="list-group-item">Muara Karang</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='muaratawar' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'){?>
                            <a href="?sub=muaratawar" class="list-group-item">Muara Tawar</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='paiton' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'){?>
                            <a href="?sub=paiton" class="list-group-item">Paiton</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='upharbarat' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'){?>
                            <a href="?sub=upharbarat" class="list-group-item">UPHAR Barat</a>
                         <?php } ?>
                               
                         <?php if($_SESSION['level']=='uphartimur' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'){?>
                            <a href="?sub=uphartimur" class="list-group-item">UPHAR Timur</a>
                         <?php } ?>
                         
                         
                         <?php if($_SESSION['level']=='ubjomrembang' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'  ){?>
                            <a href="?sub=ubjomrembang" class="list-group-item">UBJOM REMBANG</a>
                         <?php } ?>
                         
                         
                         <?php if($_SESSION['level']=='upjomindramayu' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'  ){?>
                            <a href="?sub=upjomindramayu" class="list-group-item">UPJOM Indramayu</a>
                         <?php } ?>      
                         
                                                  
                         <?php if($_SESSION['level']=='upjompacitan' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'  ){?>
                            <a href="?sub=upjompacitan" class="list-group-item">UPJOM Pacitan</a>
                         <?php } ?>      
                         
                                                  
                         <?php if($_SESSION['level']=='upjompaiton' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'){?>
                            <a href="?sub=upjompaiton" class="list-group-item">UPJOM Paiton</a>
                         <?php } ?>      
                         
                         <?php if($_SESSION['level']=='ubjomtanjungawarawar' || $_SESSION['level']=='su' || $_SESSION['level']=='kantorpusat'){?>
                            <a href="?sub=ubjomtanjungawarawar" class="list-group-item">UPJOM Tj. Awar-awar</a>
                         <?php } ?>
                         
                         <?php if($_SESSION['level']=='bpwc' || $_SESSION['level']=='su'|| $_SESSION['level']=='kantorpusat' ){?>
                            <a href="?sub=bpwc" class="list-group-item">BPWC</a>
                         <?php } ?>      
                               
                    </div>
		
                </div>
                
                <div class="col-md-8 column">
                    
                    <?php if(isset($_SESSION['message']) && $_SESSION['message']=='success'){?>
                        <div class="alert alert-success alert-dismissable">
                            <strong>Sukses upload</strong>
                        </div>
                    <?php unset($_SESSION['message']); } ?>
                    
                    <?php if(isset($_GET['change-password'])){?>
                    
                                <?php if($_SESSION['message']=='salah_password'){?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <strong>Password lama tidak cocok</strong>
                                    </div>
                                <?php $_SESSION['message']=''; } ?>
                                
                                <?php if($_SESSION['message']=='sukses_ganti'){?>
                                    <div class="alert alert-success alert-dismissable">
                                        <strong>Berhasil mengganti password</strong>
                                    </div>
                                <?php $_SESSION['message']=''; } ?>
                            
                        <fieldset>
                            <legend>Change Password</legend>
                            <form method="post" action="proses.php">
                            
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="username" required="" value="<?php echo $_SESSION['username'] ?>" placeholder="Password Lama" />
                                </div>
                                
                                <div class="col-lg-4">
                                    <input type="password" class="form-control" name="password" placeholder="Password Lama" />
                                </div>
                                
                                <div class="col-lg-4"> 
                                    <input type="password" class="form-control" name="password2" placeholder="Password Baru" />
                                </div>
                                
                                <div class="clearfix"></div><br />
                                <button class="btn btn-primary" name="changepassword">SUBMIT</button>
                                
                            </form>
                            
                        </fieldset>
                        <hr />
                    <?php } ?>
                    
                    <?php if(!isset($_GET['sub'])){?>
                        <div class="alert alert-success alert-dismissable">
                            <strong>Selamat datang, anda login sebagai <strong><ins><?php echo $_SESSION['username'] ?></ins></strong> </strong>
                        </div>
                    <?php }else{?>
                        <div id="ini awal"> 
                        <div class="alert alert-info alert-dismissable">
                                 <strong>DATA <?php echo strtoupper($_GET['sub']); ?></strong>
        			     </div>
                         <a href="./upload.php?sub=<?php echo $_GET['sub'] ?>" class="btn btn-default"><span class="glyphicon glyphicon-upload"></span> UPLOAD </a>
                         <a href="./export.php?sub=<?php echo $_GET['sub'] ?>" class="btn btn-default"><span class="glyphicon glyphicon-export"></span> Export as XLS </a>
                         <hr />
                         <div id="dilempar"></div>
                         <script type="text/javascript">
                
                		$(document).ready(function () {
                
                		    //Prepare jTable
                			$('#dilempar').jtable({
                				title: 'Procurement',
                                paging:true,                                
                				actions: {
                					listAction: 'proses.php?aksi=list&sub=<?php echo $_GET['sub']; ?>',
                					createAction: 'proses.php?aksi=tambah&sub=<?php echo $_GET['sub']; ?>',
                					updateAction: 'proses.php?aksi=update&sub=<?php echo $_GET['sub']; ?>',
                					deleteAction: 'proses.php?aksi=hapus&sub=<?php echo $_GET['sub']; ?>'
                				},
                                <?php if($_GET['sub']=='users'){?>
                                    fields: {
                					username: {
         					           key: true,
                						create: true,
          						        edit: true,
                						list: true,
		          				        title: 'Username',
                						width: '50%',
                                        type: 'textarea'
                					},
                                    
                                    password: {
                                        title: 'Password', 
                                        edit : true,
                                        list : false,
                                        type : 'password'
                                    },
                                    
                					level: {
                						title: 'level',
                						width: '40%',
                                        options: { 
                                            'bpwc': 'bpwc', 
                                            'brantas': 'brantas', 
                                            'cirata': 'cirata',
                                            'gresik': 'gresik', 
                                            'kantorpusat': 'kantorpusat', 
                                            'muarakarang': 'muarakarang',
                                            'muaratawar': 'muaratawar', 
                                            'paiton': 'paiton', 
                                            'ubjomrembang': 'ubjomrembang', 
                                            'ubjomtanjungwarawar': 'ubjomtanjungwarawar',
                                            'upharbarat': 'upharbarat', 
                                            'uphartimur': 'uphartimur', 
                                            'upjomindramayu': 'upjomindramayu',
                                            'upjompacitan': 'upjompacitan', 
                                            'upjompaiton': 'upjompaiton', 
                                            'su': 'SUPERADMIN',
                                            }
                                        //type : 'textarea'
                					},
                                    
                                    blokir: {
                                        title  : 'Status',
                                        width  : '40%',
                                        type   : 'radiobutton',
                                        options:{
                                            'N' : 'Aktif',
                                            'Y' : 'Blokir'
                                        }
                                    }
                                    
                				}   
                                <?php }else{?>
                                   fields: {
                					id_info: {
                						key: true,
                						create: false,
                						edit: false,
                						list: false
                					},
                					Tanggal: {
                						title: 'Tanggal ',
                						width: '30%',
                                        type: 'date'
                					},
                					nama_info: {
                						title: 'Pekerjaan',
                						width: '40%',
                                        type : 'textarea'
                					},
                                    
                                    //link: {
                                    //    create:false,
                                    //    list:true,
                                        //type : 'textarea'
                					//},
                				},
                                
                                //formCreated: function (event, data) {
                                //    data.form.attr('enctype','multipart/form-data');
                                //}
                            
                                <?php } ?>
                                
                			});
                
                			//Load person list from server
                			$('#dilempar').jtable('load');
                
                		});
                
                	</script>				
				</div>
                    <?php } ?>
                </div>
             <?php } ?> 
<!--
=========================================================================================================
====================================JIKA LOGIN INI TAMPIL SAMPE SINI================================================
=========================================================================================================
-->            
                <?php if($_SESSION['login']==false){?>      
                    
               <div class="col-lg-4">
                    <div class="list-group">
        				 <a href="./" class="list-group-item active">Home</a>
                            <a href="?sub=kantorpusat" class="list-group-item">Kantor Pusat</a>
                            <a href="?sub=brantas" class="list-group-item">Brantas</a>
                            <a href="?sub=cirata" class="list-group-item">Cirata</a>
                            <a href="?sub=gresik" class="list-group-item">Gresik</a>
                            <a href="?sub=muarakarang" class="list-group-item">Muara Karang</a>
                            <a href="?sub=muaratawar" class="list-group-item">Muara Tawar</a>
                            <a href="?sub=paiton" class="list-group-item">Paiton</a>
                            <a href="?sub=upharbarat" class="list-group-item">UPHAR Barat</a>
                            <a href="?sub=uphartimur" class="list-group-item">UPHAR Timur</a>
                            <a href="?sub=ubjomrembang" class="list-group-item">UBJOM REMBANG</a>
                            <a href="?sub=upjomindramayu" class="list-group-item">UPJOM Indramayu</a>
                            <a href="?sub=upjompacitan" class="list-group-item">UPJOM Pacitan</a>
                            <a href="?sub=upjompaiton" class="list-group-item">UPJOM Paiton</a>
                            <a href="?sub=ubjomtanjungawarawar" class="list-group-item">UPJOM Tj. Awar-awar</a>
                            <a href="?sub=bpwc" class="list-group-item">BPWC</a>
                    </div>
               </div>
               
               <div class="col-lg-8">
               <?php 
                    if(isset($_GET['sub'])){
                        $sub=$_GET['sub'];
                        $data=mysql_query("select * from $sub order by id_info");?>     
                        
                        <table id="example" class="display">
                            <thead>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Info</th>
                            </thead>
                        
                            <tbody>
                                <?php $i=1;while($result=mysql_fetch_array($data)){?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $result['Tanggal']; ?></td>
                                        <td><a href="./files/<?php echo $result['link']; ?>"><?php echo $result['nama_info']; ?></a></td>
                                    </tr>
                                <?php $i++; } ?>
                            </tbody>
                        
                        </table>
                    <?php }?>
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