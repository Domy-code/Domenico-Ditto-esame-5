var form = document.getElementById('formRegistrazione');
var emailInput = document.getElementById('inputEmail');
var nomeInput = document.getElementById('inputNome');
var cognomeInput = document.getElementById('inputCognome');
var sessoSelect = document.getElementById('selectSesso');
var dataNascitaInput = document.getElementById('inputDataNascita');
var passwordInput = document.getElementById('inputPassword');
var ripetiPasswordInput = document.getElementById('inputRipetiPassword');
var indirizzoInput = document.getElementById('inputIndirizzo');
var nazioneSelect = document.getElementById('selectNazione');
var cittaSelect = document.getElementById('selectCitta');
var cittaInput = document.getElementById('inputCitta');
var provinciaSelect = document.getElementById('selectProvincia');
var provinciaInput = document.getElementById('inputProvincia');
var capSelect = document.getElementById('selectCap');
var capInput = document.getElementById('inputCap');
var telefonoInput = document.getElementById('inputTelefono');
var codiceFiscaleInput = document.getElementById('inputCodiceFiscale');
var buttonSubmit = document.getElementById('buttonSubmit');
var togglePassword = document.getElementById('togglePassword');
var toggleRipetiPassword = document.getElementById('toggleRipetiPassword');
var informativaCheckBox = document.getElementById('checkBoxInformativa');
var checkValidazione = 0;
var inputArray = [
    emailInput, nomeInput, cognomeInput, dataNascitaInput, passwordInput, ripetiPasswordInput, indirizzoInput, telefonoInput, codiceFiscaleInput, cittaInput, provinciaInput, capInput
];
var selectArray = [
    sessoSelect, nazioneSelect, provinciaSelect, cittaSelect, capSelect
];
nazioneSelect.addEventListener('change', function (event) {
    //Se la nazione selezionata è l' Italia
    if (nazioneSelect.value === "0") {
        cittaInput.style.display = 'none';
        provinciaInput.style.display = 'none';
        capInput.style.display = 'none';
        cittaSelect.style.display = 'block';
        provinciaSelect.style.display = 'block';
        capSelect.style.display = 'block';
    }
    else {
        cittaInput.style.display = 'block';
        provinciaInput.style.display = 'block';
        capInput.style.display = 'block';
        cittaSelect.style.display = 'none';
        provinciaSelect.style.display = 'none';
        capSelect.style.display = 'none';
    }
});
form.addEventListener('submit', function (event) {
    //Verifico se i dati inseriti sono validi
    if (validazione() === false) {
        //Se non sono validi
        //Blocco l' esecuzione del submit
        event.preventDefault();
    }
    else {
        event.preventDefault();
        var utente = {
            email: emailInput.value,
            nome: nomeInput.value,
            cognome: cognomeInput.value,
            sesso: sessoSelect.value,
            dataNascita: dataNascitaInput.value,
            password: passwordInput.value,
            indirizzo: indirizzoInput.value,
            nazione: nazioneSelect.value,
            citta: cittaSelect.value,
            provincia: provinciaSelect.value,
            cap: capSelect.value,
            telefono: telefonoInput.value,
            codiceFiscale: codiceFiscaleInput.value
        };
        console.log(utente);
    }
    //Applico ad ogni elemento di tipo input un evento listener per rilevare variazioni nell' inserimento dei dati
    inputArray.forEach(function (element) {
        element.addEventListener('input', function (event) {
            // Richiama la funzione di validazione ad ogni inserimento 
            validazione();
        });
    });
    //Applico ad ogni elemento di tipo select un listener per rilevare variazioni nella scelta di un opzione
    selectArray.forEach(function (element) {
        element.addEventListener('change', function (event) {
            // Richiama la funzione di validazione ad ogni cambio di selezione
            validazione();
        });
    });
    //Applico alla checkbox un listener per rilevare variazioni nella selezione
    informativaCheckBox.addEventListener('change', function (event) {
        // Richiama la funzione di validazione ad ogni cambio di selezione
        validazione();
    });
    function validazione() {
        //Setto le variabili per il controllo 
        var checkEmail = false;
        var checkNome = false;
        var checkCognome = false;
        var checkSesso = false;
        var checkDataNascita = false;
        var checkPassword = false;
        var checkRipPassword = false;
        var checkIndirizzo = false;
        var checkNazione = false;
        var checkCitta = false;
        var checkProvincia = false;
        var checkCap = false;
        var checkTelefono = false;
        var checkCodiceFiscale = false;
        var checkInformativa = false;
        //########## Valido l'email #####################
        //Verifico se il campo è vuoto
        if (emailInput.value.trim() === "") {
            //Se è vuoto richiamo la funzione che applica le classi e mostra il messaggio
            messaggiErrore(emailInput, "Inserisci una e-mail.");
            //Setto la variabile di controllo su false
            checkEmail = false;
        }
        else {
            //Se il campo è stato compilato
            //Regual expression per il confronto con i dati inseriti
            var regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            //Confronto i dati inseriti con la regular expression
            if (!emailInput.value.trim().match(regEx)) {
                //Se non corrispondono richiamo la funzione che applica le classi e mostra il messaggio
                messaggiErrore(emailInput, "Inserisci una e-mail valida");
                //Setto la variabile di controllo su false
                checkEmail = false;
            }
            else {
                //Se corrispondono richiamo la funzione che applica le classi e rimuove il messaggio di errore
                validazioneOk(emailInput);
                //Setto la variabile di controllo su true
                checkEmail = true;
            }
        }
        //########## Valido il nome ##################### 
        //Verifico se il campo è vuoto
        if (nomeInput.value.trim() === "") {
            //Se è vuoto richiamo la funzione che applica le classi e mostra il messaggio
            messaggiErrore(nomeInput, 'Inserisci il nome');
            //Setto la variabile di controllo su false
            checkNome = false;
        }
        else {
            //Se il campo è stato compilato
            //Regular expression per il confronto con i dati inseriti
            var regEx_1 = /^[a-zA-ZÀ-ÖØ-öø-ÿ]+(?:\s[a-zA-ZÀ-ÖØ-öø-ÿ]+)*$/;
            //Confronto i dati inseriti con la regular expression
            if (!nomeInput.value.trim().match(regEx_1)) {
                //Se non corrispondono richiamo la funzione che applica le classi e mostra il messaggio
                messaggiErrore(nomeInput, "Inserisci un nome valido");
                //Setto la variabile di controllo su false
                checkNome = false;
            }
            else {
                //Verifico che i caratteri inseriti siano nel range corretto 
                if (nomeInput.value.trim().length <= 2 || nomeInput.value.trim().length > 29) {
                    //Se non rientrano nel range
                    messaggiErrore(nomeInput, "La lunghezza deve essere tra 3 e 30 caratteri");
                    //Setto la variabile di controllo su false
                    checkNome = false;
                }
                else {
                    //Se la lunghezza è corretta richiamo la funzione che applica le classi e rimuove il messaggio di errore
                    validazioneOk(nomeInput);
                    //Setto la variabile di controllo su true
                    checkNome = true;
                }
            }
        }
        //########## Valido il cognome ##################### 
        //Verifico se il campo è vuoto
        if (cognomeInput.value.trim() === "") {
            //Se è vuoto richiamo la funzione che applica le classi e mostra il messaggio
            checkCognome = false;
            messaggiErrore(cognomeInput, 'Inserisci il cognome');
        }
        else {
            //Se il campo è stato compilato
            //Regular expression per il confronto con i dati inseriti
            var regEx_2 = /^[a-zA-ZÀ-ÖØ-öø-ÿ]+(?:\s[a-zA-ZÀ-ÖØ-öø-ÿ]+)*$/;
            //Confronto i dati inseriti con la regular expression
            if (!cognomeInput.value.trim().match(regEx_2)) {
                //Se non corrispondono richiamo la funzione che applica le classi e mostra il messaggio
                messaggiErrore(cognomeInput, "Inserisci un cognome valido");
                //Setto la variabile di controllo su false
                checkCognome = false;
            }
            else {
                //Verifico che i caratteri inseriti siano nel range corretto 
                if (cognomeInput.value.trim().length <= 2 || cognomeInput.value.trim().length > 29) {
                    //Se non rientrano
                    messaggiErrore(cognomeInput, "La lunghezza deve essere tra 3 e 30 caratteri");
                    //Setto la variabile di controllo su false 
                    checkCognome = false;
                }
                else {
                    //Se la lunghezza è corretta richiamo la funzione che applica le classi e rimuove il messaggio di errore
                    validazioneOk(cognomeInput);
                    //Setto la variabile di controllo su true
                    checkCognome = true;
                }
            }
        }
        //########## Valido il Sesso ####################
        //Verifico se il campo è stato selezionato
        if (sessoSelect.value === "") {
            //Se non è stato selezionato alcun elemento
            messaggiErrore(sessoSelect, "Seleziona un elemento");
            //Setto la variabile di controllo su false
            checkSesso = false;
        }
        else {
            //Se è stato selezionato un elemento richiamo la funzione che applica le classi e rimuove il messaggio di errore
            validazioneOk(sessoSelect);
            //Setto la variabile di controllo su true
            checkSesso = true;
        }
        //########## Valido la data di nascita ###################
        //verifico se il campo è stato compilato
        if (dataNascitaInput.value === "") {
            //Se il campo è vuoto
            //Setto la variabile di controllo su false
            checkDataNascita = false;
            //Applico le classi di errore e mostro il messaggio
            messaggiErrore(dataNascitaInput, "Inserisci la data di nascita");
        }
        else {
            //Se il campo è stato compilato
            //Ottengo la data odierna
            var dataOdierna = new Date();
            //Trasformo il contenuto del campo value in un oggeto di tipo data
            var inputDateValue = new Date(dataNascitaInput.value);
            var inputDateValueConverted = inputDateValue.setFullYear(inputDateValue.getFullYear());
            //Verifico che la data inserita non sia successiva a quella attuale
            if (inputDateValue > dataOdierna) {
                //Se è successiva applico le classi di errore e mostro il messaggio
                checkDataNascita = false;
                messaggiErrore(dataNascitaInput, "Inserisci una data valida");
            }
            else {
                //se è precedente verifico che sia compresa tra i 18 e i 110 anni
                //Ricavo l' anno minimo e massimo 
                var annoMin = dataOdierna.setFullYear(dataOdierna.getFullYear() - 18);
                var annoMax = dataOdierna.setFullYear(dataOdierna.getFullYear() - 110);
                if (inputDateValueConverted < annoMax) {
                    //Se la data inserita è oltre i 110 anni applico le classi e mostro il messaggio
                    checkDataNascita = false;
                    messaggiErrore(dataNascitaInput, "L' età non puo essere superiore a 110 anni");
                    //Se la data inserit è inferiore ai 18 anni applico le classi e mostro il messaggio
                }
                else if (inputDateValueConverted > annoMin) {
                    checkDataNascita = false;
                    messaggiErrore(dataNascitaInput, "Devi essere maggiorenne");
                }
                else {
                    //Se le validazione è avvenuta con successo applico le classi corrispondenti
                    validazioneOk(dataNascitaInput);
                    checkDataNascita = true;
                }
            }
        }
        //########### Validazione password #######################
        //Verifico se il campo è stato compilato
        if (passwordInput.value === "") {
            //Se non è stato compilato
            checkPassword = false;
            messaggiErrore(passwordInput, "Inserisci una password");
        }
        else {
            //se il campo è stato compilato
            //Verifico che la lunghezza sia compresa fra 8 e 20 caratteri
            if (passwordInput.value.trim().length <= 7 || passwordInput.value.trim().length >= 21) {
                checkPassword = false;
                messaggiErrore(passwordInput, "La lunghezza deve essere tra 8 e 20 caratteri");
            }
            else {
                //Verifico se il primo carattere è una lettera maiuscola
                //Creo la regex con cui confrontare la password
                var regEx_3 = /^[A-Z]/;
                if (!passwordInput.value.trim().match(regEx_3)) {
                    //Se il primo carattere non è una lettera maiuscola applico le classi e mostro il messaggio
                    checkPassword = false;
                    messaggiErrore(passwordInput, "Il primo carattere deve essere una lettera maiuscola");
                }
                else {
                    //se il primo carattere è una lettera maiuscola
                    //Controllo che la password contenga almeno un numero o un carattere speciale
                    var regEx_4 = /^(?=.*[0-9!@#$%^&*]).{2,}$/;
                    if (!passwordInput.value.trim().match(regEx_4)) {
                        //se non contiene i caratteri richiesti applico le classi e mostro il messaggio
                        checkPassword = false;
                        messaggiErrore(passwordInput, "Deve contenere almeno un numero o un carattere speciale");
                    }
                    else {
                        validazioneOk(passwordInput);
                        checkPassword = true;
                    }
                }
            }
        }
        //########## Validazione ripeti password #####################
        //Verifico che il campo sia stato compilato
        if (ripetiPasswordInput.value === "") {
            //Se non è stato compilato
            checkRipPassword = false;
            messaggiErrore(ripetiPasswordInput, "Ripeti la password");
        }
        else {
            //Verifico che il campo ripeti password sia uguale al campo password
            if (ripetiPasswordInput.value.trim() != passwordInput.value.trim()) {
                checkRipPassword = false;
                messaggiErrore(ripetiPasswordInput, "Le password non coincidono");
            }
            else {
                validazioneOk(ripetiPasswordInput);
                checkRipPassword = true;
            }
        }
        //########## Validazione Indirizzo #####################
        //Verifico se il campo è vuoto
        if (indirizzoInput.value === "") {
            //Se è vuoto richiamo la funzione che applica le classi e mostra il messaggio
            checkIndirizzo = false;
            messaggiErrore(indirizzoInput, 'Inserisci l\' indirizzo');
        }
        else {
            //Se il campo è stato compilato
            //Verifico che i caratteri inseriti siano nel range corretto 
            if (indirizzoInput.value.trim().length <= 6 || indirizzoInput.value.trim().length > 40) {
                //Se non rientrano
                checkIndirizzo = false;
                messaggiErrore(indirizzoInput, "La lunghezza deve essere tra 6 e 40 caratteri");
            }
            else {
                //Se la lunghezza è corretta richiamo la funzione che applica le classi e rimuove il messaggio di errore
                validazioneOk(indirizzoInput);
                checkIndirizzo = true;
            }
        }
        //########## Valido la nazione ####################
        //Verifico se il campo è stato selezionato
        if (nazioneSelect.value === "") {
            //Se non è stato selezionato alcun elemento
            checkNazione = false;
            messaggiErrore(nazioneSelect, "Seleziona un elemento");
        }
        else {
            validazioneOk(nazioneSelect);
            checkNazione = true;
        }
        //########## Valido la città ####################
        var stileCittaInput = window.getComputedStyle(cittaInput);
        var stileCittaSelect = window.getComputedStyle(cittaSelect);
        //verifico che l' elemento sia visibile
        if (stileCittaSelect.display === "block") {
            //Se esiste verifico se il campo è stato selezionato
            if (cittaSelect.value === "") {
                //Se non è stato selezionato alcun elemento
                checkCitta = false;
                messaggiErrore(cittaSelect, "Seleziona un elemento");
            }
            else {
                //se è stato selezionato valido 
                validazioneOk(cittaSelect);
                checkCitta = true;
            }
            //verifico che l' elemento sia visibile
        }
        else if (stileCittaInput.display === "block") {
            //Se è visibile
            //Verifico che il campo non sia vuoto
            if (cittaInput.value === "") {
                //Se è vuoto richiamo la funzione che applica le classi e mostra il messaggio
                checkCitta = false;
                messaggiErrore(cittaInput, "Inserisci la città");
            }
            else if (cittaInput.value.length < 3) {
                checkProvincia = false;
                messaggiErrore(cittaInput, "Il campo non può essere inferiore a 3 caratteri");
            }
            else {
                //Se il campo è stato compilato
                //Regular expression per il confronto con i dati inseriti
                var regEx_5 = /^[a-zA-ZÀ-ÖØ-öø-ÿ]+(?:\s[a-zA-ZÀ-ÖØ-öø-ÿ]+)*$/;
                //Confronto i dati inseriti con la regular expression
                if (!cittaInput.value.trim().match(regEx_5)) {
                    //Se non corrispondono richiamo la funzione che applica le classi e mostra il messaggio
                    checkCitta = false;
                    messaggiErrore(cittaInput, "Inserisci una città valida");
                }
                else {
                    //Se corrisponde richiamo la funzione che applica le classi e rimuove il messaggio di errore
                    validazioneOk(cittaInput);
                    checkCitta = true;
                }
            }
        }
        //########## Valido la provincia ####################
        var stileProvinciaInput = window.getComputedStyle(cittaInput);
        var stileProvinciaSelect = window.getComputedStyle(cittaSelect);
        //verifico che l' elemento sia visibile
        if (stileCittaSelect.display === "block") {
            //Verifico se il campo è stato selezionato
            if (provinciaSelect.value === "") {
                //Se non è stato selezionato alcun elemento
                checkProvincia = false;
                messaggiErrore(provinciaSelect, "Seleziona un elemento");
            }
            else {
                validazioneOk(provinciaSelect);
                checkProvincia = true;
            }
        }
        else if (stileProvinciaInput.display === "block") {
            //Se è visibile
            //Verifico che il campo non sia vuoto
            if (provinciaInput.value === "") {
                //Se è vuoto richiamo la funzione che applica le classi e mostra il messaggio
                checkProvincia = false;
                messaggiErrore(provinciaInput, "Inserisci la provincia");
            }
            else if (provinciaInput.value.length < 3) {
                checkProvincia = false;
                messaggiErrore(provinciaInput, "Il campo non può essere inferiore a 3 caratteri");
            }
            else {
                //Se il campo è stato compilato
                //Regular expression per il confronto con i dati inseriti
                var regEx_6 = /^[a-zA-ZÀ-ÖØ-öø-ÿ]+(?:\s[a-zA-ZÀ-ÖØ-öø-ÿ]+)*$/;
                //Confronto i dati inseriti con la regular expression
                if (!provinciaInput.value.trim().match(regEx_6)) {
                    //Se non corrispondono richiamo la funzione che applica le classi e mostra il messaggio
                    checkProvincia = false;
                    messaggiErrore(provinciaInput, "Inserisci una provincia valida");
                }
                else {
                    //Se corrisponde richiamo la funzione che applica le classi e rimuove il messaggio di errore
                    validazioneOk(provinciaInput);
                    checkProvincia = true;
                }
            }
        }
        //########## Valido il cap ####################
        var stileCapInput = window.getComputedStyle(cittaInput);
        var stileCapSelect = window.getComputedStyle(cittaSelect);
        //verifico che l' elemento sia visibile
        if (stileCapSelect.display === "block") {
            //Verifico se il campo è stato selezionato
            if (capSelect.value === "") {
                //Se non è stato selezionato alcun elemento
                checkCap = false;
                messaggiErrore(capSelect, "Seleziona un elemento");
            }
            else {
                validazioneOk(capSelect);
                checkCap = true;
            }
        }
        if (stileCapInput.display === "block") {
            //Se è visibile
            //Verifico che il campo non sia vuoto
            if (capInput.value === "") {
                //Se è vuoto richiamo la funzione che applica le classi e mostra il messaggio
                checkCap = false;
                messaggiErrore(capInput, "Inserisci il cap");
            }
            else {
                //Se il campo è stato compilato
                //Regular expression per il confronto con i dati inseriti
                var regEx_7 = /^[0-9]*$/;
                //Confronto i dati inseriti con la regular expression
                if (!capInput.value.trim().match(regEx_7)) {
                    //Se non corrispondono richiamo la funzione che applica le classi e mostra il messaggio
                    checkCap = false;
                    messaggiErrore(capInput, "Inserisci un cap valido");
                }
                else {
                    //Se corrisponde richiamo la funzione che applica le classi e rimuove il messaggio di errore
                    validazioneOk(capInput);
                    checkCap = true;
                }
            }
        }
        //########## Valido il telefono ##################### 
        //Verifico se il campo è vuoto
        if (telefonoInput.value.trim() === "") {
            //Se è vuoto richiamo la funzione che applica le classi e mostra il messaggio
            checkTelefono = false;
            messaggiErrore(telefonoInput, 'Inserisci il numero di telefono');
        }
        else {
            //Se il campo è stato compilato
            //Regular expression per il confronto con i dati inseriti
            regEx = /^\d{6,}$/;
            //Confronto i dati inseriti con la regular expression
            if (!telefonoInput.value.trim().match(regEx)) {
                //Se non corrispondono richiamo la funzione che applica le classi e mostra il messaggio
                checkTelefono = false;
                messaggiErrore(telefonoInput, "Inserisci un numero valido");
            }
            else {
                //Verifico che i caratteri inseriti siano nel range corretto 
                if (telefonoInput.value.trim().length <= 8 || telefonoInput.value.trim().length > 12) {
                    //Se non rientrano
                    checkTelefono = false;
                    messaggiErrore(telefonoInput, "La lunghezza deve essere tra 8 e 12 caratteri");
                }
                else {
                    //Se la lunghezza è corretta richiamo la funzione che applica le classi e rimuove il messaggio di errore
                    validazioneOk(telefonoInput);
                    checkTelefono = true;
                }
            }
        }
        //########## Valido il codice fiscale #####################
        //Verifico che il campo sia stato compilato
        if (codiceFiscaleInput.value.trim() === "") {
            //Se il campo è vuoto
            checkCodiceFiscale = false;
            messaggiErrore(codiceFiscaleInput, "Inserisci il codice fiscale");
        }
        else {
            //Seleziono i primi 6 caratteri della stringa
            var caratteri = codiceFiscaleInput.value.substring(0, 6);
            //Regex con cui confrontare i caratteri
            var regexp = new RegExp(/^[a-zA-Z]+$/);
            //Se i caratteri sono meno di 6
            if (caratteri.length >= 1 && caratteri.length <= 6) {
                //Applico le classi e mostro il messaggio di errore
                checkCodiceFiscale = false;
                messaggiErrore(codiceFiscaleInput, "Codice fiscale incompleto");
                //Verifico se i caratteri sono delle lettere
                if (!regexp.test(caratteri)) {
                    //Se non sono delle lettere
                    checkCodiceFiscale = false;
                    if (caratteri.length === 1) {
                        messaggiErrore(codiceFiscaleInput, 'Il carattere "' + caratteri + '" non è una lettera');
                    }
                    else {
                        messaggiErrore(codiceFiscaleInput, 'I caratteri "' + caratteri + '" non sono delle lettere');
                    }
                }
                else {
                    //Seleziono il 7 e l' 8 carattere della stringa
                    caratteri = codiceFiscaleInput.value.substring(6, 8);
                    //Regex con cui confrontare i caratteri
                    regexp = new RegExp(/^[0-9]+$/);
                    if (caratteri.length >= 1 && caratteri.length <= 2) {
                        //Applico le classi e mostro il messaggio di errore
                        checkCodiceFiscale = false;
                        messaggiErrore(codiceFiscaleInput, "Codice fiscale incompleto");
                        //Verifico se i caratteri sono numeri
                        if (!regexp.test(caratteri)) {
                            //Se non sono dei numeri
                            checkCodiceFiscale = false;
                            if (caratteri.length === 1) {
                                messaggiErrore(codiceFiscaleInput, 'Il carattere "' + caratteri + '" non è una lettera');
                            }
                            else {
                                messaggiErrore(codiceFiscaleInput, 'I caratteri "' + caratteri + '" non sono delle lettere');
                            }
                        }
                        else {
                            //Seleziono il 9 carattere della stringa
                            caratteri = codiceFiscaleInput.value.substring(8, 9);
                            //Regex con cui confrontare i caratteri
                            regexp = new RegExp(/^[a-zA-Z]+$/);
                            //Verifico che il nono carattere sia una lettera 
                            if (caratteri.length === 1) {
                                //Applico le classi e mostro il messaggio di errore
                                checkCodiceFiscale = false;
                                messaggiErrore(codiceFiscaleInput, "Codice fiscale incompleto");
                                //Verifico se i caratteri sono numeri
                                if (!regexp.test(caratteri)) {
                                    //Se non è una lettera
                                    checkCodiceFiscale = false;
                                    messaggiErrore(codiceFiscaleInput, 'Il carattere "' + caratteri + '" non è una lettera');
                                }
                                else {
                                    //Seleziono il 10 e 11 carattere della stringa
                                    caratteri = codiceFiscaleInput.value.substring(9, 11);
                                    //Regex con cui confrontare i caratteri
                                    regexp = new RegExp(/^[0-9]+$/);
                                    if (caratteri.length >= 1 && caratteri.length <= 2) {
                                        //Applico le classi e mostro il messaggio di errore
                                        checkCodiceFiscale = false;
                                        messaggiErrore(codiceFiscaleInput, "Codice fiscale incompleto");
                                        //Verifico che il decimo ed undicesimo carattere siano dei numeri
                                        if (!regexp.test(caratteri)) {
                                            //Se non sono dei numeri
                                            checkCodiceFiscale = false;
                                            if (caratteri.length === 1) {
                                                messaggiErrore(codiceFiscaleInput, 'Il carattere "' + caratteri + '" non è una lettera');
                                            }
                                            else {
                                                messaggiErrore(codiceFiscaleInput, 'I caratteri "' + caratteri + '" non sono delle lettere');
                                            }
                                        }
                                        else {
                                            //Seleziono il 12 carattere della stringa
                                            caratteri = codiceFiscaleInput.value.substring(11, 12);
                                            //Regex con cui confrontare i caratteri
                                            regexp = new RegExp(/^[a-zA-Z]+$/);
                                            if (caratteri.length === 1) {
                                                //Applico le classi e mostro il messaggio di errore
                                                checkCodiceFiscale = false;
                                                messaggiErrore(codiceFiscaleInput, "Codice fiscale incompleto");
                                                //Verifico che il 12 carattere sia una lettera 
                                                if (!regexp.test(caratteri)) {
                                                    //Se non è una lettera
                                                    checkCodiceFiscale = false;
                                                    messaggiErrore(codiceFiscaleInput, 'Il carattere "' + caratteri + '" non è una lettera');
                                                }
                                                else {
                                                    //Seleziono dal 13 al 15 carattere
                                                    caratteri = codiceFiscaleInput.value.substring(12, 15);
                                                    //Regex con cui confrontare i caratteri
                                                    regexp = new RegExp(/^[0-9]+$/);
                                                    if (caratteri.length >= 1 && caratteri.length <= 3) {
                                                        //Applico le classi e mostro il messaggio di errore
                                                        checkCodiceFiscale = false;
                                                        messaggiErrore(codiceFiscaleInput, "Codice fiscale incompleto");
                                                        //Verifico che dal tredicesimo al quindicesimo carattere siano dei numeri                                 
                                                        if (!regexp.test(caratteri)) {
                                                            //Se non sono dei numeri
                                                            checkCodiceFiscale = false;
                                                            if (caratteri.length === 1) {
                                                                messaggiErrore(codiceFiscaleInput, 'Il carattere "' + caratteri + '" non è una lettera');
                                                            }
                                                            else {
                                                                messaggiErrore(codiceFiscaleInput, 'I caratteri "' + caratteri + '" non sono delle lettere');
                                                            }
                                                        }
                                                        else {
                                                            //Seleziono l' ultimo carattere delle stringa
                                                            caratteri = codiceFiscaleInput.value.substring(15, 16);
                                                            //Regex con cui confrontare i caratteri
                                                            regexp = new RegExp(/^[a-zA-Z]+$/);
                                                            if (caratteri.length === 1) {
                                                                //Verifico che l' ultimo carattere sia una lettera
                                                                checkCodiceFiscale = false;
                                                                messaggiErrore(codiceFiscaleInput, 'Il carattere "' + caratteri + '" non è una lettera');
                                                                if (regexp.test(caratteri)) {
                                                                    //Se è una lettera
                                                                    validazioneOk(codiceFiscaleInput);
                                                                    checkCodiceFiscale = true;
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        //########## Validazione check informativa ###########
        // Verifico se la checkbox è stata selezionata
        if (!informativaCheckBox.checked) {
            // Se la checkbox non è stata selezionata
            //Applico le classi e mostro il messaggio di errore
            checkInformativa = false;
            messaggiErrore(informativaCheckBox, 'Devi accettare i termini e le condizioni');
        }
        else {
            validazioneOk(informativaCheckBox);
            checkInformativa = true;
        }
        if (checkEmail && checkNome && checkCognome && checkSesso && checkDataNascita && checkPassword && checkRipPassword && checkIndirizzo && checkNazione && checkCitta && checkProvincia && checkCap && checkTelefono && checkCodiceFiscale && checkInformativa === true) {
            return true;
        }
        else {
            return false;
        }
    }
    function messaggiErrore(input, messaggio) {
        var formGroup = input.closest(".form-group");
        var errorElement = formGroup.querySelector(".invalid-feedback");
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
        errorElement.textContent = messaggio;
    }
    function validazioneOk(input) {
        var formGroup = input.closest(".form-group");
        var errorElement = formGroup.querySelector(".invalid-feedback");
        input.classList.remove("is-invalid");
        input.classList.add('is-valid');
        errorElement.textContent = '';
    }
});
function mostraPassword(input, button) {
    var iconContainer = button.querySelector('i');
    //Controllo se la password è nascosta
    if (input.type === 'password') {
        //Se lo è la rendo visibile
        input.type = 'text';
        if (iconContainer) {
            iconContainer.classList.add('fa-eye-slash');
            iconContainer.classList.remove('fa-eye');
        }
    }
    else {
        //Altrimenti la nascondo
        input.type = 'password';
        if (iconContainer) {
            iconContainer.classList.add('fa-eye');
            iconContainer.classList.remove('fa-eye-slash');
        }
    }
}
