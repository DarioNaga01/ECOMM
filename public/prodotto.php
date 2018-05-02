<?php 
      //visualizza errori
      error_reporting(E_ALL);
      ini_set('display_errors', 1);

require_once("../risorse/config.php"); ?>
<!-- header -->
<?php include(FRONT_END . DS . 'header.php'); ?>

    <!-- Page Content -->
    <div class="container my-5">

      <div class="row">
      <?php include(FRONT_END . DS . 'sidebar.php');?>
      <?php
        if(isset($_GET['id'])){
          $pdtSingolo = listaDb("SELECT * FROM prodotti WHERE id_prodotto = {$_GET['id']}");
          conferma($pdtSingolo);

          while($row = fetch_array($pdtSingolo)):
          
      
      
      ?>

        <!--<div class="col-lg-3">
          <h1 class="my-4">Cerca</h1>
          <div class="list-group">
            <a href="#" class="list-group-item active">Categoria 1</a>
            <a href="#" class="list-group-item">Categoria 2</a>
            <a href="#" class="list-group-item">Categoria 3</a>
          </div>
        </div>-->
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="../risorse/<?php echo $row['immagine']; ?>" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $row['nome_prodotto']; ?></h3>
              <h4>€<?php echo $row['prezzo']; ?></h4>
              <h5>Info</h5>
              <p class="card-text">
                <?php echo $row['desc_prodotto']; ?>  </p>
              <button type="button" class="btn bg-primary btn-small btn-block">Acquista</button>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              3.0 stelle
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Desctizione dettagliata
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Pubbicata il 3 ottobre 2017</small>
              <hr>
              <a href="#" class="btn btn-info">Lascia una recensione</a>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->
        <!--ADVISE BY SS -->
          <?php endwhile;}else echo "Prodotto non trovato " .
            '<a href="index.php">Clicca quì per tornare alla home</a>' 
          
          #clicca <a href='index.php'>quì</a> per tornare alla home ";
          ?>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include(FRONT_END . DS . 'footer.php'); ?>