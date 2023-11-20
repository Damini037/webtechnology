
<?php
$row=$_POST['row'];
$col=$_POST['col'];
?>
<html>
    <body>
         <form method="POST" action="add.php">
            <lable>Enter First Matrix</lable><br>
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
                        echo '<input type="text" name="a'.$i.$j.'">';
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
            <lable>Enter Second Matrix</lable><br>
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
                    echo '<input type="text" name="b'.$i.$j.'">';
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
           <input type="hidden" name="arow" value="<?php echo $row ?>">
           <input type="hidden" name="acol" value="<?php echo $col ?>">
         <input type="submit" value="addition">         
        </form>
    </body>
</html>