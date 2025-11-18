<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="style.css" />

<title>Portfólio - RHUAN PABLO</title>

<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
href="https://fonts.googleapis.com/css2?family=Bitcount:wght@100..900&family=Sora:wght@100..800&display=swap"
rel="stylesheet"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css"
/>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>
</head>
<body>
<header>
<div class="container nav-wrapper">
<h1 class="logo">RHUAN<span class="realce">PABLO</span></h1>

 <input type="checkbox" id="menu-toggle" />
<label for="menu-toggle" class="menu-icon">&#9776;</label>

<nav class="navbar">
 <a href="#sobre">Sobre</a>
<a href="#skills">Habilidades</a>
 <a href="#experiencia">Experiência</a>
<a href="#sistemas">Sistemas</a>
<a href="#contato">Contato</a>
</nav>
</div>
</header>

<section class="hero">
<div class="container hero-grid">
<div class="hero-img">
<img
src="assets/imgs/foto-perfil.png"
alt="Foto de perfil"
class="profile-img"
/>
</div>
<div class="hero-text">
<h2><span class="typed-text" id="typed"></span></h2>
<p>
Profissional cursando Análise e Desenvolvimento de Sistemas com
experiência consolidada em Departamento Pessoal e Recursos Humanos.
Foco na gestão de processos administrativos e tecnológicos.
</p>
<a href="#experiencia" class="btn btn-primary">Ver Minha Experiência</a>
</div>
</div>
</section>

<section id="sobre" class="section">
<div class="container about-text">
<h2 class="section-title">Sobre Mim</h2>
<p class="section-text">
Sou Rhuan Pablo Ferreira Cordeiro, cursando o segundo semestre do
Superior de Tecnologia em Análise e Desenvolvimento de Sistemas(UDF).
Minha jornada combina o interesse pela tecnologia e análise de dados com a
experiência prática em rotinas de Departamento Pessoal e Recursos Humanos.
</p>
<p class="section-text">
Tenho atuado como Assistente de Departamento Pessoal no GRUPO SKS, onde sou
responsável pela gestão completa do ponto eletrônico, admissão de colaboradores,
gestão de benefícios corporativos e suporte geral aos funcionários
</p>
<p class="section-text">
 Minha trajetória na empresa começou como Jovem Aprendiz e evoluiu para Auxiliar de RH,
o que me deu uma base sólida em recrutamento, seleção e processos de DP.
Tenho excelente relacionamento interpessoal, sou organizado, proativo e
 focado em atenção a detalhes em processos administrativos.
</p>
</div>
</section>

<section id="skills" class="section">
<div class="container">
<h2>Habilidades e Informática</h2>
<div class="skills-grid">
<div class="skill-card">
<i class="fas fa-file-excel colored"></i>
<span>Excel Avançado</span>
</div>
<div class="skill-card">
<i class="fas fa-laptop-code colored"></i>
<span>Pacote Office</span>
</div>
<div class="skill-card">
<i class="fas fa-database colored"></i>
<span>SQL Básico</span>
</div>
<div class="skill-card">
<i class="fas fa-chart-bar colored"></i>
<span>Capacidade Analítica</span>
</div>
<div class="skill-card">
<i class="fas fa-business-time colored"></i>
<span>Gestão de Ponto</span>
</div>
<div class="skill-card">
<i class="fas fa-handshake colored"></i>
<span>Relação Interpessoal</span>
</div>
<div class="skill-card">
<i class="fas fa-cogs colored"></i>
<span>Sistemas DP/RH</span>
</div>
<div class="skill-card">
<i class="fas fa-lightbulb colored"></i>
<span>Proatividade</span>
</div>
</div>
</div>
</section>

<section id="experiencia" class="section">
<div class="container">
<h2>Experiência Profissional</h2>
<div class="projetos-grid">
<div class="projeto-card">
<h3>Assistente de Departamento Pessoal</h3>
<p>
GRUPO SKS (Brasília - DF) | Período: 01/05/2024 - Atual.
</p>
<ul>
<li>- Gestão de ponto eletrônico, relatórios, banco de horas e importação de verbas para folha de pagamento.</li>
<li>- Admissão, atualização cadastral e emissão de relatórios para lideranças.</li>
<li>- Administração de benefícios corporativos (VT, VA, Restaurante).</li>
</ul>
</div>

<div class="projeto-card">
<h3>Auxiliar de Recursos Humanos</h3>
<p>
GRUPO SKS (Brasília - DF) | Período: 01/09/2023 - 30/04/2024.
</p>
<ul>
<li>- Atuação em Recrutamento e Seleção: divulgação de vagas, triagem de currículos e entrevistas.</li>
 <li>- Apoio na Gestão do ponto eletrônico e na gestão de benefícios corporativos.</li>
