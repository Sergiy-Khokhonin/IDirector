<?php
session_start();
$role  =  $_SESSION['role'];
//var_dump($_SESSION);
?>
<body>
    <header>
        <div class = "container mb-5">
            <div class = "row">
                <div >
                   <nav class = "navbar navbar-expand-lg navbar-dark  text-white bg-dark">
                    <div class = "container-fluid">
                    <a class = "navbar-brand" href = "#">
                            <img src = "img/karpukhin.jpg" width = "100" height = "100" alt = "Фотография">
                        </a>
                        <button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label = "Toggle navigation">
                        <span class = "navbar-toggler-icon"></span>
                        </button>
                        <div class = "collapse navbar-collapse" id = "navbarNav">
                        <ul class = "navbar-nav">
                        <li class = "nav-item">
                        <?php
                            echo 'На форме:'.$role;
                            ?>
                            </li>
                            <li class = "nav-item">
                            <a class = "nav-link active" aria-current = "page" href = "vsezakazy.php">Все заказы</a>
                            </li>
                            <li class = "nav-item">
                            <a class = "nav-link active" aria-current = "page" href = "otchet.php">Отчёт</a>
                            </li>
                            <li class = "nav-item">
                            <a class = "nav-link active" aria-current = "page" href = "logout.php">Выйти</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>