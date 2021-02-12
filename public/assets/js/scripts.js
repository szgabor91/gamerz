$(document).on('click', '#news', function (event) {
    event.preventDefault();
    //alert('LÓÓÓFASZ...');
    $.get('news').then(function (response) {
        response = JSON.parse(response);

        $("#articles").html("");

        for (let key in response) {
            let div = $('<div></div>');
            $(div).text(response[key].article_title);
            $("#articles").append(div);
        }

        console.log(response);
    });
})

$(document).on('click', '#tests', function (event) {
    event.preventDefault(); // ha nem rakjuk be, akkor a bngésző átirányit
    //alert('hübazdmegisjólenne');
    $.get('tests') // ez küldi az ajax kérést, egy promise-t ad vissza
        // két ága lehet: then(sikeres) s catch(sikertelen)
        .then(function (response) // mi legyen az a callback, ami meghivodjon, ha sikeres volt a kérés
        {
            response = JSON.parse(response); // patse-oljuk, hogy ojjektumokat tartalmazó tömb legyen

            $("#articles").html("");

            for (let key in response) {
                let div = $('<div></div>'); // létrehozunk egy divet, ami itt még csak a memóriában létezik
                $(div).text(response[key].article_title); // beirja a divbe az article_title-t
                $("#articles").append(div);
            }

            console.log(response);
        });
})

$(document).on('click', '#Playstation-4', function (event) {
    event.preventDefault();
    console.log('#Playstation-4');
    $.get('news').then(function (response) {
        response = JSON.parse(response);

        $("#articles").html("");

        for (let key in response) {
            let div = $('<div></div>');
            $(div).text(response[key].platform);
            $("#articles").append(div);
        }

        console.log(response);
    });
})

