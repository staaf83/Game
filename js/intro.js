document.getElementById("karta1Zatwierdz").addEventListener("click", displayDate);
		function displayDate() {
			document.getElementById("plec").style.animation = "cf3FadeInOut 3s linear 1";
			document.getElementById("plec").style.animationDirection = "reverse";
			document.getElementById("karta2").style.display ="none";
			document.getElementById("karta3").style.display ="none";
			document.getElementById("karta1").style.left = "40vw";
			document.getElementById("karta1Zatwierdz").style.display ="none";
			document.getElementById("kartaAnuluj").style.display ="none";
			document.getElementById("karta1opis").style.display ="none";
			document.body.style.animation = "cf3FadeInOut 3s ";
			document.body.style.animationDirection = "reverse";
			setTimeout(pm, 3000);
			function pm(){
				document.getElementById("karta1").style.display ="none";
				document.getElementById("plec").style.display ="none";
				const addCSS = s => document.head.appendChild(document.createElement("style")).innerHTML=s;
				addCSS("body:before{ background:black; }");
				addCSS(".firefly{ display:none; }");
				location.reload();
				
			}
		}


function kobieta(){
    document.getElementById("kobieta").style.transition ="1s";
    document.getElementById("kobieta").style.left ="37vw";
    document.getElementById("kobieta").style.animation = "show 3s linear 1";
    document.getElementById("kobieta").style.animationDirection = "reverse";
    document.getElementById("mezczyzna").style.transition ="1s";
    document.getElementById("mezczyzna").style.animation = "show 1s linear 1";
    document.getElementById("mezczyzna").style.animationDirection = "reverse";
    document.getElementById("k").style.animation = "show 1s linear 1";
    document.getElementById("k").style.animationDirection = "reverse";
    document.getElementById("m").style.animation = "show 1s linear 1";
    document.getElementById("m").style.animationDirection = "reverse";
    setTimeout(x, 3000)
    function x(){
        document.getElementById("kobieta").style.display ="none";
        document.getElementById("karta1").style.transition ="1s";
        document.getElementById("karta1").style.left = "10vw";
        document.getElementById("karta2").style.transition ="1s";
        document.getElementById("karta2").style.left = "40vw";
        document.getElementById("karta3").style.transition ="1s";
        document.getElementById("karta3").style.left = "70vw";
    }
    setTimeout(y, 1000)
    function y(){
        document.getElementById("mezczyzna").style.display ="none";
        document.getElementById("k").style.display ="none";
        document.getElementById("m").style.display ="none";
    }
}
function mezczyzna(){
    document.getElementById("mezczyzna").style.left ="41vw";
    document.getElementById("mezczyzna").style.animation = "show 3s linear 1";
    document.getElementById("mezczyzna").style.animationDirection = "reverse";
    document.getElementById("kobieta").style.animation = "show 1s linear 1";
    document.getElementById("kobieta").style.animationDirection = "reverse";
    document.getElementById("k").style.animation = "show 1s linear 1";
    document.getElementById("k").style.animationDirection = "reverse";
    document.getElementById("m").style.animation = "show 1s linear 1";
    document.getElementById("m").style.animationDirection = "reverse";
    document.getElementById("plec").style.animation = "cf3FadeInOut 1s linear 1";
    document.getElementById("plec").style.animationDirection = "reverse";
    setTimeout(x, 3000)
    function x(){
        document.getElementById("mezczyzna").style.display ="none";
    }
    setTimeout(y, 1000)
    function y(){
        document.getElementById("kobieta").style.display ="none";
        document.getElementById("k").style.display ="none";
        document.getElementById("m").style.display ="none";
        document.getElementById("plec").style.display ="none";
    }
}




function karta1kobieta(){


    document.getElementById("karta1Zatwierdz").style.animationPlayState ="running";
    document.getElementById("kartaAnuluj").style.animationPlayState ="running";
    document.getElementById("karta1opis").style.animationPlayState ="running";
    document.getElementById("karta1Zatwierdz").style.display ="block";
    document.getElementById("kartaAnuluj").style.display ="block";
    document.getElementById("karta1opis").style.display ="block";
  
    document.getElementById("karta1").style.zIndex ="1";
    document.getElementById("karta1").style.transition ="1s";
    document.getElementById("karta1").style.left ="20vw";
    document.getElementById("karta2").style.zIndex ="0";
    document.getElementById("karta2").style.transition ="1s";
    document.getElementById("karta2").style.left ="20vw";
    document.getElementById("karta3").style.zIndex ="0";
    document.getElementById("karta3").style.transition ="1s";
    document.getElementById("karta3").style.left ="20vw";

}


if (document.getElementById("kartaAnuluj").style.display == 'block') { 
    alert('this Element is block'); 
  }

