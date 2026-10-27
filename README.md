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

## Estrutura

- `index.php`: a página; junta os blocos de `partials/` (hero, kit, novidades, FAQs, rodapé, janela de contacto).
- `content.php`: os textos e listas que se repetem (kit, novidades, FAQs, rodapé). Para mudar um texto, muda-se aqui. O texto provisório (lorem ipsum) do kit e de algumas FAQs ainda está por substituir.
- `site.js`: o menu do telemóvel e a janela de contacto (um `<dialog>`: fecha com Esc, e o formulário responde dentro da janela). O kit e as FAQs são `<details>` e funcionam sem JavaScript.
- `submit_contact.php`: valida e guarda a mensagem (JSON para o JavaScript, ou volta à página sem JavaScript).
- `styles.css`: os estilos, escritos a começar pelo telemóvel; o topo (`.hero`) cobre sempre a largura toda do ecrã, com imagens de vários tamanhos em `imgs/hero-*.webp`.
- `.htaccess`: cache longa das imagens, compressão, e bloqueia o acesso direto a ficheiros que só são incluídos (`db.php`, `content.php`, `partials/`, ...).
