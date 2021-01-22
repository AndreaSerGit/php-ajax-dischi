<main>
  <div class="wrapper">
    <div class="disk-container">
      <?php
            foreach($CDs as $CD) { ?>
            <div class="disk">
              <?php echo "<img src=\"{$CD['poster']}\">"; ?>
              <h3><?php echo $CD['title'] ?></h3>
              <h5><?php echo $CD['author'] ?></h5>
              <p><?php echo $CD['year'] ?></p>
            </div>
            <?php } ?>

    </div>

  </div>
</main>
