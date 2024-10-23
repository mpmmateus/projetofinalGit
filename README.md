# Loja de Roupa - Alterado

Este projeto é uma aplicação web para a gestão de uma loja de roupa online, desenvolvida com **Bootstrap** para um design responsivo e moderno. Inclui funcionalidades completas para os clientes navegarem, comprarem produtos e gerirem as suas contas, bem como uma interface administrativa para gerir o conteúdo do site.

## Funcionalidades Principais

- **Página Principal (index.php)**: Página inicial com destaque para os principais produtos e promoções.
- **Área Cliente (areacliente.php)**: Secção dedicada ao cliente, onde ele pode visualizar e gerir informações pessoais, histórico de compras e preferências.
- **Alterar Morada (altera_morada.php)**: Permite ao utilizador atualizar a sua morada de entrega e faturação.
- **Carrinho (carrinho.php)**: Os clientes podem adicionar produtos ao carrinho, visualizar o total da compra e proceder ao checkout.
- **Login e Registo (login.php e registo.php)**: Sistema de autenticação onde os utilizadores podem criar contas e iniciar sessão.
- **Contactos (contactos.php)**: Página com informações de contacto, formulário para envio de mensagens e detalhes de localização da loja.
- **Sobre Nós (sobre_nos.php)**: Uma página que descreve a história e missão da loja de roupa.
- **Galeria (galeria.php)**: Galeria de imagens dos produtos em destaque e novas coleções.
- **Soluções (solucoes.php)**: Página que detalha os serviços e soluções oferecidas pela loja, como entregas, políticas de devolução e suporte.

## Estrutura do Projeto

Abaixo está uma descrição breve dos principais ficheiros e pastas:

- **index.php**: Página principal da loja, onde os utilizadores têm uma visão geral dos produtos disponíveis.
- **areacliente.php**: Página para os clientes gerirem a sua conta, incluindo histórico de compras e dados pessoais.
- **altera_morada.php**: Permite aos utilizadores alterar a morada de entrega e faturação.
- **carrinho.php**: Sistema de carrinho de compras que permite adicionar, remover e visualizar itens antes de proceder ao pagamento.
- **login.php**: Página de login para utilizadores registados.
- **registo.php**: Formulário de registo para novos utilizadores.
- **contactos.php**: Página com os contactos da loja e um formulário para envio de mensagens.
- **sobre_nos.php**: Página que conta a história e filosofia da loja.
- **galeria.php**: Galeria de imagens dos produtos e coleções.
- **solucoes.php**: Informações detalhadas sobre as soluções oferecidas pela loja, como políticas de envio, devoluções e métodos de pagamento.

## Tecnologias Utilizadas

- **Frontend**: HTML5, CSS3, **Bootstrap** (para design responsivo e componentes de UI)
- **Backend**: PHP
- **Base de Dados**: MySQL
- **Autenticação**: Sessões PHP e validação de utilizadores
- **Sistema de Carrinho**: Gerido por PHP, com dados temporários guardados em sessões
- **Segurança**: Proteção de formulários contra ataques de injeção SQL e CSRF

## Instalação

### Pré-requisitos

- Servidor Apache com suporte para PHP
- MySQL para a gestão da base de dados
- PHP 7.4+ ou superior

### Passos de Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/usuario/lojaRoupa.git
    cd lojaRoupa
    ```

2. Crie a base de dados:
    - Utilize o ficheiro `database.sql` para criar as tabelas necessárias.
    - Pode fazer isso através do phpMyAdmin ou via linha de comandos:
    ```bash
    mysql -u root -p < database.sql
    ```

3. Configure as variáveis de ambiente no ficheiro `config.php`:
    ```php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'sua_senha');
    define('DB_NAME', 'lojaRoupa');
    ```

4. Coloque os ficheiros num servidor Apache local ou remoto.

5. Aceda à aplicação no navegador:
    ```
    http://localhost/lojaRoupa
    ```

## Como Utilizar

1. **Registo/Login**:
   - Os utilizadores devem registar-se ou iniciar sessão para aceder à área de cliente e efetuar compras.

2. **Adicionar Produtos ao Carrinho**:
   - Os produtos podem ser adicionados ao carrinho a partir da página inicial ou da galeria.

3. **Gerir Conta**:
   - Na área cliente, é possível alterar dados pessoais, como a morada de entrega (através de `altera_morada.php`), ver histórico de compras, e mais.

4. **Checkout**:
   - Após adicionar os produtos ao carrinho, o utilizador pode proceder ao pagamento e finalizar a compra.
