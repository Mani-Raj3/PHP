 <html><head><title>Data Type in PHP Program</title></head>
 <body>
<center>

 <!-- <?php
 function display() // definition
 {
    echo "Welcome in Function:";

 }

// main
 display();  // function call
 echo "<br> This is Function Call";
 ?> -->

 <!-- <?php
    function sum($a, $b)
{
   $c = $a + $b;
   echo "Addition is :".$c;
}
     sum(50,20);
     echo"<br>";
      sum(500,200);
 ?> -->

  <!-- factorial Program -->

  <?php
  function factorial($n)
  {
   $f=1;
   while($n!=0)
   {
      $f=$f*$n;
      $n--;
   }
   return $f;
  }
  $m=factorial(5);
  echo"factorial is ".$m;
  ?>

</center>

 </body>