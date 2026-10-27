<?php

/* ===== TEXTOS E LISTAS DA PÁGINA =====
   Tudo o que se repete na página (kit, novidades, FAQs) está aqui: para mudar um texto basta mudá-lo neste ficheiro. */

/* Texto provisório que ainda não foi substituído pelos textos reais da marca (kit e FAQs). */
$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas maiores ab nobis voluptatibus numquam, dolorum eligendi nam fugit, voluptatem ipsa consequuntur mollitia est. Quasi adipisci facere maiores, quibusdam ea corrupti.';

return [
    'kit' => [
        'price' => '35,00€',
        'details' => '7 sabonetes, 65gr cada',
        'description' => 'Uma coleção de miniaturas, para quem não se consegue decidir por um só sabonete!',
        /* [nome do sabonete, descrição que abre ao clicar] */
        'soaps' => [
            ['Sabonete de Chá Verde e Sândalo', $lorem],
            ['Sabonete de Mel e Cera de Abelhas', $lorem],
            ['Sabonete de Tangerina e Cardamomo', $lorem],
            ['Sabonete de Groselha Preta e Folha de Tomate', $lorem],
            ['Sabonete de Peónia e Neroli', $lorem],
            ['Sabonete de Alfazema e Erva Príncipe', $lorem],
            ['Sabonete de Chá Verde e Sândalo', $lorem],
        ],
    ],

    /* [imagem em imgs/imgs-produtos, nome] */
    'novidades' => [
        ['watermelon', 'Bálsamo Labial Melancia'],
        ['sealover', 'Sabonete Sea Lover'],
        ['toranjashampoo', 'Shampoo Sólido para Cabelos Normais'],
        ['azeitesabonete', 'Sabonete de Azeite Biológico de Tomilho'],
        ['incensoshampoo', 'Shampoo Sólido para Cabelo e Barba'],
        ['kitclassicos', 'Kit Miniaturas Sabonetes Clássicos'],
        ['wonderbalm', 'Wonder Balm'],
        ['limasabonete', 'Bálsamo Labial Lima'],
    ],

    /* As FAQs, em duas colunas: [pergunta, resposta (HTML)] */
    'faqs' => [
        [
            ['Condições Gerais', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
            ['Política De Privacidade', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
            ['Que Informação Recolhemos?', 'Recolhemos o seu nome, número de telefone, endereço postal, e-mail e idade para uso em campanhas de marketing, prémios e newsletters. Além disso, quando efetuar uma compra no nosso site, recolhemos também informações sobre a morada de entrega e detalhes de pagamento. Podemos também recolher outras informações sobre a sua experiência no nosso site que contribuem para a melhoria do nosso serviço.'],
        ],
        [
            ['Como são usados os dados recolhidos?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
            ['Atualização dos seus dados', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
            ['Clientes Internacionais', 'A Mãe Bodycare rege-se pela legislação e autorizações de comercialização em vigor em Portugal e não se responsabiliza por envios de artigos que não estão autorizadas a serem comercializadas no local de entrega. Nestes casos:<br><br>'
                .'Se o envio é efetuado via Correios Portugueses e, entra automaticamente em devolução, por motivos de não autorização de entrada da mercadoria no país de destino, após a recepção da encomenda devolvida na nossa loja, reembolsamos o valor dos produtos deduzido de eventuais taxas aduaneiras portuguesas aplicadas, sob forma de vale de desconto.<br><br>'
                .'Por motivos de atuação alfandegária, em alguns destinos de exceção só é colocada a possibilidade de optar ou não pela devolução. Ela é automaticamente efetuada e o custo suportado pelo nosso cliente. Embora pouco frequente, em casos específicos, o cliente poderá ter que se dirigir ao posto de correios mais próximo para proceder ao levantamento da encomenda.'],
        ],
    ],

    'footer' => [
        'address' => 'Rua Santa Teresa do Menino Jesus Nº6, 17º andar',
        'email' => 'fpg@fpg.pt',
        'phone' => '+351 214 123 780',
        'copyright' => '© 2023 MÃEBODYCARE. Todos os direitos reservados',
    ],
];
