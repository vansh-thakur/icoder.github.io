<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login iCODER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/login-handler.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">username</label>
                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="johnn" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">password</label>
                        <input type="password" class="form-control" name="pass" id="pass"
                            placeholder="password" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
</div>