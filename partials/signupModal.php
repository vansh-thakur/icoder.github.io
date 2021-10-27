<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup to iCODER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/signup_handle.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">username</label>
                        <input type="text" class="form-control" name="username" id="exampleFormControlInput1"
                            placeholder="john" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">password</label>
                        <input type="password" class="form-control" name="pass" id="exampleFormControlInput1"
                            placeholder="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">confirm password</label>
                        <input type="password" class="form-control" name="cpass" id="exampleFormControlInput1"
                            placeholder="retype-password" required>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </div>
            </form>
        </div>
    </div>
</div>