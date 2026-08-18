<?php
/**
 * Processador de Formulário de Orçamento e Contato
 * LR Serviços e Manutenção
 * 
 * Funcionalidades:
 * - Validação rigorosa no servidor (sanitização e filtros de e-mail/telefone)
 * - Proteção anti-spam via Honeypot e verificação de integridade
 * - Suporte a requisições AJAX (JSON) e envios tradicionais via POST
 * - Preparado para disparo de e-mails com headers seguros (evitando email injection)
 * - Registro local seguro de leads (backup em log protegido)
 */

header('Content-Type: application/json; charset=utf-8');

// Inclui configurações
require_once __DIR__ . '/config.php';

// Resposta padrão
$resposta = [
    'success' => false,
    'message' => 'Ocorreu um erro ao processar sua solicitação.',
    'errors'  => []
];

// Aceita apenas requisições POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $resposta['message'] = 'Método de requisição inválido.';
    echo json_encode($resposta);
    exit;
}

// -------------------------------------------------------------
// 1. PROTEÇÃO ANTI-SPAM (HONEYPOT)
// -------------------------------------------------------------
// Campo oculto que robôs preenchem automaticamente
if (!empty($_POST['website_url']) || !empty($_POST['empresa_verificacao'])) {
    // Silenciosamente finge sucesso para bots sem disparar e-mail
    $resposta['success'] = true;
    $resposta['message'] = 'Sua solicitação foi recebida com sucesso!';
    echo json_encode($resposta);
    exit;
}

// -------------------------------------------------------------
// 2. CAPTURA E SANITIZAÇÃO DE DADOS
// -------------------------------------------------------------
$nome      = isset($_POST['nome']) ? sanitizar_texto($_POST['nome']) : '';
$telefone  = isset($_POST['telefone']) ? sanitizar_texto($_POST['telefone']) : '';
$whatsapp  = isset($_POST['whatsapp']) ? sanitizar_texto($_POST['whatsapp']) : '';
$email     = isset($_POST['email']) ? sanitizar_email($_POST['email']) : '';
$cidade    = isset($_POST['cidade']) ? sanitizar_texto($_POST['cidade']) : '';
$servico   = isset($_POST['servico']) ? sanitizar_texto($_POST['servico']) : '';
$mensagem  = isset($_POST['mensagem']) ? sanitizar_texto($_POST['mensagem']) : '';

// -------------------------------------------------------------
// 3. VALIDAÇÃO DOS CAMPOS OBRIGATÓRIOS
// -------------------------------------------------------------
if (empty($nome) || mb_strlen($nome) < 3) {
    $resposta['errors']['nome'] = 'Por favor, informe seu nome completo.';
}

if (empty($whatsapp) && empty($telefone)) {
    $resposta['errors']['whatsapp'] = 'Informe ao menos um número de WhatsApp ou telefone para contato.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $resposta['errors']['email'] = 'Por favor, informe um endereço de e-mail válido.';
}

if (empty($cidade)) {
    $resposta['errors']['cidade'] = 'Por favor, informe sua cidade/região.';
}

if (empty($servico)) {
    $resposta['errors']['servico'] = 'Selecione o serviço desejado.';
}

if (empty($mensagem) || mb_strlen($mensagem) < 5) {
    $resposta['errors']['mensagem'] = 'Descreva brevemente a sua necessidade ou projeto.';
}

// Se houver erros de validação
if (!empty($resposta['errors'])) {
    $resposta['message'] = 'Por favor, corrija os campos indicados antes de enviar.';
    echo json_encode($resposta);
    exit;
}

// -------------------------------------------------------------
// 4. PREPARAÇÃO DO E-MAIL INSTITUCIONAL
// -------------------------------------------------------------
$assunto = "Novo Pedido de Orçamento - LR Serviços: " . $nome . " (" . $cidade . ")";

