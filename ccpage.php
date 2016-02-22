<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Untitled</title>
   <link rel="stylesheet" href="style4.css">
   <link rel="author" href="humans.txt">
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script type="text/javascript" src="jsDnD/jquery-ui.min.js"></script>
   <script type="text/javascript" src="jsDnD/jquery.dragsort-0.5.2.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function () {
         $("h1").css("color", "green");
      });
   </script>
   <script src="jsDnD/jquery.dragsort-0.5.2.js"></script>

</head>


<body>
   <script type="text/javascript" src="imagePop.js"></script>
   <div id="wrapper">

      <div id="container">
         <div id="navBar">
         </div>
         <ul id="sortable">
        <?php
             $products = array_diff(scandir("products"), array('..', '.'));

             

            foreach($products as $product){ ?>

            <li class="ui-state-default" style="background-image:url('<?php echo "products/".$product ?>')">
                <span><?php echo strstr($product, ".",true); ?></span>
            </li>

         <?php  }    ?>

          
            <li id="filter">filter</li>
      
         </ul>

      </div>

   </div>
   <script>
      $(function () {

         $("#sortable").disableSelection();
         $("#sortable").sortable();
      });
   </script>
   <script type="text/javascript">
      
   </script>
   <script>
   </script>

</body>

</html>