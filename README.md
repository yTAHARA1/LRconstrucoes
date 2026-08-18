# LR Serviços e Manutenção — Website Institucional Oficial

Website institucional moderno, profissional, responsivo e de alto impacto desenvolvido para a empresa **LR Serviços e Manutenção**.

- **Proprietário:** Luis Rogério Taiacol
- **WhatsApp Oficial:** (18) 99661-6518
- **E-mail de Contato:** rle.cpnstrução@hotmail.com
- **Áreas de Atuação:** Araçatuba e região | São José do Rio Preto e região | Bauru | São Paulo — Capital | Litoral de São Paulo

---

## 🎨 Identidade Visual & Design

- **Paleta de Cores Oficial**:
  - **Azul Escuro Corporativo:** `#0b1a30` e `#112542` (Transmite confiança, solidez e engenharia)
  - **Laranja Segurança:** `#f05a28` e `#ff6b00` (Energia, trabalho de campo e destaque)
  - **Amarelo Destaque:** `#ffc72c` (Utilizado na **faixa principal da página inicial com fundo amarelo e letras em azul-escuro**)
  - **Preto / Carvão:** `#07101c` (Força e sofisticação)
  - **Branco:** `#ffffff` e `#f8fafc` (Limpeza visual e legibilidade)
- **Tipografia:** Google Fonts (*Outfit*, *Plus Jakarta Sans*, *Inter*)
- **Destaques de UI/UX:**
  - Banner Hero impactante com a frase obrigatória em fundo amarelo.
  - Cards 3D/Glassmorphism com efeito hover e modais "Saiba mais".
  - Destaque especial para **Limpeza de Placas Solares Fotovoltaicas**.
  - Mapa interativo/estilizado do Estado de São Paulo com polos de atendimento.
  - Galeria interativa com filtros dinâmicos por categoria (Pintura, Fachadas, Estruturas, Telhados, Impermeabilização, Altura, Energia Solar) e visualizador Lightbox.
  - Formulário completo de orçamento com validação no cliente e servidor, proteção Honeypot anti-spam e integração com WhatsApp.
  - Botão flutuante de WhatsApp com animação pulsante.

---

## 📁 Estrutura de Diretórios do Projeto

```
lr-servicos-manutencao/
│
├── index.php                 # Página Principal (One-Page completa com âncoras suaves)
├── sobre.php                 # Página modular Sobre a Empresa
├── servicos.php              # Página modular de Catálogo de Serviços
├── contato.php               # Página modular de Contato e Orçamento
├── index.html                # Versão estática completa para pré-visualização imediata
│
├── css/
│   └── style.css             # Folha de estilos completa, responsiva e mobile-first
│
├── js/
│   └── script.js             # Lógica do menu mobile, galeria, lightbox, modais e AJAX
│
├── php/
│   ├── config.php            # Central de configurações, contatos e metadados
│   └── enviar-formulario.php # Processador backend de orçamentos com proteção anti-spam
│
├── includes/
│   ├── header.php            # Cabeçalho global com SEO e Schema.org JSON-LD
│   └── footer.php            # Rodapé completo, copyright 2026 e WhatsApp flutuante
│
├── img/
│   ├── logo/                 # Logotipos em SVG (fundo claro, fundo escuro e favicon)
│   ├── servicos/             # Ilustrações técnicas vetorizadas de cada serviço
│   ├── equipe/               # Ilustração de engenharia e segurança do trabalho
│   ├── mapa/                 # Mapa vetorial estilizado do Estado de SP
│   └── galeria/              # Imagens demonstrativas categorizadas da galeria
│
├── java/
│   ├── README.md             # Documentação de arquitetura para futuros sistemas ERP/OS
│   └── LROrderManagementSystem.java  # Exemplo executável de gestão de ordens e NR-35
│
├── cpp/
│   ├── README.md             # Documentação de arquitetura para cálculos de ancoragem
│   └── SafetyAnchorageCalculator.cpp # Exemplo executável de cálculo estrutural e NR-35
│
└── README.md                 # Guia de instalação, configuração e publicação
```

---

## 🚀 Como Executar Localmente

### Opção 1: Servidor Embutido do PHP (Recomendado para testar PHP)
Se você tiver o PHP instalado:
```bash
# Na raiz do projeto:
php -S localhost:8000
```
Acesse no seu navegador: `http://localhost:8000`

### Opção 2: Python HTTP Server (Para visualização rápida)
```bash
# Na raiz do projeto:
python -m http.server 8000
```
Acesse no seu navegador: `http://localhost:8000` (abrirá o `index.html`)

### Opção 3: XAMPP / WAMP / Laragon
1. Copie a pasta do projeto para o diretório `htdocs` (ex: `C:\xampp\htdocs\lr-servicos-manutencao`).
2. Inicie o módulo **Apache** no painel do XAMPP.
3. Acesse no navegador: `http://localhost/lr-servicos-manutencao`

---

## ⚙️ Configurações Personalizáveis

No arquivo `php/config.php`:
1. **Instagram:** Para atualizar o link do Instagram quando disponível, edite a variável:
   ```php
   $instagram_url = "https://www.instagram.com/seu_perfil";
   ```
2. **E-mail de Destino:** Para alterar o e-mail que recebe os orçamentos:
   ```php
   $email_destinatario_form = "seu-email@dominio.com.br";
   ```
3. **WhatsApp:** O número padrão já está configurado como `(18) 99661-6518` e link `https://wa.me/5518996616518`.

---

## 🌐 Como Publicar em uma Hospedagem Web (cPanel, Hostinger, Locaweb, etc.)

1. Acesse o **Gerenciador de Arquivos** ou use um cliente **FTP** (FileZilla).
2. Envie todos os arquivos do projeto para a pasta raiz pública da sua hospedagem (`public_html` ou `www`).
3. Certifique-se de que a versão do PHP na sua hospedagem seja **PHP 7.4, 8.0, 8.1, 8.2 ou superior**.
4. Teste o envio do formulário de orçamento e os cliques do WhatsApp.

---

## ☕ Módulos Complementares em Java e C++

Conforme as diretrizes do projeto:
- **O site institucional é 100% autônomo** em HTML, CSS, JavaScript e PHP.
- As pastas `java/` e `cpp/` contêm documentação e protótipos de engenharia para futuras expansões de sistemas internos (backoffice de ordens de serviço, emissão de laudos de NR-35 e cálculos de ancoragem estrutural).
