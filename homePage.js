
//created by Id: 700657837,700678947,700663385

window.addEventListener("load", function () {
    document.getElementById("searchBtn").addEventListener("click",function (){
       console.log("before");
	   //display the form.
       document.getElementById("myForm").removeAttribute( "hidden");
       console.log("after");
    },false);//event listner for Iq Button
},false);//event listner for load