<?php 
  //var_dump($GLOBALS);
  $navLinks = ["Home", "My Gallery", "About Me"];
  $PHPName = basename($_SERVER['SCRIPT_NAME'], ".php");

  function PHPNameToPageName($PHPName) {
    switch ($PHPName) {
      case 'index':
        $PageName = 'Home';
        break;
      case 'aboutme':
        $PageName = 'About Me';
        break;
      case 'mygallery':
        $PageName = 'My Gallery';
        break;
    }
    return $PageName;
  }

  function pageNameToPHPName($pageName) {
    switch ($pageName) {
      case 'Home':
        $PHPName = 'index';
        break;
      case 'About Me':
        $PHPName = 'aboutme';
        break;
      case 'My Gallery':
        $PHPName = 'mygallery';
        break;
    }
    return $PHPName;
  }

  function outputNavLinks($navLinks, $PHPName) {
    $output = "";
    foreach ($navLinks as $navLink) {
      $href = pageNameToPHPName($navLink);
      if($href == $PHPName) $active = "active";
      else $active = "";
      $output .= "<li><a href='{$href}.php' class='{$active}'>{$navLink}</a></li>";
    }
    echo $output;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $PHPName . "style";?>.css?v=<? echo time(); ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="icon" href="images\avatar.jpg">
  <link
    href="https://fonts.googleapis.com/css2?family=Acme&family=Concert+One&family=Roboto:wght@900&family=Ubuntu:ital,wght@1,500&family=Work+Sans&display=swap"
    rel="stylesheet">
  <title>Selfy Site PHP |
  <?php 
    echo PHPNameToPageName($PHPName);
  ?>
  </title>
</head>

<body>

  <header>
    <div class="logo">
      <img src="images\avatar.jpg" alt="avatar">
      <h3>QUAN MINH TRÍ</h3>
    </div>
    <div class="navbar">
      <nav>
        <ul>
          <?php outputNavLinks($navLinks, $PHPName); ?>
        </ul>
      </nav>
    </div>
  </header>