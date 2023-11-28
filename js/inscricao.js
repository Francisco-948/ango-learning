        // SEXO VS ESTADO CIVIL

$(document).ready(function() {
    $('#sexo').change(function() {
        var sexoSelecionado = $(this).val();
        var estadoCivilSelect = $('#Estado-civil');
        
        // Limpe as opções existentes
        estadoCivilSelect.empty();
        
        if (sexoSelecionado === 'Masculino') {
            estadoCivilSelect.append($("<option></option>")
                .attr("value", "Solteiro")
                .text("Solteiro"));
            estadoCivilSelect.append($("<option></option>")
                .attr("value", "Casado")
                .text("Casado"));
        } else if (sexoSelecionado === 'Feminino') {
            estadoCivilSelect.append($("<option></option>")
                .attr("value", "Solteira")
                .text("Solteira"));
            estadoCivilSelect.append($("<option></option>")
                .attr("value", "Casada")
                .text("Casada"));
        }
    });
});

        // CURSOS VS PREÇO E DURAÇÃO

$(document).ready(function() {
    // Mapeamento de cursos com valores, durações e períodos
    var cursos = {
        'Autocad': {
            valor: '25000',
            duracao: '2 Semanas',
            periodos: ['Manhã', 'Tarde', 'Noite'],
        },
        'Climatização e Frio': {
            valor: 'Valor do Climatização e Frio',
            duracao: '30 Dias',
            periodos: ['Manhã', 'Tarde', 'Noite'],
        },
        'Comandos Eléctricos': {
            valor: 'Valor do Comandos Eléctricos',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde', 'Noite'],
        },
        'Contabilidade Geral': {
            valor: 'Valor do Contabilidade Geral',
            duracao: '60 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Contabilidade Informatizada': {
            valor: 'Valor do Contabilidade Informatizada',
            duracao: '60 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Culinária': {
            valor: 'Valor do Culinária',
            duracao: '45 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Decoração Geral': {
            valor: 'Valor do Decoração Geral',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Decoração Infantil': {
            valor: 'Valor do Decoração Infantil',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Design Gráfico': {
            valor: 'Valor do Design Gráfico',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Edição de Video': {
            valor: 'Valor do Edição de Video',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Electricidade': {
            valor: 'Valor do Electricidade',
            duracao: '60 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Electricidade Automóvel': {
            valor: 'Valor do Electricidade Automóvel',
            duracao: '60 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Electrónica': {
            valor: 'Valor do Electrónica',
            duracao: '60 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Empreendedorismo': {
            valor: 'Valor do Empreendedorismo',
            duracao: '30 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Excel Avançado': {
            valor: 'Valor do Excel Avançado',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde', 'Noite'],
        },
        'Gestão de Empresas': {
            valor: 'Valor do Gestão de Empresas',
            duracao: '60 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Gestão de Recursos Humanos': {
            valor: 'Valor do Gestão de Recursos Humanos',
            duracao: '60 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Gestão de Recursos Humanos (Primaveira)': {
            valor: 'Valor do Gestão de Recursos Humanos (Primaveira)',
            duracao: '60 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Hardware & Software': {
            valor: 'Valor do Hardware & Software',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Higiene e Segurança no Trabalho': {
            valor: 'Valor do Higiene e Segurança no Trabalho',
            duracao: '60 Dias',
            periodos: ['Tarde', 'Noite'],
        },
        'Informática': {
            valor: 'Valor do Informática',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde', 'Noite'],
        },
        'Inglês': {
            valor: 'Valor do Inglês',
            duracao: '30 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Jornalismo': {
            valor: 'Valor do Jornalismo',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Liderança': {
            valor: 'Valor do Liderança',
            duracao: '30 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Marketing Digital': {
            valor: 'Valor do Marketing Digital',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Oratória e Retórica': {
            valor: 'Valor do Oratória e Retórica',
            duracao: '30 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Pastelaria': {
            valor: 'Valor do Pastelaria',
            duracao: '30 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Pedagogia': {
            valor: 'Valor do Pedagogia',
            duracao: '30 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
        'Programação Web e Base de Dados': {
            valor: 'Valor do Programação Web e Base de Dados',
            duracao: '60 Dias',
            periodos: ['Manhã', 'Tarde', 'Noite'],
        },
        'Redes de Computadores': {
            valor: 'Valor do Redes de Computadores',
            duracao: '60 Dias',
            periodos: ['Manhã', 'Tarde', 'Noite'],
        },
        'Secretariado Executivo': {
            valor: 'Valor do Secretariado Executivo',
            duracao: '45 Dias',
            periodos: ['Manhã', 'Tarde'],
        },
    };

    $('#curso').change(function() {
        var cursoSelecionado = $(this).val();
        if (cursoSelecionado in cursos) {
            $('#valor').val(cursos[cursoSelecionado].valor);
            $('#duracao').val(cursos[cursoSelecionado].duracao);

            var periodos = cursos[cursoSelecionado].periodos;
            var periodoSelect = $('#periodo');
            periodoSelect.empty();
            $.each(periodos, function(index, periodo) {
                periodoSelect.append($("<option></option>")
                    .attr("value", periodo)
                    .text(periodo));
            });
        } else {
            $('#valor').val('');
            $('#duracao').val('');
            $('#periodo').empty();
        }
    });
});

        // VALOR PAGO - FORMATO DE MOEDA

$(document).ready(function() {
    // Função para formatar o campo de valor como moeda
    function formatCurrency(input) {
        var value = input.value.replace(/\D/g, '');
        if (value.length > 0) {
            value = parseInt(value, 10);
            input.value = (value / 100).toLocaleString('pt', { style: 'currency', currency: 'AOA' });
        }
    }

    $('#valor_pago').on('input', function() {
        formatCurrency(this);
    });

    // Certifique-se de que apenas números sejam aceitos
    $('#valor_pago').on('keypress', function(event) {
        var key = event.keyCode;
        if (key < 48 || key > 57) {
            event.preventDefault();
        }
    });
});


        // PROVÍNCIA VS MUNICIPIOS

