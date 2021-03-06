<?php include('../config.php'); ?>
<?php include('../header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <!-- Begin Page Content -->
  <div class="container-fluid">
   <div class="row">

    <div class="col-sm-10">
      <h4 class="header font-weight-bold text-dark">Sub Category List</h4>
    </div>

    <div class="col-sm-2">

      <a href="subcategory-new.php">
        <button type="button" class="btn btn-outline-primary"><i class="fa fa-plus pr-2"></i>Add New</button>
      </a>
    </div>

    <!-- <a href="course-new.php" class="btn btn-outline-dark btn-block float-right"> 
        <i class="fa fa-plus pr-2"></i> Add New 
      </a> -->

    </div>

    <!-- Table -->
    <div class="card shadow mb-4">

     <div class="card-body">
      <div class="table-responsive">
        <table class="table"  width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Sub Category Name</th>
              <th>Course Category Name</th>
              <th></th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            <tr>

              <?php 

              $result = mysqli_query($conn, "SELECT * FROM subcategories sc, courses cs WHERE sc.course_id = cs.course_id ORDER BY sc.subcategory_id DESC");

              while($row = mysqli_fetch_assoc($result)): 

                ?>

                <td><?php echo $row['subcategory_name'] ?></td>

                <td value="<?php echo $row['course_id'] ?>">
                  <?php echo $row['course_name'] ?>

                </td>

                <td>

                  <a href="subcategory-delete.php?subcategory_id=<?php echo $row['subcategory_id'] ?>" onclick="return confirm('Are you sure you want to delete?');">
                    <button type="button" class="btn btn-outline-danger">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </a>
                </td>

                <td>
                  <a href="subcategory-edit.php?subcategory_id=<?php echo $row['subcategory_id'] ?>">
                    <button type="button" class="btn btn-outline-primary">
                      <i class="fas fa-edit"></i>
                    </button>  
                  </a>
                </td>




              </tr>

            <?php endwhile; ?>


          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

</div>
<!-- /.container-fluid -->
</body>
</html>

<?php include('../footer.php'); ?>