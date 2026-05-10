document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("subscribeForm");
    const messageBox = document.getElementById("subscribeMessage");
    const popup = document.querySelector(".popup-subscribe-area");

    if (form) {
        form.addEventListener("submit", async function (e) {
            e.preventDefault();

            let url = form.dataset.action;
            let formData = new FormData(form);

            try {
                let response = await fetch(url, {
                    method: "POST",
                    credentials: "same-origin",
                    body: formData
                });

                let data = await response.json();

                if (data.success) {
                    messageBox.innerHTML = `<span style="color: green">${data.message}</span>`;
                } else if (data.status === "subscribed") {
                    messageBox.innerHTML = `<span style="color: blue">${data.message}</span>`;
                } else {
                    messageBox.innerHTML = `<span style="color: red">${data.message}</span>`;
                }

                // Fecha popup após mensagem
                setTimeout(() => {
                    if (popup) popup.style.display = "none";
                }, 1500);

            } catch (error) {
                console.error("Erro:", error);
                messageBox.innerHTML = `<span style="color: red">Ocorreu um erro, tente novamente.</span>`;
            }
        });
    }
});
