window.onload = function(){
windowWt = window.innerWidth;
windowHt = window.innerHeight;
 
container = document.getElementById("container");
sliderContainer = document.getElementById("sliderContainer");
sliderLength = sliderContainer.children.length;
sections = sliderContainer.children;
 
var totalWidth = sliderLength * windowWt;
container.style.width = windowWt+"px";
sliderContainer.style.width = totalWidth+"px";
container.style.height = windowHt+"px";
 
for(i=0; i<sliderLength; i++){
sections[i].style.width = windowWt+"px";
sections[i].style.height = windowHt+"px";
}
 
initSlider();
 
}
function initSlider(){
    prevElm = document.getElementById("prev");
    nextElm = document.getElementById("next");
     
    prevElm.addEventListener("click", function(){
        var slideNum = parseInt(sliderContainer.getAttribute("data-slide"))-1;
        if(slideNum < 0){
            return false;
        }
        var transX = -(slideNum*windowWt);
        sliderContainer.style.transform = "translateX("+transX+"px)";
        sliderContainer.setAttribute("data-slide", slideNum); 
    }, false);
    nextElm.addEventListener("click", function(){
        var slideNum = parseInt(sliderContainer.getAttribute("data-slide"))+1; 
        if(slideNum >= sliderLength){
            return false;
        }
        var transX = -(slideNum*windowWt);
         
        sliderContainer.style.transform = "translateX("+transX+"px)";
        sliderContainer.setAttribute("data-slide", slideNum);
    }, false);
}