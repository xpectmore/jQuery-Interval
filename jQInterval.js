//start plug-in
jqzp=function(){console.log('jQuery/Zepto not found: please enable one of them!');}
if (typeof($) == 'undefined'){	jqzp();	}else $( document ).ready(function(){
	var _sI=[];
	$.interval=function(){
		if (arguments.length==3){
			if (_sI[arguments[0]]== undefined){
				_sI[arguments[0]]={};
			}else{
				clearInterval(_sI[arguments[0]].reg);
			}
			_sI[arguments[0]].fn=arguments[2];
			_sI[arguments[0]].t=arguments[1];
			_sI[arguments[0]].reg=setInterval(arguments[2],arguments[1]);
		}else if (arguments.length==1){
			clearInterval(_sI[arguments[0]].reg);
		}else{
			console.log('The number of the arguments should be 3 or 1');
			console.log('$.interval("id",time_in_milliseconds,function(){do_what_you_want();})');
			console.log('to stop that use: $.interval("id")');
		}
	}
});
//stop plug-in
