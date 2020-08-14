
<!doctype html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/upload.css">
        <script>
            function writeFileName(){
                var liste = document.getElementById('list_uploaded_files');
                var name = document.getElementById('fileInput');
                liste.innerHTML += '<p>' + name.files.item(0).name + '</p>';
                return false;
            }
        </script>
    </head>

    <body>
        <h1>Upload new File</h1>

        <form action="../script_upload.php" method=post enctype=multipart/form-data>
            <input type=file id="fileToUpload" name="fileToUpload">
            <input type=submit value=Upload name=submit>
        </form>

        <div class='button_merge'>
            <a href="./fusion.php">
                <svg width="200" height="50">
                    <rect width="100%" height="100%" rx="10" ry="10" fill="green" />
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" style="fill:white;
                                                                                            font-weight: bold;">Merge !</text>
                </svg>
            </a>
        </div>


        <div id='list_uploaded_files'>
        
        </div>


    </body>