function record() {
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "en-GB";

            recognition.onresult = function(event) {
                // console.log(event);
                document.getElementById('speechToText').value = event.results[0][0].transcript;
            }
            recognition.start();

        }



function removeClass1(){
    var element = document.getElementById("gen1");
    element.classList.remove("gen");
    var element1 = document.getElementById("mw");
    element1.classList.add("mw");
    var element2 = document.getElementById("places");
    element2.classList.add("pl");
    var element3 = document.getElementById("food");
    element3.classList.add("f");
    var element4 = document.getElementById("alphabets");
    element4.classList.add("alph");
    var element5 = document.getElementById("misc");
    element5.classList.add("mi");
}
    


function removeClass2(){
    var element = document.getElementById("mw");
    element.classList.remove("mw");
    var element = document.getElementById("gen1");
    element.classList.add("gen");
    var element = document.getElementById("places");
    element.classList.add("pl");
    var element = document.getElementById("food");
    element.classList.add("f");
    var element = document.getElementById("alphabets");
    element.classList.add("alph");
    var element = document.getElementById("misc");
    element.classList.add("mi");
}

function removeClass3(){
    var element = document.getElementById("places");
    element.classList.remove("pl");
    var element = document.getElementById("mw");
    element.classList.add("mw");
    var element = document.getElementById("gen1");
    element.classList.add("gen");
    var element = document.getElementById("food");
    element.classList.add("f");
    var element = document.getElementById("alphabets");
    element.classList.add("alph");
    var element = document.getElementById("misc");
    element.classList.add("mi");
}


function removeClass4(){
    var element = document.getElementById("food");
    element.classList.remove("f");
    var element = document.getElementById("mw");
    element.classList.add("mw");
    var element = document.getElementById("gen1");
    element.classList.add("gen");
    var element = document.getElementById("places");
    element.classList.add("pl");
    var element = document.getElementById("alphabets");
    element.classList.add("alph");
    var element = document.getElementById("misc");
    element.classList.add("mi");
}


function removeClass5(){
    var element = document.getElementById("alphabets");
    element.classList.remove("alph");
    var element = document.getElementById("mw");
    element.classList.add("mw");
    var element = document.getElementById("gen1");
    element.classList.add("gen");
    var element = document.getElementById("places");
    element.classList.add("pl");
    var element = document.getElementById("food");
    element.classList.add("f");
    var element = document.getElementById("misc");
    element.classList.add("mi");
}


function removeClass6(){
    var element = document.getElementById("misc");
    element.classList.remove("mi");
    var element = document.getElementById("mw");
    element.classList.add("mw");
    var element = document.getElementById("gen1");
    element.classList.add("gen");
    var element = document.getElementById("places");
    element.classList.add("pl");
    var element = document.getElementById("food");
    element.classList.add("f");
    var element = document.getElementById("alphabets");
    element.classList.add("alph");
}
var element = document.getElementById("search-bar");
element.webkitSpeech = true;


