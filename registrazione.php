<?php
require_once("funzioni.php");
echo creaInizioPagina("Registrazione");
echo creaNavbar(false);
?>


<div class="row m-0 p-0 justify-content-center containerCardRegistrazione">
    <div class="col-10 col-md-8">
        <div class="card m-3 cardRegistrazione">
            <div class="card-body d-flex flex-column text-light text-center" id="cardBody">
                <h2 class="card-title text-white mb-4">Registrazione</h2>
                <form class="row g-3 needs-validation d-flex flex-column align-content-center" id="formRegistrazione" novalidate>

                    <div class="col-12 mt-0 mb-0">

                        <div class="form-group needs-validation pb-0 p-2">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            <label for="inputEmail" class="sr-only">Email</label>
                            <div class="invalid-feedback">
                                Inserisci una email valida.
                            </div>
                        </div>


                    </div>

                    <div class="col-12 mt-0">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                                    <label for="inputNome" class="sr-only">Nome</label>
                                    <div class="invalid-feedback">
                                        Inserisci un nome valido.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <input type="text" class="form-control" id="inputCognome" placeholder="Cognome">
                                    <label for="inputCognome" class="sr-only">Cognome</label>
                                    <div class="invalid-feedback">
                                        Inserisci un cognome valido.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-0">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <select class="form-select " id="selectSesso">
                                        <option class="text-" selected disabled value="">Sesso</option>
                                        <option class="text-" value="0">Maschio</option>
                                        <option class="text-" value="1">Femmina</option>
                                        <option class="text-" value="2">Altro</option>
                                    </select>
                                    <label for="selectSesso" class="sr-only">Seleziona il sesso</label>
                                    <div class="invalid-feedback">
                                        Seleziona un elemento.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <input type="text" class="form-control" id="inputDataNascita" placeholder="Data di nascita" onfocus="(this.type='date')">
                                    <label for="inputDataNascita" class="sr-only">Data di nascita</label>
                                    <div class="invalid-feedback">
                                        Inserisci una data valida
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-0">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <div class="input-group">
                                        <div class="input-group has-validation">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            <button class="btn btn-light border" type="button" id="togglePassword" onclick="mostraPassword(inputPassword,togglePassword)">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <div class="invalid-feedback">
                                                Inserisci una password corretta.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <div class="input-group">
                                        <div class="input-group has-validation">
                                            <input type="password" class="form-control" id="inputRipetiPassword" placeholder="Ripeti la password">
                                            <button class="btn btn-light border" type="button" id="toggleRipetiPassword" onclick="mostraPassword(inputRipetiPassword,toggleRipetiPassword)">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <div class="invalid-feedback">
                                                Le password non coincidono.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <p class="pt-3 border-top">Informazioni di fatturazione </p>
                    </div>

                    <div class="col-12 mt-0">
                        <div class="form-group needs-validation mb-0 p-2 pb-0">
                            <input type="text" class="form-control" id="inputIndirizzo" placeholder="Indirizzo">
                            <label for="inputIndirizzo" class="form-label sr-only">Indirizzo</label>
                            <div class="invalid-feedback">
                                Inserisci l'indirizzo'.
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-0">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <select class="form-select" id="selectNazione">
                                        <option class="text-" selected disabled value="">Nazione</option>
                                        <option class="text-" value="0">Italia</option>
                                        <option class="text-" value="1">Altro</option>
                                    </select>
                                    <label for="selectNazione" class="form-label sr-only">Seleziona la nazione</label>
                                    <div class="invalid-feedback">
                                        Seleziona un elemento.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0" id="contenitoreCitta">
                                    <input type="text" class="form-control" id="inputCitta" placeholder="Città">
                                    <label for="inputCitta" class="form-label sr-only">Città</label>
                                    <select class="form-select" id="selectCitta">
                                        <option class="text-" selected disabled value="">Città</option>
                                        <option class="text-" value="0">Roma</option>
                                        <option class="text-" value="1">Milano</option>
                                        <option class="text-" value="2">Palermo</option>
                                    </select>
                                    <label for="selectCitta" class="form-label sr-only">Seleziona la città</label>
                                    <div class="invalid-feedback" id="invalidFeedbackCitta">
                                        Inserisci una città.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-0">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <input type="text" class="form-control" id="inputProvincia" placeholder="Provincia">
                                    <label for="inputProvincia" class="form-label sr-only">Provincia</label>
                                    <select class="form-select" id="selectProvincia">
                                        <option class="text-" selected disabled value="">Provincia</option>
                                        <option class="text-" value="0">Provincia 1</option>
                                        <option class="text-" value="1">Provincia 2</option>
                                        <option class="text-" value="2">Provincia 3</option>
                                    </select>
                                    <label for="selectNazione" class="form-label sr-only">Seleziona la nazione</label>
                                    <div class="invalid-feedback">
                                        Seleziona un elemento.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <input type="text" class="form-control" id="inputCap" placeholder="Cap">
                                    <label for="inputCap" class="form-label sr-only">Cap</label>
                                    <select class="form-select" id="selectCap">
                                        <option class="text-" selected disabled value="">Cap</option>
                                        <option class="text-" value="0">1</option>
                                        <option class="text-" value="1">2</option>
                                        <option class="text-" value="2">3</option>
                                    </select>
                                    <label for="selectCap" class="form-label sr-only">Seleziona il cap</label>
                                    <div class="invalid-feedback">
                                        Seleziona un elemento.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-0">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <input type="text" class="form-control" id="inputTelefono" placeholder="Telefono">
                                    <label for="inputTelefono" class="form-label sr-only">Telefono</label>
                                    <div class="invalid-feedback">
                                        Inserisci un numero di telefono.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-2">
                                <div class="form-group needs-validation mb-0">
                                    <input type="text" class="form-control" id="inputCodiceFiscale" placeholder="Codice Fiscale">
                                    <label for="inputCodiceFiscale" class="form-label sr-only">Codice Fiscale</label>
                                    <div class="invalid-feedback">
                                        Inserisci un codice corretto.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <div class="form-group">
                            <input class="form-check-input form-check-input-bg-primary" type="checkbox" value="" id="checkBoxInformativa">
                            <label class="form-check-label" for="checkBoxInformativa">
                                Accetto termini e condizioni
                            </label>
                            <div class="invalid-feedback">
                                Devi accetterare termini e condizioni per procedere.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2 ">
                        <button class="btn btn-primary" type="submit" id="buttonSubmit">Registrati</button>
                    </div>
                </form>
                <script src="funzioniJs.js"></script>
            </div>
        </div>
    </div>

</div>

<?php
echo creaFooter()
?>