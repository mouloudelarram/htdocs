const target=document.querySelector("#target");
const article=document.querySelector("article");
const h3=document.querySelector('footer h3')
const start=document.querySelector("#start")
const stop=document.querySelector("#stop")
const save=document.querySelector("#save")
const scr=document.querySelector("#score")
const speed=document.querySelector("#speed")
speed.addEventListener("change",setSpeed )

let interval=null
let delay=2000/speed.value
function setSpeed(e){
    delay=2000/e.target.value
    clearInterval(interval);
    interval=setInterval(move,delay);
    console.log(delay)
}
start.addEventListener("click",()=> {
    interval=setInterval(move,delay);
    target.addEventListener('click',changescore)
});
stop.addEventListener("click",()=>{
    clearInterval(interval);
    target.removeEventListener("click",changescore)
 } )
 save.addEventListener("click",savescore)
let score=0;

function move(){
    target.style.top=(Math.random())*(article.clientHeight-40)+"px";
    target.style.left=(Math.random())*(article.clientWidth-40)+"px";
}
function changescore(){
    score++;
    scr.setAttribute("value",score)
    h3.innerHTML="Score: "+score

}

function savescore(){
    
}
