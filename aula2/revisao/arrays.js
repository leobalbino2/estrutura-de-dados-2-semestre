let numeros = [1, 2, 3, 4, 5];
console.log(numeros[0]); // Saída: 1

// DECLARANDO E INICIANDO ARRAYS

let frutas = ['maçã', 'banana', 'laranja'];

// ACESSANDO E MODIFICANDO ELEMENTOS DO ARRAY

let cores = ['vermelho', 'verde', 'azul']
cores[1] = 'amarelo'; // Altera o segundo elemento para 'amarelo'
console.log(cores);   // Saída: ['vermelho', 'amarelo', 'azul']

//MÉTODOS COMUNS DE ARRAYS
//push(): Adiciona um ou mais elementos ao final de um array.
//pop(): Remove o último elemento de um array.
//shift(): Remove o primeiro elemento de um array.
//unshift(): Adiciona um ou mais elementos ao início de um array.

//MÉTODOS COMUNS DE ARRAY

let numeros = [1, 2, 3];
numeros.push(4): // [1, 2, 3, 4]
numeros.pop(); // [1, 2, 3]

// MÉTODOS MAIS MODERNOS

let numeros = [1, 2, 3, 4];
numeros.forEach(num => {
    console.log(num); // Saída: 1, 2, 3, 4
});

// ARRAYS MULTIDIMENSIONAIS
let matriz = [
       [1, 2, 3],
       [4, 5, 6],
       [7, 8, 9],
];
console.log(matriz[0][1]); // Saída: 2