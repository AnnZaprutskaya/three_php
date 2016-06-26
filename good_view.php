<?php


echo "
    <section class=\"good col-md-9 сol-xs-12\">
    <h2>".$row['name']."</h2>  
    <hr>
    <img width=\"400px\" height=\"auto\" class=\"good_view col-md-6  сol-xs-12\" src=\"".$row['img_path']."\">     
    <ul class=\"col-md-6  сol-xs-12\" >   ";
        $query="SELECT * FROM materials WHERE id='" . $row['material'] . "'";
        $data = mysqli_query($dbc, $query) or die('error z');
        $row2 = mysqli_fetch_array($data);

    echo "     
        <li> <em> Материал: </em>".$row2['text']."</li>
        <li><em> Информация: </em>".$row['info']."</li>
        <li><em> Количество на складе: </em>".$row['amount']."</li>
        <li><em> Цена: </em>".$row['price']." бел. рублей</li>
    
   ";

    require_once 'good_form.php';

    echo "
    </ul>
    </section>
";


?>