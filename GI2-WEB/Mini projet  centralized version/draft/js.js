let list = document.querySelector(".list > div");
let tree;
let link = "http://este.ovh/moocs";
let Stack = new Array();
let queue = new Array();
let lastId ;
let t;
let status = false;
function getTree(adresse){
    let rqst = new XMLHttpRequest();
    rqst.open("POST",adresse);
    rqst.onload = function(){
        tree = JSON.parse(rqst.response);
        if (!adresse.localeCompare("./test.php"))
            t = tree

        fillOnList(tree);
    }
    rqst.send();
};

function fillOnList(tree){
    if (status == false){
        queue = new Array();
        status = true;
    }    
    list.innerHTML =  "";
    for (item in tree){
        list.innerHTML += `
            <div id="${item}" name="" class="item">
                <div class="icon">+</div>
                <div class="title">${item}</div>
            </div>`;
    };
    linkTolesson();
}

function linkTolesson(){
    document.querySelectorAll(".item").forEach(element => {
        element.addEventListener("click",()=>{    
            status = false;   
            if (element.id.includes(".mp4")){
                document.querySelector("video").setAttribute('src',link+"/"+element.id);
                document.querySelector(".video > div >h3").innerHTML =  element.id;
            }      
            else if (!(element.id).includes("/") && (element.id).localeCompare(".mp4") ){
                open(`${link}/${element.id}`);
            }   
            else{
                var item= {
                    list : tree,
                    ads: link
                };
                Stack.push(item);
                document.querySelector(".list>h3").innerHTML = element.id;
                link+="/"+element.id;    
                lastId =  "/"+element.id;           
                tree=tree[element.id];
                getTree(`./test.php?root=${link}`);

            }
        });
    });
}

document.querySelector("h4").addEventListener("click",()=>{
    status = true;
    if (Stack.length >0 ){
        let ob = Stack.pop();
        if (queue.length <= 0){
            var item= {
                list : tree,
                ads: link
            };
            queue.push(item);
        }
        if (Stack.length > 0)
            queue.push(ob);
        tree = ob.list;
        fillOnList(tree);
        link = ob.ads;
    }
        
})
document.querySelector("h4:last-child").addEventListener("click",()=>{
    if (queue.length >0){
        let ob = queue.pop();
        if (Stack.length <= 0){
            var item= {
                list : t,
                ads: "http://este.ovh/moocs"
            };
            Stack.push(item);
        }
        if (queue.length > 0)
            Stack.push(ob);
        tree = ob.list;
        fillOnList(tree);
        link = ob.ads;
    }
        
})
getTree("./test.php"); 