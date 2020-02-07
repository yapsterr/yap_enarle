<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("https://xmlyap.herokuapp.com/rss.php");//XML page URL

       $content = $domOBJ->getElementsByTagName("Anime");
?>
       
       <h1>Anime</h1>
           
       
        <?php
              foreach($content as $data)
        {          
           $animeT = $data->getElementsByTagName("anime_title")->item(0)->nodeValue;
           $animeA = $data->getElementsByTagName("anime_author")->item(0)->nodeValue;
           $animeD = $data->getElementsByTagName("anime_description")->item(0)->nodeValue;
           echo "<ul><h2>$animeT</h2>
                    <ul>
                        <li>Author: $animeA </li>
                        <li>Description: $animeD</li>
                        
                    </ul>
                </ul>";
              }
?>
