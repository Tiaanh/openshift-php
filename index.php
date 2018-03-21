<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
  for ($x = 0; $x <= 10; $x++) {
  } 
  $hostname = gethostname();
  print "<p>Hello, I am running on container - $hostname</p>" ; 
 ?> 
 </body>
</html>