</ul>
</div>

<div class="projeto-card">
<h3>Jovem Aprendiz</h3>
<p>
GRUPO SKS(Brasília - DF) | Período: 15/05/2023 - 31/08/2023.
</p>
<ul>
<li>- Realização de entrevistas para cargos operacionais.</li>
<li>- Organização de documentação para admissão.</li>
<li>- Responsável pela gestão do ponto eletrônico de mais de 200 colaboradores.</li>
</ul>
</div>
</div>
</div>
</section>


<section id="sistemas" class="section">
<div class="container">
<h2>Sistemas que possuo conhecimento</h2>
<div class="projetos-grid">

<div class="projeto-card">
<img
src="assets/imgs/card-project-1.png"
alt="Print do projeto 1"
/>
<h3>Sistema Dominio</h3>
<p>
O Sistema Domínio é um software contábil da Thomson Reuters usado por escritórios de contabilidade e departamentos financeiros. Ele reúne, em uma única plataforma, ferramentas para contabilidade, escrita fiscal, folha de pagamento, gestão de honorários, eSocial, integração com clientes e outras rotinas obrigatórias.
</p>
<div class="btns">
<a href="https://www.dominioweb.com.br/">Ver detalhes</a>
</div>
</div>

<div class="projeto-card">
<img
src="assets/imgs/card-project-2.png"
alt="Print do projeto 2"
/>
<h3>Forponto</h3>
<p>
Sistema de controle de ponto e gestão de trabalho mais abrangente do mercado e totalmente aderente a Portaria 671/2021 do MTP. Premiado como referência, o Forponto controla a frequência de centenas de milhares de profissionais em todo o Brasil.
</p>
<div class="btns">
<a href="https://rapidonet.com.br/forponto/">Ver detalhes</a>
</div>
</div>

<div class="projeto-card">
<img
src="assets/imgs/card-project-3.png"
alt="Print do projeto 3"
/>
<h3>Caju benefícios</h3>
<p>
O Caju Benefícios é uma plataforma brasileira de gestão de benefícios corporativos. Ele oferece um cartão multibenefícios (Visa) que reúne vários tipos de benefícios em um só lugar,como:
Alimentação,
Mobilidade,
Saúde,
Home office
e Bem-estar.
</p>
<div class="btns">
<a href="https://caju.com.br/cartao-multibeneficios/">Ver detalhes</a>
</div>
</div>

<div class="projeto-card">
<img
src="assets/imgs/card-project-4.png"
alt="Print do projeto 4"
/>
<h3>Data Sul</h3>
<p>
O Datasul é um ERP integrado, ou seja, um sistema que reúne e centraliza diversas áreas da empresa em uma única plataforma. Ele foi amplamente usado principalmente a partir dos anos 1990 e 2000 e ainda é utilizado por muitas organizações, embora esteja em fase de modernização pela TOTVS.
</p>
<div class="btns">
<a href="https://datasul.com.br/">Ver detalhes</a>
</div>
</div>

<div class="projeto-card">
<img
src="assets/imgs/card-project-5.png"
alt="Print do projeto 5"
/>
<h3>Solides tangerino</h3>
<p>
O Sólides Tangerino é um sistema de ponto eletrônico digital integrado à plataforma de RH da Sólides. Ele surgiu após a aquisição da startup Tangerino, especializada em controle de ponto via aplicativo.
</p>
<div class="btns">
<a href="https://solides.com.br/controle-de-ponto-digital/">Ver detalhes</a>
</div>
</div>

<div class="projeto-card">
<img
src="assets/imgs/card-project-6.png"
alt="Print do projeto 6"
/>
<h3>Sodexo</h3>
<p>
A Sodexo é uma empresa multinacional francesa que atua em três áreas principais:
Alimentação, facilities e benefícios
</p>
<div class="btns">
<a href="https://www.pluxee.com.br/">Ver detalhes</a>
</div>
</div>
<div class="projeto-card">
<img
src="assets/imgs/card-project-7.png"
alt="Print do projeto 7"
/>
<h3>Fusion Platform</h3>
<p>
É uma plataforma para empresas corporativas focada em automação de processos (BPMS), gestão de documentos (ECM), análise de dados (analytics), gestão de riscos, e assinatura eletrônica.
</p>
<div class="btns">
<a href="https://www.neomind.com.br/fusion-platform/">Ver detalhes</a>
</div>
</div>

