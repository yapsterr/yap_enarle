<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://webportalexam.herokuapp.com/rsse.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("netflix");
 
 ?>
<h2> Web Browsers </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("Title")->item(0)->nodeValue;
   $actors = $data->getElementsByTagName("Actors")->item(0)->nodeValue;
   $information = $data->getElementsByTagName("Information")->item(0)->nodeValue;
  
   echo "<li><b>Browser Name:</b> $title
            <ul>
                <li> <b>The Creator:</b> $actors</li>
                <li> <b>Published:</b> $information</li>
            </ul>
        </li>";
 }
?>
</ul>
