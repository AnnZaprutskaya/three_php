
    <title>left menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="style/bootstrap.css" rel="stylesheet">
    <style type="text/css">
    	section#left
    	{
    		display: flex;
    		align-items:stretch;
    		justify-content:flex-start;
        
        margin-right: 20px;
    	}
      section.left ul
      {
        margin-right:30px;
      }
    </style>
   </head>

   <body>
   		<section class="left hidden-phone">
      <ul>

      <?php
      require_once 'search_form.php';

      include "config2.inc.php";

      $result2 = mysqli_query($dbc,"SELECT * FROM categories;");

      $num = mysqli_num_rows($result2);
      

      while ($rrow = mysqli_fetch_array($result2, MYSQL_ASSOC)) {
        //if(!isset($_GET['category']))
        //{
        //echo "<a onclick=\"func(".$row['id'].")\" href=\"all_products.php\"><li>".$row['text']."</li></a>";
        //}

       // echo $rrow['id'];

        //setcookie('category',$row['id']);
        //if (isset($_COOKIE['category'])) $a=$_COOKIE['category'];
        //else $a=1;

        if(isset($_GET['category']) && $rrow['id']==$_GET['category']){
            echo "<a href=\"all_products.php?category=".$rrow['id']."\" onclick=func(".$rrow['id'].") ><li style=\"font-weight:bold; color: #27408B;\">".$rrow['text']."</li></a>
        <script>
        func(val)
        {
          document.cookie=\"category=val\"; //и как взять переменную из php?      
        }
      </script> ";
        }
        //echo "<a href=\"good.php?id=".$rrow['id']."\" onclick=func()> ";
        else echo "<a href=\"all_products.php?category=".$rrow['id']."\" onclick=func(".$rrow['id'].") ><li>".$rrow['text']."</li></a>
        <script>
        func(val)
        {
          document.cookie=\"category=val\"; //и как взять переменную из php?      
        }
      </script> ";
        
      }  

      ?>

      </ul>
   		</section>   
      
   </body>
</html>