play.onclick = function(){
	if(audio.paused){
		audio.play();
	}
}
 
pause.onclick = function(){
	if(audio.played){
		audio.pause();
	}
}
var num=1;
var len=7;
var smwap=document.getElementById("smallwindow_albumPic");
var pstimg=document.getElementById("posterimg");
var bgDisc=document.getElementById("bgDisc");
var songname = ["0", "Air on G string", "Dive with me", "nevada","4","5","6","7"];
prev.onclick = function(){
	if(num>1){
		num = num - 1;
		}
	else{
		num=len;
		}
	document.getElementById("songname").innerHTML = songname[num];
	audio.src = './music/'+num+'.mp3';
    smwap.style.backgroundImage ='url(./image/' + num + '.jpg)';
    smwap.src='./image/'+ num + '.jpg';
    pstimg.style.backgroundImage ='url(./image/' + num + '.jpg)';
    pstimg.src='./image/'+ num + '.jpg';
	bgDisc.style.backgroundImage ='url(./image/' + num + '.jpg)';
	musicImg.src = './image/' + num + '.jpg';
	audio.play();
}
 
next.onclick = function(){
	if(num<len){
		num = num + 1;
		}
	else{
		num=1;
		}
	document.getElementById("songname").innerHTML = songname[num];
	audio.src = './music/'+num+'.mp3';
	smwap.style.backgroundImage ='url(./image/' + num + '.jpg)';
    smwap.src='./image/'+ num + '.jpg';
    pstimg.style.backgroundImage ='url(./image/' + num + '.jpg)';
    pstimg.src='./image/'+ num + '.jpg';
	bgDisc.style.backgroundImage ='url(./image/' + num + '.jpg)';
    bgDisc.src='./image/'+ num + '.jpg';
	musicImg.src = './image/'+$+'.jpg';
	audio.play();
}
audio.addEventListener('ended',function(){
	next.onclick();
},false);

list.onclick = function(e) {
	e.preventDefault();
  
	var elm = e.target;
	var audio = document.getElementById('audio1');
  
	var source = document.getElementById('audioSource');
	source.src = elm.getAttribute('data-value');
  
	audio.load(); //call this to just preload the audio without playing
	audio.play(); //call this to play the song right away
  };
