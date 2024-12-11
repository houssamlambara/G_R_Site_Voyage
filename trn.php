<?php

include('db.php');

$sql = 'SELECT *FROM activites';
$res = $conn->query($sql);

// while($row = $res->fetch_assoc()){
//     echo $row['TITRE'] . " " . $row['PRIX'];
// }
?>
<div>
    <?php while($row = $res->fetch_assoc()): ?>
    <div>
        <p>title :  <?php echo $row['TITRE'] ?></p>
        <select>
            <option value=" <?php echo $row['TITRE'] ?> "><?php echo $row['TITRE'] ?></option>
        </select>
    </div>
    <?php endwhile ?>
</div>