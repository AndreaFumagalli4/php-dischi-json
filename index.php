<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap 5.2.2 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- vue 3 -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <!-- axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="./styles/style.css">
    </head>

    <body>
        <div id="app">
            <header>
                <div class="container">
                    <div class="img_logo">
                        <img class="img-fluid" src="./img/logo-small.svg" alt="Spotify logo">
                    </div>
                </div>
            </header>
            <main>
                <div class="container">
                    <div class="row">
                        <div v-for="disc in dataFromServer" :key="disc.title" class="col-3 disc_card">
                            <div class="cover_img d-inline-block">
                                <img class="img-fluid" :src="disc.poster" alt="cover image">
                            </div>
                            <h2 class="fw-bold fs-6 mt-3">
                                {{ disc.title }}
                            </h2>
                            <p class="author">
                                {{ disc.author }}
                            </p>
                            <p class="fw-bold fs-6">
                                {{ disc.year }}
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script src="./mainJs.js"></script>
    </body>

</html>