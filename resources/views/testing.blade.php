<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .menu
    {
        display:none;
    }
</style>
<script>
    function my()
    {
        document.getElementById('my').style.display="block";
    }
</script>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <li>
                        <span onclick="my()">
                            Hello
                        </span>
                        <ul class="menu" id="my">
                            <li>
                                World
                            </li>
                        </ul>
                    </li>
                    <li>
                        bye
                        <ul>
                            <li>
                                Guys
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
