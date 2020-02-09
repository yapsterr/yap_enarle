<?php 

$rss= '<?xml version="1.0" encoding="UTF-8"?>';
$rss .= '<rss version="2.0">';
$rss .= '<channel>';

$connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820335") or die (mysqli_error($connect));
$sql = "SELECT * FROM tblnetflix";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));


while($r= mysqli_fetch_assoc($query)) {
    extract($r);
    
    $rss .= '<Movie>';
    $rss .= '<Title>' . $title. '</Title>';
    $rss .= '<Actors>' . $actors . '</Actors>';
    $rss .= '<Detail>' . $detail . '</Detail>';
    $rss .= '</Movie>';
}
$rss .= '</channel>';
$rss .= '</rss>';

echo $rss; 
?>
