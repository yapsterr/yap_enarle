<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://webportalexam.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("netflix");
 
 ?>
<h1> The Best Rom-Coms Netflix Has to Offer </h1>
<p> Rom-coms can get a bad rep. There's nothing wrong with a light-hearted film with a strong female lead and
an emotional arc—we all need a good rom-com for self-care purposes sometimes!—but it's true that a poorly made rom-com can veer into gimmicky territory. 
So it's a good thing that we're here to pick out the best ones that also happen to be on Netflix right now.
Even the biggest rom-com critics can't argue with these picks; they're a shot of pure joy and will leave you feeling that maybe, just maybe, everything will work out in the end.
All you need is a Netflix subscription. And probably a small country's worth of junk food.
</p>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $id = $data->getElementsByTagName("id")->item(0)->nodeValue;
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $actor = $data->getElementsByTagName("actor")->item(0)->nodeValue;
   $about = $data->getElementsByTagName("about")->item(0)->nodeValue;
  
   echo "<h2><b>Number:</b> $id</h2>
            <ul>
                <li> <b>Title of the Movie</b> $title</li>
                <li> <b>Starring</b> $actor</li>
                <li> <b>Summary</b> $about</li>
            </ul>
        ";
 }
?>
</ul>
