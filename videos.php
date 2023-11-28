<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Your Website</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div style="height: 50%;"" class="card">
        <div class="container-fluid">
             <div class="card">
                <h1>For more videos visit the link below</h1>
                     <button id="redirectButton"> other videos in youtube </button>
                      <script>
                            const redirectButton = document.getElementById('redirectButton');
                            const redirectUrl = 'https://www.youtube.com/@myrecipe254'; 
                            redirectButton.addEventListener('click', function() {
                                window.location.href = redirectUrl;
                            });
                        </script>
                </div>
        </div>
    </div>
    <div  class="content container-md" >
        <iframe width="1013" height="570" src="https://www.youtube.com/embed/hDhLyRenHTs" title="minced meat stew||how to make tasty minced beef stew" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <!-- Content specific to each page goes here -->
        <iframe width="1013" height="570" src="https://www.youtube.com/embed/8v6lJUf22ms" title="finger licking wet fry pork😋" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="1013" height="570" src="https://www.youtube.com/embed/jipZ3Omknks" title="simple ingredients dry fry beef#foodlover #beefrecipe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
               
            </div>
     <!--footer-->
       <div class="container-fluid class"></div>
       <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6485a457cc26a871b021d58a/1hb6521vb';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
</body>
</html>
