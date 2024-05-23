<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>CoverStyle-Dashboard</title>

    </head>

<body>

 <!-- header-section include -->
 <?php require_once("./includes/headers.php") ?>

            <!-- Message Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="  col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5 class="mb-0">Add User</h5>
                                <a href="user.html">Show All</a>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center border-bottom py-1">
                               
                                <div class="form-container">
                                    <form action="./add-user-query.php" method="POST" enctype="multipart/form-data" class="row">
                    
                                        <div class="col-lg-6 mb-2">
                                            <label class="form-label" for="name">Username <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter here..." required>
                                        </div>
                    
                    
                                        <div class="col-lg-6 mb-2">
                                            <label class="form-label" for="email">Email <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter here..." required>
                                        </div>
                    
                    
                    
                                        <div class="col-lg-6 mb-2">
                                            <label class="form-label" for="password">Password <span class="text-danger">*</span>
                                            </label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter here..." required>
                                        </div>
                    
                    
                    
                                        
                    
                                        <div class="col-lg-6 mb-2">
                                            <label class="form-label" for="image">Image <span class="text-danger">*</span>
                                            </label>
                                            <input type="file" class="form-control" id="image" name="image" placeholder="Enter here..." required>
                                        </div>
                    
                                        
                    
                    
                                        <div class="offset-8 col-lg-4 mb-2">
                                            <label for=""></label>
                    
                                            <button class="btn btn-info text-white btn-lg mt-2 w-100"> <i class="fa fa-plus"></i> Add User</button>
                                        </div>
                    
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>


            
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php require_once("./includes/javascript-links.php") ?>
</body>

</html>