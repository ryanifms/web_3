# web_3
 
# financiaAi

**financiaAi** é um projeto para facilitar o acesso a informações financeiras e ajudar os usuários a gerenciar suas finanças pessoais.
## Alunos: Ryan Padilha e Lucas Guimaro

## Índice

- [Descrição](#descrição)
- [Instalação](#instalação)
- [Uso](#uso)
- [Contribuição](#contribuição)
- [Licença](#licença)
- [Contato](#contato)

## Descrição

O **financiaAi** é uma ferramenta que permite aos usuários:
- Gerenciar seus gastos diários.
- Planejar orçamentos.
- Monitorar investimentos.
- Analisar relatórios financeiros detalhados.

## Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/ryanifms/web_3.git
    ```

2. Entre no diretório do projeto:
    ```bash
    cd web_3
    ```

3. Instale as dependências do Composer:
    ```bash
    composer install
    ```
4. Faca a copia das variveis de ambiente e baixar:
https://docs.google.com/document/d/1seKGSdu1WuIJLHVaNBAZVkwiQYt6s23cfhibIy8G0y0/edit?usp=sharing


     ```bash
    copy .env.example .env
    ```


4. Configure o banco de dados no arquivo `.env`:

     # Financia_Ai Project

## Description
Financia_Ai is a financial management application designed to help users track and manage their finances efficiently.

## Database Configuration
To connect to the PostgreSQL database, you need to configure the following environment variables:

```bash
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5433
DB_DATABASE=financia_ai
DB_USERNAME=postgres
DB_PASSWORD=postgres
   ```

5. Execute as migrações do banco de dados:
    ```bash
    php php artisan key:generate
    ```
     ```bash
    php php artisan migrate
    ```

## Uso

Para iniciar a aplicação, execute:
```bash
php artisar serve 
   ```
escreve na url depois de abir no navegador
 http://127.0.0.1:8000/dashboard
 ou 
 caso o host nao seja o padrao
 dashboard
 der do banco de dados
 https://docs.google.com/document/d/1GtdebSe_KmsH5nliBo9p5F8tUT9iA4IbiKgbXrFX9sw/edit?usp=sharing
