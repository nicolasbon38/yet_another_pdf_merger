<?php
//scirpt for merging
    $fileArray = scandir('../uploads/');
    $outputName = "output.pdf";

    $cmd = "cd /opt/lampp/htdocs/uploads/ && gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
    //  Add each pdf file to the end of the command
    foreach($fileArray as $file) {
        if ($file != $outputName){
            $cmd .= $file." ";
        }
    }
print($cmd);
$result = shell_exec($cmd);
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/fusion.css">
    </head>
    <body>
        <div id='main'>
            <div id='header'>
                <h1>Your files have been merged.</h1>
                <h3>You can now download the merged file.</h3>
            </div>
            
            <div class='button_download'>
                <a href="../uploads/output.pdf"><svg width="200" height="50">
                    <rect width="100%" height="100%" rx="10" ry="10" fill="green" />
                   <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" style="fill:white;
                                                                                                font-weight: bold;">Download</text>
                </svg></a>
            </div>
        </div>
    </body>
</html>