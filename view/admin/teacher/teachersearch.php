<?php
/**
 * Created by PhpStorm.
 * User: Shobuj
 * Date: 20-Nov-17
 * Time: 4:30 PM
 */

// Connect to MySQL via PDO

//var_dump($_POST);

error_reporting(0);

$db = new PDO('mysql:host=localhost;dbname=bangla;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


$var1 = $_POST['teacherSearch'];


//$query = "SELECT * FROM student_data WHERE student_id LIKE :search OR student_name LIKE :search";
$query = "SELECT * FROM teacher_data WHERE index_number LIKE :search OR teacher_name LIKE :name ";
$stmt = $db->prepare($query);
$stmt->bindValue(':search', '%' . $var1 . '%', PDO::PARAM_INT);
$stmt->bindValue(':name', '%' . $var1 . '%', PDO::PARAM_INT);
$stmt->execute();

//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//if ($stmt->rowCount() > 0) {
//    $result = $stmt->fetchAll();
//
//    foreach( $result as $row ) {
//        //echo $row["student_id"]."<br/>";
//        //echo $row["student_name"];

?>
<?php include_once '../inc/header.php'; ?>



<!--       main form start here-->
<div class="col-md-8" style="width: 77.666667%;">

    <!--        <div class="form-group pull-left" style="padding: 20px 0px">-->
    <!--           <a class="btn btn-primary" href="studentAttend.php">Attendance</a>-->
    <!---->
    <!--        </div>-->



    <form class="navbar-form navbar-right" action="teachersearch.php" method="post" role="search">
        <div class="form-group">
            <input type="text" name="teacherSearch" class="form-control" placeholder="Teacher ID...">
        </div>
        <button type="submit" name="submit" class="btn btn-default2">Submit</button>
<!--        <button type="submit" class="btn btn-default1">Logout</button>-->
    </form>

    <?php
    if ($stmt->rowCount() > 0) {
    $results = $stmt->fetchAll();
    ?>

    <table class="table table-bordered table-responsive" style="background: white">

        <tr>
            <td colspan="12"><h2><center>শিক্ষকের তথ্যাবলী</center></h2></td>

        </tr>





        <tr>
            <th class="text-center">নাম্বার</th>
            <th class="text-center">শিক্ষকের নাম</th>
            <th class="text-center">প্রতিষ্ঠানে পদবী</th>
            <th class="text-center">কাজ</th>
            <th class="text-center">শিক্ষাগত যোগ্যতা</th>
            <th class="text-center">ট্রেনিং</th>
            <th class="text-center">যোগদানের তারিখ</th>
            <th class="text-center">ইনডেক্স নাম্বার</th>
            <th class="text-center">এমপিও ভূক্তির তারিখ</th>
            <th class="text-center">ছবি</th>
            <th class="text-center">Action</th>
        </tr>
        <?php
        $sl = 1;
//        if ($stmt->rowCount() > 0) {
//            $results = $stmt->fetchAll();

            foreach( $results as $result ) {
                ?>
                <tr class="text-center">
                    <td><?php echo $sl++?></td>
                    <td><?php echo $result['teacher_name']?></td>
                    <td><?php echo $result['designation']?></td>
                    <td><?php echo $result['what_work']?></td>
                    <td><?php echo $result['eduquali']?></td>
                    <td><?php echo $result['training']?></td>
                    <td><?php echo $result['join_date']?></td>
                    <td><?php echo $result['index_number']?></td>
                    <td><?php echo $result['mpo_date']?></td>

                    <td>
                        <img src="../uploads/teacher/<?php echo $result['image']?>" width="100" alt="no image">
                    </td>
                    <td>
                        <!--                                    <a class="btn btn-info" href="#">Show</a>-->
                        <!--                                    <a class="btn btn-primary" href="#">Edit</a>-->
                        <!--                                    <a class="btn btn-danger" href="#">Delete</a>-->
                        <a style="color: black" class="text-info" href="showTeacher.php?show=<?php echo $result['id']; ?>">View</a>
                        <a  class="text-primary" href="editTeacher.php?edit=<?php echo $result['id']; ?>">Edit</a>
                        <a onclick="return confirm('Are you sure to Delete'); " class="text-danger" href="deleteTeacher.php?del=<?php echo $result['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } } else{ ?>
        <h3 style="color:red;text-align: center" >Teacher name or index number does not match!</h3>
            <a class="btn btn-primary" href="allteacher.php">Back</a>
        <?php } ?>

    </table>
</div>


<?php  include '../inc/footer.php' ?>



<?php //}  ?>

<!-- else {-->
<!--    echo 'There is nothing to show';-->
<!--}-->
<!--?>-->
<!--//while ($r=$stmt->fetch(PDO::FETCH_ASSOC)) {-->
<!--//    echo"<pre>".print_r($r,true)."</pre>";-->
<!--//}-->