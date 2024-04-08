<?php
require_once("funzioni.php");
echo creaInizioPagina("Dettaglio");
echo creaNavbar(true);
?>

<section>

    <div class="row g-0">
        <div class="col-12 col-sm-5 bg-dark z-1 p-3">
            <div id="cardDettaglio">
                <h5 class="card-title">Titolo</h5>
                <div class="d-flex flex-inline pt-3">
                    <p class="text-pink pe-4">Durata: 87min</p>
                    <p class="text-pink">Anno: 2001</p>
                </div>

                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum modi atque, ab beatae ut similique provident! Illo at nostrum autem quae! Aliquam quisquam nostrum repellat! Tempora rerum praesentium iure sit.</p>
                <table class="table tabellaDettagli table-borderless">
                    <tbody>
                        <tr>
                            <td>Regista</td>
                            <td>Sean Decolavic</td>
                        </tr>
                        <tr>
                            <td>Interpreti</td>
                            <td>mike Dafoe</td>
                        </tr>
                        <tr>
                            <td>Genere</td>
                            <td>Animazione</td>
                        </tr>
                        <tr>
                            <td>Lingua</td>
                            <td>Italiano</td>
                        </tr>
                        <tr>
                            <td>Sottotitoli</td>
                            <td>Italiano,Inglese,Francese</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2 d-lg-block">
                    <button class="btn btn-primary" type="button">Riproduci <i class="far fa-play-circle"></i> </button>
                    <button class="btn btn-outline-warning" type="button">Modifica <i class="fas fa-edit"></i></button>
                    <button class="btn btn-outline-warning" type="button">Elimina <i class="fas fa-trash-alt"></i> </button>
                </div>
                <p class="text-white pt-5 fs-6">Facendo click su Riproduci accetti i nostri <a href="#" ext-decoration-none>Termini di utilizzo</a>.</p>

            </div>
        </div>
        <div class="col-7 p-0" id="imgContainer">
            <div id="imgEffect">
            </div>

        </div>

    </div>

</section>
<section class="bg-dark pb-5">

    <ol class="breadcrumb bg-dark rounded-0 pt-5 ps-3 pb-3 mb-0">
        <li class="breadcrumb-item"><a href="#">Film</a></li>
        <li class="breadcrumb-item active text-white" aria-current="page">Novità</li>
    </ol>

    <div id="carouselExampleControls" class="carousel slide bg-dark  pb-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="card" id="film1" onmouseover="showElement('film1', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('film1')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="film2" onmouseover="showElement('film2', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('film2')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="film3" onmouseover="showElement('film3', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('film3')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="film4" onmouseover="showElement('film4', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('film4')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="card" id="film5" onmouseover="showElement('film5', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('film5')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="film6" onmouseover="showElement('film6', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('film6')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="film7" onmouseover="showElement('film7', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('film7')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="film8" onmouseover="showElement('film8', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('film8')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
</section>
<script>
    function showElement(name, image) {
        let nomeElemento = name + "HiddenElement";
        let elementoDaAggiungere = document.getElementById(nomeElemento);
        if (!elementoDaAggiungere) {
            // Crea l'elemento div principale
            const divPrincipale = document.createElement('div');
            divPrincipale.classList.add('card', 'bg-dark', 'elementoNascosto', 'p-1', 'border');
            divPrincipale.id = name + 'HiddenElement';

            // Crea l'elemento immagine con classe "card-img-top" e imposta l'attributo src
            const img = document.createElement('img');
            img.classList.add('card-img-top');
            img.src = image;
            img.alt = '...';

            // Crea l'elemento div per il corpo della card con classe "card-body"
            const divCorpo = document.createElement('div');
            divCorpo.classList.add('card-body');

            // Crea l'elemento h5 con classe "card-title" e imposta il testo
            const h5 = document.createElement('h5');
            h5.classList.add('card-title', 'fsCardTitle');
            h5.innerText = 'Card title';

            // Crea l'elemento p con classe "card-text" e "text-white" e imposta il testo
            const p = document.createElement('p');
            p.classList.add('card-text', 'text-white', 'fsCardBody');
            p.innerText = "Some quick example text to build on the card title and make up the bulk of the card's content.";

            // Aggiunge l'elemento immagine e i suoi elementi figlio al div del corpo della card
            divCorpo.appendChild(h5);
            divCorpo.appendChild(p);

            // Aggiunge l'elemento immagine e il div del corpo della card all'elemento principale
            divPrincipale.appendChild(img);
            divPrincipale.appendChild(divCorpo);

            // Aggiunge l'elemento principale al body del documento
            let parentDiv = document.getElementById(name);
            if (parentDiv) {
                parentDiv.appendChild(divPrincipale);
            }


        };
    }

    function hideElement(name) {
        let nomeElemento = name + "HiddenElement";
        let elementoDaRimuovere = document.getElementById(nomeElemento);
        if (elementoDaRimuovere) {
            elementoDaRimuovere.remove();
        }
    }
</script>
<?php
echo creaFooter()
?>