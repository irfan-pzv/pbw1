<?php
   include "connection.php";
   session_start();
   
   if(!$_SESSION['isLoggedIn'])
   {
       header("Location = login.php");
   }
   $id = $_POST['id'];
   $tahun = $_POST['tahun'];
   $judul = $_POST['judul'];

   "UPDATE buku SET judul = ?, tahun = ?, updated_by = ?, uodated_at = ? WHERE id=?"

   execute([
        judul,tahun,session[userid],date,id
   ]);