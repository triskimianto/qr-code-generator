<div class="card text-center">
    <div class="card-header py-3">
        <ul class="nav nav-pills card-header-pills mx-0">
            <li id="urlPill" class="nav-item">
                <a id="urlLink" class="nav-link <?php if(!isset($_GET['type']) || $_GET['type'] == 'url'){ echo 'active'; } ?>" href="http://localhost/qr_generator/?type=url">URL</a>
            </li>
            <li id="textPill" class="nav-item">
                <a id="textLink" class="nav-link <?php if($_GET['type'] == 'text'){ echo 'active'; } ?>" href="http://localhost/qr_generator/?type=text">TEXT</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <?php            
            if (isset($_GET['type'])) {
                switch ($_GET['type']) {
                    case 'text':
                        include 'views/text.php';
                        break;
                    
                    default:
                        include 'views/url.php';
                        break;
                }
            }else{            
                include 'views/url.php';
            }
        ?>
    </div>
</div>