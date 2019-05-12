LICENSE: F.T.M.  (Free To Mankind)

use this only if you need a custom repeated action
for only one trigger there is "delay" function yet inside jQuery!
https://api.jquery.com/delay/#delay-duration-queueName


This is a jQery / Zepto.js (a high speed JS framework, equivalent of jQuery) plug-in that implement JavaScript native setInterval and
manage start / stop of a timer by a unique function with different number of parameters:

to start a timer use :
======================

$( document ).ready(function(){ 

	$.interval('yep',3000,function(){
	
		console.log('github roolez !!!')
		
	});

//to stop it use :

	//$.delI('yep');
	
});




======================

FOR WHO do not like JS frameworks ,well there is another possibility,a JS sollution:




var _sI=[];

__set=function(I,t,st){

	if (_sI[I]== undefined){
	
		_sI[I]={};
		
	}else{
	
		clearInterval(_sI[I].reg);
		
	}
	
	_sI[I].fn=st;
	
	_sI[I].t=t;
	
	_sI[I].reg=setInterval(st,t);
	
}

__del=function(I){

	clearInterval(_sI[I].reg);
	
}

__set('yep',3000,function(){

	console.log('yeah baby');
	
});
