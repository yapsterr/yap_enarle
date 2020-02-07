<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("https://xmlyap.herokuapp.com/index.php");//XML page URL

       $content = $domOBJ->getElementsByTagName("Anime");
?>
       
       <h1>Anime</h1>
           
       
        <?php
              foreach($content as $data)
        {          
           $Title = $data->getElementsByTagName("anime_title")->item(0)->nodeValue;
           $Author = $data->getElementsByTagName("anime_author")->item(0)->nodeValue;
           $Description = $data->getElementsByTagName("anime_description")->item(0)->nodeValue;
           echo "<ul><h2>$Title</h2>
                    <ul>
                        <li>Author: $Author </li>
                        <li>Description: $Description</li>
                        
                    </ul>
                </ul>";
              }
?>
