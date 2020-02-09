<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://exercise1xml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("web");
 
 ?>
<h2> Web Browsers </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $browser = $data->getElementsByTagName("browser")->item(0)->nodeValue;
   $creator= $data->getElementsByTagName("creator")->item(0)->nodeValue;
   $publish = $data->getElementsByTagName("publish")->item(0)->nodeValue;
   $language = $data->getElementsByTagName("language")->item(0)->nodeValue;
  
   echo "<li><b>Browser Name:</b> $browser
            <ul>
                <li> <b>The Creator:</b> $creator</li>
                <li> <b>Published:</b> $publish</li>
                <li> <b>Programming Language:</b> $language</li>
            </ul>
        </li>";
 }
?>
</ul>