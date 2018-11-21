"use strict";
window.onload= function(){
    function main(){
        let xml= new XMLHttpRequest();
        document.getElementById("lookup").addEventListener("click",function(){
            xml.onreadystatechange = function(){
                if(this.readyState ===4 && this.status ===200){
                    document.getElementById("result").innerHTML= this.responseText;
                    alert(this.responseText);
                }
            };
            if (document.getElementById("all").checked){
                xml.open("GET", "world.php?all=true",true);
            } else{ 
                xml.open("GET", "world.php?country=" + document.getElementById("country").value, true)
            }
            xml.send(); 
        });
    }
    main();
};