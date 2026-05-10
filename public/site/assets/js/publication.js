// versão otimizada
pdfjsLib.GlobalWorkerOptions.workerSrc =
    "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js";

let currentPDF = null;
let totalPages = 0;
let currentPage = 1;
let flipbook = null;

// Função principal: abre o flipbook com o PDF
async function openFlipbook(pdfUrl) {
    const bookContainer = document.getElementById("book");

    // Destroi instância anterior, se existir
    if (flipbook && typeof flipbook.turn === "function" && flipbook.data("turn")) {
        try {
            flipbook.turn("destroy").remove();
        } catch { }
    }
    bookContainer.innerHTML = '<div id="flipbook" class="flipbook"></div>';
    flipbook = $("#flipbook");

    // Carrega o PDF
    currentPDF = await pdfjsLib.getDocument(pdfUrl).promise;
    totalPages = currentPDF.numPages;
    currentPage = 1;

    const pagesElems = [];

    // Renderiza cada página do PDF
    for (let i = 1; i <= totalPages; i++) {
        const page = await currentPDF.getPage(i);
        const viewport = page.getViewport({ scale: 1.2 });

        const canvas = document.createElement("canvas");
        const ctx = canvas.getContext("2d");
        canvas.width = viewport.width;
        canvas.height = viewport.height;

        await page.render({ canvasContext: ctx, viewport }).promise;

        const pageDiv = document.createElement("div");
        pageDiv.className = "page";
        canvas.style.width = "100%";
        canvas.style.height = "auto";
        pageDiv.appendChild(canvas);
        pagesElems.push(pageDiv);
    }

    // Adiciona página em branco se for ímpar
    if (pagesElems.length % 2 !== 0) {
        const blank = document.createElement("div");
        blank.className = "page blank";
        pagesElems.push(blank);
        totalPages++;
    }

    // Define capa e contracapa
    if (pagesElems.length > 0) pagesElems[0].classList.add("hard");
    if (pagesElems.length > 1)
        pagesElems[pagesElems.length - 1].classList.add("hard");

    // Anexa páginas ao flipbook
    pagesElems.forEach((el) => flipbook.append(el));

    // Inicializa Turn.js
    flipbook.turn({
        width: Math.min(1000, document.getElementById("book").clientWidth || 1000),
        height: 600,
        autoCenter: true,
        elevation: 50,
        gradients: true,
        acceleration: true,
        display: window.innerWidth < 768 ? "single" : "double",
        when: {
            turned: function (e, page) {
                currentPage = page;
                updatePageDisplay();
            },
        },
    });

    // Ajuste fino do tamanho do flipbook
    try {
        const firstCanvas = flipbook.find(".page canvas")[0];
        if (firstCanvas) {
            const pageWidth = firstCanvas.width;
            const modalWidth = document.getElementById("book").clientWidth || 900;

            if (flipbook.turn("display") === "double") {
                const pageDesired = Math.min(pageWidth, Math.floor(modalWidth * 0.46));
                const bookW = pageDesired * 2;
                const bookH = Math.floor(
                    (firstCanvas.height * bookW) /
                    (pageWidth * (flipbook.turn("display") === "double" ? 2 : 1))
                );
                flipbook.turn("size", bookW, bookH);
            } else {
                const bookW = Math.min(pageWidth, Math.floor(modalWidth * 0.9));
                const bookH = Math.floor((firstCanvas.height * bookW) / pageWidth);
                flipbook.turn("size", bookW, bookH);
            }
        }
    } catch (err) {
        console.warn("Ajuste fino do tamanho falhou:", err);
    }

    updatePageDisplay();
}

// Atualiza contador de páginas
function updatePageDisplay() {
    const input = document.getElementById("page-number");
    if (input) input.value = `${currentPage} / ${totalPages}`;
}

// Navegação pelos botões
document.addEventListener("click", function (e) {
    if (!flipbook) return;
    if (e.target && e.target.id === "next-page") {
        flipbook.turn("next");
    } else if (e.target && e.target.id === "prev-page") {
        flipbook.turn("previous");
    }
});

// Abre PDF ao clicar na miniatura ou título
document.querySelectorAll(".openModalBtn").forEach((btn) => {
    btn.addEventListener("click", function () {
        const title = this.dataset.title || "Publicação";
        const fileUrl = this.dataset.file;

        const modalTitleEl =
            document.getElementById("exampleModalLabel") ||
            document.querySelector(".modal-title");
        if (modalTitleEl) modalTitleEl.textContent = title;

        const modal = document.getElementById("exampleModal");
        modal.addEventListener(
            "shown.bs.modal",
            function () {
                openFlipbook(fileUrl);
            },
            { once: true }
        );
    });
});

// Limpa memória ao fechar o modal
const modalEl = document.getElementById("exampleModal");
if (modalEl) {
    modalEl.addEventListener("hidden.bs.modal", function () {
        if (flipbook && flipbook.data && flipbook.data("turn")) {
            try {
                flipbook.turn("destroy").remove();
            } catch { }
        }
        const book = document.getElementById("book");
        if (book) book.innerHTML = "";
        flipbook = null;
        currentPDF = null;
        totalPages = 0;
        currentPage = 1;
    });
}
