# Task To-Do Laravel

Uma aplicação de gerenciamento de tarefas (to-do list) construída com Laravel 12.

## 📋 Sobre o Projeto

Esta é uma aplicação web simples para gerenciar tarefas, permitindo criar, visualizar, editar, excluir e marcar tarefas como concluídas. A aplicação foi desenvolvida usando Laravel 12 e inclui uma interface moderna com Tailwind CSS e Alpine.js.

## ✨ Funcionalidades

- ✅ Listar todas as tarefas com paginação
- ➕ Criar novas tarefas
- 👁️ Visualizar detalhes de uma tarefa
- ✏️ Editar tarefas existentes
- 🗑️ Excluir tarefas
- ✅ Marcar/desmarcar tarefas como concluídas
- 📄 Paginação de resultados

## 🛠️ Tecnologias Utilizadas

- **Laravel 12** - Framework PHP
- **PHP 8.2+** - Linguagem de programação
- **MySQL** - Banco de dados
- **Tailwind CSS** - Framework CSS
- **Alpine.js** - Framework JavaScript
- **Vite** - Build tool
- **Laravel Sail** - Ambiente Docker para desenvolvimento
- **PHPUnit** - Framework de testes

## 📦 Requisitos

- PHP 8.2 ou superior
- Composer
- Node.js e npm
- Docker e Docker Compose (para usar Laravel Sail)
- MySQL (ou usar o MySQL do Docker via Sail)

## 🚀 Instalação

### 1. Clone o repositório

```bash
git clone <url-do-repositorio>
cd task-to-do-laravel
```

### 2. Instale as dependências do PHP

```bash
composer install
```

### 3. Instale as dependências do Node.js

```bash
npm install
```

### 4. Configure o ambiente

Copie o arquivo `.env.example` para `.env` (se existir) ou crie um novo arquivo `.env`:

```bash
cp .env.example .env
```

Configure as variáveis de ambiente no arquivo `.env`, especialmente:
- `DB_CONNECTION=mysql`
- `DB_HOST=mysql` (se usar Sail) ou `127.0.0.1`
- `DB_PORT=3306`
- `DB_DATABASE=laravel`
- `DB_USERNAME=sail` (se usar Sail) ou `root`
- `DB_PASSWORD=password`

### 5. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 6. Execute as migrações

```bash
php artisan migrate
```

### 7. (Opcional) Execute os seeders

```bash
php artisan db:seed
```

## 🐳 Usando Laravel Sail (Docker)

Se preferir usar Docker através do Laravel Sail:

### 1. Inicie os containers

```bash
./vendor/bin/sail up -d
```

### 2. Execute as migrações

```bash
./vendor/bin/sail artisan migrate
```

### 3. Acesse a aplicação

A aplicação estará disponível em `http://localhost`

## 🏃 Executando a Aplicação

### Modo de Desenvolvimento

Para executar o servidor de desenvolvimento e o Vite simultaneamente:

```bash
composer dev
```

Ou execute separadamente:

```bash
# Terminal 1 - Servidor Laravel
php artisan serve

# Terminal 2 - Vite (assets)
npm run dev
```

A aplicação estará disponível em `http://localhost:8000`

### Modo de Produção

```bash
# Compilar assets
npm run build

# Otimizar aplicação
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🧪 Testes

Execute os testes com:

```bash
composer test
```

Ou:

```bash
php artisan test
```

## 📁 Estrutura do Projeto

```
task-to-do-laravel/
├── app/
│   ├── Entities/          # Entidades
│   ├── Http/
│   │   ├── Controllers/   # Controladores
│   │   └── Requests/      # Form Requests (validação)
│   ├── Models/            # Modelos Eloquent
│   └── Providers/         # Service Providers
├── database/
│   ├── factories/         # Factories para testes
│   ├── migrations/        # Migrações do banco de dados
│   └── seeders/           # Seeders
├── resources/
│   ├── css/               # Estilos CSS
│   ├── js/                # JavaScript
│   └── views/             # Views Blade
├── routes/
│   └── web.php            # Rotas web
└── tests/                 # Testes automatizados
```

## 🗄️ Estrutura do Banco de Dados

A tabela `tasks` possui os seguintes campos:
- `id` - Identificador único
- `title` - Título da tarefa (obrigatório, máximo 255 caracteres)
- `description` - Descrição curta (obrigatório)
- `long_description` - Descrição longa (obrigatório)
- `completed` - Status de conclusão (boolean, padrão: false)
- `created_at` - Data de criação
- `updated_at` - Data de atualização

## 🛣️ Rotas Disponíveis

- `GET /` - Redireciona para a lista de tarefas
- `GET /tasks` - Lista todas as tarefas (paginação)
- `GET /tasks/create` - Formulário de criação
- `POST /tasks` - Cria uma nova tarefa
- `GET /task/{task}` - Exibe detalhes de uma tarefa
- `GET /task/{task}/edit` - Formulário de edição
- `PUT /tasks/{task}` - Atualiza uma tarefa
- `DELETE /tasks/{task}` - Exclui uma tarefa
- `PATCH /tasks/{task}/toggle-completed` - Alterna status de conclusão

## 📝 Validação

As tarefas são validadas através do `TaskRequest`:
- `title`: obrigatório, máximo 255 caracteres
- `description`: obrigatório
- `long_description`: obrigatório

## 📄 Licença

Este projeto está sob a licença MIT.

## 👤 Autor

Desenvolvido como projeto de estudo.

## 🤝 Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests.
