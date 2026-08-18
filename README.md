# LR Serviços e Manutenção — versão para GitHub Pages

Esta é a versão **estática** do site, pronta para ser publicada no GitHub Pages. Ela não precisa de PHP, banco de dados, servidor de e-mail ou processo de compilação.

## O que foi convertido

- `index.php` → `index.html`;
- `servicos.php` → `servicos.html`;
- `sobre.php` → `sobre.html`;
- `contato.php` → `contato.html`;
- cabeçalho e rodapé foram incorporados em todas as páginas;
- todos os links internos apontam para arquivos `.html`;
- o formulário agora prepara a solicitação e abre o WhatsApp da empresa;
- o processamento PHP e o `.htaccess` foram removidos desta versão;
- o arquivo `.nojekyll` foi incluído para publicação direta dos arquivos.

## Publicar usando o site do GitHub

1. Entre em `https://github.com` e faça login.
2. Clique no botão para criar um novo repositório.
3. Use o nome `lr-servicos-manutencao`.
4. Se estiver usando o plano gratuito, deixe o repositório como **Public**.
5. Crie o repositório sem adicionar outros arquivos automáticos.
6. Na página do repositório, escolha **Add file → Upload files**.
7. Envie **o conteúdo desta pasta**, deixando `index.html`, `servicos.html`, `sobre.html`, `contato.html`, `css/`, `js/` e `img/` diretamente na raiz do repositório.
8. Confirme o envio dos arquivos.
9. Abra **Settings → Pages**.
10. Em **Build and deployment**, escolha **Deploy from a branch**.
11. Selecione a branch `main`, a pasta `/(root)` e clique em **Save**.

O endereço será parecido com:

```text
https://SEU-USUARIO.github.io/lr-servicos-manutencao/
```

A publicação pode levar alguns minutos. A página **Settings → Pages** mostrará o endereço quando estiver pronta.

## Formulário no GitHub Pages

O GitHub Pages não executa PHP. Por isso, o formulário foi adaptado para:

1. validar os campos no navegador;
2. montar uma mensagem com nome, telefone, cidade, serviço e descrição;
3. abrir `https://wa.me/5518996616518` com a mensagem preenchida;
4. permitir que o visitante revise e envie a mensagem pelo WhatsApp.

Nenhuma informação do formulário é armazenada pelo site.

## Configurações pendentes

Antes de divulgar o endereço:

- confirme a grafia de `rle.cpnstrução@hotmail.com`;
- substitua os espaços demonstrativos da galeria por fotografias reais autorizadas;
- adicione o endereço oficial do Instagram quando estiver disponível;
- depois da primeira publicação, use o endereço final do site nas tags `og:image`, `og:url` e `canonical` para melhorar o compartilhamento e o SEO;
- caso a empresa contrate um domínio, configure-o em **Settings → Pages → Custom domain**.

Não foram inventados CNPJ, endereço, CREA, certificações, avaliações, obras realizadas ou outros dados não fornecidos.

## Testar no computador

Por ser estático, o site pode ser testado com qualquer servidor local simples. Também é possível abrir `index.html` diretamente, embora alguns navegadores restrinjam certos comportamentos em arquivos locais.

## Estrutura

```text
lr-servicos-manutencao-github-pages/
├── index.html
├── servicos.html
├── sobre.html
├── contato.html
├── 404.html
├── .nojekyll
├── robots.txt
├── css/
├── js/
├── img/
└── docs/
```
