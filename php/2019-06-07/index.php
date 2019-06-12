<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    }
</style>
    <title>Document</title>
    
</head>
<body>
    <?php
        $products = [ 
                        [1,"iphone", 1000], [2,"Samsung", 500], [3,"Xiaomi", 200]
                    ];
        $total = 0;
        $taxedTotal = 0;
    ?>

<table style="width:100%;">
    <!-- label -->
  <tr> 
    <th>Id</th>
    <th>Name</th> 
    <th>Price</th>
    <th>Price (Taxed)</th>
  </tr> 
    <!-- products -->
  <?php for($i = 0; $i < count($products); $i++): ?> 
        <?php 
            if($products[$i][2]>500){
                $taxedTotal += $products[$i][2]+$products[$i][2]*0.1;
                $taxedPrice = $products[$i][2]+$products[$i][2]*0.1;
            }else{
                $taxedTotal += $products[$i][2]+$products[$i][2]*0.05;
                $taxedPrice = ($products[$i][2]+$products[$i][2]*0.05);
            }
        ?>
        <tr>
            
                <td><?php echo $products[$i][0] ?></td>
                <td><?php echo $products[$i][1] ?></td>
                <td><?php echo "$".$products[$i][2] ?></td>
                <td><?php 
                    echo "$".$taxedPrice;
                ?></td>
         
        </tr>
         <!-- PRICEの合計 -->
        <?php  $total += $products[$i][2]; ?>
        
  <?php endfor ?>
   <!-- Total -->
        <tr>
            <th colspan="2">Total</th>
            <th><?php echo "$".$total; ?></th>
            <th><?php echo "$".$taxedTotal; ?></th>
        </tr>

</table>

<?php
    


?>
</body>
</html>