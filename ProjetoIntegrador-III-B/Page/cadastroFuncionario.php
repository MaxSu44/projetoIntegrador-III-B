<!-- Cadastro Funcionário IMDAZ -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDAZ - Criar cadastro: Funcionário</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include("../Classes/Pessoa.php");
    include("../Classes/Funcionario.php");

    // Capturando os dados do formulário com o método POST
    $nome = $_POST['nome'] ?? "";
    $cpf = $_POST['cpf'] ?? "";
    $nascimento = $_POST['nascimento'] ?? "";
    $endereco = $_POST['endereco'] ?? "";
    $telefone = $_POST['telefone'] ?? "";
    $cargo = $_POST['cargo'] ?? "";
    $salario = $_POST['salario'] ?? "";
    $dataIngresso = $_POST['dataIngresso'] ?? "";
    ?>
    <!-- Área onde fica o Navbar -->
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
                <h2 class="subtitle">Cadastro: Funcionário<span class="point">.</span></h2>
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
                            <label for="endereco">Endereço:</label><br>
                            <input type="text" id="endereco" name="endereco" value="<?= $endereco ?>" required>
                        </p>
                        <p id="form">
                            <label for="nascimento">Nascimento:</label><br>
                            <input type="date" id="nascimento" name="nascimento" value="<?= $nascimento ?>" required>
                        </p>

                    </div>
                    <div class="container-form2">
                        <p id="form">
                            <label for="telefone">Telefone:</label><br>
                            <input type="text" id="telefone" name="telefone" value="<?= $telefone ?>" required>
                        </p>
                        <p id="form">
                            <label for="cargo">Cargo:</label><br>
                            <input type="text" id="cargo" name="cargo" value="<?= $cargo ?>" required>
                        </p>
                        <p id="form">
                            <label for="salario">Salário:</label><br>
                            <input type="text" id="salario" name="salario" value="<?= $salario ?>" required>
                        </p>
                        <p id="form">
                            <label for="dataIngresso">Ingresso:</label><br>
                            <input type="date" id="dataIngresso" name="dataIngresso" value="<?= $dataIngresso ?>" required>
                        </p>
                    </div>
                    <div class="container-btn">
                        <div>
                            <p id="form">
                                <button class="btn btn-success" href="#resultado-cadastro" type="submit"><a ">Enviar</a></button>
                            </p>
                        </div>
                        <div>
                            <p id=" form">
                                        <button class="btn btn-success" type="submit"><a href="../index.php">Voltar</a></button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section id="conteudos" class="proyectos container">
            <h2 class="subtitle">Cadastro: Funcionário<span class="point">.</span></h2>
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
                            <b>Telefone:</b> $telefone<br>
                            <b>Cargo:</b> $cargo<br>
                            <b>Salário:</b> $salario<br>
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