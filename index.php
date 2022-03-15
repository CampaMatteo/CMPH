<?php 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">

    <title>CMPH</title>
  </head>
  <body>


    <div class="row justify-content-center">
        <div class="col text-center">
            <h1 class="text-white testo-principale">CMPH</h1>
            <a href="#outfit" class="hover-violet">Outfit photography.</a>

            <br><br>
            <a href="#brand" class="hover-violet">Brand photography.</a>

            <br><br>
            <a href="#" class="hover-violet">Street photography.</a>

            <br><br><br><br>
            <a href="#contact" class="hover-violet">Contact me.</a>
            <!--
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                </div>
             
-->
</div>
        <div class="col text-center">
            <img src="dave.JPG" class="responsive" alt="Girl in a jacket">
        </div>
    </div>
<br><br><br><br>
    <section id="outfit">
        <br>
        <h1 class="hover-violet text-center">Outfit photography.</h1>
        <br><br>
        <div class="row justify-content-center">
            <div class="col text-center">
                <img src="dave2.JPG" class="responsive" alt="Girl in a jacket">
            </div>
            <div class="col text-center">
                <img src="ferra.JPG" class="responsive" alt="Girl in a jacket">
            </div>
            <div class="col text-center">
                <img src="irene.JPG" class="responsive" alt="Girl in a jacket">
            </div>
        </div>
        <br>

        <div class="row justify-content-center">
            <img src="tom.JPG" class="responsive" alt="Girl in a jacket">
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col text-center">
                <img src="irene2.JPG" class="responsive" alt="Girl in a jacket">
            </div>
            <div class="col text-center">
                <img src="dave3.JPG" class="responsive" alt="Girl in a jacket">
            </div>
            
            <div class="col text-center">
                <img src="fabiani.JPG" class="responsive" alt="Girl in a jacket">
            </div>
        </div>
        
    </section>

    <br><br><br><br><br>

    <section id="brand">
    <br>
        <div class="row justify-content-center">
            <h1 class="hover-violet text-center">Brand photography.</h1>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div class="col text-center">
                <img src="nike1.JPG" class="responsive" alt="Girl in a jacket">
            </div>
            <div class="col text-center">
               <!-- <img src="dave3.JPG" class="responsive" alt="Girl in a jacket"> -->
            </div>
            
            <div class="col text-center">
               <!-- <img src="fabiani.JPG" class="responsive" alt="Girl in a jacket"> -->
            </div>
        </div>
    </section>


    <section id="contact">
        <br>
        <div class="container">

            <div class="row justify-content-center">
                <h1 class="hover-violet text-center">Contact me.</h1>
                <div class="card" style="border-radius: 20px; border: none">
                    <div class="card-body">
                        <div class="form-floating">
                            <input type="email" style="border: none; background-color: #e8e8e8; border-radius: 10px" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <br>
                        <div class="form-floating">  
                            <textarea class="form-control" style="height: 300px; border: none; background-color: #e8e8e8; border-radius: 10px;" placeholder="Avevo bisogno di..." id="floatingTextarea2"  rows="6"></textarea>
                            <label for="floatingTextarea2">Messaggio</label>
                        </div>
                        <br>
                        
                        <div class="row justify-content-center">
                            <div class="col">

                                <btn class="btn btn-lg" id="invia" style="border-radius: 10px; width: 300px;">Invia</btn>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>