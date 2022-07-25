

function SearchButton(){
    var searchbox=document.getElementById("searchbox");
   
    if(searchbox.style.display==="block")
    {
        searchbox.style.display="none";

    }else{
        searchbox.style.display="block";
        favouritebox.style.display="none";
        shopbox.style.display="none";
        Userinformation.style.display="none";
        barragebox.style.display="none";
    }

}


function BarrageButton(){
    var barragebox=document.getElementById("barragebox");
    if(barragebox.style.display==="block")
    {
        barragebox.style.display="none";
    }else{
        searchbox.style.display="none";
        
        barragebox.style.display="block";
        favouritebox.style.display="none";
        shopbox.style.display="none";
        Userinformation.style.display="none";

    }
}


function FavouriteButton(){
    var favouritebox=document.getElementById("favouritebox");
   
    if(favouritebox.style.display==="block")
    {
        favouritebox.style.display="none";
    }else{
        searchbox.style.display="none";
       
        favouritebox.style.display="block";
        shopbox.style.display="none";
        barragebox.style.display="none";
        Userinformation.style.display="none";
    }

}

function ShopButton(){
    var shopbox=document.getElementById("shopbox");

    if(shopbox.style.display==="block")
    {
        shopbox.style.display="none";
    }else{
        searchbox.style.display="none";
        
        favouritebox.style.display="none";
        shopbox.style.display="block";
        Userinformation.style.display="none";
        barragebox.style.display="none";
    }

}

function UserButton(){
    var Userinformation=document.getElementById("Userinformation");
    if(Userinformation.style.display==="block")
    {
        Userinformation.style.display="none";
    }else{
        Userinformation.style.display="block";
        searchbox.style.display="none";

        favouritebox.style.display="none";
        shopbox.style.display="none";
        barragebox.style.display="none";
    }

}


