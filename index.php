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
   $title = $data->getElementsByTagName("anime_title")->item(0)->nodeValue;
   $author = $data->getElementsByTagName("anime_author")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("anime_description")->item(0)->nodeValue;
   
   echo "<li><b>Title:</b> $title
            <ul>
                <li> <b>Author:</b> $author</li>
                <li> <b>Description:</b> $description</li>
            </ul>
        </li>";
 }
?>
</ul>
