<?php require_once 'header.php' ?>
    <div class="container d-flex align-items-center justify-content-center mt-5 width inner-background">
            <div class="container">
                <form class="p-2" action="process.php" method="POST" >
                    <div class="container text-center">
                        <img src="logo.png" alt="logo" class="logo">
                    </div>
                    <div class="container text-center h6 text-white">
                        Information Management Topic 9
                    </div>
                    <div class="form-group text-center padding">
                        <?php 
                            if(isset($_SESSION['message'])){
                                echo $_SESSION['message'];
                                session_destroy();
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address"id="exampleInputPassword1" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact_number" id="exampleInputPassword1" placeholder="Contact number">
                    </div>
                
                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn btn-success btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once 'footer.php' ?>
