<?php

    require "assets/php/bookdetailprocess.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Buku</title>
        <link rel="icon" href="https://static.thenounproject.com/png/16194-200.png">
        <link rel="stylesheet" href="bookdetail.css">
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
            <!-- <section>
                <div class="book-container">
                    <div class="book-image">
                        <img src="https://cdn.gramedia.com/uploads/items/9789797098421_burung-burung-manyar-edisi-revisi.jpg" alt="">
                    </div>
                    <div class="book-detail">
                        <h1></h1>
                        <h3>Tahun: 1981</h3>
                        <h3>Genre: Fiksi-Romantis</h3>
                        <h3>Publisher: Djambatan</h3>
                        <h3>Oleh: Y.B. Mangunwijaya</h3>
                        <p><b>Sinopsis:</b> <br> 
                            Berkisah tentang anak manusia yang merasa gagal dalam menjalani kehidupannya 
                            karena trauma masa lalunya. Seting cerita zaman modern dengan latar belakang kehidupan masa revolusi 
                            (penjajahan Jepang dan Belanda)
                        </p>
                    </div>
                </div> -->
                
                
            
                <div class="book-container">
                <?php
                   if($i=$id){
                ?>
                    <div class="book-image">
                        <img src="<?php echo $image[$i]?>" alt="">
                    </div>
                    <div class="book-detail">
                        <h1><?php echo $title[$i]?></h1>
                        <h3>Tahun: <?php echo $date[$i]?></h3>
                        <h3>Genre: <?php echo $type[$i]?></h3>
                        <h3>Publisher: <?php echo $publisher[$i]?></h3>
                        <h3>Oleh: <?php echo $author[$i]?></h3>
                        <p><b>Sinopsis:</b> <br> <?php echo $desc[$i]?></p>
                    </div>
                <?php
                    }
                ?>

                </div>
            </section>
        </main>

    </body>
</html>