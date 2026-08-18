# Possível uso futuro de Java

O site institucional da LR Serviços e Manutenção **não depende de Java**. Essa separação mantém o site leve, simples de hospedar e fácil de manter.

Java pode ser usado futuramente em um sistema complementar, por exemplo:

- aplicativo interno para gerenciamento de ordens de serviço;
- cadastro administrativo de clientes e locais atendidos;
- agenda de equipes, inspeções e manutenções;
- API segura para integrar um painel administrativo ao site;
- geração de relatórios operacionais e acompanhamento de serviços.

Caso essa expansão seja criada, recomenda-se mantê-la como uma aplicação independente, com autenticação, controle de acesso, banco de dados protegido e integração por API. Nenhum código Java deve ser colocado diretamente no frontend deste site.

