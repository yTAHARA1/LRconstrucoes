<?php
/**
 * Arquivo de Configuração Geral - LR Serviços e Manutenção
 * Proprietário: Luis Rogério Taiacol
 * 
 * Este arquivo centraliza as informações da empresa, dados de contato,
 * redes sociais e configurações de envio de formulários.
 */

// Impede acesso direto se necessário
if (!defined('LR_APP')) {
    define('LR_APP', true);
}

// -------------------------------------------------------------
// 1. INFORMAÇÕES DA EMPRESA
// -------------------------------------------------------------
$empresa_nome        = "LR Serviços e Manutenção";
$empresa_razao       = "LR Serviços e Manutenção";
$empresa_proprietario = "Luis Rogério Taiacol";
$empresa_slogan      = "Segurança, qualidade e eficiência em manutenção predial e serviços em altura.";
$empresa_subtitulo   = "Soluções profissionais em pintura, restauração, recuperação estrutural, impermeabilização, manutenção predial e serviços em altura.";

// -------------------------------------------------------------
// 2. CONTATOS OFICIAIS
// -------------------------------------------------------------
$whatsapp_numero_formatado = "(18) 99661-6518";
$whatsapp_numero_limpo     = "5518996616518";
$whatsapp_url              = "https://wa.me/5518996616518";
$whatsapp_mensagem_padrao  = urlencode("Olá! Gostaria de solicitar um orçamento para serviços de manutenção predial com a LR.");
$whatsapp_link_completo    = $whatsapp_url . "?text=" . $whatsapp_mensagem_padrao;

$email_contato             = "rle.cpnstrução@hotmail.com";
$email_destinatario_form   = "rle.cpnstrução@hotmail.com"; // E-mail que receberá os orçamentos

// -------------------------------------------------------------
// 3. REDES SOCIAIS
// -------------------------------------------------------------
$instagram_nome            = "Luis Rogério Taiacol";
// Deixar a variável abaixo para preenchimento posterior pelo proprietário:
$instagram_url             = ""; // Exemplo futuro: "https://www.instagram.com/luisrogeriotaiacol"

// -------------------------------------------------------------
// 4. ÁREAS DE ATUAÇÃO
// -------------------------------------------------------------
$areas_atuacao = [
    "Araçatuba e região",
    "São José do Rio Preto e região",
    "Bauru",
    "São Paulo — Capital e região",
    "Litoral de São Paulo"
];

$frase_areas_atuacao = "Atendemos clientes em diferentes regiões do estado de São Paulo. Entre em contato para consultar a disponibilidade de atendimento.";

// -------------------------------------------------------------
// 5. SERVIÇOS OFERECIDOS (Para uso em selects e listagens)
// -------------------------------------------------------------
$servicos_principais = [
    "pintura_predial" => [
        "nome" => "Pintura predial",
        "desc" => "Restauração e pintura de prédios, fachadas e diferentes estruturas.",
        "icone" => "paint-roller",
        "tag" => "Destaque"
    ],
    "limpeza_fachadas" => [
        "nome" => "Limpeza de fachadas",
        "desc" => "Limpeza e conservação de fachadas de edifícios e outras construções.",
        "icone" => "building",
        "tag" => "Conservação"
    ],
    "calafetacao_trincas" => [
        "nome" => "Calafetação e tratamento de trincas e fissuras",
        "desc" => "Tratamento de trincas, fissuras e pontos sujeitos a infiltrações e deterioração.",
        "icone" => "shield-check",
        "tag" => "Prevenção"
    ],
    "ferragens_oxidadas" => [
        "nome" => "Tratamento de ferragens oxidadas",
        "desc" => "Tratamento de estruturas metálicas e ferragens que apresentam oxidação.",
        "icone" => "wrench",
        "tag" => "Estrutural"
    ],
    "servicos_altura" => [
        "nome" => "Suspensão e serviços em altura",
        "desc" => "Execução de serviços em altura por profissionais capacitados, com foco rigoroso em segurança.",
        "icone" => "arrow-up-circle",
        "tag" => "Especialidade"
    ],
    "manutencao_predial" => [
        "nome" => "Manutenção predial",
        "desc" => "Inspeção, manutenção e conservação contínua de edificações.",
        "icone" => "clipboard-check",
        "tag" => "Completo"
    ],
    "restauracao_telhados" => [
        "nome" => "Restauração de telhados",
        "desc" => "Serviços especializados de restauração e manutenção de telhados.",
        "icone" => "home",
        "tag" => "Proteção"
    ],
    "impermeabilizacao" => [
        "nome" => "Impermeabilização",
        "desc" => "Impermeabilização de reservatórios, piscinas, telhados, jardineiras e outras áreas sujeitas à infiltração.",
        "icone" => "droplet",
        "tag" => "Estanqueidade"
    ]
];

$demais_servicos = [
    "Restauração de pintura em geral",
    "Recuperação estrutural",
    "Tratamento de ferragens oxidadas",
    "Inspeção predial",
    "Manutenção predial preventiva e corretiva",
    "Restauração de telhados",
    "Vedação de janelas contra infiltrações de chuva",
    "Pintura epóxi de alto desempenho",
    "Impermeabilização de reservatórios",
    "Impermeabilização de piscinas",
    "Impermeabilização de telhados",
    "Impermeabilização de jardineiras",
    "Limpeza de fachadas",
    "Limpeza de placas solares de energia fotovoltaica" // Destaque especial
];

// -------------------------------------------------------------
// 6. METADADOS E SEO
// -------------------------------------------------------------
$ano_atual           = date("Y");
$meta_title_padrao   = "LR Serviços e Manutenção | Manutenção Predial e Serviços em Altura";
$meta_desc_padrao    = "Especialista em manutenção predial, trabalho em altura, pintura de fachadas, restauração de telhados e impermeabilização em SP. Engenheiros de segurança e equipe qualificada.";
$meta_keywords       = "manutenção predial, serviços em altura, pintura predial, pintura de prédios, limpeza de fachadas, impermeabilização, restauração de telhados, recuperação estrutural, tratamento de ferragens, limpeza de placas solares, manutenção predial em Araçatuba, manutenção predial em São Paulo";

// -------------------------------------------------------------
// 7. FUNÇÕES AUXILIARES DE SEGURANÇA
// -------------------------------------------------------------
function sanitizar_texto($dado) {
    if (empty($dado)) return '';
    return htmlspecialchars(trim(strip_tags($dado)), ENT_QUOTES, 'UTF-8');
}

function sanitizar_email($email) {
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}
?>
