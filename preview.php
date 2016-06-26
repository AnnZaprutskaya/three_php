<?php

//include "all_products.php";

//if($row['status']==0) $stat_text = "в процессе";
//if($row['status']==-1) $stat_text = "отменён";
//if($row['status']==1) $stat_text = "доставлен";


// тут дописать href по аналогии со страницами

echo "<a href=\"good.php?id=".$row['id']."\" onclick=func()> 
<figure class=\"preview col-md-3\">  
    <img width=\"200px\" height=\"auto\" src=\"".$row['img_path']."\">  
    <figcaption>".$row['name']."</figcaption>
    <dl>        
        <dt>Материал:</dt>";

        $query="SELECT * FROM materials WHERE id='" . $row['material'] . "'";
  		$data = mysqli_query($dbc, $query) or die('error z');
  		$row2 = mysqli_fetch_array($data);

        echo "<dd>".$row2['text']."</dd>
        <dt>Информация:</dt>
        <dd>".$row['info']."</dd>
        <dt>Количество на складе:</dt>
        <dd>".$row['amount']."</dd>
    </dl>
</figure> </a>

<script>
func()
{
	document.cookie=\"id=".$row['id']."\";
}
</script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<link href=\"style/bootstrap.css\" rel=\"stylesheet\">";


?>