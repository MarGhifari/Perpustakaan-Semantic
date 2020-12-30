<?php
    include "sparqllib.php"; 

     $ds=sparql_connect("http://localhost:3030/Perpustakaan_Baru/sparql");
    if(!$ds){print sparql_errno() . ": ". sparql_error(). "\n"; exit;}

    $provinsi = $_GET["provinsi"];
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
              filter(?provinsi = '$provinsi').
            }
    ";
    
    $query = sparql_query($sparql);
    $fields = sparql_field_array($query);

?>