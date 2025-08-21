# 🚌 TW Transportes

Sistema web para gerenciamento de transportes e agendamentos, com estrutura moderna baseada em Docker, PHP e Laravel.

---
# 🚌 TW Transportes  

Sistema web para gerenciamento de transportes e agendamentos, desenvolvido com foco em estudo de tecnologias modernas e boas práticas de arquitetura.  

A aplicação combina **API REST** e um **painel administrativo** utilizando **Filament PHP**, oferecendo uma solução simples, mas completa, para organizar agendamentos e recursos de transporte.  

## 🚀 Tecnologias utilizadas  
- **Backend:** PHP (Laravel), Filament PHP  
- **Frontend:** HTML, CSS, Tailwind CSS 3  
- **Banco de Dados:** MySQL  
- **DevOps:** Docker, Nginx  

## 🎯 Objetivo do projeto  
O projeto tem como finalidade explorar a integração entre **Laravel + Filament** para construção de backends administrativos ágeis, além de aprimorar o uso do **Tailwind CSS** na camada de apresentação.  

Trata-se de uma aplicação prática voltada para estudos em **desenvolvimento fullstack** e **containerização com Docker**.  

## 📦 Instalação

> Requisitos:
> - Docker + Docker Compose
> - Git

### 1. Clone o repositório

```bash
git clone https://github.com/MichellHPC/tw-transportes.git
cd tw-transportes
```

### 2. Copie o arquivo de ambiente
```bash
cp .env.example .env
```

### 3. Suba os containers
```bash
docker-compose up -d
```

### 4. Instale as dependências do Laravel
```bash
docker exec -it app composer install
```

### 5. Gere a chave do Laravel
```bash
docker exec -it app php artisan key:generate
```

### 6. Acesse o sistema
`http://localhost`

## Estrutura de Pastas

```bash
tw-transportes/
├── .docker/               # Configurações do ambiente Docker (Nginx, PHP)
│   ├── nginx/
│   └── php/
├── .vscode/               # Configurações do VSCode
│   └── launch.json
├──.src/
│   ├── app/                   # Aplicação principal Laravel
│   │   ├── Enums/
│   │   ├── Http/
│   │   ├── Models/
│   │   ├── Providers/
│   │   └── Helpers.php
│   ├── bootstrap/             # Arquivo de bootstrap da aplicação
│   ├── config/                # Arquivos de configuração
│   ├── database/              # Migrations e seeders
│   ├── public/                # Pasta pública do Laravel
│   ├── resources/             # Views Blade e assets
│   ├── routes/                # Arquivos de rotas
│   │   ├── api.php            
│   │   └── web.php
│   ├── storage/               # Arquivos gerados, logs, cache
│   ├── tests/                 # Testes automatizados
│   ├── .env.example           # Exemplo de variáveis de ambiente
│   ├── composer.json          # Dependências PHP
├── docker-compose.yml     # Arquivo de orquestração Docker
└── README.md              # Documentação do projeto
```


### Rodar migrations
```bash
docker exec -it app php artisan migrate
```

### Rodar seeders
```bash
docker exec -it app php artisan db:seed
```

### Rodar testes
```bash
docker exec -it app php artisan test
```
