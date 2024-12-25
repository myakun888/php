let doa = " Lailahaillallah Al Malikul Haqqul Mubin "; 

let sholawat =`Muhammadur Rasulullah shadiqul Wa’dil Amin`
let nilai = 0;
setInterval(() => {

    nilai++;
console.log(`${doa} ${nilai}`);
    if(nilai % 100 == 0){
        console.log(`${sholawat}`);

    }
    
}, 1000);







