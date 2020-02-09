<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://webportalexam.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("netflix");
 
 ?>
<h2> Web Browsers </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $actors = $data->getElementsByTagName("actors")->item(0)->nodeValue;
   $detail = $data->getElementsByTagName("detail")->item(0)->nodeValue;
  
   echo "<li><b>Browser Name:</b> $title
            <ul>
                <li> <b>The Creator:</b> $actors</li>
                <li> <b>Published:</b> $detail</li>
            </ul>
        </li>";
 }
?>
</ul>
