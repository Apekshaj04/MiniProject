<?php
// require 'Records.php';
 function connectToDb(){
    return new PDO(
        'mysql:host=127.0.0.1;dbname=records_info','root',''
    );
}
function insert($pdo,$table,$data){
    $sql="INSERT INTO $table SET " ;
    foreach($data as $field=>$value){
        $fieldSQL[]="$field='$value'";
    }

    $sql.=implode(',',$fieldSQL);
    $statement=$pdo->prepare($sql);
    $statement->execute();
}
?>
<style>
    .table{
        /* background-color: burlywood; */
        background-color: bisque;
        padding: 10px;
        margin-left: 20%;
    }
    .r1{
        background-color: navy;
        color:goldenrod;
    }
  .r1:hover{
    background-color: #7975AF;
  }
    </style>
<table border="1" class="table" cellspacing="2" cellpadding="10">

    <tr class="r1">
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>DOB</th>

    </tr>
    <?php

function selectAll(PDO $pdo,string $table,string $class){
    $statement=$pdo->prepare('select * from '.$table);
    $statement->execute();
    $result= $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $state){
        echo '<tr>';
        echo '<th>'.$state['name'].'</th>' ;
        echo '<th>'.$state['email'].'</th>';
        echo'<th>'.$state['gender'].' </th>';
        echo '<th>'.$state['phone'].'</th>';
        echo '<th>'.$state['date'].'</th>';
        echo '</tr>';
        // echo '<br>';
    }
    
    
}
?>
