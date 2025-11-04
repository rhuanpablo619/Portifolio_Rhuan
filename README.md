<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio LoL - Seu Nickname</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>[SEU NICKNAME]</h1>
        <h2>Jogador Profissional / High Elo Player</h2>
    </header>

    <main>
        <section id="geral" class="card">
            <h2>🏆 Visão Geral de Desempenho</h2>
            <div id="dados-gerais">
                </div>
        </section>

        <section id="campeoes" class="card">
            <h2>⚔️ Campeões Mais Jogados (Top 3)</h2>
            <ul id="lista-campeoes">
                </ul>
        </section>

        <section id="funcoes" class="card">
            <h2>🗺️ Funções (Roles) Mais Jogadas</h2>
            <div id="lista-funcoes">
                </div>
        </section>

        <section id="destaques" class="card">
            <h2>✨ Melhores Momentos/Destaques</h2>
            <p>Links para replays, clipes ou análises de partidas importantes.</p>
            <ul>
                <li><a href="#" target="_blank">Replay VOD: Partida contra time X (MVP)</a></li>
                <li><a href="#" target="_blank">Clip: Quadra Kill de Jinx</a></li>
            </ul>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
body {
    font-family: Arial, sans-serif;
    background-color: #1a1a2e; /* Azul Escuro */
    color: #ffffff;
    margin: 0;
    padding: 20px;
}

header {
    text-align: center;
    padding: 30px 0;
    background-color: #0f4c75; /* Azul Médio */
    margin-bottom: 20px;
    border-radius: 8px;
}

h1 {
    font-size: 3em;
    color: #ffcc00; /* Dourado */
}

.card {
    background-color: #2c394b; /* Azul Acinzentado */
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
}

h2 {
    border-bottom: 2px solid #ffcc00;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

/* Estilos de Lista */
#lista-campeoes li, #lista-funcoes div {
    background-color: #1a1a2e;
    padding: 10px;
    margin-bottom: 10px;
    border-left: 5px solid #ffcc00;
    border-radius: 4px;
}
// DADOS DE EXEMPLO (MOCKADOS)
const dadosJogador = {
    nickname: "SeuNickAqui",
    elo: "Mestre",
    winrate: 62.5, // 62.5%
    totalJogos: 480,
    kdaGeral: 4.15,
    
    campeoes: [
        { nome: "Caitlyn", jogos: 150, winrate: 68 },
        { nome: "Leona", jogos: 120, winrate: 61 },
        { nome: "Jinx", jogos: 80, winrate: 59 }
    ],

    funcoes: [
        { funcao: "ADC", porcentagem: 70 },
        { funcao: "Suporte", porcentagem: 20 },
        { funcao: "Mid", porcentagem: 10 }
    ]
};

// FUNÇÃO PARA EXIBIR OS DADOS NO HTML
document.addEventListener('DOMContentLoaded', () => {
    // 1. DADOS GERAIS
    const geralDiv = document.getElementById('dados-gerais');
    geralDiv.innerHTML = `
        <p><strong>Elo Atual:</strong> ${dadosJogador.elo}</p>
        <p><strong>Taxa de Vitória (Winrate):</strong> ${dadosJogador.winrate}%</p>
        <p><strong>Total de Jogos Ranqueados:</strong> ${dadosJogador.totalJogos}</p>
        <p><strong>KDA Médio:</strong> ${dadosJogador.kdaGeral}</p>
    `;

    // 2. CAMPEÕES MAIS JOGADOS
    const campeoesUl = document.getElementById('lista-campeoes');
    dadosJogador.campeoes.forEach(campeao => {
        const li = document.createElement('li');
        li.textContent = `${campeao.nome} - ${campeao.jogos} Partidas (${campeao.winrate}% Winrate)`;
        campeoesUl.appendChild(li);
    });

    // 3. FUNÇÕES MAIS JOGADAS
    const funcoesDiv = document.getElementById('lista-funcoes');
    dadosJogador.funcoes.forEach(funcao => {
        const p = document.createElement('p');
        p.textContent = `${funcao.funcao}: ${funcao.porcentagem}% dos Jogos`;
        funcoesDiv.appendChild(p);
    });
});
