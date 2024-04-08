<?php
require_once("funzioni.php");
echo creaInizioPagina("Elenco");
echo creaNavbar(true);
?>

<section>
    <div id="carousel_1" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel_1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel_1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel_1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://dummyimage.com/1920x500/e620e6/21db30&text=Prova" class="d-block w-100" alt="immagine1">
            </div>
            <div class="carousel-item">
                <img src="https://dummyimage.com/1920x500/20e6ae/e3260d.png&text=Prova1" class="d-block w-100" alt="immagine2">
            </div>
            <div class="carousel-item">
                <img src="https://dummyimage.com/1920x500/20e620/1a1818.png&text=Prova2" class="d-block w-100" alt="immagine3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Precedente</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel_1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Prossima</span>
        </button>
    </div>
</section>
<section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark rounded-0 pt-5 mb-0 ps-2">
            <li class="breadcrumb-item"><a href="#">Film</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Novità</li>
        </ol>
    </nav>
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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark rounded-0 pt-5 mb-0 ps-2">
            <li class="breadcrumb-item"><a href="#">Serie TV</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Novità</li>
        </ol>
    </nav>
    <div id="carouselExampleControls2" class="carousel slide bg-dark  pb-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="card" id="serieTv1" onmouseover="showElement('serieTv1', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('serieTv1')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="serieTv2" onmouseover="showElement('serieTv2', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('serieTv2')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="serieTv3" onmouseover="showElement('serieTv3', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('serieTv3')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="serieTv4" onmouseover="showElement('serieTv4', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('serieTv4')">
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
                            <div class="card" id="serieTv5" onmouseover="showElement('serieTv5', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('serieTv5')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="serieTv6" onmouseover="showElement('serieTv6', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('serieTv6')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="serieTv7" onmouseover="showElement('serieTv7', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('serieTv7')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card" id="serieTv8" onmouseover="showElement('serieTv8', 'https:' + String.fromCharCode(47) + String.fromCharCode(47) + 'placehold.co/300x150')" onmouseleave="hideElement('serieTv8')">
                                <img src="https://placehold.co/300x150" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
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