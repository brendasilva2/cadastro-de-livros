<?php
header ("Content-Type: application/json");

$livros = [
    
        [
        "titulo" => "Alice no país das maravilhas",
        "resumo" => "Uma garota curiosa segue um coelho e entra em um mundo mágico e ilógico, onde tudo desafia as regras da realidade e da razão.",
        "capa" => "assets/alice.png",
        "autor" => "Lewis Carroll",
        "data" => "04/07/1865",
        "genero" => "fantasia"
        ],

        [
        "titulo" => "Harry Potter e a Pedra Filosofal",
        "resumo" => "Um garoto descobre que é um bruxo e inicia sua jornada em uma escola de magia, enfrentando mistérios e perigos ligados ao seu passado.",
        "capa" => "assets/hp1.png",
        "autor" => "J. K Rowling",
        "data" => "26/06/1997",
        "genero" => "fantasia"
        ],
    
        [
        "titulo" => "Dom Casmurro",
        "resumo" => "Bentinho relembra sua história com Capitu, marcada por amor, ciúme e dúvidas que colocam em questão a verdade dos acontecimentos.",
        "capa" => "assets/domcasmurro.png",
        "autor" => "Machado de Assis",
        "data" => "01/01/1900",
        "genero" => "romance"
        ],
    
        [
        "titulo" => "A Hora da Estrela",
        "resumo" => "A história simples e comovente de Macabéa, uma jovem invisível para a sociedade, em busca de sentido em uma vida difícil.",
        "capa" => "assets/ahoradaestrela.png",
        "autor" => "Clarice lispector",
        "data" => "01/10/1977",
        "genero" => "romance"
       ],
    
        [
        "titulo" => "O pequeno príncipe",
        "resumo" => "Um jovem príncipe viaja por planetas e compartilha lições profundas sobre amizade, amor e o verdadeiro valor das coisas.",
        "capa" => "assets/opequenoprincipe.png",
        "autor" => "Antoine de Saint-Exupéry",
        "data" => "06/04/1943",
        "genero" => "literatura infantojuvenil"
        ],
];

echo json_encode($livros);

?>