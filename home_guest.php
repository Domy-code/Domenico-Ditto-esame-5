<?php
require_once("funzioni.php");
echo creaInizioPagina("Home-guest");
echo creaNavbar(false);
?>


<div class="row m-0 p-0 justify-content-center" id="containerCardHomeGuest">
    <div class="row m-0 p-0 justify-content-center">
        <div class="col-11 col-sm-6 d-flex justify-content-center align-items-center">
            <div class="border-start border-end" id="containerMsg">
                <div class="card m-3 bg-dark ">
                    <div class="card-body d-flex flex-column text-light text-center fw-bold cardGuest">

                        <h5 class="card-title">Un mondo di intrattenimento<br>con un semplice click</h5>
                        <small id="cardSmallText" class="fw-light">Inserisci qui la mail ed iscriviti a ...</small>

                        <form class="form-inline justify-content-center mt-2">
                            <div class="row justify-content-center">
                                <div class="col-auto p-1">
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email :</label>
                                        <input type="email" class="form-control-sm bg-mediumGray border-0 " id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-auto p-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Registrati</button>
                                </div>


                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>
<?php
echo creaFooter()
?>