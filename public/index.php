<?php
// Define any variables or functions here if needed
$title = "Ironberg";
$logo = "../assets/images/ironberg-id-logo-branco.png";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="icon" href="<?php echo $logo; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title><?php echo $title; ?></title>
</head>
<body>

    <header>
        <!-- Logo da Ironberg -->
        <img src="<?php echo $logo; ?>" alt="Logo Ironberg" class="logo">

        <!-- Barra de navegação -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shopping</a></li>
                <li><a href="#" class="login">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <section class="home">
        <h1 class="home_title"><?php echo $title; ?></h1>
        <h2 class="home_subtitle">O maior centro de treinamento da américa latina</h2>
        <div class="arrow_bottom">
            <i class="bi bi-arrow-down"></i>
        </div>
    </section>

    <section class="champions">
        <h3 class="champions_title">Junte-se ao nosso grupo de <span>campeões</span></h3>
        <div class="pictures">
            <figure class="picture_down">
                <img src="../assets/images/1704229324659479ccec219_1704229324_3x2_md.jpg" alt="Tenente Breno">
            </figure>
            <figure>
                <img src="../assets/images/Imagem-do-WhatsApp-de-2023-11-04-as-14.44.10_61bebafd.webp" alt="Ramon Dino" class="picture_up">
            </figure>
            <figure class="picture_down">
                <img src="../assets/images/francielle-mattos-impressionou-os-jurados-e-fotografos-com-seu-shape-no-mr-olympia-1694784135879_v2_3x4.jpg" alt="Francielle Matos">
            </figure>
            <figure>
                <img src="../assets/images/caike-pro.jpg" alt="Caike Pro" class="picture_up">
            </figure>
        </div>
        <button class="submit">Matricule-se já!</button>
    </section>

    <section class="franqueado">
        <h1 class="franqueado_title">Seja um franqueado!</h1>
        <h2 class="franqueado_subtitle">Seja investidor do centro de treinamento que vai dominar o mundo!</h2>
        <button class="franqueado_button">Saiba mais</button>
    </section>

    <section class="planos">
        <h1 class="planos_title">Escolha o que mais combina com você</h1>
        <div class="container">
            <div class="card">
                <h1>Anual</h1>
                <ul>
                    <li>Maior economia</li>
                    <li>Compromisso com resultados</li>
                    <li>Benefícios exclusivos</li>
                    <li>Conveniência financeira</li>
                    <li>Bônus de fidelidade</li>
                </ul>
            </div>

            <div class="card">
                <h1>Semestral</h1>
                <ul>
                    <li>Flexibilidade com economia</li>
                    <li>Foco no médio prazo</li>
                    <li>Promoções exclusivas</li>
                    <li>Menos burocracia</li>
                    <li>Motivação garantida</li>
                </ul>
            </div>

            <div class="card">
                <h1>Mensal</h1>
                <ul>
                    <li>Sem compromisso de longo prazo</li>
                    <li>Flexibilidade total</li>
                    <li>Promoções exclusivas</li>
                    <li>Acesso total aos serviços</li>
                    <li>Início imediato</li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        © 2024 Ironberg Fitness. Todos os direitos reservados.
    </footer>
</body>
</html>