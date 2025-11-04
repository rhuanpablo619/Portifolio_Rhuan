
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Rhuan Pablo Ferreira Cordeiro</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <header>
        <h1>Rhuan Pablo Ferreira Cordeiro</h1>
       
**`Analista de departamento pessoal`**

Me chamo Rhuan Pablo, tenho 22 anos e sou natural do Distrito Federal. Concluí o ensino médio no Colégio Notre dame. Atualmente, estou cursando Análise e Desenvolvimento de Sistemas na UDF. Sou apaixonado por departamento pessoal e recursos humanos.
        <p>Superior de tecnologia em Análise e Desenvolvimento de Sistemas (UDF) - Cursando 2º semestre</p>
        <div class="contato-info">
            <p><strong>Email:</strong> rhuanpablo619@gmail.com | <strong>Telefone:</strong> (61) 99590-6324</p>
            <p><strong>Local:</strong> Arniqueiras - DF</p>
            <p><strong>LinkedIn:</strong> [**LINK DO SEU LINKEDIN AQUI**]</p>
        </div>
    </header>

    <main>
        <section id="resumo" class="card">
            <h2>🎯 Resumo e Habilidades</h2>
            <ul>
                <li>Excelente relacionamento interpessoal e foco em atendimento ao colaborador.</li>
                <li>Organização, proatividade e atenção a detalhes em processos administrativos.</li>
                <li>Domínio do Pacote Office (Word, Excel, PowerPoint e Outlook) - nível Intermediário/avançado.</li>
                <li>Capacidade analítica para elaboração de relatórios e dashboards.</li>
                <li>Conhecimentos em Excel Intermediário/avançado: tabelas dinâmicas, PROCV, PROCX, fórmulas, gráficos e dashboards.</li>
                <li>Noções de Banco de Dados (SQL básico para consultas e extração de dados).</li>
                <li>Vivência com sistemas de controle de ponto, folha de pagamento e benefícios integrados.</li>
            </ul>
        </section>
        
        <section id="experiencia" class="card">
            <h2>💼 Experiência Profissional</h2>

            <div class="cargo-item">
                <h3>Assistente de Departamento Pessoal</h3>
                <p class="empresa">GRUPO SKS Industria, serviço e comércio para construção - Brasília - DF</p>
                <p class="periodo">Maio/2024 - Atual</p>
                <ul>
                    <li>Gestão do ponto eletrônico do grupo (monitoramento, relatórios, banco de horas, importação de verbas para folha).</li>
                    <li>Admissão de novos colaboradores, atualização de cadastros e emissão de relatórios para lideranças.</li>
                    <li>Gestão de benefícios corporativos (vale-transporte, vale-alimentação, restaurante) e suporte aos colaboradores.</li>
                    <li>Controle e conferência de faturas mensais dos benefícios.</li>
                </ul>
            </div>

            <div class="cargo-item">
                <h3>Auxiliar de Recursos Humanos</h3>
                <p class="empresa">GRUPO SKS Industria, serviço e comércio para construção - Brasília - DF</p>
                <p class="periodo">Setembro/2023 - Abril/2024</p>
                <ul>
                    <li>Recrutamento e seleção (divulgação de vagas, triagem de currículos, entrevistas e organização de documentos para admissão).</li>
                    <li>Gestão do ponto eletrônico do grupo de CNPJ.</li>
                    <li>Gestão de benefícios corporativos (vale-transporte, vale-alimentação e demais benefícios).</li>
                </ul>
            </div>

             <div class="cargo-item">
                <h3>Jovem Aprendiz</h3>
                <p class="empresa">GRUPO SKS Industria, serviço e comércio para construção - Brasília - DF</p>
                <p class="periodo">Maio/2023 - Agosto/2023</p>
                <ul>
                    <li>Realização de entrevistas para diversos cargos operacionais na indústria.</li>
                    <li>Organização de documentação para admissão dos aprovados.</li>
                    <li>Responsável pela gestão do ponto eletrônico de mais de 200 colaboradores.</li>
                </ul>
            </div>
        </section>

    </main>

    <footer>
        <p>Portfólio criado com base no currículo de Rhuan Pablo Ferreira Cordeiro. Brasília, 12 de Abril de 2025.</p>
    </footer>
</body>
</html>body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

header {
    background-color: #004d99; /* Azul escuro */
    color: white;
    padding: 20px;
    text-align: center;
}

header h1 {
    margin-bottom: 5px;
}

.contato-info {
    font-size: 0.9em;
    margin-top: 10px;
}

main {
    padding: 20px;
    max-width: 900px;
    margin: 20px auto;
}

.card {
    background: white;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card h2 {
    border-bottom: 2px solid #004d99;
    padding-bottom: 5px;
    color: #004d99;
    margin-top: 0;
}

/* Estilização da Experiência Profissional */
.cargo-item {
    margin-bottom: 15px;
    padding-left: 10px;
    border-left: 3px solid #004d99;
}

.cargo-item h3 {
    margin: 0 0 2px 0;
    color: #007bff; /* Azul claro */
}

.empresa {
    font-style: italic;
    color: #555;
    margin: 0 0 5px 0;
}

.periodo {
    font-size: 0.9em;
    color: #777;
    margin: 0 0 10px 0;
}

.cargo-item ul {
    list-style: disc;
    margin-left: 20px;
    padding-left: 0;
    font-size: 0.95em;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: white;
    font-size: 0.8em;
}

/* Responsividade básica */
@media (max-width: 600px) {
    header, main {
        padding: 10px;
    }

    .contato-info p {
        display: block;
        margin: 5px 0;
    }
}
