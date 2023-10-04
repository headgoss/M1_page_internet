<!doctype html>
<html>
  <head>

  </head>
  <body>
  	<header>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <h1><?= isset($PageTitle) ? $PageTitle : "Default Title"?></h1>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
      include('nav.php');
    }?>
  </header>
  </body>
</html>