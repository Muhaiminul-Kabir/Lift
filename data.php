<?php

//phpmyadmin conn
        $host = '127.0.0.1';
        $user = 'root';
        $password = '';
        $db = 'lift';
        $link = mysqli_connect($host, $user, $password, $db);
//sql
        $sqlv = "SELECT * FROM product where type='vegi'";
        $sqlf ="SELECT * FROM product where type='fruit'";
        $sqls = "SELECT * FROM product where type='spice'";
        $sqlo = "SELECT * FROM `product` where type = 'other';";

        $sqlfav = "SELECT * FROM `favourites` where user = ;";





//rsult fetch
        $resultv = mysqli_query($link, $sqlv);
        $resultf = mysqli_query($link, $sqlf);
        $results = mysqli_query($link, $sqls);
        $resulto = mysqli_query($link, $sqlo);
//noofdata
        $noOfDatav = mysqli_num_rows($resultv);
        $noOfDataf = mysqli_num_rows($resultf);
        $noOfDatas = mysqli_num_rows($results);
        $noOfDatao = mysqli_num_rows($resulto);
        
       /* while ($row = mysqli_fetch_array($result)) {
            print_r(json_encode($row));
        }*/
?>