function karta2kobieta(){


    document.getElementById("karta2Zatwierdz").style.animationPlayState ="running";
    document.getElementById("kartaAnuluj").style.animationPlayState ="running";
    document.getElementById("karta2opis").style.animationPlayState ="running";
    document.getElementById("karta2Zatwierdz").style.display ="block";
    document.getElementById("kartaAnuluj").style.display ="block";
    document.getElementById("karta2opis").style.display ="block";

    document.getElementById("karta1").style.zIndex ="0";
    document.getElementById("karta1").style.transition ="1s";
    document.getElementById("karta1").style.left ="20vw";
    document.getElementById("karta2").style.zIndex ="1";
    document.getElementById("karta2").style.transition ="1s";
    document.getElementById("karta2").style.left ="20vw";
    document.getElementById("karta3").style.zIndex ="0";
    document.getElementById("karta3").style.transition ="1s";
    document.getElementById("karta3").style.left ="20vw";
}
function karta3kobieta(){
    

    document.getElementById("karta3Zatwierdz").style.animationPlayState ="running";
    document.getElementById("kartaAnuluj").style.animationPlayState ="running";
    document.getElementById("karta3opis").style.animationPlayState ="running";
    document.getElementById("karta3Zatwierdz").style.display ="block";
    document.getElementById("kartaAnuluj").style.display ="block";
    document.getElementById("karta3opis").style.display ="block";
    
    document.getElementById("karta1").style.zIndex ="0";
    document.getElementById("karta1").style.transition ="1s";
    document.getElementById("karta1").style.left ="20vw";
    document.getElementById("karta2").style.zIndex ="0";
    document.getElementById("karta2").style.transition ="1s";
    document.getElementById("karta2").style.left ="20vw";
    document.getElementById("karta3").style.zIndex ="1";
    document.getElementById("karta3").style.transition ="1s";
    document.getElementById("karta3").style.left ="20vw";
}
function kartaAnuluj(){
  
    document.getElementById("karta1").style.left = "10vw";
    document.getElementById("karta2").style.left = "40vw";
    document.getElementById("karta3").style.left = "70vw";
    document.getElementById("kartaAnuluj").style.display ="none";
    document.getElementById("karta1opis").style.display ="none";
    document.getElementById("karta2opis").style.display ="none";
    document.getElementById("karta3opis").style.display ="none";
    document.getElementById("karta1Zatwierdz").style.display ="none";
    document.getElementById("karta2Zatwierdz").style.display ="none";
    document.getElementById("karta3Zatwierdz").style.display ="none";
    document.getElementById("karta4Zatwierdz").style.display ="none";
    document.getElementById("karta5Zatwierdz").style.display ="none";
    document.getElementById("karta6Zatwierdz").style.display ="none";
    
}

    










function karta1Zatwierdz(){
    document.getElementById("plec").style.animation = "cf3FadeInOut 3s linear 1";
    document.getElementById("plec").style.animationDirection = "reverse";
    document.getElementById("karta2").style.display ="none";
    document.getElementById("karta3").style.display ="none";
    document.getElementById("karta1").style.left = "40vw";
    document.getElementById("karta1Zatwierdz").style.display ="none";
    document.getElementById("kartaAnuluj").style.display ="none";
    document.getElementById("karta1opis").style.display ="none";
    document.body.style.animation = "cf3FadeInOut 3s ";
    document.body.style.animationDirection = "reverse";
    setTimeout(pm, 3000);
    function pm(){
        document.getElementById("karta1").style.display ="none";
        document.getElementById("plec").style.display ="none";
        const addCSS = s => document.head.appendChild(document.createElement("style")).innerHTML=s;
        addCSS("body:before{ background:black; }");
        addCSS(".firefly{ display:none; }");
    }
}
function karta2Zatwierdz(){
    document.getElementById("karta1").style.display ="none";
    document.getElementById("karta3").style.display ="none";
    document.getElementById("karta2").style.left = "40vw";
    document.getElementById("karta2Zatwierdz").style.display ="none";
    document.getElementById("kartaAnuluj").style.display ="none";
    document.getElementById("karta2opis").style.display ="none";
    
}
function karta3Zatwierdz(){
    document.getElementById("karta2").style.display ="none";
    document.getElementById("karta1").style.display ="none";
    document.getElementById("karta3").style.left = "40vw";
    document.getElementById("karta3Zatwierdz").style.display ="none";
    document.getElementById("kartaAnuluj").style.display ="none";
    document.getElementById("karta3opis").style.display ="none";
}
function karta4Zatwierdz(){
    document.getElementById("karta2").style.display ="none";
    document.getElementById("karta3").style.display ="none";
    document.getElementById("karta1").style.left = "40vw";
    document.getElementById("karta1Zatwierdz").style.display ="none";
    document.getElementById("kartaAnuluj").style.display ="none";
    document.getElementById("karta4opis").style.display ="none";

}
function karta5Zatwierdz(){
    document.getElementById("karta2").style.display ="none";
    document.getElementById("karta3").style.display ="none";
    document.getElementById("karta1").style.left = "40vw";
    document.getElementById("karta1Zatwierdz").style.display ="none";
    document.getElementById("kartaAnuluj").style.display ="none";
    document.getElementById("karta5opis").style.display ="none";

}
function karta6Zatwierdz(){
    document.getElementById("karta2").style.display ="none";
    document.getElementById("karta3").style.display ="none";
    document.getElementById("karta1").style.left = "40vw";
    document.getElementById("karta1Zatwierdz").style.display ="none";
    document.getElementById("kartaAnuluj").style.display ="none";
    document.getElementById("karta6opis").style.display ="none";

}




if (document.getElementById("kartaAnuluj").style.display == 'block') { 
    alert('this Element is block'); 
  }