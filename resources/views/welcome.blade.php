<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redis Realtime Application</title>
</head>

<body>
    <h1 id="text" style="text-align: center">hello duniah</h1>

    <script src="/js/app.js"></script>
    <script>
        window.Echo.channel('laravel_database_test-channel')
            .listen('.test-event', (e) => {
                console.log(e);

                const text = document.getElementById('text');
                text.innerHTML = e["message"];
            });
    </script>
</body>

</html>
