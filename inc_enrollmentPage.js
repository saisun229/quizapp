window.addEventListener("load", function(){
	
document.getElementById("course1").addEventListener("click",one , false);//course1

document.getElementById("course2").addEventListener("click",two, false); //course2

document.getElementById("course3").addEventListener("click",three, false); //course3 


},false);//end of onload Event listener


function one(){
	document.getElementById("hideform").removeAttribute("hidden");
	document.getElementsByTagName("option")[0].setAttribute("selected", "selected"); 
}

function two(){
	document.getElementById("hideform").removeAttribute("hidden");	
document.getElementsByTagName("option")[1].setAttribute("selected", "selected"); 
}
 function three(){
	document.getElementById("hideform").removeAttribute("hidden");	
	document.getElementsByTagName("option")[2].setAttribute("selected", "selected"); 
	
}