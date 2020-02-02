document.addEventListener('DOMContentLoaded',function(){
    document.querySelector("#goto-reg").onclick = function(){
        document.querySelector(".forms").className = " forms forms-reg";
        return false;
    }
    document.querySelector("#goto-log").onclick = function(){
        document.querySelector(".forms").className = " forms forms-log"
        return false;
    }
    var a = document.getElementsByClassName('error');
    for (i=0;i<a.length;i++){
    if(a[i].innerHTML.trim()!=""){
       a[i].style.display= "block";
    }
}
})