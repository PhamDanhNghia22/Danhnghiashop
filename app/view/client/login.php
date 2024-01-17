<section >
    <div class="login col-5 my-3" style="margin:0 auto;">
        <h2 class="title text-center">Đăng nhập</h2>
        <form action="<?php echo BASE_URL?>khach_hang/signin" method="POST">
        <div class="mb-3">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="text" name="password" class="form-control">
        </div>
        <input type="submit" class="btn btn-warning" style="background-color:#ffbf00;box-shadow: none;width:100px" value="Đăng nhập">
        </form>
    </div>

</section>
