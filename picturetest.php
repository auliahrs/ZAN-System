<?php if ($row['profileImage'] != "") { ?>
    <center><?php echo '<img src="data:image;base64,' . base64_encode($row['profileImage']) . '" id="display" style="width: 300px; height: 300px; border-radius: 50%;"> ' ?></center>
<?php } else { ?><center><img src="profImage/anon.png" id="profImg" style="width: 300px; height: 300px;"> </center>

<?php } ?>




<form method="post" action="profPic.php?id=<?php echo $_SESSION['users_userID'] ?>" enctype="multipart/form-data">
    <center>
        <div>
            <label for="bgImage"></label><br>
            <div class="upload-btn-wrapper">
                <button class="btnOnly">Upload a file</button>
                <input type="file" accept="image/*" onchange="readURL(this)" name="image" style="margin: auto; text-align:center;" style="width: 10px;">
            </div>
        </div>
    </center> <br>

    <center><input type="submit" value="Save" name="submit" class="btn btn-primary"></center>

</form>



<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#display')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    var loadFile = function(event) {
        document.getElementById("display").src = this.target.value;

    };
</script>



<?php
// Include the database configuration file  
session_start();
require 'dbase.php';
$userID = $_GET['id'];
extract($_POST);

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

if ($image != "") {
    $update_query = "UPDATE users SET profileImage='$image' where users_userID='$userID'";
    $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
}


header('location: profile.php');
?>