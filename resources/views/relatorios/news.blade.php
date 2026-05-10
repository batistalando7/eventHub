<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Relatório de Notícias</title>

    <style>
        @page {
            margin: 120px 40px 80px 40px;
            /* topo, direita, baixo, esquerda */
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #333;
            position: relative;
        }

        header .info,
        p {
            font-size: 14.5px;
            color: #3a3a3a;
            margin-top: 5px;
        }

        header .title {
            font-size: 25px;
            font-weight: bold;
            border-bottom: 1px solid #ccc;
            margin-top: 5px;
            margin-left: 2rem
        }

        header img {
            height: 65px;
            margin-bottom: 5px;
            top: -90px;
            position: fixed;
            left: 0;
            right: 0;
            height: 80px;
            text-align: center;
            margin-left: 25rem;
        }

        /* Rodapé com paginação */
        footer {
            position: fixed;
            bottom: -60px;
            left: 0;
            right: 0;
            height: 50px;
            text-align: center;
            font-size: 11px;
            color: #555;
            border-top: 1px solid #ccc;
            padding-top: 5px;
        }

        footer .page-number:after {
            content: counter(page);
        }

        /* Marca d'água */
        .watermark {
            position: fixed;
            top: 500px;
            left: 150px;
            opacity: 0.09;
            z-index: -1;
            width: 500px;
        }

        /* Tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        table thead {
            background: #ddd;
        }

        table th,
        table td {
            padding: 8px 6px;
            border: 1px solid #ccc;
        }

        .subtitle {
            font-size: 10px;
            color: #777;
        }
    </style>
</head>

<body>

    <!-- Marca d’água -->
    <img src="{{ public_path('site/assets/img/3-Photoroom.png') }}" class="watermark">

    <!-- Cabeçalho -->
    <header>
        <img src="{{ public_path('site/assets/img/3-Photoroom.png') }}" alt="Logo" class="logo">

        <br>

        <div class="info">
            <p>Angola - Luanda</p>
            <p>Telef. (+244) 922 334 500 / 934 100 201</p>
            <p>E-mail: assessorarte@gmail.com</p>
            <p>Site: www.assessorarte.gov.ao</p>
            <p>Relatório gerado em: {{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}</p>
        </div>

        <br>

        <div class="title">
            {{ $titulo }}
        </div>
    </header>

    <!-- Rodapé -->
    <footer>
        Página <span class="page-number"></span>
    </footer>


    <main>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Título / Subtítulo</th>
                    <th>Categoria</th>
                    <th>Tipo de Notícia</th>
                    <th>Estado da Notícia</th>
                    <th>Publicação</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($reports as $item)
                    <tr>
                        <td>{{ $item->id }}</td>

                        <td>
                            <strong>{{ $item->title }}</strong><br>
                            <span class="subtitle">{{ $item->subtitle }}</span>
                        </td>

                        <td>{{ $item->category->name ?? '-' }}</td>

                        <td>{{ ucfirst($item->detach) }}</td>

                        <td>{{ ucfirst($item->status) }}</td>

                        <td>{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align:center;">Nenhuma Notícia encontrada de momento.</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </main>

</body>

</html>
