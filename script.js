const botao_salvar = document.querySelector('.btn-salvar');
botao_salvar.addEventListener('click', function (e){
    e.preventDefault();

    const titulo = document.querySelector('#titulo').value;
    const autor = document.querySelector('#autor').value;
    const genero = document.querySelector('#genero').value;
    const data = document.querySelector('#data').value;
    const capa = document.querySelector('#capa').files[0];
    const resumo = document.querySelector('#resumo').value;

    const livro = document.createElement('div');
    livro.classList.add('livro');

    const imagem = document.createElement('img');
    imagem.src = URL.createObjectURL(capa);
    imagem.classList.add('capa-livro');

    const titulo_livro = document.createElement('h3');
    titulo_livro.textContent = titulo; 

    const resumo_livro = document.createElement('p');
    resumo_livro.textContent = resumo;

    const botao_excluir = document.createElement('button');
    botao_excluir.textContent = "Excluir";
    botao_excluir.classList.add('btn-excluir');

     botao_excluir.addEventListener('click', function () {
        const escolha = confirm("Confirma a exclusão?")
        if (escolha)
            livro.remove();
    })

    const conteudo = document.createElement('div');
    conteudo.classList.add('conteudo');

    conteudo.appendChild(titulo_livro);
    conteudo.appendChild(resumo_livro);
    conteudo.appendChild(botao_excluir);

    livro.appendChild(imagem);
    livro.appendChild(conteudo);

    const catalogo = document.querySelector('.catalogo');
    catalogo.appendChild(livro);

    const formulario = document.querySelector('.formulario');
    formulario.reset(); 
    
});

fetch("livros.php").then(function (resposta) {
    return resposta.json();
})
.then(function (livros) {
    for(i=0; i <livros.length; i++){
        const livro = document.createElement('div')
        livro.classList.add('livro');
        const titulo = document.createElement('h3')
        const resumo = document.createElement('p');
        const imagem = document.createElement('img');
        imagem.classList.add('capa-livro');
        const conteudo = document.createElement('div');
        conteudo.classList.add('conteudo');
        const botao_excluir = document.createElement('button');
        botao_excluir.textContent = 'Excluir';
        botao_excluir.classList.add('btn-excluir');
        botao_excluir.addEventListener('click', function () {
            const escolha = confirm("Confirma a exclusão?")
            if (escolha)
                livro.remove();
        })
        titulo.textContent = livros[i].titulo;
        resumo.textContent = livros[i].resumo;
        imagem.src = livros[i].capa;
        conteudo.appendChild(titulo)
        conteudo.appendChild(resumo)
        conteudo.appendChild(botao_excluir)
        livro.appendChild(imagem)
        livro.appendChild(conteudo)
        const catalogo = document.querySelector('.catalogo');
        catalogo.appendChild(livro);
    }
})