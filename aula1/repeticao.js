console.log ("REPETIÇÃO: PARA")

// PARA
for(let i = 0; i < 10; i++) {
    console.log("O valor de i é: " + i); 
}

console.log ("REPETIÇÃO: ENQUANTO")

// ENQUANTO
let i = 0;
while (i < 10) {
    console.log(i);
    i = i + 1; // i++
}

console.log ("REPETIÇÃO: REPITA")

// Equivalente do REPITA em JavaScript
// While equivale neste caso, ao ATÉ
const read = require('readline-sync');
let parar = "n";
do {
    console.log("Repetiu");
    parar = read.question("Parar de repetir? \n S/n"); // O \n pula linha
    console.log(parar);
} while (parar !== "S" && parar !== "s");
// Note a diferença do operador, agora com AND (&&)