<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
     footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
            margin-top: 20px;
            margin-bottom: 0px;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 4rem 1.2rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
</style>
<body>
<footer> 
    <div class="copyrights">
        <p>&copy; <?= date('Y') ?> Made with ❤️ for the students!</p>
    </div>
</footer>
</body>
</html>