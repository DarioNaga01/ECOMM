<?php

function listaDb($sql){
  global $connessione;
return  $connessione->query($sql);
}

function conferma($risultato){
  #global $connessione;
   if(!$risultato){
       die('Richiesta fallita');
    }else{
      #echo"ok";
    }
}

function fetch_array($risultato){

    return mysqli_fetch_array($risultato);
}

function mostraProdotti(){
  $ricercaProdotti = listaDb('SELECT * FROM prodotti');

    conferma($ricercaProdotti);

    while($row = fetch_array($ricercaProdotti)){
      $prodotti = <<<STRINGA_PDT
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../risorse/{$row['immagine']}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="prodotto.php?id={$row['id_prodotto']}">{$row['nome_prodotto']}</a>
                </h4>
                <h5{$row['prezzo']}</h5>
                <p class="card-text">{$row['desc_prodotto']}</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-outline-primary btn-small btn-block">Dettagli</button>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
       </div>
STRINGA_PDT;
echo $prodotti;
    }
}

function mostraCategorie(){
  $ricercaCategorie = listaDb('SELECT * FROM `categorie`');
    conferma($ricercaCategorie);
      while($row = fetch_array($ricercaCategorie)){
        $categorie = <<<STRINGA_CAT
          <a href='categorie.php?id={$row['id_cat']}' class='list-group-item'>{$row['nome_cat']}</a>
STRINGA_CAT;

  echo $categorie;
  }
}