var audio = document.getElementById("audio"); 
var form_submit=document.getElementById("form_submit");
audio.loop = false;
audio.addEventListener('ended', function () {  
    form_submit.submit()
}, false);