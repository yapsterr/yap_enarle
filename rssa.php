<?php 

$rssa= '<?xml version="1.0" encoding="UTF-8"?>';
$rssa .= '<rss version="2.0">';
$rssa .= '<channel>';

$connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820335") or die (mysqli_error($connect));
$sql = "SELECT * FROM tblnetflix";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));


while($r= mysqli_fetch_assoc($query)) {
    extract($r);
    
    $rssa .= '<Movie>';
    $rssa .= '<Title>' . $title. '</Title>';
    $rssa .= '<Actors>' . $actors . '</Actors>';
    $rssa .= '<Detail>' . $detail . '</Detail>';
    $rssa .= '</Movie>';
}
$rssa .= '</channel>';
$rssa .= '</rss>';

echo $rssa; 
?>