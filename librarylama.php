<?php 
            
            require("sparqllib.php");

            $db=sparql_connect("http://localhost:3030/Perpustakaan_Baru/sparql");
            if(!$db){print sparql_errno() . ": ". sparql_error(). "\n"; exit;}

            $sparql="
            prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
            prefix dc: <https://purl.org/dc/elements/1.1/>
            
            select ?perpustakaan ?kota ?tahun ?gambar ?deskripsi ?provinsi
            where{
                ?data dc:name ?perpustakaan.
                  ?data dc:city ?kota.
                ?data dc:province ?provinsi.
                  ?data dc:year ?tahun.
                  ?data dc:desc ?deskripsi.
                  ?data dc:gambar ?gambar.
                  filter(?provinsi = 'Jawa Barat').
            }
            ";

            $result = sparql_query($sparql);
            $fields = sparql_field_array($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perpustakaan: Jawa Barat</title>
        <link rel="icon" href="https://static.thenounproject.com/png/16194-200.png">
        <link rel="stylesheet" href="library.css">
        <link href="styling/fontawesome-free-5.15.1-web/css/fontawesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>  

        <header>
            <nav>
                <div class="web-logo">
                    <a href="index.html"><img src="https://static.thenounproject.com/png/16194-200.png" alt="Logo"></a>
                </div>
                <div>
                    <ul>
                        <li><a href="index.html">Beranda</a></li>
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
                        <a href="index.html"><p><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp Kembali</p></a>
                    </div>
                    <h1>Jawa Barat</h1>
                    <p> <b style="font-size: 25px;">Fun Fact:</b> <br> Jawa Barat memiliki total 16.560 perpustakaan berdasarkan data yang diambil pemerintah
                        Jawa Barat per tanggal 16 September 2020    
                    </p>
                </div>
            </section>

            <!-----------Section 2---------->
            <section>
                <div class="container">
                    <div class="content-wrapper">                    
                        <h1>Daftar Perpustakaan di Jawa Barat</h1>
                        
                        <form class="search-bar" action="">
                            <input type="text" placeholder="Cari Perpustakaan...">
                            <button><i class="fa fa-search icon" aria-hidden="true"></i></button>    
                        </form>
                        
                        <div class="card-container">
                                
                            <div class="library-card">
                                <a href=""><img src="https://i1.wp.com/www.hops.id/wp-content/uploads/2020/03/9475134853_39f3d9bfe5_k.jpg?fit=2048%2C1536&ssl=1" alt="Perpustakaan UI"></a>
                                <div class="text-image">
                                    <h3>Perpustakaan UI</h3>
                                    <p>Gedung bernama “The Crystal of Knowledge” ini selesai dibangun di awal tahun 2011, dan proses integrasi dimulai pada bulan Maret 2012.</p>
                                    <a href=""><button>Telusuri Koleksi</button></a>
                                </div>
                            </div>

                            <div class="library-card">
                                <a href=""><img src="https://i1.wp.com/www.hops.id/wp-content/uploads/2020/03/9475134853_39f3d9bfe5_k.jpg?fit=2048%2C1536&ssl=1" alt="Perpustakaan UI"></a>
                                <div class="text-image">
                                    <h3>Perpustakaan UI</h3>
                                    <p>Gedung bernama “The Crystal of Knowledge” ini selesai dibangun di awal tahun 2011, dan proses integrasi dimulai pada bulan Maret 2012.</p>
                                    <a href=""><button>Telusuri Koleksi</button></a>
                                </div>
                            </div>
                            
                            <div class="library-card">
                                <a href=""><img src="https://webpac.lib.itb.ac.id/assets/theme/susis/images/slide/slide1.jpg" alt="Perpustakaan ITB"></a>
                                <div class="text-image">
                                    <h3>Perpustakaan ITB</h3>
                                    <p>Perpustakaan ITB berdiri bersamaan dengan lahirnya Technische Hoogeschool (TH) di Bandung pada tahun 1920, sebagai cikal bakal ITB pada masa pendudukan Belanda.</p>
                                    <a href=""><button>Telusuri Koleksi</button></a>
                                </div>
                            </div>
    
                            <div class="library-card">
                                <a href=""><img src="https://3.bp.blogspot.com/-QwKhP1J5C2Q/WGNfqs34MSI/AAAAAAAABm4/djYmVlWW4NgXvdvuLJPBa3piDqOyiE3ZQCLcB/s1600/bapusip.jpg" alt="Perpustakaan ITB"></a>
                                <div class="text-image">
                                    <h3>Perpustakaan DISPUSIPDA Jabar</h3>
                                    <p>Dinas Perpustakaan dan Kearsipan Daerah Jawa Barat yang didirikan tahun 1992 oleh pemerintah Jawa Barat.</p>
                                    <a href=""><button>Telusuri Koleksi</button></a>
                                </div>
                            </div>
    
                            <div class="library-card">
                                <a href=""><img src="https://javawisata.com/wp-content/uploads/2018/05/perpustakaan-gasibu.jpg" alt="perpustakaan-gasibu"></a>
                                <div class="text-image">
                                    <h3>Perpustakaan Gasibu</h3>
                                    <p>Terletak di salah satu pojok lapangan Gasibu, perpustakaan yang berdiri sejak tahun 2016 ini kerap kali dikunjungi oleh muda-mudi Bandung.</p>
                                    <a href=""><button>Telusuri Koleksi</button></a>
                                </div>
                            </div>
                            
                            <div class="library-card">
                                <a href=""><img src="https://www.ayobogor.com/images-bogor/post/articles/2018/05/11/1497/cinta_baca.jpg" alt="Perpustakaan Cinta Baca Bogor"></a>
                                <div class="text-image">
                                    <h3>Perpustakaan Cinta Baca Bogor</h3>
                                    <p>Perpustakaan Cinta Baca dimiliki oleh sebuah yayasan yang fokus bergerak dalam bidang literasi, Yayasan Cinta Baca.</p>
                                    <a href=""><button>Telusuri Koleksi</button></a>
                                </div>
                            </div>
    
                            <div class="library-card">
                                <a href=""><img src="https://3.bp.blogspot.com/-QwKhP1J5C2Q/WGNfqs34MSI/AAAAAAAABm4/djYmVlWW4NgXvdvuLJPBa3piDqOyiE3ZQCLcB/s1600/bapusip.jpg" alt="Perpustakaan ITB"></a>
                                <div class="text-image">
                                    <h3>Perpustakaan DISPUSIPDA</h3>
                                    <p>Dinas Perpustakaan dan Kearsipan Daerah Jawa Barat yang didirikan tahun 1992 oleh pemerintah Jawa Barat.</p>
                                    <a href=""><button>Telusuri Koleksi</button></a>
                                </div>
                            </div>
                    </div>
                   
                    </div>

                </div>
            </section>
        </main>
    </body>
</html>