<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="films.css">
</head>
<body>

    <div class="conatainer-fluid">
        <h1 style="text-align:center;">Matrix</h1>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="filmsforsite/Matrix.jpg" alt="affiche film training day" class="img-fluid" style="max-width:50%">
                        <img src="filmsforsite/Matrix.jpg" alt="affiche film training day" class="img-fluid" style="max-width:50%">
                        <img src="filmsforsite/Matrix.jpg" alt="affiche film training day" class="img-fluid" style="max-width:50%">
                        <img src="filmsforsite/Matrix.jpg" alt="affiche film training day" class="img-fluid" style="max-width:50%">
                    </div>
                    <div class="col">
                    Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ? Nul ne le sait, et aucun homme n'est encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est l'Elu, le libérateur mythique de l'humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...<br>
                    <strong>Acteur principal : Denzel WashingtonEthan HawkeScott Glenn</strong>
                    </div>
                </div>
            </div>
            <div class="glide" style="margin-top:450px;">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                    <li class="glide__slide" style="text-align:center;"><a href="#"><img src="filmsforsite/americanbeauty.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="Matrix.php"><img src="filmsforsite/Matrix.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="#"><img src="filmsforsite/operation-dragon_2.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="shaolinsoccer.php"><img src="filmsforsite/shaolinsoccer.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="#"><img src="filmsforsite/taichi.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="#"><img src="filmsforsite/forestgump.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="Nikita.php"><img src="filmsforsite/Nikita.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="#"><img src="filmsforsite/avengers.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
                <li class="glide__slide" style="text-align:center;"><a href="#"><img src="filmsforsite/Alita.jpg" width="200px;" height="200px;" style="border-radius: 10px"></a></li>
            </ul>
                </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

     </div>
    
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    const myVar = {

        type: 'carousel',
        perView: 4,
        breakpoints: {
            1100: {
            perView: 3
            },
            1000: {
            perView: 3
            },
            900: {
            perView: 3
            },
            800: {
            perView: 2
            },
            600: {
            perView: 1
            }

        }
    }
  new Glide('.glide',myVar).mount()
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>