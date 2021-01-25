
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>


    <?php include __DIR__ . '/partials/header.php'; ?>

      <main id="app">
        <div class="wrapper">
          <div class="disk-container">
                  <div class="disk" v-for="cd in cds">
                    <img :src="cd.poster" alt="">
                    <h3>{{cd.title}}</h3>
                    <h5>{{cd.author}}</h5>
                    <p>{{cd.year}}</p>
                  </div>

          </div>

        </div>
      </main>





  <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>