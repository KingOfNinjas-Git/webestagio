# MÃE: site de produto

Site de produto para uma marca de sabonetes artesanais. PHP simples, CSS e JavaScript escritos à mão, sem framework.

## Como funciona

- Os sabonetes (nome, preço, destaque, ingredientes, imagem) vivem na tabela `soaps` e são lidos por `fetch_soaps.php`.
- As mensagens do formulário de contacto são guardadas na tabela `contacts` por `submit_contact.php`.
- A base de dados é **SQLite**: um único ficheiro, `data/mae.sqlite`. Não é preciso instalar nem configurar nada; o ficheiro e as tabelas são criados na primeira visita, e os sabonetes iniciais vêm de `database/soaps.php`.

## Correr localmente

```
php -S 127.0.0.1:8000
```

Depois abre http://127.0.0.1:8000/index.php (precisa do PHP com a extensão `pdo_sqlite`, que vem ativa por defeito).

## Em alojamento partilhado

A pasta `data/` tem um `.htaccess` que impede o download do ficheiro. Para mais segurança, guarda a base de dados fora da pasta pública: cria um `config.local.php` (não vai para o git) com

```php
<?php
define('MAE_DB_PATH', '/caminho/fora/da/pasta/publica/mae.sqlite');
```
