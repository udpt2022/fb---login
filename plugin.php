    <!DOCTYPE html>
    <html>
        <head>
            <title>Facebook Comments Plugin</title>
        </head>
        <body>
        
            <?php
            
                $weblink = "http://localhost/FB.Login/";
            
                if(isset($_GET["about"])){
                    
                    $weblink = $weblink . "?about";
                    
                    ?>
                    
                    <h1>About</h1>
                    <p>This is About page</p>
                    
                    <?php
                }else if (isset($_GET["contactus"])){
                    
                    $weblink = $weblink . "?contactus";
                    
                    ?>
                    <h1>Contact us</h1>
                    <p>Your contents here</p>
                    <?php
                }else{
                    
                    ?>
                    
                    <h1> Facebook Comments Plugin </h1>
                    <p>Your contents here</p>
                    
                    
                    
                    <?php
                    
                }
            
            ?>
            
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=1050420615831702&autoLogAppEvents=1" nonce="VxFqDepC"></script>
            <div class="fb-comments" data-href="https://www.fit.hcmus.edu.vn/" data-width="" data-numposts="5"></div>
    </body>
    </html>