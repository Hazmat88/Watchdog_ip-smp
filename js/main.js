
//alert("hello_world");


// raccourci d’écriture
function $(id){return document.getElementById(id)}

function hms(){
var today=new Date();
var hrs=today.getHours(),mns=today.getMinutes(),scd=today.getSeconds();
var str=(hrs<10?"0"+hrs:hrs)+":"+(mns<10?"0"+mns:mns)+":"+(scd<10?"0"+scd:scd);
$("clock").innerHTML=str;
setTimeout(hms,1000);// réécriture toutes les 1000 millisecondes
}
hms();// lancement de la fonction



function fhideshoww() {
  var x = document.getElementById("bwiki");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function fhideshows() {
  var x = document.getElementById("bsony");
  var y = document.getElementById("bwiki");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.setAttribute("class", "wiki");
  } else {
    x.style.display = "none";
    y.setAttribute("class", "fullw");
  }
}

function rotatew() {
  var img = document.getElementById("bwiki");

  if ( img.className === "rotated-imagew") {
    img.setAttribute("class", "wiki");
  }else {
    img.setAttribute("class", "rotated-imagew");
  }
}
