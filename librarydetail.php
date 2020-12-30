<?php

    require "assets/php/librarydetailprocess.php";

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perpustakaan</title>
        <link rel="icon" href="https://static.thenounproject.com/png/16194-200.png">
        <link rel="stylesheet" href="librarydetail.css">
        <link href="styling/fontawesome-free-5.15.1-web/css/fontawesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <header>
            <nav>
                <div class="web-logo">
                    <a href="index.php"><img src="https://static.thenounproject.com/png/16194-200.png" alt="Logo"></a>
                </div>
                <div>
                    <ul>
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="about.html">Tentang Kami</a></li>
                        <li><a href="contact.html">Hubungi Kami</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            
            <!-----------Section 1---------->
            <section class="banner">
                <div class="logo">
                    <a href="index.php"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp Kembali</p></a>
                </div>
                <h1>Koleksi Buku</h1>
            </section>
            
            <!-----------Section 2---------->
            <section class="card-container">
            
                <?php 
                    for($i=1; $i<count($allSubjek); $i++){
                ?>
 
                <div class="book-card">
                    <div>
                        <a href="bookdetail.php?id=<?php echo $i ?>"><img src="<?php echo $image[$i]?>" alt="<?php echo $title[$i] ?>"></a>
                    </div>
                    <div class="text-image">
                        <h3><?php echo $title[$i] ?></h3>
                        <p class="genre">Genre: <?php echo $type[$i] ?></p>
                        <p class="author"><?php echo $author[$i] ?></p>
                        <p class="publisher">Penerbit: <?php echo $publisher[$i] ?></p>
                        <p class="year">Tahun terbit: <?php echo $date[$i] ?></p>
                        <a href="bookdetail.php?id=<?php echo $i ?>"><button>Detail Buku</button></a>
                    </div>
                </div>

                <?php
                    }
                ?>

            </section>

        </main>

    </body>

</html>