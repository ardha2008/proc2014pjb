<?php session_start();

/**
 * @author Ardha-PC
 * @copyright 2014
 * 
 */

require_once 'config.php';

//=======Ini fungsi untuk dapetin nama tabelnya, bersifat dinamik================
    if(!isset($sub)){
        $sub=$_GET['sub'];    
    }
    
//===============================================================================
//===============================================================================

/**
 * Library function CRUD, pakai ini soalnya biar bisa dipakai di semua tabel
 * Daripada bikin perintah sql 1 per 1, mending pake library buatan ane 
 * Batas library sampai rambu berikutnya
 * 
 * other lib : https://github.com/ardha2008 
 */

    function select($tabel){
        return mysql_query("select * from $tabel");
    }
    
    function insert($tabel,$tanggal,$pekerjaan){
        return mysql_query("insert into $tabel values ('','$tanggal','$pekerjaan','')");
    }
    
    function update($tabel,$tanggal,$pekerjaan,$file,$id){
        return mysql_query("update $tabel set Tanggal='$tanggal',nama_info='$pekerjaan',link='$file' where id_info=$id");
    }
    
    function delete($tabel,$id){
        return mysql_query("delete from $tabel where id_info='$id'");
    }
    
//============================================================================================
//============================================================================================
//===================================BATAS MINI LIBRARY=======================================




//============================================================================================    
//==================================INI PROSES UNTUK VIEW=====================================	
//============================================================================================
    
    if(isset($_GET["aksi"]) && $_GET["aksi"] == "list"){
        
        $result=select($sub); //<------ INI PAKAI MINI LIBRARY FUNGSI SELECT, parameternya funtion(nama tabel)
		
		//Deklarasi query untuk hasil query
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//lempar hasilnya
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}


//============================================================================================    
//==================================INI PROSES UNTUK TAMBAH DATA==============================	
//============================================================================================
    if(isset($_GET["aksi"]) && $_GET["aksi"] == "tambah"){
		
        $sub        =   $_REQUEST['sub'];
        
        if($sub=='users'){
            $username   = $_REQUEST['username'];
            $password   = $_REQUEST['password'];
            $level      = $_REQUEST['level'];
            $blokir      = $_REQUEST['blokir'];
            
            $result = mysql_query("insert into users (username,password,level,blokir) values ('$username','$password','$level','$blokir') ");
            $result = mysql_query("SELECT * FROM $sub WHERE username = LAST_INSERT_ID();");    
            
        }else{
            $tanggal    =   $_REQUEST['Tanggal'];
            $pekerjaan  =   $_REQUEST['nama_info'];
          //  $file       =   $_REQUEST['link'];
    		
            $result     = insert($sub,$tanggal,$pekerjaan) or die(mysql_error()); //<------ INI PAKAI MINI LIBRARY FUNGSI SELECT, parameternya funtion(nama tabel, inputan tanggal, inputan pekerjaan, nama file)
    		
    		$result = mysql_query("SELECT * FROM $sub WHERE id_info = LAST_INSERT_ID();");    
        }
        
        $row = mysql_fetch_array($result);
		
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
 
//============================================================================================    
//==================================INI PROSES UNTUK UPDATE DATA==============================	
//============================================================================================

    if(isset($_GET["aksi"]) && $_GET["aksi"] == "update"){
        
        $sub        =   $_REQUEST['sub'];
        
        if($sub=='users'){
            exit('Fitur update belum ada karena programmernya galau');
        }else{
            $tanggal    =   $_REQUEST['Tanggal'];
            $pekerjaan  =   $_REQUEST['nama_info'];
            $file       =   $_REQUEST['link'];
            $id         =   $_REQUEST['id_info'];
        
            $result = update($sub,$tanggal,$pekerjaan,$file,$id);    
        }
        
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}


//============================================================================================    
//==================================INI PROSES UNTUK HAPUS DATA===============================	
//============================================================================================    
    if(isset($_GET["aksi"]) && $_GET["aksi"] == "hapus"){
		
        if($sub=='users'){
            $username     =  $_REQUEST['username'];
            $result=mysql_query("delete from users where username='$username'");
        }else{
            $id     =  $_REQUEST['id_info'];
            
            $a=mysql_query("select * from $sub where id_info='$id'");
            
            $result =  delete($sub,$id);
            
            $b=mysql_fetch_array($a);
            
            $filename='./files/'.$b['link'];
            if(file_exists($filename)){
                unlink('./files/'.$b['link']);
            }
            
        }
        
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
    
//============================================================================================    
//==================================INI FUNGSI LOGIN==========================================	
//============================================================================================ 
    
    if(isset($_REQUEST['login'])){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        
        $query=mysql_query("select * from users where username='$username' and password='$password'");
        
        if(mysql_num_rows($query)>0){
            $hasil=mysql_fetch_array($query);
            
            $_SESSION['login']      =true;
            $_SESSION['username']   =$hasil['username'];
            $_SESSION['level']      =$hasil['level'];
            
            header("Location:./");            
        }else{
            echo 'gagal login';
        }
        
    }
    
//============================================================================================    
//==================================INI PROSES UNTUK LOGOUT===================================	
//============================================================================================    
    if(isset($_GET["aksi"]) && $_GET["aksi"] == "logout"){
		$_SESSION['login']    = false;
        unset($_SESSION['username']);
        unset($_SESSION['level']);
        header("Location:./");
	}
    
//============================================================================================    
//==================================INI PROSES UNTUK UPLOAD===================================	
//============================================================================================  
    
    if(isset($_POST['upload'])){
        $tabel=$_POST['tabel'];
        $id=$_POST['file'];
        
        $uploaddir = './files/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        $namafile=basename($_FILES['userfile']['name']);
        
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
          $query=mysql_query("update $tabel set link='$namafile' where id_info='$id'");
          $_SESSION['message']='success';
          header("Location:./?sub=$tabel");
        } else {
           echo "Upload failed";
        }
    }
    
//============================================================================================    
//==================================INI PROSES UNTUK GANTI PASSWORD===========================	
//============================================================================================  
    
    if(isset($_POST['changepassword'])){
        $username=$_SESSION['username'];
        $query=mysql("select password from users where username='$username'");
        $result=mysql_fetch_array($query);
        
        $newusername=$_POST['username'];
        
        $password=$_POST['password'];
        $password2=$_POST['password2'];
        
        if($password != $result['password']){
            $_SESSION['message']='salah_password';
            header("Location:./?change-password");
        }
        
        //$update=mysql_query("update users set password='$password2' where username='$username'");
        $update=mysql_query("update users set username='$newusername',password='$password2' where username='$username'");
        $_SESSION['username']=$newusername;
        if($update){
            $_SESSION['message']='sukses_ganti';
            header("Location:./?change-password");
        }else{
            die('error');
        }
        
    }    

?>