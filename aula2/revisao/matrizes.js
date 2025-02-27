// MATRIZES NO JAVASCRIPT
const read = require('readline-sync')
// Declaração da matriz
let nomes = [[]];

// Primeiro, acessa as linhas
for (let i = 0; i <3; i++){
    // Depois, acessa as colunas
    for (let j = 0; j <2; j++) {
        nomes = read.question("Linha " + i + " Coluna " + j + ": ");
    }
}