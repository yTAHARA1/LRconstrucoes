<?php
/**
 * Header Global - LR Serviços e Manutenção
 * Proprietário: Luis Rogério Taiacol
 */
if (!defined('LR_APP')) {
    require_once __DIR__ . '/../php/config.php';
}

$page_title = isset($custom_title) ? $custom_title : $meta_title_padrao;
$page_desc  = isset($custom_desc) ? $custom_desc : $meta_desc_padrao;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- SEO & Metadados -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
  <meta name="author" content="<?php echo htmlspecialchars($empresa_proprietario); ?>">
  <meta name="robots" content="index, follow">

  <!-- Open Graph / Redes Sociais -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta property="og:image" content="img/servicos/pintura-predial.svg">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($empresa_nome); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="img/logo/favicon.svg">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@600;700;800;900&display=swap" rel="stylesheet">

  <!-- Estilos CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Schema.org Dados Estruturados -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "HomeAndConstructionBusiness",
    "name": "<?php echo $empresa_nome; ?>",
    "founder": {
      "@type": "Person",
      "name": "<?php echo $empresa_proprietario; ?>"
    },
    "description": "<?php echo $meta_desc_padrao; ?>",
    "telephone": "+5518996616518",
    "email": "<?php echo $email_contato; ?>",
    "areaServed": [
      "Araçatuba e região",
      "São José do Rio Preto e região",
      "Bauru",
      "São Paulo",
      "Litoral de São Paulo"
    ],
    "serviceType": [
      "Pintura predial",
      "Limpeza de fachadas",
      "Trabalho em altura",
      "Tratamento de trincas e fissuras",
      "Tratamento de ferragens oxidadas",
      "Impermeabilização",
      "Restauração de telhados",
      "Limpeza de placas solares"
    ]
  }
  </script>
</head>
<body>

  <!-- Top Bar com Contatos Rápidos -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-items">
        <div class="top-bar-item">
          <span>📍</span>
          <span>Atendimento em Todo o Estado de SP</span>
        </div>
        <div class="top-bar-item">
          <span>🛡</span>
          <span>Equipe com Engenheiros de Segurança do Trabalho</span>
        </div>
      </div>
      <div class="top-bar-items">
        <div class="top-bar-item">
          <span>📱</span>
          <a href="<?php echo $whatsapp_url; ?>" target="_blank" rel="noopener noreferrer">
            WhatsApp: <strong><?php echo $whatsapp_numero_formatado; ?></strong>
          </a>
        </div>
        <div class="top-bar-item">
          <span>✉</span>
          <a href="mailto:<?php echo $email_contato; ?>"><?php echo $email_contato; ?></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Cabeçalho Principal e Navegação -->
  <header class="site-header">
    <div class="container">
      <nav class="navbar" aria-label="Navegação Principal">
        <!-- Logo Vetorial Organizada -->
        <a href="index.php" class="brand-logo" title="<?php echo $empresa_nome; ?>">
          <div class="brand-icon-badge">
            <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="36" height="36" rx="8" fill="#0b1a30"/>
              <path d="M7 6L29 6L31 22Q18 34 7 22Z" fill="#142c4f" stroke="#f05a28" stroke-width="1.5"/>
              <line x1="18" y1="6" x2="18" y2="28" stroke="#ffc72c" stroke-width="1.5" stroke-dasharray="3 2"/>
              <text x="10" y="21" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-weight="900" font-size="12" fill="#ffffff">L</text>
              <text x="17" y="21" font-family="'Plus Jakarta Sans', Arial, sans-serif" font-weight="900" font-size="12" fill="#f05a28">R</text>
            </svg>
          </div>
          <div class="brand-text-group">
            <div class="brand-name">
              <span class="brand-name-lr">LR</span>
              <span class="brand-name-sep">|</span>
              <span class="brand-name-sub">SERVIÇOS E MANUTENÇÃO</span>
            </div>
            <span class="brand-tagline">Manutenção Predial &bull; Trabalho em Altura</span>
          </div>
        </a>

        <!-- Menu de Navegação Limpo e Organizado -->
        <ul class="nav-menu" id="navMenu">
          <li><a href="index.php#inicio" class="nav-link">Início</a></li>
          <li><a href="index.php#servicos" class="nav-link">Serviços</a></li>
          <li><a href="index.php#sobre" class="nav-link">Sobre Nós</a></li>
          <li><a href="index.php#valores" class="nav-link">Valores</a></li>
          <li><a href="index.php#atuacao" class="nav-link">Áreas de Atuação</a></li>
          <li><a href="index.php#galeria" class="nav-link">Galeria</a></li>
          <li><a href="index.php#contato" class="nav-link">Contato</a></li>
        </ul>

        <!-- Botões de Ação do Header -->
        <div class="nav-actions">
          <a href="index.php#contato" class="btn btn-primary btn-header-cta">
            Solicitar Orçamento
          </a>

          <!-- Botão Mobile Hamburguer -->
          <button class="mobile-toggle" id="mobileToggle" aria-label="Abrir Menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </nav>
    </div>
  </header>
