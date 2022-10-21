window.onload = function()
{
    document.getElementById("cont-menu").addEventListener("Click",function(){
    console.log("Se a detectado el click")
    console.log(document.getElementsByClassName("btnMenu"));
    //document.getElementsByClassName("cont-menu").classList.togle("escondido");
    })
}