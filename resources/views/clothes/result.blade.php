<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>服を買い換える時期を計算するサイト</title>
    </head>
    <body>
        <h1>計算結果</h1>
                <?php
                    $condition = $_POST["condition"];
                    $type = $_POST["type"];
                    $material = $_POST["material"];
                    $frequency = $_POST["frequency"];
                ?>
            
            <div class = result>
                <p>服の状態：<?php echo $condition ?></p>
                <p>服の種類：<?php echo $type ?></p>
                <p>服の素材：<?php echo $material ?></p>
                <p>選択頻度の予定：<?php echo $frequency ?></p>
                
            </div>
      
        
        
        
    </body>
</html>