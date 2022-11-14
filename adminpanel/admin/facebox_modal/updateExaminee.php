
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selExmne = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selExmne['exmne_fullname']); ?> )</b></i></legend>
  <div class="col-md-12 mt-4">
<form method="post" id="updateExamineeFrm">
     <div class="form-group">
        <legend>Fullname</legend>
        <input type="hidden" name="exmne_id" value="<?php echo $id; ?>">
        <input type="" name="exFullname" class="form-control" required="" value="<?php echo $selExmne['exmne_fullname']; ?>" >
     </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <legend>Gender</legend>
              <select class="form-control" name="exGender">
                <option value="<?php echo $selExmne['exmne_gender']; ?>"><?php echo $selExmne['exmne_gender']; ?></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
           </div>
        </div>
        <div class="col-md-6">
           <div class="form-group">
              <legend>Date of Birth</legend>
              <input type="date" name="exBdate" class="form-control" required="" value="<?php echo date('Y-m-d',strtotime($selExmne["exmne_birthdate"])) ?>"/>
           </div>
        </div>
     </div>

     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <legend>Course</legend>
              <?php 
                  $exmneCourse = $selExmne['exmne_course'];
                  $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
               ?>
               <select class="form-control" name="exCourse">
                 <option value="<?php echo $exmneCourse; ?>"><?php echo $selCourse['cou_name']; ?></option>
                 <?php 
                   $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id!='$exmneCourse' ");
                   while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                  <?php  }
                  ?>
               </select>
           </div>
        </div>
        <div class="col-md-6">
           <div class="form-group">
              <legend>Year level</legend>
              <input type="" name="exYrlvl" class="form-control" required="" value="<?php echo $selExmne['exmne_year_level']; ?>" >
           </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <legend>Email</legend>
              <input type="" name="exEmail" class="form-control" required="" value="<?php echo $selExmne['exmne_email']; ?>" >
           </div>
        </div>
        <div class="col-md-6">
           <div class="form-group">
               <legend>Phone Number 
                  <span style="font-size:10px; font-style: italic;">+234XXXXXXXXXX</span>
               </legend>
               <input type="text" name="exPhone_number" id="exPhone_number" class="form-control" placeholder="" value="<?php echo $selExmne['exmne_phone_number']; ?>" autocomplete="off" pattern="^(\+234)[0-9]{10}$" required="">
             </div>
        </div>
     </div>
    

     <div class="form-group">
        <legend>New Password
            <span style="font-size:10px; font-style: italic;">leave blanck to maintain current password</span>
         </legend>
        <input type="password" id ="exPass" name="exPass" class="form-control" required="" >

     <div class="form-group">
        <legend>Status</legend>
        <input type="hidden" name="course_id" value="<?php echo $id; ?>">
        <input type="" name="newCourseName" class="form-control" required="" value="<?php echo $selExmne['exmne_status']; ?>" >
     </div>
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
  </div>
</form>
  </div>
</fieldset>







