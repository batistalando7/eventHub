/* 

// Sample using dynamic pages with turn.js

var numberOfPages = 1000;


// Adds the pages that the book will need
function addPage(page, book) {
    // 	First check if the page is already in the book
    if (!book.turn('hasPage', page)) {
        // Create an element for this page
        var element = $('<div />', { 'class': 'page ' + ((page % 2 == 0) ? 'odd' : 'even'), 'id': 'page-' + page }).html('<i class="loader"></i>');
        // If not then add the page
        book.turn('addPage', element, page);
        // Let's assum that the data is comming from the server and the request takes 1s.
        setTimeout(function () {
            element.html('<div class="data">Coteúdo da página ' + page + '</div>');
        }, 1000);
    }
}

$(window).ready(function () {
    $('#book').turn({
        acceleration: true,
        pages: numberOfPages,
        elevation: 50,
        gradients: !$.isTouch,
        when: {
            turning: function (e, page, view) {

                // Gets the range of pages that the book needs right now
                var range = $(this).turn('range', page);

                // Check if each page is within the book
                for (page = range[0]; page <= range[1]; page++)
                    addPage(page, $(this));

            },

            turned: function (e, page) {
                $('#page-number').val(page);
            }
        }
    });

    $('#number-pages').html(numberOfPages);

    $('#page-number').keydown(function (e) {

        if (e.keyCode == 13)
            $('#book').turn('page', $('#page-number').val());

    });
});

$(window).bind('keydown', function (e) {

    if (e.target && e.target.tagName.toLowerCase() != 'input')
        if (e.keyCode == 37)
            $('#book').turn('previous');
        else if (e.keyCode == 39)
            $('#book').turn('next');

});
 */

// Inicializa variáveis globais para armazenar o documento PDF e o número total de páginas
let pdfDoc = null; // Armazena o objeto do documento PDF carregado
let numPages = 0; // Armazena o número total de páginas do PDF

// Função para abrir e exibir um PDF como um flipbook (livro interativo)
function openFlipbook(pdfUrl) {
    // Faz uma requisição para buscar o arquivo PDF a partir da URL fornecida
    fetch(pdfUrl)
        .then(res => res.arrayBuffer()) // Converte a resposta em um ArrayBuffer (dados binários)
        .then(buffer => {
            // Converte o buffer em um Uint8Array para processamento pelo pdf.js
            const typedarray = new Uint8Array(buffer);
            
            // Define a fonte do worker para o pdf.js (necessário para processar o PDF)
            pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';
            
            // Carrega o documento PDF usando a biblioteca pdf.js
            pdfjsLib.getDocument(typedarray).promise.then(function (pdf) {
                pdfDoc = pdf; // Armazena o objeto do documento PDF
                numPages = pdf.numPages; // Obtém o número total de páginas
                $('#number-pages').text(numPages); // Atualiza a interface com o número total de páginas
                
                // Limpa o conteúdo do elemento #book antes de inicializar o flipbook
                $('#book').html('');
                
                // Inicializa o plugin turn.js para criar o efeito de flipbook no elemento #book
                $('#book').turn({
                    width: 800, // Define a largura do flipbook
                    height: 600, // Define a altura do flipbook
                    pages: numPages, // Define o número total de páginas no flipbook
                    autoCenter: true, // Centraliza automaticamente o flipbook
                    elevation: 50, // Define o efeito de elevação nas páginas ao virar
                    acceleration: true, // Ativa animações suaves para virar páginas
                    when: {
                        // Evento disparado quando uma página está sendo virada
                        turning: function (e, page) {
                            // Obtém o intervalo de páginas que precisam estar visíveis
                            var range = $(this).turn('range', page);
                            // Itera pelo intervalo e renderiza páginas que ainda não foram criadas
                            for (let p = range[0]; p <= range[1]; p++) {
                                if (!$(`#page-${p}`).length) { // Verifica se a página ainda não existe
                                    renderPage(p); // Renderiza a página
                                }
                            }
                        },
                        // Evento disparado após uma página ser virada
                        turned: function (e, page) {
                            // Atualiza o campo de entrada com o número da página atual
                            $('#page-number').val(page);
                        }
                    }
                });//fim de Inicializa o plugin turn.js para criar o efeito de flipbook no elemento #book
                
                // Renderiza a primeira página para iniciar o flipbook
                renderPage(1);
            }); //fim de Carrega o documento PDF usando a biblioteca pdf.js
        });
}

// Função para renderizar uma página específica do PDF
function renderPage(pageNum) {
    // Obtém a página especificada do documento PDF
    pdfDoc.getPage(pageNum).then(function (page) {
        // Define a escala da página (1.5x para melhor resolução)
        const viewport = page.getViewport({ scale: 1.5 });
        // Cria um elemento canvas para renderizar a página
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d'); // Obtém o contexto 2D do canvas
        canvas.height = viewport.height; // Define a altura do canvas
        canvas.width = viewport.width; // Define a largura do canvas
        
        // Renderiza a página no canvas
        page.render({ canvasContext: context, viewport: viewport }).promise.then(function () {
            // Cria uma imagem a partir do conteúdo do canvas
            const img = document.createElement('img');
            img.src = canvas.toDataURL(); // Converte o canvas em uma imagem (formato base64)
            img.className = "img-fluid"; // Adiciona a classe CSS para responsividade
            // Cria um elemento div para a página com um ID único
            const pageDiv = $('<div />', {
                class: 'page', // Classe CSS para estilização
                id: 'page-' + pageNum // ID único para a página
            }).append(img); // Adiciona a imagem ao div
            // Adiciona a página ao flipbook na posição correta
            $('#book').turn('addPage', pageDiv, pageNum);
        });
    });
}

// Botões de navegação
// Associa um evento de clique ao botão de página anterior
$('#prev-page').on('click', function () {
    $('#book').turn('previous'); // Vira para a página anterior
});

// Associa um evento de clique ao botão de próxima página
$('#next-page').on('click', function () {
    $('#book').turn('next'); // Vira para a próxima página
});

// Associa um evento de tecla ao campo de entrada do número da página
$('#page-number').keydown(function (e) {
    if (e.keyCode == 13) { // Verifica se a tecla pressionada é Enter (código 13)
        $('#book').turn('page', $(this).val()); // Navega para a página especificada
    }
});