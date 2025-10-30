<?php
$geheimer_key = "Ghgdhgsdhsifhfg"; // ändere das zu was Heftigem

if(isset($_GET['key']) && $_GET['key'] === $geheimer_key){
    header('Content-Type: text/plain');
    readfile('dexoreh.lua');
    exit;
} else {
    http_response_code(403);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Access Restricted</title>
        <style>
            body { background: #181824; color: #fff; text-align: center; font-family: 'Segoe UI', Arial, sans-serif; margin-top: 10vh; }
            .forbidden { font-size: 2.5rem; color: #ff4b4b; margin-bottom: 1rem;}
            .big { font-size: 2rem; margin-bottom: .5rem; }
            .box { background: #23243a; border-radius: 12px; padding: 2rem 3rem; display: inline-block;}
        </style>
    </head>
    <body>
        <div class="box">
            <div class="forbidden">403 Forbidden</div>
            <div class="big">Access Restricted</div>
            <p>This endpoint is protected and requires proper authorization.</p>
            <p><b>Unauthorized Access Attempt</b><br>
            You don't have permission to access this resource.<br><br>
            All scripts are protected with military-grade encryption and advanced obfuscation.<br>
            <i>Protected by Dexor Security System.</i>
            </p>
        </div>
    </body>
    </html>
    <?php
    exit;
}
?>
