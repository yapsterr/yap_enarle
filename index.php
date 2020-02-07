<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("https://xmlyap.herokuapp.com/rss.php");//XML page URL

       $content = $domOBJ->getElementsByTagName("Anime");
?>
       
       <h1>Anime</h1>
           
       
        <?php
              foreach($content as $data)
        {          
           $Title = $data->getElementsByTagName("title")->item(0)->nodeValue;
           $Author = $data->getElementsByTagName("author")->item(0)->nodeValue;
           $Description = $data->getElementsByTagName("description")->item(0)->nodeValue;
           echo "<ul><h2>$Title</h2>
                    <ul>
                        <li>Author: $Author </li>
                        <li>Description: $Description</li>
                        
                    </ul>
                </ul>";
              }
?>
