<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="QR Code Generator">
    <meta name="author" content="Tito Riskimianto">
    <title>QR Code Generator by tr</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
    
    <header class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- <img src="assets/img/brand-logo.png" alt="QR Code Generator by tr"> -->
                QR Code Generator
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if(!isset($_GET['page'])){ echo 'active'; } ?>" href="http://localhost/qr_generator/">Generate a Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_GET['page'] == 'whats-a-qr-code'){ echo 'active'; } ?>" href="http://localhost/qr_generator/?page=whats-a-qr-code">What's a QR Code</a>
                    </li>                
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid px-4 py-4">
        <div class="col-lg-6 mx-auto">
        <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'whats-a-qr-code':
                        include 'views/qr-code.php';
                        break;
                    
                    default:
                        include 'views/url.php';
                        break;
                }
            }else{
                include 'views/generator.php';
            }
        ?>
        </div>
    </div>

    <footer class="footer border-top mt-auto" style="<?php if(!isset($_GET['page'])){ echo 'position: absolute; bottom: 0; width: 100%'; } ?>">
        <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center py-2">
            <div class="col-md-4 d-flex align-items-center">
                <span class="text-muted">&copy; 2023, QR Code Generator by <a href="https://titoriskimianto.my.id" class="text-muted">Tito Riskimianto</a></span>
            </div>            
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="nav-link p-2">
                    <a href="https://github.com/triskimianto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(108, 117, 125)" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                    </a>
                </li>    
                <li class="nav-link p-2">
                    <a href="https://www.linkedin.com/in/tito-riskimianto-3b621a220/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(108, 117, 125)" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </a>
                </li>             
            </ul>
        </div>
    </footer>

    <script src="assets/js/myScript.js"></script>
</body>
</html>