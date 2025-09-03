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
                    <li class="nav-item"><a class="nav-link" href="{{ route('alunos.index') }}">Alunos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('turmas.index') }}">Turmas</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre">Sobre</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Conteúdo --}}
    <div class="container">
        <h1>Sobre o Sistema de Gestão Escolar</h1>
        <p>Este sistema foi desenvolvido para tornar a administração escolar mais prática, centralizando informações e agilizando processos do dia a dia.</p>

        <h2>Missão</h2>
        <p>Nosso propósito é oferecer uma solução tecnológica que auxilie escolas e instituições a organizarem seus dados acadêmicos de forma rápida, eficiente e confiável.</p>

        <h2>Recursos</h2>
        <ul>
            <li>Cadastro completo de alunos, turmas e professores.</li>
            <li>Painel administrativo intuitivo e responsivo.</li>
            <li>Segurança e integridade das informações armazenadas.</li>
        </ul>

        <h2>Fale Conosco</h2>
        <p>Para suporte ou sugestões, envie um email para: <a href="mailto:suporte@gestaoescolar.com">suporte@gestaoescolar.com</a></p>
    </div>

    <!-- Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
