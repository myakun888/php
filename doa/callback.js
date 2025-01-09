// function data (n1,n2){
// return `nama saya adalah ${n1}, istri saya adalah ${n2} \n`
// }


function cek (sat1,sat2, func){

    console.log( func(sat1,sat2));
}

// cek("muhammad fajrin","dian wisora", data)


cek ("fajrin","dianwisora",(n1,n2)=>{
    return `nama saya adalah ${n1}, istri saya adalah ${n2} \n`
})
