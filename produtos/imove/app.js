const card = document.querySelector('.card')

let n = 0

function move(type){


    let vp = 80 * n
    let vv = 80 * -n

    if (type == 'right'){
        console.log(n)
        console.log(vv)

        if (n == 6){
            console.log(n)
            console.log('voltando')
            n = 0
            card.scrollBy(530,0);


        }else{
            console.log(n)
            console.log('proximo')

            n++;
            console.log(n)

            vp.toString
            card.document
            card.scrollBy(530,0);

        }

    } else{

    }
}