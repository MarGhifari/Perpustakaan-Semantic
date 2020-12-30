<?php
    include "assets/php/pencarianproses.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pencarian</title>
        <link rel="icon" href="https://static.thenounproject.com/png/16194-200.png">
        <link rel="stylesheet" href="pencarian.css">
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
            <section class="heading">
                <h1>Pencarian Anda:</h1>
            </section>

            <!-----------Section 2---------->
            <section class="card-container">
                <?php if(sparql_num_rows($query)){
                    while($row = sparql_fetch_array($query)){
                        print "
                            <div class='library-card'>
                                <a href=''><img src='$row[gambar]' alt='$row[perpustakaan]'></a>
                                <div class='text-image'>
                                    <h3>$row[perpustakaan]</h3>
                                    <p>$row[deskripsi]</p>
                                    <a href='librarydetail.php?perpustakaan=$row[perpustakaan]'><button>Telusuri Koleksi</button></a>
                                </div>
                            </div>";
                                    }
                } else {
                    print "
                    <h1>No Result</h1>
                    ";
                }                
                ?>      
            </section>

        </main>
        
        
    </body>
</html>