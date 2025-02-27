function comecaComA(array) {
    let novoArray = []
    
 array.forEach(element => {
    if(element.startsWith("A")) {
        novoArray.push(element)
    }
 });
 return novoArray;
};

let palavras = ["André", "Antônio", "João", "Maria"]
console.log(comecaComA(palavras));



