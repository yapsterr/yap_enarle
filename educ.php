<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.nasa.gov/rss/dyn/educationnews.rss");  
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
  <br><br><br><br><h1>EDUCATION NEWS</h1><br><br>

    <?php
 foreach( $content as $data )
 { ?>
 


<?php
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $pubDate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
   echo "
   <div class = 'links'>
   <ul>
            <br><br><br><h2><a href = '$link' > $title </a></h2>
            <ul>
				<p>$description</p>
				<p>$pubDate</p>
            </ul>
    </ul>
	</div>
            ";
  ?>
<?php
 }
?>