<div id="login">
    <main class="container">
        <div class="main-box">
            <form class="form-login text-center" action="login.php" method="post">
                <img class="mb-4" src="resources/logo.png" width="130" />
                <h1 class="h2 mb-3 fw-normal">Make an account</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" name="email" placeholder="Email address" />
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                    <label for="password">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember-me" /> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Register</button>
            </form>
        </div>
    </main>
</div>