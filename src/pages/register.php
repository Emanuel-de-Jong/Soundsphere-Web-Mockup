<div id="register">
    <main class="container-lg">
        <div id="main-box">
            <img src="static/resources/logo.png" alt="Logo">

            <h1>Make an account</h1>


            <section id="form-section">
                <form class="login-form" action="login.php" method="post">
                    <div class="form-item form-floating">
                        <input type="text" class="form-control" id="username" name="username" placeholder="x" required>
                        <label>Username</label>
                    </div>

                    <div class="form-item form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="x" required>
                        <label>Email address</label>
                    </div>

                    <div class="form-item form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="x" minlength="6" maxlength="30" required>
                        <label>Password</label>
                    </div>

                    <div class="form-item form-floating">
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="x" required>
                        <label>Confirm password</label>
                    </div>

                    <div class="form-invalid-message"></div>

                    <button type="submit" class="btn btn-lg bg-blue bg-blue-h">Register</button>
                </form>
            </section>
        </div>
    </main>
</div>
