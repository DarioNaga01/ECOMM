<div class="col-lg-3">
          <h1 class="my-4">Cerca</h1>
          <div class="list-group">
          <?php
            mostraCategorie();
           /* $query = 'SELECT * FROM categorie';

            $mostraCategorie = mysqli_query($connessione, $query);
            
            if(!$mostraCategorie){
              die('Richiesta fallita' . mysqli_error($connessione));
            }

            while($row = mysqli_fetch_array($mostraCategorie)){

              echo "<a href='#' class='list-group-item'>{$row['nome_cat']}</a>";

            }*/
          ?>
            <!--<a href="#" class="list-group-item">Categoria 1</a>
            <a href="#" class="list-group-item">Categoria 2</a>
            <a href="#" class="list-group-item">Categoria 3</a>-->
          </div>

    </div>