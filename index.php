<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlyap.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("anime");
 
 ?>
<h2> Anime Informations </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $anime_title = $data->getElementsByTagName("anime_title")->item(0)->nodeValue;
   $anime_author = $data->getElementsByTagName("anime_author")->item(0)->nodeValue;
   $anime_description = $data->getElementsByTagName("anime_description")->item(0)->nodeValue;
  
   echo "<li><b>Title of Anime:</b> $anime_title
            <ul>
                <li> <b>The Author:</b> $anime_author</li>
                <li> <b>Descriptions:</b> $anime_description</li>
            </ul>
        </li>";
 }
?>
</ul>
