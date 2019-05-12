<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>jQinterval</title>
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

<script src="jQInterval.min.js"></script>

 </head>
 <body>
 
<p id="thread0">0</p><p id="thread1">0</p>
<p id="thread2">0</p><p id="thread3">0</p>
<p id="thread4">0</p><p id="thread5">0</p>
<p id="thread6">0</p><p id="thread7">0</p>
<p id="thread8">0</p><p id="thread9">0</p>	<br>

<input type="button" value="START" id="start"><input type="button" value="STOP" id="stop">
<script>
$( document ).ready(function(){
/*  
use this only if you need a custom repeated action
for only one trigger there is "delay" function yet inside jQuery!
https://api.jquery.com/delay/#delay-duration-queueName
*/
	$('#start').click(function(){
	
		var th0=0;
		$.interval('th0',500,function(){
			$('#thread0').text(th0);
			th0++;
		});
		var th1=0;
		$.interval('th1',1000,function(){
			$('#thread1').text(th1);
			th1++;
		});
		var th2=0;
		$.interval('th2',1500,function(){
			$('#thread2').text(th2);
			th2++;
		});
		var th3=0;
		$.interval('th3',500,function(){
			$('#thread3').text(th3);
			th3++;
		});
		var th4=0;
		$.interval('th4',1000,function(){
			$('#thread4').text(th4);
			th4++;
		});
		var th5=0;
		$.interval('th5',1500,function(){
			$('#thread5').text(th5);
			th5++;
		});
		var th6=0;
		$.interval('th6',500,function(){
			$('#thread6').text(th6);
			th6++;
		});
		var th7=0;
		$.interval('th7',1000,function(){
			$('#thread7').text(th7);
			th7++;
		});
		var th8=0;
		$.interval('th8',1500,function(){
			$('#thread8').text(th8);
			th8++;
		});
		var th9=0;
		$.interval('th9',500,function(){
			$('#thread9').text(th9);
			th9++;
		});
	});

	$('#stop').click(function(){
		$.interval('th0');$('#thread0').text(0);
		$.interval('th1');$('#thread1').text(0);
		$.interval('th2');$('#thread2').text(0);
		$.interval('th3');$('#thread3').text(0);
		$.interval('th4');$('#thread4').text(0);
		$.interval('th5');$('#thread5').text(0);
		$.interval('th6');$('#thread6').text(0);
		$.interval('th7');$('#thread7').text(0);
		$.interval('th8');$('#thread8').text(0);
		$.interval('th9');$('#thread9').text(0);
	});


});

</script>

 </body>
</html>
