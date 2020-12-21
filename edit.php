<?php
include 'header.php';
include 'config.php';
$sql = "SELECT * FROM studentclass";
$result = mysqli_query($conn, $sql);
$stu_id = $_GET['id'];
$sql1 = "SELECT * FROM student WHERE sid = {$stu_id}";
$result1 = mysqli_query($conn, $sql1);
?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
    ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
                    <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        echo "<select name='sclass'>";
                        while($row1 = mysqli_fetch_assoc($result)){
                            if($row['sclass'] == $row1['cid']){
                                $selected = "selected";
                            }
                            else{
                                $selected = "";
                            }
                     echo "<option {$selected} value='{$row1['cid']}'>{$row1['cname']}</option>";   
                    }
                    echo "</select>";
                }
                    ?>

                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>
    <?php }
    } ?>
</div>
</div>
</body>

</html>