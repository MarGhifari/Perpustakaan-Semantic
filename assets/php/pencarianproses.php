<?php
    include "sparqllib.php";

    $ds=sparql_connect("http://localhost:3030/Perpustakaan_Baru/sparql");
   if(!$ds){print sparql_errno() . ": ". sparql_error(). "\n"; exit;}


    if(isset($_GET["search"])){
        $search = $_GET["search"];
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
                  filter regex(?perpustakaan, '$search', 'i').
            }
    ";
    } 

     
    $query = sparql_query($sparql);
    $fields = sparql_field_array($query);
?>