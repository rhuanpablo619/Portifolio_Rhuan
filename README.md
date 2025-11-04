import os

# --- 1. DADOS ESTATÍSTICOS (Substitua por dados da API da Riot) ---
dados_jogador = {
    "nickname": "Seu Nick LOL",
    "elo": "Mestre (120 PDL)",
    "winrate": "62.5%",
    "total_jogos": 480,
    "kda_geral": 4.15,
    "campeoes_top": [
        {"nome": "Caitlyn", "jogos": 150, "winrate": "68%"},
        {"nome": "Leona", "jogos": 120, "winrate": "61%"},
        {"nome": "Jinx", "jogos": 80, "winrate": "59%"},
    ],
    "funcoes": [
        {"funcao": "Atirador (ADC)", "porcentagem": "70%"},
        {"funcao": "Suporte", "porcentagem": "20%"},
        {"funcao": "Meio (MID)", "porcentagem": "10%"},
    ]
}

# --- 2. FUNÇÕES DE GERAÇÃO DE CONTEÚDO HTML ---

def gerar_campeoes_html(campeoes):
    """Cria a lista HTML dos campeões mais jogados."""
    lista_html = "<ul>\n"
    for c in campeoes:
        lista_html += f'    <li>{c["nome"]} - {c["jogos"]} Partidas ({c["winrate"]} Winrate)</li>\n'
    lista_html += "</ul>"
    return lista_html

def gerar_funcoes_html(funcoes):
    """Cria o HTML das funções mais jogadas."""
    div_html = ""
    for f in funcoes:
        div_html += f'    <p><strong>{f["funcao"]}</strong>: {f["porcentagem"]} dos Jogos</p>\n'
    return div_html


# --- 3. TEMPLATE HTML PRINCIPAL ---

def gerar_portfolio_html(dados):
    """Monta o arquivo HTML final, injetando os dados de Python."""
    
    # Gerar os blocos de conteúdo dinâmico
    campeoes_content = gerar_campeoes_html(dados["campeoes_top"])
    funcoes_content = gerar_funcoes_html(dados["funcoes"])

    # Template HTML usando f-strings
    html_template = f"""
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio LoL - {dados["nickname"]}</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>{dados["nickname"]}</h1>
        <h2>{dados["elo"]} Player</h2>
    </header>

    <main>
        <section id="geral" class="card">
            <h2>🏆 Visão Geral de Desempenho</h2>
            <div id="dados-gerais">
                <p><strong>Taxa de Vitória (Winrate):</strong> {dados["winrate"]}</p>
                <p><strong>Total de Jogos Ranqueados:</strong> {dados["total_jogos"]}</p>
                <p><strong>KDA Médio:</strong> {dados["kda_geral"]}</p>
            </div>
        </section>

        <section id="campeoes" class="card">
            <h2>⚔️ Campeões Mais Jogados (Top 3)</h2>
            {campeoes_content}
        </section>

        <section id="funcoes" class="card">
            <h2>🗺️ Funções (Roles) Mais Jogadas</h2>
            <div id="lista-funcoes">
                {funcoes_content}
            </div>
        </section>
        
        <section id="destaques" class="card">
            <h2>✨ Melhores Momentos/Destaques</h2>
            <p>Links para replays, clipes ou análises de partidas importantes.</p>
            <ul>
                <li><a href="#" target="_blank">Replay VOD: Partida X</a></li>
                <li><a href="#" target="_blank">Clip: Ace de Jinx</a></li>
            </ul>
        </section>
    </main>
</body>
</html>
"""
    return html_template

# --- 4. EXECUÇÃO E SALVAMENTO DO ARQUIVO ---

def main():
    """Gera o HTML e salva como index.html."""
    
    # 1. Gerar o HTML
    html_final = gerar_portfolio_html(dados_jogador)
    
    # 2. Salvar no arquivo (index.html é o padrão para páginas web)
    caminho_arquivo = "index.html"
    try:
        with open(caminho_arquivo, "w", encoding="utf-8") as f:
            f.write(html_final)
        print(f"✅ Arquivo '{caminho_arquivo}' gerado com sucesso!")
        print("Você pode abrir o arquivo no seu navegador para ver o resultado.")
    except Exception as e:
        print(f"❌ Erro ao salvar o arquivo: {e}")

if __name__ == "__main__":
    main()
