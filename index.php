<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"><script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="style.css">
<body>
    <div id="app">
        <header class="container-fluid">
        <div class="logo">
            <img src="https://cantabrialabsdifacooper.it/png-clipart-spotify-logo-spotify-computer-icons-podcast-music-apps-miscellaneous-angle-2/?lang=en/" alt="spotify logo">
        </div>
        </header>
        <main class="container">
            <div class="row">
                <div class="col-12">
                    <div class="disc text-center w-25 mx-3 p-3" v-for="(disc, index) in discs" :key="index" >
                        <div class="disc-container">
                        <img class="img-fluid" :src="disc.poster" :alt="disc.title + 'cover' ">
                        <div class="disc text-white">
                            <p>
                                <strong>
                                    {{disc.title}}
                                </strong>
                            </p>
                            <p>
                                
                                    {{disc.author}}
                                
                            </p>
                            <p>
                                {{disc.year}}
                            </p>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src=".script/main.js"></script>
</body>
</html>