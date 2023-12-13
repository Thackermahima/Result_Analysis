<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<style>
      header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
            font-weight: bold;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: #419f89;
            color: white;
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
            margin-top: 10px;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: #419f89;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: #419f89;
            color: white;
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
            margin-top : 13%;
            margin-bottom : 15.3%;

        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 350;
        }
</style>
<body>
<header>

<div class="menu">
        <ul>
        <li class="logo">
            <!-- <a href="https://codeigniter.com" target="_blank">
                <img src="" alt="img">
                <svg role="img" aria-label="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2100 500" height="44" alt="logo"><path fill="#dd4814" d=""/></svg>
            </a> -->
            Result Analysis
        </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="/result_analysis/">Home</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('uploadfile'); ?>">Upload File</a>
            </li>
            <li class="menu-item hidden"><a href="<?php echo base_url('resultAnaylysis'); ?>">Result Analysis</a>
            </li>
        </ul>
    </div>


</header>
</body>
</html>