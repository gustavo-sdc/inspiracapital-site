//Scroll



function scroll(){
    const container_logos = document.querySelector("scroll-clients").shadowRoot.querySelector("#container-scroll")
    let logos = document.querySelector("scroll-clients").shadowRoot.querySelectorAll(".logo-clients")

    let l = logos.length
    
    let idx = 0;

    idx++;

    if(idx > l - 1){
        console.log("If ativo")
        idx = 0 ;
    }

    console.log("Scroll")
    container_logos.style.transform = `translateX(${idx * -150}px)`;

}


console.log("scroll again")
setInterval(scroll, 2000);