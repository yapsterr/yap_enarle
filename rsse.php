<?php 

$rsse= '<?xml version="1.0" encoding="UTF-8"?>';
$rsse .= '<rss version="2.0">';
$rsse .= '<channel>';

$connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820335") or die (mysqli_error($connect));
$sql = "SELECT * FROM netflix";
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));


while($record= mysqli_fetch_assoc($query)) {
    extract($record);
    
    $rsse .= '<netflix>';
    $rsse .= '<title>' . $title. '</title>';
    $rsse .= '<actors>' . $actors . '</actors>';
    $rsse .= '<information>' . $information . '</information>';
    $rsse .= '</netflix>';
}
$rsse .= '</channel>';
$rsse .= '</rss>';

echo $rss; 
?>
