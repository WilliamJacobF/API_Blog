# API_Blog
 ## Resumo:
 * Uma api de Blog em Laravel que gerencia post. Capaz de criar,ler,atualizar e deletar postagens.
 ## Arquitetura:
* O Projeto segue a arquitetura MVC(Model-View-Controller):um padrão de design de software amplamente utilizado no desenvolvimento de aplicações, especialmente aplicações web. Ela organiza o código em três componentes principais, cada um com responsabilidades distintas, o que facilita a manutenção, a escalabilidade e a separação de preocupações.
## tecnologias:
* Laravel(Framework)
* PHP
* Mysql (Banco de Dados Relacional)

---
## Configuração e instalação:

### Requisitos:
* PHP >= 8.0
* Composer
* MySQL
* Laravel >= 9.x

### **Instalação do Projeto**
1. Clone o repositório:
   ```bash
   git clone https://github.com/WilliamJacobF/API_Blog.git
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=api_blog
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. Execute as migrações para criar o banco de dados:
   ```bash
   php artisan migrate
   ```

5. Inicie o servidor:
   ```bash
   php artisan serve
   ```

Acesse a aplicação em `http://localhost:8000`.

---

## **Estrutura do Projeto**

```plaintext
/src
  /app
    /Http
      /Controllers
      /Requests
    /Models
    /Services
/config
/database
/routes
/tests
```

- **Controllers:** Gerenciam a lógica dos endpoints.
- **Models:** Representam as entidades do banco de dados.
- **Requests:** Validam os dados enviados para os endpoints.
- **Services:** Contêm a lógica de negócios.

---

## **Endpoints da API**

### **1. Criar Postagem**
- **Método:** POST
- **Rota:** `/api/blog`
- **Descrição:** Cria uma nova postagem.
- **Parâmetros no corpo:**
  ```json
  {
    "titulo": "titulo da postagem",
    "texto": "texto da postagem",
  }
  ```

### **2. Listar Postagens**
- **Método:** GET
- **Rota:** `/api/blog`
- **Descrição:** Lista todas as postagens cadastradas.

### **3. Atualizar Postagem**
- **Método:** PUT
- **Rota:** `/api/blog/{id}`
- **Descrição:** Atualiza uma postagem existente.
- **Parâmetros no corpo:**
  ```json
  {
    "titulo": "Nova titulo",
    "texto": "novo texto"
  }
  ```


### **4. Excluir Tarefa**
- **Método:** DELETE
- **Rota:** `/api/blog/{id}`
- **Descrição:** Remove uma postagem.

---


Para mais informações, consulte a [documentação do Laravel](https://laravel.com/docs).




