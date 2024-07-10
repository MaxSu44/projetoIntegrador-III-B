<!-- Cadastro Aluno IMDAZ -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDAZ - Criar cadastro: Aluno</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include("../Classes/Pessoa.php");
    include("../Classes/Aluno.php");

    // Capturando os dados do formulário com o método POST
    $nome = $_POST['nome'] ?? "";
    $cpf = $_POST['cpf'] ?? "";
    $nascimento = $_POST['nascimento'] ?? "";
    $endereco = $_POST['endereco'] ?? "";
    $telefone = $_POST['telefone'] ?? "";
    $matricula = $_POST['matricula'] ?? "";
    $curso = $_POST['curso'] ?? "";
    $nome_respons = $_POST['nome_respons'] ?? "";
    $notas = $_POST['notas'] ?? "";
    $dataIngresso = $_POST['dataIngresso'] ?? "";
    ?>

    <header class="hero">
        <nav class="nav_hero">
            <div class="container nav_container">
                <div class="logo">
                    <h2 class="logo_name">Instituto de Menores Dom Antônio Zattera<span class="point">.</span></h2>
                </div>
            </div>
        </nav>
        <section id="inicio" class="container hero_main">
            <h1 class="title">
                <span class="title_active">Projeto Integrador III - B</span>
            </h1>
        </section>
    </header>
    <main>
        <section id="sobre" class="services">
            <div class="container">
                <h2 class="subtitle">Cadastro: Aluno<span class="point">.</span></h2>
                <p class="copy_section">
                    Complete com os dados solicitados para a conclusão do cadastro.
                </p>
            </div>
            <div class="container-form">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="container-form1">
                        <p id="form">
                            <label for="nome">Nome:</label><br>
                            <input type="text" id="nome" name="nome" value="<?= $nome ?>" required>
                        </p>
                        <p id="form">
                            <label for="cpf">CPF:</label><br>
                            <input type="text" id="cpf" name="cpf" value="<?= $cpf ?>" required>
                        </p>
                        <p id="form">
                            <label for="nascimento">Nascimento:</label><br>
                            <input type="date" id="nascimento" name="nascimento" value="<?= $nascimento ?>" required>
                        </p>
                        <p id="form">
                            <label for="endereco">Endereço:</label><br>
                            <input type="text" id="endereco" name="endereco" value="<?= $endereco ?>" required>
                        </p>
                        <p id="form">
                            <label for="telefone">Telefone:</label><br>
                            <input type="text" id="telefone" name="telefone" value="<?= $telefone ?>" required>
                        </p>
                    </div>
                    <div class="container-form2">
                        <p id="form">
                            <label for="matricula">N. Matrícula:</label><br>
                            <input type="text" id="matricula" name="matricula" value="<?= $matricula ?>" required>
                        </p>
                        <p id="form">
                            <label for="curso">Curso:</label><br>
                            <input type="text" id="curso" name="curso" value="<?= $curso ?>" required>
                        </p>
                        <p id="form">
                            <label for="nome_respons">Responsável:</label><br>
                            <input type="text" id="nome_respons" name="nome_respons" value="<?= $nome_respons ?>" required>
                        </p>
                        <p id="form">
                            <label for="notas">Curso:</label><br>
                            <input type="text" id="notas" name="notas" value="<?= $notas ?>" required>
                        </p>
                    </div>
                    <div class="container-btn">
                        <div>
                            <p id="form">
                                <button class="btn btn-success" type="submit"><a href="#resultado-cadastro">Enviar</a></button>
                            </p>
                        </div>
                        <div>
                            <p id="form">
                                <button class="btn btn-success" type="submit"><a href="../index.php">Voltar</a></button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section id="conteudos" class="proyectos container">
            <h2 class="subtitle">Cadastro: Aluno<span class="point">.</span></h2>
            <article class="container-bg">
                <div class="card-cadastro">
                    <div class="cards_text">
                        <h3 class="card_title">Cadastro realizado com sucesso!<span class="point">.</span></h3>
                        <div class="container-cadastro">
                            <div class="col-expand-lg col-sm-4" id="resultado-cad">
                                <section id="resultado-cadastro">
                                    <?php
                                    //Exibindo os dados informados pelo usuário
                                    echo "<b>Nome:</b> $nome<br>
                            <b>CPF:</b> $cpf<br>
                            <b>Data de Nascimento:</b> $nascimento<br>
                            <b>Endereço:</b> $endereco<br>
                            <b>Responsavel:</b> $nome_respons<br>
                            <b>Curso:</b> $curso<br>
                            <b>Matricula:</b> $matricula<br>
                            <b>Endereco:</b> $endereco<br>
                            <b>Data de Ingresso:</b> $dataIngresso</p>";
                                    ?>
                                    <div class="container-btn">
                                        <p id="form">
                                            <button class="btn btn-success" type="submit"><a href="../index.php">Voltar</a></button>
                                        </p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</body>

</html>