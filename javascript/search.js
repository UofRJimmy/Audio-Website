var searchvalue=document.getElementById("search");

function showHint(searchvalue) {
  if (searchvalue.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "search.php?q="+searchvalue);
  xhttp.send();   
}