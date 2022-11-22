<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<main role="main">
    <?php
    include "vidus.php";
    ?>
</main>
    <?php
    include_once "footer.php";
?>
<?php
include_once "head.php";
?>
<body>
<?php
include_once "header.php";
?>

<?php

class straipsniai {
var $antraste;
var $paveiksliukas;
var $tekstas;



}
class straipsnis extends straipsniai {
	var $header;

	function build($header) {
    
    }
}




/*$file = 'newpage.html';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "<!doctype html><html>
<head><meta charset='utf-8'>
<title>new file</title>
</head><body><h3>New HTML file</h3>

</body></html>
";
file_put_contents($file, $current);*/

$filename = 'test.html';
 header("Cache-Control: public");
 header("Content-Description: File Transfer");
 header("Content-Disposition: attachment; filename=$filename");
 header("Content-Type: application/octet-stream; ");
 header("Content-Transfer-Encoding: binary");


?>
<?php
 class Cars { 
  
    /* Member variables */
    var $price; 
    var $title; 
    /* Member functions */
    function setPrice($par){ 
       $this->price = $par; 
    } 
      
    function getPrice(){ 
       echo $this->price."<br>"; 
    } 
      
    function setTitle($par){ 
       $this->title = $par; 
    } 
      
    function getTitle(){ 
       echo $this->title."<br><br>" ; 
    } 
 } 


 /* Creating New object using "new" operator */
 $maths = new Cars;

 /* Setting title and prices for the object */
  
 $maths->setTitle( "" ); 
 /* Calling Member Functions */  
 $maths->getTitle(); 
 $maths->getPrice(); 
?> 





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>