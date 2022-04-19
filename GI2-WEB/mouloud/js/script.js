//EL ARRAM MOULOUD PC09.

document.querySelector(".start").addEventListener("click", ()=>{start()})
document.querySelector(".stop").addEventListener("click", ()=>{stop()})
document.querySelector(".save").addEventListener("click", ()=>{save()})


let game = document.querySelector(".game");
let div = document.createElement("div");
div.addEventListener("click",()=>{
        
    scorenbr++;console.log(scorenbr)
    document.querySelector(".score").innerHTML = scorenbr;
})
let scorenbr = 0;
function gamef(){
    let nbr = Math.floor(Math.random()*200);
    let nbr2 = Math.floor(Math.random()*100);

    div.style.marginLeft = nbr + "px";
    div.style.marginTop= nbr + "px";
    game.appendChild(div);
    
}

let intervalid;
function start(){
    intervalid = setInterval(()=>{
        gamef()
    }, 1000);
    
}

function stop(){
    clearInterval(intervalid);
}

function save(){
    console.log("save");
    location.replace(`http://localhost/mouloud/index.php?score=${scorenbr}`);
}