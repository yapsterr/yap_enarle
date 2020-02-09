<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://webportalexam.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("web");
 
 ?>
<h2> Web Browsers </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $Title = $data->getElementsByTagName("Title")->item(0)->nodeValue;
   $Actors = $data->getElementsByTagName("Actors")->item(0)->nodeValue;
   $Information = $data->getElementsByTagName("Information")->item(0)->nodeValue;
  
   echo "<li><b>Browser Name:</b> $Title
            <ul>
                <li> <b>The Creator:</b> $Actors</li>
                <li> <b>Published:</b> $Information</li>
            </ul>
        </li>";
 }
?>
</ul>
