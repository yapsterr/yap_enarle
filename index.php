 <?php
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$prod = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
 ?>
 <head>
    <link rel="stylesheet" type="text/css" href="rss.css">
  </head>
  <body>
  
  <div id="container">
        <div id="header">
			  <div class="nav-menu">
				<li style="float:right" <?php if($load == 'newyork') {echo 'class="active"';} ?>><a href="index.php?page=newyork">Science News</a></li>
				<li style="float:right" <?php if($load == 'break') {echo 'class="active"';} ?>><a href="index.php?page=break">Breaking News</a></li>
				<li style="float:right" <?php if($load == 'education') {echo 'class="active"';} ?>><a href="index.php?page=education">Education News</a></li>
			  </div>
		</div>
		<div id="content">
          <?php
          switch ($load) {
            case 'newyork':
                require_once('newyork.php');
                break;
			case 'break':
                require_once('break.php');
                break;
            default:
              require_once('educ.php');
              break;
          }
           ?>
		</div>
  
    </div>
  </body>