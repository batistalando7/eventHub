document.addEventListener('DOMContentLoaded', function () {
    // Elementos principais
    const tipoSelect = document.getElementById('schoolType');
    const nivelSelect = document.getElementById('schoolLevel');
    const turnoSelect = document.getElementById('bout');
    const categoriaSelect = document.getElementById('schoolCategory');

    // Divs de exibição
    const nivelDiv = document.getElementById('nivel-div');
    const turnoDiv = document.getElementById('turno-div');
    const categoriaDiv = document.getElementById('categoria-div');

    // Dados dinâmicos
    const data = {
        niveis: ['Iº Ano', 'IIº Ano', 'IIIº Ano', 'IVº Ano', 'Vº Ano'],
        turnos: [
            { value: 'manha', text: 'Manhã' },
            { value: 'tarde', text: 'Tarde' },
            { value: 'noite', text: 'Noite' }
        ],
        categorias: [
            { value: 'a', text: 'Categoria A' },
            { value: 'b', text: 'Categoria B' },
            { value: 'c', text: 'Categoria C' },
            { value: 'd', text: 'Categoria D' }
        ]
    };

    // Quando o tipo de escola muda
    tipoSelect.addEventListener('change', function () {
        const tipo = this.value;

        // Resetar selects
        resetSelect(nivelSelect);
        resetSelect(turnoSelect);
        resetSelect(categoriaSelect);

        // Esconder tudo inicialmente
        nivelDiv.style.display = 'none';
        turnoDiv.style.display = 'none';
        categoriaDiv.style.display = 'none';

        if (tipo) {
            // Mostrar níveis (para ambos os tipos)
            nivelDiv.style.display = 'block';
            data.niveis.forEach(nivel => {
                addOption(nivelSelect, nivel, nivel);
            });

            // Mostrar turnos (para ambos os tipos)
            turnoDiv.style.display = 'block';
            data.turnos.forEach(turno => {
                addOption(turnoSelect, turno.value, turno.text);
            });

            // Mostrar categorias apenas para privado
            if (tipo === 'privada') {
                categoriaDiv.style.display = 'block';
                data.categorias.forEach(cat => {
                    addOption(categoriaSelect, cat.value, cat.text);
                });
            }
        }
    });

    // Funções auxiliares
    function addOption(select, value, text) {
        const option = document.createElement('option');
        option.value = value;
        option.textContent = text;
        select.appendChild(option);
    }

    function resetSelect(select) {
        select.innerHTML = '<option value="">Selecione uma das opções</option>';
    }
});

document.getElementById('schoolType').addEventListener('change', function () {
    let categoriaDiv = document.getElementById('categoria-div');
    let categoriaInput = document.getElementById('schoolCategory');

    if (this.value === privada) {
        categoriaDiv.style.display = 'block';
        categoriaInput.disabled = false;
    } else {
        categoriaDiv.style.display = 'none';
        categoriaInput.disabled = true;
    }
});
