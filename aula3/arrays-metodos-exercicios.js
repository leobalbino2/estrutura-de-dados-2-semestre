class MeuArray {

    constructor()
    {
        this.items = {}; // Usamos um objeto para armazenar os itens do array
        this.tamanho = 0; // Mantemos o controle do tamanho do array
    }

    // Adiciona um elemento ao final do array
    adicionar(elemento)
    {
        this.items[this.tamanho] = elemento; // Insere o elemento na posição atual do tamanho
        this.tamanho++; // Incrementa o tamanho
    }

    // Remove o último elemento do array
    remover()
    {
        if (this.tamanho === 0) {
            return undefined; // Se o array estiver vazio, não há o que remover
        }

        const ultimoItem = this.items[this.tamanho - 1]; // Armazena o último item
        delete this.items[this.tamanho - 1]; // Remove o último item do array
        this.tamanho--; // Decrementa o tamanho

        return ultimoItem; // Retorna o item removido
    }

    // Acessa o elemento em um índice específico 
    obterElemento(indice)
    {
        if (indice < 0 || indice >= this.tamanho) {
            return undefined; // Se o índice estiver fora do alcance, retorna undefined
        }
        return this.items[indice]; // Retorna o item no índice solicitado
    }

    // Mostra os índices e mostra o conteúdo do array (Gambiarra que fiz para tentar resolver o exercício)
    mostrarTodos(indice) // Ou console.table
    {
        if (indice < 0 || indice >= this.tamanho) {
            return undefined;
        }
        return this.items;
    }
c

    // Retorna o tamanho do array
    tamanhoArray()
    {
        return this.tamanho; // Retorna o valor do tamanho atual do array
    }

    // Remove todos os elementos do array
    limpar()
    {
        this.items = {}; // Limpa o objeto
        this.tamanho = 0; // Reinicializa o tamanho
    }
}

//_______________________________________________________________________________________________________________________//

// Exemplo de uso
let minha_variavel = new MeuArray();

minha_variavel.adicionar(10);
minha_variavel.adicionar(20);
minha_variavel.adicionar(30);

console.log(minha_variavel.obterElemento(1)); // Saída: 20
console.log(minha_variavel.tamanhoArray()); // Saída: 3

console.log(minha_variavel.remover()); // Saída: 30
console.log(minha_variavel.tamanhoArray()); // Saída: 2

//_______________________________________________________________________________________________________________________//

// Exercicio 1, Criar nova instância do Meu Array, adicionar 5 tarefas, remover a última tarefa e mostrar todos os itens
const tarefas = new MeuArray();

tarefas.adicionar("Limpeza");
tarefas.adicionar("Conferência");
tarefas.adicionar("Passadoria");
tarefas.adicionar("Ligação");
tarefas.adicionar("Mensagem");

// Mostra todos (maneira que tentei resolver)
console.log(tarefas.mostrarTodos());

// Remove a última tarefa, "Mensagem"
console.log(tarefas.remover());

// Mostra todos (utilizando o console.table)
console.table(tarefas);

// Correção exibindo todas as tarefas
console.log("Lista de Tarefas:");
for (let i = 0; i < tarefas.tamanhoArray(); i++) {
    console.log(tarefas.obterElemento(i));
};

//_______________________________________________________________________________________________________________________//

// Exercicio 2, Criar nova instância do Meu Array, adicionar 4 nomes de funcionários, obter o nome do terceiro funcionário e limpar todos os registros do array

const funcionarios_array = new MeuArray();

// Adicionando todos os nomes de funcionários
funcionarios_array.adicionar("Edson");
funcionarios_array.adicionar("João");
funcionarios_array.adicionar("Maria");
funcionarios_array.adicionar("Antônio");

// Aqui ele mostra todos na maneira que tentei resolver
console.log(funcionarios_array.mostrarTodos());

// Remove a terceira funcionária de índice 2, Maria
console.log(funcionarios_array.remover(2));

// Mostra a tabela com os funcionários, já sem a funcionária Maria
console.table(funcionarios_array);

// Aqui ele limpa todo o array
console.log(funcionarios_array.limpar());

// Mostra o array sem nenhum conteúdo, retornando undefined
console.table(funcionarios_array);
