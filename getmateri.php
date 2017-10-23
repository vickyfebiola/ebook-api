<?php
    include "conn.php";

    $sql = "SELECT * FROM materi_voli";

    $query = mysql_query($sql);
    while($dt = mysql_fetch_array($query)) {
        $item[] = array(
            "id_materi"=>$dt["id_materi"],
            "nama_materi"=>$dt["nama_materi"],
            "isi_materi"=>$dt["isi_materi"]
        );
    }

    $json = array(
        'result' => 'Success',
        'item' => $item
    );

    echo json_encode($json);
?>