<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Sign in</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="name">Name: <sup>*</sup></label>
                        <input type="text" name="name" class="form-control form-control-lg" value="<?php echo $data['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="age">Age: <sup>*</sup></label>
                        <input type="text" name="age" class="form-control form-control-lg" value="<?php echo $data['age']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <sup>*</sup></label>
                        <input type="password" name="password" class="form-control form-control-lg" value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <label for="username">Username: <sup>*</sup></label>
                        <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $data['username']; ?>">
                        <span class="invalid-feedback"><?php echo $data['username']; ?></span>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Sign up" class="btn btn-success btn-block" id="submitForm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('postForm').addEventListener('submit', postForm);

        function postForm(e){
            e.preventDefault();

            var name = document.getElementById('name2').value;
            var params = "name="+name;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/users/register', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhr.send(params);
        }
    </script>

<?php require APPROOT . '/views/inc/footer.php'; ?>