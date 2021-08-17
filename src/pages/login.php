<div id="login">
    <main class="container-lg">
        <div id="main-box">
            <img src="resources/logo.png" alt="Logo">

            <h1>Please login</h1>


            <section id="form-section">
                <form class="login-form" action="login.php" method="post">
                    <div class="form-item form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="x" required>
                        <label>Email address</label>
                    </div>

                    <div class="form-item form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="x" required>
                        <label>Password</label>
                    </div>

                    <div class="form-item form-check">
                        <label for="remember-me" class="form-check-label" title="Stay logged in on this device">
                            <input type="checkbox" class="form-check-input" id="remember-me" name="remember-me">
                            Remember me
                        </label>
                    </div>

                    <button type="submit" class="btn btn-lg bg-blue bg-blue-h">Login</button>
                </form>
            </section>
        </div>
    </main>
</div>