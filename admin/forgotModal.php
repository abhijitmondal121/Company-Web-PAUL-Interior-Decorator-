<!-- Modal -->
<div class="modal fade" id="forgotmodal" tabindex="-1" aria-labelledby="forgotmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotmodalLabel">Change password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="handleforgot.php" method="POST">
      <div class="modal-body">
       
      <div class="mb-3">
            <label for="loginEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">CPassword</label>
            <input type="password" class="form-control" id="cpass" name="cpass">
        </div>
        <button type="submit" class="btn btn-primary">change</button>
        

      </div>

      
    </div>
    </form>
  </div>
</div>