$corpo_email_html = "
<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; color: #11161d; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; border-top: 5px solid #f05a28; box-shadow: 0 4px 12px rgba(0,0,0,0.08); overflow: hidden; }
        .header { background: #0b1a30; color: #ffffff; padding: 25px; text-align: center; }
        .header h1 { margin: 0; font-size: 22px; color: #ffc72c; }
        .header p { margin: 5px 0 0; font-size: 14px; color: #cfd8dc; }
        .content { padding: 30px; }
        .item { margin-bottom: 16px; border-bottom: 1px solid #eef2f6; padding-bottom: 12px; }
        .item-label { font-size: 12px; text-transform: uppercase; font-weight: bold; color: #607d8b; letter-spacing: 0.5px; }
        .item-value { font-size: 15px; color: #0b1a30; font-weight: 500; margin-top: 4px; }
        .message-box { background: #f8fafc; border-left: 4px solid #0b1a30; padding: 15px; border-radius: 4px; margin-top: 15px; font-size: 14px; line-height: 1.6; }
        .footer { background: #eef2f6; padding: 15px; text-align: center; font-size: 12px; color: #78909c; }
        .btn-whatsapp { display: inline-block; background: #25d366; color: #ffffff !important; padding: 10px 20px; border-radius: 50px; text-decoration: none; font-weight: bold; margin-top: 15px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>LR Serviços e Manutenção</h1>
            <p>Novo Pedido de Orçamento via Site</p>
        </div>
        <div class='content'>
            <div class='item'>
                <div class='item-label'>Nome do Solicitante</div>
                <div class='item-value'>" . htmlspecialchars($nome) . "</div>
            </div>
            <div class='item'>
                <div class='item-label'>WhatsApp / Telefone</div>
                <div class='item-value'>" . htmlspecialchars($whatsapp ?: $telefone) . "</div>
            </div>
            <div class='item'>
                <div class='item-label'>E-mail</div>
                <div class='item-value'>" . htmlspecialchars($email) . "</div>
            </div>
            <div class='item'>
                <div class='item-label'>Cidade / Região</div>
                <div class='item-value'>" . htmlspecialchars($cidade) . "</div>
            </div>
            <div class='item'>
                <div class='item-label'>Serviço Solicitado</div>
                <div class='item-value' style='color: #f05a28; font-weight: bold;'>" . htmlspecialchars($servico) . "</div>
            </div>
            <div class='item' style='border-bottom: none;'>
                <div class='item-label'>Descrição / Mensagem</div>
                <div class='message-box'>" . nl2br(htmlspecialchars($mensagem)) . "</div>
            </div>
            " . (!empty($whatsapp) ? "<div style='text-align:center;'><a href='https://wa.me/" . preg_replace('/[^0-9]/', '', $whatsapp) . "' class='btn-whatsapp' target='_blank'>Abrir Conversa no WhatsApp do Cliente</a></div>" : "") . "
        </div>
        <div class='footer'>
            LR Serviços e Manutenção &bull; Proprietário: Luis Rogério Taiacol<br>
            Recebido em " . date('d/m/Y \à\s H:i:s') . "
        </div>
    </div>
</body>
</html>
";

// Headers seguros
$remetente_limpo = preg_replace("/[^a-zA-Z0-9@._-]/", "", $email);
$headers = [
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=utf-8',
    'From: LR Manutencao <contato@lrservicos.com.br>',
    'Reply-To: ' . $remetente_limpo,
    'X-Mailer: PHP/' . phpversion()
];

// Tenta enviar via função mail() padrão do PHP (em servidores configurados)
$email_enviado = false;
if (function_exists('mail')) {
    // Suprime warnings caso a função mail local não esteja com sendmail configurado
    $email_enviado = @mail($email_destinatario_form, $assunto, $corpo_email_html, implode("\r\n", $headers));
}

// -------------------------------------------------------------
// 5. REGISTRO SEGURO DE LOG / BACKUP DE LEADS
// -------------------------------------------------------------
$log_dir = __DIR__ . '/../logs';
if (!is_dir($log_dir)) {
    @mkdir($log_dir, 0755, true);
    // Cria htaccess para proteger o diretório de logs contra visualização direta via web
    @file_put_contents($log_dir . '/.htaccess', "Deny from all\n");
}

$lead_data = [
    'data'     => date('Y-m-d H:i:s'),
    'nome'     => $nome,
    'whatsapp' => $whatsapp,
    'telefone' => $telefone,
    'email'    => $email,
    'cidade'   => $cidade,
    'servico'  => $servico,
    'mensagem' => $mensagem,
    'ip'       => $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0'
];

@file_put_contents(
    $log_dir . '/orcamentos_' . date('Y_m') . '.log',
    json_encode($lead_data, JSON_UNESCAPED_UNICODE) . PHP_EOL,
    FILE_APPEND | LOCK_EX
);

// -------------------------------------------------------------
// 6. RETORNO DE SUCESSO
// -------------------------------------------------------------
$resposta['success'] = true;
$resposta['message'] = 'Obrigado, ' . explode(' ', $nome)[0] . '! Sua solicitação de orçamento foi enviada com sucesso. Nossa equipe entrará em contato em breve pelo WhatsApp ou e-mail.';

// Prepara mensagem formatada caso o usuário queira abrir o WhatsApp instantaneamente
$texto_zap_orcamento = "Olá! Acabei de enviar uma solicitação pelo site.\n"
    . "*Nome:* " . $nome . "\n"
    . "*Cidade:* " . $cidade . "\n"
    . "*Serviço:* " . $servico;
$resposta['whatsapp_redirect_url'] = "https://wa.me/5518996616518?text=" . urlencode($texto_zap_orcamento);

echo json_encode($resposta);
exit;
?>
