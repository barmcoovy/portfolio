<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bartosz Miecznikowski - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-left"><a href="index.html"><i class="fa-solid fa-user"></i></a></div>
            <div class="header-right">Bartosz miecznikowski - portfolio</div>
        </header>
        <section class="mainpage">
            <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Voluptatem modi cumque magnam laborum sunt. Quod eaque quia iure vel
                 officia delectus facere? Explicabo fuga dolorem enim tenetur earum illo ducimus?</div>
            <div class="img">
            <div class="form">
                <form action="php-scripts/email.php" method="post">
                    <input type="email" name="email" class="email" placeholder="email adress">
                    <textarea class="message" name="message" placeholder="your message"></textarea>
                    <button type="submit" class="send-mail">SEND A MESSAGE</button>
                    <?php
                        include('php-scripts/email.php');
                        if(isset($_GET['sent'])){
                            if($_GET['sent']==1){
                                echo " <p class='result_message'>Message has been sent! </p>";
                                
                            }
                            if($_GET['sent']==2){
                                echo " <p class='result_message'>Write your email! </p>";
                                
                            }
                            if($_GET['sent']==3){
                                echo " <p class='result_message'>Write your message! </p>";
                                
                            }
                        }
                        ?>
                </form>
            </div>
        </div>
        </section>
        <section class="offer">
        <div class="bronze-plan"><h2>bronze plan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. P
                    raesentium nam atque recusandae soluta, fugit laborum qui laboriosam error ipsam ratione
                    doloremque mollitia exercitationem, omnis tempora commodi corporis, nobis repellendus enim!</p>
            </div>
            <div class="silver-plan"><h2>silver plan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. P
                    raesentium nam atque recusandae soluta, fugit laborum qui laboriosam error ipsam ratione
                    doloremque mollitia exercitationem, omnis tempora commodi corporis, nobis repellendus enim!</p>
            </div>
            <div class="golden-plan"><h2>golden plan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. P
                    raesentium nam atque recusandae soluta, fugit laborum qui laboriosam error ipsam ratione
                    doloremque mollitia exercitationem, omnis tempora commodi corporis, nobis repellendus enim!</p>
            </div>
        </section>
        <footer class="footer">
            <div class="footer-left"><p>Bartosz Miecznikowski 2023 &copy; All rights reserved</p> </div>
            <div class="footer-right">
                <a href="https://github.com/barmcoovy/" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </footer>
    </div>
    
</body>
</html>