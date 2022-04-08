<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <h1>this is plain html</h1>
    <button>click</button>
    <?php 
    include ("test.php")
    ?>
    

    <script><?= './js/script.js' ?></script>
  </body>
</html>



<!-- <script type="text/javascript">
      const btn = document.querySelector('button');
      const headline = document.querySelector('h1');
      btn.addEventListener('click', () => {
        //   headline.classList.add('redClass');
        headline.style.color = 'red';
      });
    </script> -->