</div>
</div>
</section>

<section id="contato" class="section">
    <div class="container contato-card">
        <h2>Contato</h2>
        <p>Entre em contato por e-mail, LinkedIn ou telefone! Ou envie uma mensagem aqui:</p>
        
        <script>
            // Lógica do Efeito Digitando 
            const text = "Olá, Eu sou o Rhuan!";
            const typedEl = document.getElementById("typed");

            let i = 0;
            function digitar() {
                if (i < text.length) {
                    typedEl.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(digitar, 120);
                }
            }
            window.addEventListener("DOMContentLoaded", digitar);
            
            // código para status de envio/ação CRUD
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            let message = '';
            
            if (status === 'success') {
                message = '✅ Comentário enviado e salvo com sucesso!';
            } else if (status === 'deleted') {
                message = '🗑️ Comentário excluído com sucesso.';
            } else if (status === 'updated') {
                message = '✏️ Comentário atualizado com sucesso.';
            }

            if (message) {
                const contatoCard = document.querySelector('.contato-card');
                const statusMessage = document.createElement('p');
                statusMessage.textContent = message;
                statusMessage.style.color = status === 'deleted' ? 'orange' : 'green';
                statusMessage.style.fontWeight = 'bold';
                statusMessage.style.marginBottom = '20px';
                
                const form = document.getElementById('contact-form');
                if (form) {
                    contatoCard.insertBefore(statusMessage, form);
                }

                setTimeout(() => {
                    statusMessage.remove();
                    // Limpa o parâmetro da URL para que a mensagem não reapareça
                    history.replaceState(null, '', window.location.pathname + window.location.hash);
                }, 5000);
            }
        </script>

        <form action="salvar_comentario.php" method="POST" id="contact-form" class="contact-form">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="comentario">Comentário:</label>
                <textarea id="comentario" name="comentario" rows="5" placeholder="Escreva seu comentário aqui..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>

        <hr>

        <h3>Comentários Recentes do Banco de Dados</h3>
        <ul id="comments-list" class="comments-list">
            <?php
            // CONFIGURAÇÕES DE CONEXÃO
            $servername = "localhost";
            $username = "root";       
            $password = "";           
            $dbname = "portfolio_db"; 
            $port = 3306;
            
            $conn = new mysqli($servername, $username, $password, $dbname, $port);
            
            if (!$conn->connect_error) {
                $sql = "SELECT id, nome, comentario_texto, data_envio FROM comentarios ORDER BY data_envio DESC";
                $result = $conn->query($sql);
                
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $data_formatada = date("d/m/Y", strtotime($row['data_envio']));
                        $id = htmlspecialchars($row['id']);
                        $nome = htmlspecialchars($row['nome']);
                        $texto = nl2br(htmlspecialchars($row['comentario_texto']));
                        
                        echo "<li class='comment-item'>";
                        echo "<strong>$nome</strong> ($data_formatada):<br>";
                        echo "$texto"; 

                        // Bloco dos botões
                        echo "<div class='comment-actions'>";
                        echo "<a href='editar_comentario.php?id=$id' class='btn-action btn-edit'>Editar</a>"; 
                        echo "<form action='deletar_comentario.php' method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='id' value='$id'>";
                        echo "<button type='submit' class='btn-action btn-delete' onclick=\"return confirm('Tem certeza que deseja excluir este comentário?');\">Excluir</button>";
                        echo "</form>";
                        echo "</div>"; 
                        
                        echo "</li>";
                    }
                } else {
                    echo "<li>Nenhum comentário ainda. Seja o primeiro!</li>";
                }
            } else {
                echo "<li style='color: red;'>Erro: Não foi possível conectar ao banco de dados. Verifique o XAMPP.</li>";
            }
            
           
            if (isset($conn) && $conn && !$conn->connect_error) {
                $conn->close();
            }
            ?>
        </ul>
        <hr>
    </div>
</section>

<footer>
    <div class="container">
        <div class="social-links">
            <a href="tel:+5561995906324" class="btn-contact">
                <i class="fas fa-phone-alt"></i> Telefone
            </a>
            <a href="https://www.linkedin.com/in/rhuan-ferreira-3912371b5" target="_blank" class="btn-contact">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
            <a href="mailto:rhuanpablo619@gmail.com" class="btn-contact">
                <i class="fas fa-envelope"></i> E-mail
            </a>
        </div>
        <p>Arniqueiras - DF | (61) 99590-6324 | rhuanpablo619@gmail.com</p>
    </div>
</footer>

<script>
</script>
</body>
</html>