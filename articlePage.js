// created by Id: 700657837,700678947,700663385


window.addEventListener("load", function () {
	document.getElementById("Bt").addEventListener("click",function (){
		document.getElementById('Bt1').style.visibility = 'hidden';
		document.getElementById("highestIQ").removeAttribute( "hidden");
		var imageAray = ["image/Iq1.jpg","image/Iq2.jpg","image/Iq3.jpg","image/Iq4.jpg","image/Iq5.jpg"];
		//console.log("bfhiwfh");
		//event listner for first button
			document.getElementById("iq1").addEventListener("click",function (){
				var imageAray = ["image/Iq1.jpg"];
				//console.log(imageAray[0]+"gbweuio");
				var x=document.getElementById("result");
				//removeing its privious childs.
				while (x.hasChildNodes()) {
				x.removeChild(x.lastChild);
				}
				var y = document.createElement("img");
				y.src=imageAray[0];
				y.style.height = '300px';
				y.style.width = '300px';
				y.style.float = 'right';
				var para= document.createElement("p");
				var t = document.createTextNode("William James Sidis born in 1898 in New YorkCity,At the age of 5, he could use a typewriter and had learnt to speak Latin, Greek,Russian, French, German and Hebrew. He was denied admission to Harvard at the age of 6 because he was called too emotionally immature.His IQ is in the range from 250-300.");
				para.appendChild(t);
				//console.log(y);
				x.appendChild(y);
				x.appendChild(para);
			},false);//end event listener for 1st button
			//for second button
			document.getElementById("iq2").addEventListener("click",function (){
				// var imageAray = ["image/Iq2.jpg"];
				//console.log(imageAray[0]+"gbweuio");
				var x=document.getElementById("result");
				while (x.hasChildNodes()) {
					x.removeChild(x.lastChild);
					}
				var y = document.createElement("img");
				y.src=imageAray[1];
				y.style.height = '250px';
				y.style.width = '250px';
				y.style.float = 'right';
				var para= document.createElement("p");
				var t = document.createTextNode("Terence Tao Born in 1975 to a Chinese family, Terence displayed exceptional aptitude towards Mathematics from a very early age. He had acquired his PhD when he was just 20. His IQ in the range of 225-230.");
				para.appendChild(t);
				//console.log(y);
				x.appendChild(y);
				x.appendChild(para);
			},false);//end eventlistener for 2nd button
			//third button
			document.getElementById("iq3").addEventListener("click",function (){
				// var imageAray = ["image/Iq2.jpg"];
				//console.log(imageAray[0]+"gbweuio");
				var x=document.getElementById("result");
				while (x.hasChildNodes()) {
				x.removeChild(x.lastChild);
					}
				var y = document.createElement("img");
				y.src=imageAray[2];
				y.style.height = '250px';
				y.style.width = '250px';
				y.style.float = 'right';
				var para= document.createElement("p");
				var t = document.createTextNode("Marilyn was born in Missouri, US in 1946.She rose to fame when she first topped the Guinness Book of World Records list of the “highest iq” category in 1986 and stayed there until 1989. She was reported to have an IQ score of 228.");
				para.appendChild(t);
				//console.log(y);
				x.appendChild(y);
				x.appendChild(para);
			},false);//end eventlistener for 3rd button 
			//fourthbutton
			document.getElementById("iq4").addEventListener("click",function (){
					// var imageAray = ["image/Iq2.jpg"];
				//console.log(imageAray[0]+"gbweuio");
				var x=document.getElementById("result");
				while (x.hasChildNodes()) {
					x.removeChild(x.lastChild);
				}
				var y = document.createElement("img");
				y.src=imageAray[3];
				y.style.height = '250px';
				y.style.width = '250px';
				y.style.float = 'right';
				var para= document.createElement("p");
				var t = document.createTextNode("A former child prodigy, Hirata became the youngest American to clinch a gold medal at the International Physics Olympiad in 1996.He was involved in a project at NASA when he was 16, and obtained his PhD from the prestigious Princeton University at a young age of 22. His IQ is 225.");
				para.appendChild(t);
				//console.log(y);
				x.appendChild(y);
				x.appendChild(para);
			},false);//end eventlistener for 4th button
			//fifth button
			document.getElementById("iq5").addEventListener("click",function (){
				// var imageAray = ["image/Iq2.jpg"];
				console.log(imageAray[0]+"gbweuio");
				var x=document.getElementById("result");
				while (x.hasChildNodes()) {
					x.removeChild(x.lastChild);
				}
				var y = document.createElement("img");
				y.src=imageAray[4];
				y.style.height = '250px';
				y.style.width = '250px';
				y.style.float = 'right';
				var para= document.createElement("p");
				var t = document.createTextNode("Born in 1963 in Korea, Kim Ung-Yong started speaking when he was just 6 months old. By his third birthday, Kim Ung-Yong could already read English, Korean, Japanese, and German.As if this wasn’t mind-boggling enough, he was writing poetry and had completed two short stories by the time he was four years old!. His IQ is 210.");
				para.appendChild(t);
				//console.log(y);
				x.appendChild(y);
				x.appendChild(para);
			},false);//end eventlistener for 5th button

		},false);//event listner for displaying other  buttons
	}, false);//end event listner for load