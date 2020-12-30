<?php
    include_once "assets/php/indexProcess.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perpustakaan Indonesia</title>
        <link rel="icon" href="https://static.thenounproject.com/png/16194-200.png">
        <link rel="stylesheet" href="index.css">
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
            <section>
                <div class="main-banner">
                    <h1>Selamat Datang di <br> Koleksi Perpustakaan <br> Indonesia</h1>
                </div>
                <div>
                    <div class="container">
                        <div class="box-wrapper">
                            <img src="https://static.thenounproject.com/png/317119-200.png" alt="library">
                            <p>FYI: <br> terdapat 164.610 Unit Perpustakaan <br> Di Seluruh Indonesia</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-----------Section 2---------->
            <section>
                <div class="container">
                    <div class="content-wrapper">
                        <h1>Cari Perpustakaan Berdasarkan Daerah</h1>
                        <div class="card-container">
                            <?php if(mysqli_num_rows($result)) :?>
                                <?php while($row = mysqli_fetch_array($result)) :?>
                                    <div class="province-card">
                                        <a href="library.php?provinsi=<?php echo $row["provinsi"] ?>"><img src="<?php echo $row["image"]?>" alt=""></a>
                                        <div class="text-image">
                                            <h3><?php echo $row["provinsi"]?></h3>
                                            <div class="btn">
                                                <a href="library.php?provinsi=<?php echo $row["provinsi"] ?>"><button>Selengkapnya</button></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>    
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        

        
        
    </body>
</html>