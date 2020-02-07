<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://jubelagxml.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("ballpen");
 
 ?>
<h2> Ballpens </h2>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
   $price = $data->getElementsByTagName("price")->item(0)->nodeValue;
   $color = $data->getElementsByTagName("color")->item(0)->nodeValue;
   $supplier = $data->getElementsByTagName("supplier")->item(0)->nodeValue;
  
   echo "<li><b>Ballpen:</b> $name
            <ul>
                <li> <b>Price:</b> $price</li>
                <li> <b>Color:</b> $color</li>
                <li> <b>Supplier:</b> $supplier</li>
            </ul>
        </li>";
 }
?>
</ul>