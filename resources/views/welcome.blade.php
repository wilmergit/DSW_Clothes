<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VirtualClothes</title>
</head>
<body>
    <header>
        <h1 class="web-name">Virtual Clothes</h1>
    </header>
    <main class="main-wrapper">
        <section class="content">
            <p id="slogan">THE EASIEST WAY TO SHARE YOUR ART</p>
            <img src="{{asset('images/welcome.png')}}" alt="">
            <hr>
            <p id="second-slogan">DONT BE NORMAL</p>
            <hr>
        </section>
    </main>
    <section class="steps-container">
        <article class="steps">
            <div class="number">
                <p class="step">1</p>
            </div>
            <p class="step-text">Get your clothes clean and shining!</p>
        </article>
        <article class="steps">
            <div class="number">
                <p class="step">2</p>
            </div>
            <p class="step-text">Get your camera ready to take some photos of your clothes and show the world what you are capable of.</p>
        </article>
        <article class="steps">
            <div class="number">
                <p class="step">3</p>
            </div>
            <p class="step-text">Fill the following form and we will do the rest.</p>
        </article>
        <a href="{{route('clothes.create')}}">Begin</a>
    </section>

</body>
</html>