<div id="login">
    <main class="container-md">
        <div class="main-box">
            <form class="login-form" action="login.php" method="post">
                <img class="mb-4" src="resources/logo.png">
                
                <h1 class="mb-3">Please login</h1>

                <div class="form-floating">
                    <input type="email" class="form-control floating-input-top" id="email" name="email" placeholder="Email address">
                    <label>Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control floating-input-bottom" id="password" name="password" placeholder="Password">
                    <label>Password</label>
                </div>

                <div class="mb-3">
                    <label>
                        <input type="checkbox" class="form-no-invalid-message" id="remember-me" name="remember-me"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-lg bg-blue bg-blue-h">Login</button>
            </form>
        </div>
    </main>
</div>