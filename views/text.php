<?php
    use chillerlan\QRCode\{QRCode, QROptions};
    
    require_once 'vendor/autoload.php';

    $options = new QROptions(
        [
            'eccLevel' => QRCode::ECC_H,
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'version' => 5, 
            'backgroundColor' => [255,255,255],
            'imageTransparent' => false,
        ]
    );

    if(isset($_POST['submit']) && isset($_POST['text'])){
        $text = $_POST['text'];    
        $bitLength = strlen($text) * 8;
        $alt = "qrcode_".date_timestamp_get(date_create());   
        $result = (new QRCode($options))->render($text);             
    }    
?>
<form id="myTextForm" action="" method="post">
    <div class="form-floating mb-3">
        <textarea class="form-control" type="text" name="text" id="formText" placeholder="Enter text to share" required></textarea>
        <label for="formText">Enter text to share</label>
    </div>
    <button class="w-100 btn btn-success btn-lg" name="submit" type="submit">Generate</button> 
</form>

<?php 
if(isset($text)){    
    if($bitLength > 368){
        echo '<script>alert("Code length overflow. Maximum allowed length is 368 bits.");</script>';
    }else{
?>
<div class="pt-5 pb-3 d-flex justify-content-center">
    <div class="d-flex flex-row gap-2 justify-content-center">
        <div class="card" style="overflow: hidden; width: 128px; height: 128px;">
                <img class="img-fluid" src="<?php echo $result; ?>" alt="<?php echo $alt; ?>">                      
        </div>
        <div>
            <a href="<?php echo $result; ?>" class="btn btn-light rounded-circle px-2 pt-0" download="<?php echo $alt ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<?php
    }   
}
?>