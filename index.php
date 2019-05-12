<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus,the best editor in the World">
  <title>jQuery interval plug-in</title>
 </head>
 <body>
 <!-- these are multiple choises to jquery or zepto (local or from cdns) -->

<!-- 
i am using these in xampp ,under windows server:

<script src="../js/zepto.min.js"></script>
 <script src="../js/jquery.js"></script>  

-->


<!-- 
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.slim.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"></script>
-->

   
<script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script><!-- the equivalent of jQuery -->

<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.js"></script>
 -->

<script src="jQInterval.js"></script>
<script>


$( document ).ready(function(){ 
/*
use this only if you need a custom repeated action
for only one trigger there is "delay" function yet inside jQuery!
https://api.jquery.com/delay/#delay-duration-queueName
*/	
	$.interval('yep',3000,function(){
		console.log('yeah baby')
	});
});

/*
	$.interval('yep'); //this will disable any active interval with the id 'yep'
*/






</script>
 </body>
</html>
