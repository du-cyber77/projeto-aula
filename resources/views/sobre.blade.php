<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">MinhaApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre">Alunos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('turmas.index') }}">Turmas</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Sobre</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Conteúdo --}}
    <div class="container">
        <h1>Sobre o Sistema de Cadastro de Alunos</h1>
        <p>Bem-vindo ao nosso sistema de cadastro de alunos! Este site foi criado para facilitar o cadastro e a gestão de alunos de forma simples e eficiente.</p>

        <h2>Objetivo</h2>
        <p>Nosso objetivo é fornecer uma plataforma onde escolas e instituições educacionais possam gerenciar o cadastro de alunos, mantendo os dados organizados e acessíveis.</p>

        <h2>Funcionalidades</h2>
        <ul>
            <li>Cadastro de alunos com informações como nome, idade, email e telefone.</li>
            <li>Interface simples e amigável.</li>
            <li>Armazenamento seguro das informações dos alunos.</li>
        </ul>

        <h2>Contato</h2>
        <p>Se tiver alguma dúvida ou sugestão, entre em contato conosco através do email: <a href="mailto:contato@escola.com">contato@escola.com</a></p>
    </div>

    <!-- Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
