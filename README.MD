# 🚀 Portfólio Pessoal: RHUAN PABLO - RH & Análise de Sistemas

## 🎯 Descrição do Projeto

Este é o portfólio pessoal de **Rhuan Pablo**, desenvolvido para apresentar sua trajetória profissional, com foco em sua experiência consolidada em **Recursos Humanos e Departamento Pessoal**, e sua transição e estudos atuais em **Análise e Desenvolvimento de Sistemas**.

O portfólio inclui um sistema dinâmico de comentários (**CRUD**) implementado em PHP e MySQL, permitindo a interação dos visitantes e a gestão dos *feedbacks*.

---

## ✨ Funcionalidades

* **Página Única (Single Page Application - SPA):** Navegação fluida por âncoras.
* **Efeito de Digitação:** Destaque inicial na seção Hero.
* **Seções Detalhadas:** Sobre Mim, Habilidades (Skills), Experiência Profissional e Projetos.
* **Sistema de Comentários Dinâmico (CRUD):**
    * Envio e listagem de comentários em tempo real.
    * Botões de **Editar** e **Excluir** para a gestão dos comentários (requer *scripts* PHP e conexão com DB).
* **Design Responsivo:** Adaptável a telas de *desktop* e *mobile*.

---

## 💻 Tecnologias Utilizadas

| Categoria | Tecnologia |
| :--- | :--- |
| **Frontend** | HTML5, CSS3, JavaScript |
| **Backend** | PHP 7.x ou superior |
| **Banco de Dados** | MySQL |
| **Servidor Local** | XAMPP ou equivalente |
| **Framework CSS** | Nenhum (CSS Puro / Customizado) |
| **Ícones** | Font Awesome, Devicons |

---

## 🛠️ Instalação e Configuração Local (XAMPP)

Para rodar este projeto em seu ambiente local e utilizar o sistema de comentários, siga os passos abaixo:

### 1. Pré-requisitos

* **XAMPP (ou WAMP/MAMP):** Certifique-se de ter o Apache e o MySQL rodando.

### 2. Configuração do Projeto

1.  Clone este repositório ou baixe os arquivos para a pasta de projetos do seu servidor web (ex: `C:\xampp\htdocs\template-portfolio-rhuan-main`).
2.  Renomeie o arquivo `index.html` para **`index.php`** para permitir a execução do código PHP.

### 3. Configuração do Banco de Dados

1.  Acesse o phpMyAdmin (geralmente em `http://localhost/phpmyadmin`).
2.  Crie um novo banco de dados chamado **`portfolio_db`**.
3.  Execute o seguinte código SQL na aba "SQL" para criar a tabela `comentarios`:

    ```sql
    -- Define o banco de dados a ser usado
    USE portfolio_db;

    -- Cria a tabela 'comentarios'
    CREATE TABLE `comentarios` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `nome` VARCHAR(255) NOT NULL,
      `email` VARCHAR(255) NOT NULL,
      `comentario_texto` TEXT NOT NULL,
      `data_envio` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    ```

### 4. Arquivos PHP de Ação

Certifique-se de que os arquivos de processamento (`salvar_comentario.php`, `editar_comentario.php` e `deletar_comentario.php`) estejam presentes na pasta raiz do projeto e configurados com as credenciais corretas do banco de dados:

```php
// Exemplo de configuração de conexão (em todos os arquivos PHP que interagem com o DB)
$servername = "localhost";
$username = "root";       // Geralmente 'root' no XAMPP
$password = "";           // Geralmente vazio no XAMPP
$dbname = "portfolio_db"; 
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);
5. Execução
Abra seu navegador e acesse: http://localhost/template-portfolio-rhuan-main/index.php.

📂 Estrutura de Arquivos
/template-portfolio-rhuan-main
├── index.php             <-- Página principal (HTML + PHP de listagem)
├── style.css             <-- Estilos principais do projeto
├── salvar_comentario.php <-- Script para processar o envio de novos comentários
├── editar_comentario.php <-- Script para processar a edição (a ser criado)
├── deletar_comentario.php<-- Script para processar a exclusão (a ser criado)
├── assets/
│   ├── imgs/             <-- Imagens de perfil e projetos
│   └── favicon.ico
└── README.md             <-- Este arquivo
👨‍💻 Autor
RHUAN PABLO FERREIRA CORDEIRO

LinkedIn: [rhuan-ferreira] (https://www.linkedin.com/in/rhuan-ferreira-3912371b5)

E-mail: [rhuanpablo619@gmail.com] (mailto:rhuanpablo619@gmail.com)

---
Se precisar de ajuda para desenvolver o código de exclusão (`deletar_comentario.php`), me avise!