document.addEventListener('DOMContentLoaded', () => {
    // Mostrar/esconder formulário de resposta
    document.querySelectorAll('.reply-toggle').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.id;
            document.getElementById(`reply-form-${id}`).classList.toggle('d-none');
        });
    });

    // Mostrar/esconder respostas
    document.querySelectorAll('.toggle-replies').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.id;
            const replies = document.getElementById(`replies-${id}`);
            replies.classList.toggle('d-none');
            btn.textContent = replies.classList.contains('d-none')
                ? `Ver ${replies.childElementCount} resposta(s)`
                : "Esconder respostas";
        });
    });
});

