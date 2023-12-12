<?php foreach ($students as $student): ?>
    <div class="carte">
      <a href="fiche.html">
        <?php
        if (isset($student ['photo'])) {
          $photo = 'groupe'.$student['group'].'/small/'.$student['photo'];
        } else {
          $photo = 'defaut.png';
        }
        ?>
        <figure class="photo"><img src="public/images/<?= $photo ?> " alt="photo de Aimé Mihi">
        </figure>
        <div class="infos">
          <p class="nom"><?= $student['firstname']?> <span><?= $student['lastname']?> </span></p>
          <p class="ddn"><?= $student['birthdate']?></p>
          <p class="groupe">groupe <span><?= $student['group']?></span></p>
        </div>
      </a>
    </div>
    <?php endforeach ?>