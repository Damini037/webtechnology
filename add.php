<?php
$row=$_POST['arow'];
$col=$_POST['acol'];
$a=array(array());
$b=array(array());
$c=array();
for ($i=0 ; $i < $row ; $i++){
    for ($j=0 ; $j < $col ; $j++){
        $a[$i][$j]=$_POST['a'.$i.$j];
        $b[$i][$j]=$_POST['b'.$i.$j];
        $c[$i][$j]=$a[$i][$j]+$b[$i][$j];
    }
}
?>
<html>
<head>
<style>
	table, tr,td{
	margin : 0 auto;
	border : 1px solid black;
	border-style: dotted;
	font-size:50px;
	padding:30px;
	}
	tr,td{
	border-style: outset;
	padding: 50px;
	}
	</style>
	</head>
	<body>
		<table>
            <?php
                for ($i=0 ; $i < $row ; $i++){
            ?>
                <tr>
                    <?php
                    for($j=0 ; $j < $col ; $j++){
                    ?>
                    <td>
                        <?php
                        echo $c[$i][$j];
                        ?>
                    </td>
                    <?php
                    }
                    ?>
                </tr>
                <?php
                    }
                    ?>
		</table>
	</body>
</html>
