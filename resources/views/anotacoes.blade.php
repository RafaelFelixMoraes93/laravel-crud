<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anotações</title>
</head>
<body>
    <h1>CRUD</h1>

    <h2>Criando o projeto</h2>
    <p>Para inicar o projeto, primeiramente utilizamos o composer.</p>
    <ul>        
        <li>composer create-project laravel/laravel nome-do-novo-projeto1</li>
        <li>Para abrir o servidor: php artisan serve</li>
        <li>Caso queira rodar mais de um projeto ao mesmo tempo, é necessário útilizar portas diferentes.</li>
        <li>php artisan serve --port=8001</li>
    </ul>

    <h2>Configurações</h2>
    <ul>
        <li>No arquivo .env, mudamos o nome APP_NAME=Laravel para APP_NAME=nomeDoProjeto.</li>
        <li>após isso, basta configurar seu BD.</li>
    </ul>
    
    <h2>Iniciando o projeto</h2>
    <p>Criando o primeiro migrate e limpando as tabelas.</p>
    <ul>
        <li>php artisan migrate</li>
        <li>php artisan migrate:fresh</li>
    </ul>

    <h2>Criando as migrates</h2>
    <p>Caminho: database->migrations</p>
    <ul>
        <li>php artisan make:migration create_posts_table</li>
    </ul>        
    <p><strong>Como criamos migration de posts, precisamos criar um controller e um model. para a tabela de posts.</strong></p>
    <ul>    
        <li>php artisan make:controller PostController</li>
        <li>php artisan make:model Post</li>
    </ul>
    <p>No model Post, criamos um protected $ fillable = "["'adicionamos todos os campos necessarios'"]" dentro de um array.</p>

    <h2>Create</h2>
    <p>Criar rota /posts/create, acessar o controller PostController e o método é create.</p>
    <p>No controller criar a função <strong>create com parâmetro Request.</strong></p>
    <p>Criar a variável $post = new Post();</p>

    <p>Há algumas formas de criar os novos posts.</p>
    <p><Strong>Primeira forma(mais comumu)</Strong></p>
    <ul>
        <li>$post = new Post($new_post);</li>
        <li>$post0>save();</li>
        <li>dd($post);</li>
    </ul>

    <p><strong>Segunda fomra</strong></p>
    <ul>
        <li>$post = new Post();</li>
        <li>$post->variavel = 'valorDavariavel'</li>
        <li>$post->variavel = 'valorDavariavel'</li>
        <li>$post->variavel = 'valorDavariavel'</li>
    </ul>

    <h2>Read</h2>
    <p>Criar rota /posts/read acessar o PostController e o método read.</p>
    <p>No controller criar a função <strong>read com parâmetro Request.</strong></p>
    <p><strong>Para ler todos os posts (all)</strong></p>
    <p>Há algumas formas de ler os posts.</p>
    <p>$post = new Post();</p>
    <p>$posts = $post->all();</p>
    <p>dd($post);</p>

    <p>Lendo um post especifico(where ou find)</p>
    <p>$posts = $post->find(2)</p>
    <p><strong>O find sempre pegará a chave primária definida na tebela!</strong></p>    
    
    {{-- public function read(Request $request) {
        $post = new Post() ;
        $post = $post->find(1);

        return $post;
    }
    public function all(Request $request) {
        $posts = Post::all();
        return $posts;
    } --}}
    
</body>
</html>