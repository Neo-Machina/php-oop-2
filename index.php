<?php 
    // Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
    // L'e-commerce vende prodotti per gli animali.
    // I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    // L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    // BONUS:
    // Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto.

    require_once __DIR__ . '/CiboProduct.php';
    require_once __DIR__ . '/ToysProduct.php';
    require_once __DIR__ . '/CucceProduct.php';
    require_once __DIR__ . '/UserRegistrato.php';
    require_once __DIR__ . '/UserNonRegistrato.php';
    require_once __DIR__ . '/CartaPrepagata.php';

    $crocchetteCani = new CiboProduct('Monge', 38.90, 'Natural Superpremium', 12);
    $crocchetteCani->dataScadenza = '12/09/2024';
    $crocchetteCani->tipologiaCibo = 'secco';
    $crocchetteCani->codiceProduct = 'k24i';
    $crocchetteCani->numeroFattura = '1500004567';

    $ossoGomma = new ToysProduct('Kong', 9.89, 'Extreme Goodie Bone');
    $ossoGomma->codiceProduct = 'a18i';
    $ossoGomma->numeroFattura = '9900003456';
    
    $cucciaOvale = new CucceProduct('Ocean Travel', 36.97, 'Cuccetta Ovale');
    $cucciaOvale->codiceProduct = 'gf29';
    $cucciaOvale->numeroFattura = '4567399900';

    // Carta di Michele
    $cartaMichele = new CartaPrepagata(30, 'Michele Gialli', '1234567891234123', '05/24', 765);
    
    // Utente non registarto
    $micheleGialli = new UserNonRegistrato('Michele Gialli', 'micheleg@email.it');
    $micheleGialli->aggiungiProdotti($crocchetteCani);
    $micheleGialli->aggiungiProdotti($ossoGomma);
    $micheleGialli->aggiungiProdotti($cucciaOvale);
    var_dump($micheleGialli->sommaCostoProdotti());
    var_dump($micheleGialli);

    try {
        if ($micheleGialli->pagaAcquisti($cartaMichele->saldo) === 'ok') {
            echo '<h2>Pagamento effettuato!</h2>';
        } 
    }   catch (Exception $e) {
        // Salvo nel log l'errore per il programmatore
        error_log($e->getMessage());

        // Stampo in pagina un messaggio per l'utente
        echo '<h2>Saldo non sufficiente sulla carta, si prega di controllare di nuovo il saldo effettivo della carta e di riprovare!</h2>';
    }   

    // Carta di Selene
    $cartaSelene = new CartaPrepagata(1500, 'Selene Rossi', '9875643217465092', '10/22', 890);
    
    // Utente registrato
    $seleneRossi = new UserRegistrato('Selene Rossi', 'selenes@email.it');
    $seleneRossi->aggiungiProdotti($ossoGomma);
    $seleneRossi->aggiungiProdotti($cucciaOvale);
    $seleneRossi->aggiungiProdotti($crocchetteCani);
    var_dump($seleneRossi->sommaCostoProdotti());
    var_dump($seleneRossi);  

    try {
        if ($seleneRossi->pagaAcquisti($cartaSelene->saldo) === 'ok') {
            echo '<h2>Pagamento effettuato!</h2>';
        } 
    }   catch (Exception $e) {
        // Salvo nel log l'errore per il programmatore
        error_log($e->getMessage());

        // Stampo in pagina un messaggio per l'utente
        echo '<h2>Saldo non sufficiente sulla carta, si prega di controllare di nuovo il saldo effettivo della carta e di riprovare!</h2>';
    }  
?>