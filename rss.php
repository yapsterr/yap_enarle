<?php 

$rss= '<?xml version="1.0" encoding="UTF-8"?>';
$rss .= '<rss version="2.0">';
$rss .= '<channel>';

$connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820335") or die (mysqli_error($connect));
$sql = "SELECT * FROM tblanime";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));


while($record= mysqli_fetch_assoc($query)) {
    extract($record);
    
    $rss .= '<anime>';
    $rss .= '<title>' . $anime_title. '</title>';
    $rss .= '<author>' . $anime_author . '</author>';
    $rss .= '<description>' . $anime_description . '</description>';
    $rss .= '</anime>';
}
$rss .= '</channel>';
$rss .= '</rss>';

echo $rss; 
?>
