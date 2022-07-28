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

    $crocchetteCani = new CiboProduct('Monge', 38.90, 'Natural Superpremium', 12);
    $crocchetteCani->dataScadenza = '12/09/2024';
    $crocchetteCani->tipologiaCibo = 'secco';

    // var_dump($crocchetteCani);

    $ossoGomma = new ToysProduct('Kong', 9.89, 'Extreme Goodie Bone');
    // var_dump($ossoGomma);
    
    $cucciaOvale = new CucceProduct('Ocean Travel', 36.97, 'Cuccetta Ovale');
    // var_dump( $cucciaOvale);

    // Utente non registarto
    $micheleGialli = new UserNonRegistrato('Michele Gialli', 'micheleg@email.it');
    $micheleGialli->aggiungiProdotti($crocchetteCani);
    $micheleGialli->aggiungiProdotti($ossoGomma);
    $micheleGialli->aggiungiProdotti($cucciaOvale);
    var_dump($micheleGialli->sommaCostoProdotti());
    var_dump($micheleGialli);

    // Utente registrato
    $seleneRossi = new UserRegistrato('Selene Rossi', 'selenes@email.it');
    $seleneRossi->aggiungiProdotti($ossoGomma);
    $seleneRossi->aggiungiProdotti($cucciaOvale);
    $seleneRossi->aggiungiProdotti($crocchetteCani);
    var_dump($seleneRossi->sommaCostoProdotti());

    var_dump($seleneRossi);

    
?>