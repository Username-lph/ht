$(function(){
	var banner=$(".ban_top");
	var banner_lis=$(".ban");
	var circle=$(".circle");
	var n=0;
	// var next=0;
	// var t=setInterval(move,3500);
	circle[0].classList.add("ban_circle");
	// function move(){
	// 	n++;
	// 	if(n>=banner_lis.length){
	// 		n=0;
	// 	}
	// 	for(var i=0; i<banner_lis.length; i++){
	// 		for(i=0; i<banner_lis.length; i++){
	// 			animate(banner_lis[i],{opacity:0},666,Tween.Quad.easeInOut);
	// 			circle[i].classList.remove("ban_circle");
	// 		}
	// 		animate(banner_lis[n],{opacity:1},666,Tween.Quad.easeInOut);
	// 		circle[n].classList.add("ban_circle");
	// 	}
	// }

	// function moveL(){
	// 	n--;
	// 	if(n<0){
	// 		n=banner_lis.length-1;
	// 	}
	// 	for(var i=0; i<banner_lis.length; i++){
	// 		for(i=0; i<banner_lis.length; i++){
	// 			animate(banner_lis[i],{opacity:0},666,Tween.Quad.easeInOut);
	// 			circle[i].classList.remove("ban_circle");
	// 		}
	// 		animate(banner_lis[n],{opacity:1},666,Tween.Quad.easeInOut);
	// 		circle[n].classList.add("ban_circle");
	// 	}
	// }
	//选项卡
	for(var i=0; i<circle.length; i++){
		circle[i].index=i;
		circle[i].onmouseover=function(){
			for(var j=0; j<circle.length; j++){
				animate(banner_lis[j],{opacity:0},555,Tween.Quad.easeInOut);
				circle[j].classList.remove("ban_circle");
			}
			animate(banner_lis[n],{opacity:1},555,Tween.Quad.easeInOut);
			this.classList.add("ban_circle");
			n=this.index;
		}
	}
})