<?php 
    include "assets/php/libraryprocess.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Provinsi: <?php echo $provinsi?></title>
        <link rel="icon" href="https://static.thenounproject.com/png/16194-200.png">
        <link rel="stylesheet" href="library.css">
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
            <section class="main-content">
                <div class="banner">
                    <div class="logo">
                        <a href="index.php"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp Kembali</p></a>
                    </div>
                    <h1>Provinsi <?php echo $provinsi?></h1>
                </div>
            </section>

            <!-----------Section 2---------->
            <section>
                <div class="container">
                    <div class="content-wrapper">                    
                        <h1>Daftar Perpustakaan di <?php echo $provinsi?></h1>
                        
                        <form class="search-bar" action="pencarian.php" method="GET">
                            <input type="text" placeholder="Cari Perpustakaan..." name="search">
                            <button type="submit"><i class="fa fa-search icon" aria-hidden="true"></i></button>    
                        </form>
                        
                        <div class="card-container">
                            
                            <?php if(sparql_num_rows($query)){
                                while($row = sparql_fetch_array($query)){
                                    print "
                                    <div class='library-card'>
                                        <a href='librarydetail.php?perpustakaan=$row[perpustakaan]'><img src='$row[gambar]' alt='$row[perpustakaan]'></a>
                                        <div class='text-image'>
                                            <h3>$row[perpustakaan]</h3>
                                            <p>$row[deskripsi] Perpustakaan ini berada di $row[kota].</p>
                                            <a href='librarydetail.php?perpustakaan=$row[perpustakaan]'><button>Telusuri Koleksi</button></a>
                                        </div>
                                    </div>";
                                }
                            } 
                            
                            ?>
                                
                        </div>

                </div>
            </section>
        </main>
    </body>
</html>