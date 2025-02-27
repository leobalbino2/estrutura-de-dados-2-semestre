// Para usar o equivalente ao Leia, você precisa instalar o pacote readline-sync.
// Para, abra o terminal e digite:
// npm install realine-sync
// Quando for executar, use o terminal e digite:
// node leia.js
// "leia.js" é o nome do arquivo que você salvou o código. 
const read = require('readline-sync'); // Constante que não muda
let nome = read.question ("Qual seu nome?");  // Variável que pode mudar
console.log(nome); // Equivalente ao leia do visualg.

let n1 = read.question("Digite um numero: ");
let n2 = read.question("Digite outro numero: ");
let resultado = parseInt(n1) + parseInt(n2);
console.log(nome + "o resultado deu: " + resultado); // Saída no terminal
// Tudo que o usuário digita vem como string, 
// por isso precisamos converter para número usando parseInt