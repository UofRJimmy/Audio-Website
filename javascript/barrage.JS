const btn=document.getElementById("button");
const input= document.getElementById("send");
//Cooldown for 3 seconds, barrage list, three random positions on the y-axis of the barrage
let second=3, dmList = [],dmY=[18,36,54]  ;

btn.addEventListener("click",function(){
    const val=input.value;
    //Determine whether the value of the input box is empty after the brackets are removed. If the message is sent, add a css that cannot be clicked on the button
    if(val.trim()!==""){
        this.className="btn_active";
        this.innerHTML=`${second} s`;
        input.value="";
    //Set the countdown event, you can re-send the message after 3 seconds

   
        const timer=setInterval(()=>{
            second--;
            this.innerHTML=`${second} s`;
            if(second===0){
                clearInterval(timer);
                this.className="";
                this.innerHTML='send';
                second=3;
            }
        },1000);
        //The barrage starts from a width of 600, and the height is randomly released in three levels
        dmList.push({
            text:val,
            x:600,
            y:dmY[parseInt(Math.random()*3)],
        });
    }
});
//Click Enter Key trigger send function
input.addEventListener('keyup',(e)=>{
    if(e.keyCode===13){
        btn.click();
    }
})

const canvas=document.querySelector("canvas");

const ctx=canvas.getContext("2d");
ctx.font="10px Calibri"

ctx.fillStyle="#black";
const draw=()=>{
    dmList.forEach((item)=> item.x--);
    requestAnimationFrame(()=>{
    ctx.clearRect(0,0,600,300);
    dmList.forEach((item)=> ctx.fillText
    (item.text,item.x,item.y));
    });
    setTimeout(()=>{
        draw();
    },1000/60);
    
};
draw();