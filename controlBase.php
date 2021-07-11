<?php

    $conn = new mysqli('localhost', 'root', '', 'robot_base');
    if($conn){
        echo 'Successfully Connected <br>';
    }else{
        echo 'Connection Failure <br>';
    }


    if(isset($_POST['backward'])) {
        $backward = $_POST['backward'];
        $query = "INSERT INTO `direction`(`sstop`, `rright`, `lleft`, `foward`, `backward`) VALUES ('','','','','$backward')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {

                $get_news_sql = "SELECT DISTINCT backward FROM `direction`";
                $get_news_sql = mysqli_query($conn, $get_news_sql);
                while ($row = mysqli_fetch_array($get_news_sql)) {
              	echo $row['backward']; }
            } 
            
            else {
                echo 'Failed Inserting Value';
            }
    }
    
    elseif(isset($_POST['left'])) {
        $left = $_POST['left'];
        $query = "INSERT INTO `direction`(`sstop`, `rright`, `lleft`, `foward`, `backward`) VALUES ('','','$left','','')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {

                $get_news_sql = "SELECT DISTINCT lleft FROM `direction`";
                $get_news_sql = mysqli_query($conn, $get_news_sql);
                while ($row = mysqli_fetch_array($get_news_sql)) {
              	echo $row['lleft']; }
            } 
            
            else {
                echo 'Failed Inserting Value';
            }
    } 
    
    elseif(isset($_POST['stop'])) {
        $stop = $_POST["stop"];
        $query = "INSERT INTO `direction`(`sstop`, `rright`, `lleft`, `foward`, `backward`) VALUES ('$stop','','','','')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {

                $get_news_sql = "SELECT DISTINCT sstop FROM `direction`";
                $get_news_sql = mysqli_query($conn, $get_news_sql);
                while ($row = mysqli_fetch_array($get_news_sql)) {
              	echo $row['sstop']; }
            } 
            
            else {
                echo 'Failed Inserting Value';
            }
    } 
    elseif(isset($_POST['right'])) {
        $right = $_POST["right"];
        $query = "INSERT INTO `direction`(`sstop`, `rright`, `lleft`, `foward`, `backward`) VALUES ('','$right','','','')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {

                $get_news_sql = "SELECT DISTINCT rright FROM `direction`";
                $get_news_sql = mysqli_query($conn, $get_news_sql);
                while ($row = mysqli_fetch_array($get_news_sql)) {
              	echo $row['rright']; }
            } 
            
            else {
                echo 'Failed Inserting Value';
            }
    } 
    
    elseif(isset($_POST['forward'])) {
        $forward = $_POST['forward'];
        $query = "INSERT INTO `direction`(`sstop`, `rright`, `lleft`, `foward`, `backward`) VALUES ('','','','$forward','')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {

                $get_news_sql = "SELECT DISTINCT foward FROM `direction`";
                $get_news_sql = mysqli_query($conn, $get_news_sql);
                while ($row = mysqli_fetch_array($get_news_sql)) {
              	echo $row['foward']; }
            } 
            
            else {
                echo 'Failed Inserting Value';
            }
    }

    
?>