$(document).ready(function () {
    var municipiosPorProvincia = {
        "Bengo": [
            "Ambriz",
            "Bula-Atumba",
            "Dande",
            "Dembos",
            "Nambuangongo",
            "Pango-Aluquém",
            "Quiçama"
        ],
        "Benguela": [
            "Balombo",
            "Baía Farta",
            "Benguela",
            "Bocoio",
            "Caimbambo",
            "Catumbela",
            "Chongorói",
            "Cubal",
            "Ganda",
            "Lobito"
        ],
        "Bié": [
            "Andulo",
            "Camacupa",
            "Catabola",
            "Chinguar",
            "Chitembo",
            "Cuemba",
            "Cuito",
            "Cunhinga",
            "Nhârea",
            "Ukuma"
        ],
        "Cabinda": [
            "Belize", 
            "Cabinda", 
            "Cacongo", 
            "Landana"],
        "Cunene": [
            "Cahama",
            "Cuanhama",
            "Curoca",
            "Cuvelai",
            "Namacunde",
            "Ombadja",
            "Ondjiva"
        ],
        "Huambo": [
            "Bailundo",
            "Caála",
            "Ekunha",
            "Huambo",
            "Longonjo",
            "Londuimbali",
            "Mungo",
            "Tchicala-Tcholohanga",
            "Tchitato"
        ],
        "Huíla": [
            "Caconda",
            "Caluquembe",
            "Chibia",
            "Chicomba",
            "Chipindo",
            "Humpata",
            "Jamba",
            "Kuvango",
            "Lubango",
            "Matala",
            "Quilengues"
        ],
        "Luanda": [
            "Belas",
            "Cacuaco",
            "Cazenga",
            "Icolo e Bengo",
            "Luanda",
            "Quiçama",
            "Talatona",
            "Viana",
            "Cacuaco",
            "Cazenga"
        ],        
        "Kuando Kubango": [
            "Calai",
            "Cuangar",
            "Cuchi",
            "Cuito Cuanavale",
            "Dirico",
            "Mavinga",
            "Menongue",
            "Nancova",
            "Rivungo"],
        "Kwanza Norte": [
            "Ambaca", 
            "Bangão", 
            "Bolongongo", 
            "Cambambe", 
            "Cazengo", 
            "Golungo Alto", 
            "Lucala", 
            "Quiculungo", 
            "Samba Caju"],
        "Kwanza Sul": [
            "Ambaca", 
            "Bangão", 
            "Bolongongo", 
            "Cambambe", 
            "Cazengo", 
            "Golungo Alto", 
            "Lucala", 
            "Quiculungo", 
            "Samba Caju"],
        "Lunda Norte": [
            "Cambulo",
            "Capenda-Camulemba",
            "Caungula",
            "Chitato",
            "Cuango",
            "Lóvua",
            "Lucapa",
            "Xá-Muteba"],
        "Lunda Sul": [
            "Cacolo", 
            "Dala", 
            "Muconda", 
            "Saurimo"],
        "Malanje": [
            "Cacuso",
            "Calandula",
            "Camba Punza",
            "Cangandala",
            "Kiwaba Nzoji",
            "Luquembo",
            "Malanje",
            "Marimba",
            "Massango",
            "Mucari",
            "Quela",
            "Quirima"],
        "Moxico": ["Alto-Zambeze",
            "Bundas",
            "Camanongue",
            "Cameia",
            "Léua",
            "Luacano",
            "Luau",
            "Luchazes",
            "Luchazes",
            "Luena",
            "Lumbala-N'guimbo",
            "Lutembo",
            "Moxico"],
        "Namibe": [
            "Alto-Zambeze",
            "Bundas",
            "Camanongue",
            "Cameia",
            "Léua",
            "Luacano",
            "Luau",
            "Luchazes",
            "Luchazes",
            "Luena",
            "Lumbala-N'guimbo",
            "Lutembo",
            "Moxico"],
        "Uíge": [
            "Ambuila", 
            "Bembe", 
            "Buengas", 
            "Bungu", 
            "Damba", 
            "Mucaba", 
            "Negage", 
            "Puri", 
            "Quitexe", 
            "Sanza Pombo", 
            "Uíge"],
        "Zaire": [
            "Cuimba", 
            "M'banza Kongo", 
            "Nóqui", 
            "Soio"]
    };

    var provinciaSelect = $('#provincia');
    var municipioSelect = $('#municipio');

    // Quando a província é alterada, atualize as opções do município
    provinciaSelect.change(function () {
        var selectedProvincia = $(this).val();
        var municipios = municipiosPorProvincia[selectedProvincia];

        municipioSelect.find('option').remove();
        municipioSelect.append($('<option>', {
            selected: true,
            disabled: true,
            text: "Selecione um Município"
        }));

        if (municipios) {
            municipioSelect.prop('disabled', false);
            $.each(municipios, function (index, municipio) {
                municipioSelect.append($('<option>', {
                    value: municipio,
                    text: municipio
                }));
            });
        } else {
            municipioSelect.prop('disabled', true);
        }
    });
});