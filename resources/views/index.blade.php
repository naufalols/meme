<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ngl.link @naufalol</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body style="background-color:#ef207a">
    <div class="container">
        <form class="form" action="/post" method="post">
            @csrf
            <!-- Equivalent to... -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="bubble">
                <div class="header">
                    <div class="pfp-container"><img class="pfp" src="https://picsum.photos/id/447/200">
                    </div>
                    <div class="user-container">
                        <div class="username">{{$name}}</div>
                        <div class="prompt">send me anonymous messages!</div>
                    </div>
                </div>
                <div class="textarea-container">
                    <div class="top-right-corner"></div>
                    <div class="top-left-corner"></div>
                    <div class="dice-button">🎲</div><textarea placeholder="send me anonymous messages…"
                        name="questions" autocomplete="off"></textarea>
                </div><input class="deviceId" type="hidden" name="deviceId"
                    value="4cc07860-67b3-417e-8179-80fee4b4eb3f">
            </div>
            <div class="anonymous-tooltip">🔒 99% anonymous</div><button class="submit" type="submit"
                style="display: none;">Send!</button>
        </form>
    </div>
    <div class="bottom-container" style="">
        <h2 class="download-prompt">👇 <span class="clickCount">1327</span> people just tapped the button👇 </h2><a
            class="button download-link pulse" href="https://m-barber.com" target="_blank">Get your own Barber!</a>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>