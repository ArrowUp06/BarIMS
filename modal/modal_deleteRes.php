<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="deleteuser" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Delete User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="db/delete.php" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="del_id" id="del_id">
                        Are you sure you want to delete this user?
                    </div>

                    <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="deluser">Delete</button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

