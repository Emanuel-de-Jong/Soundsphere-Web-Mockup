<div id="register">
    <main class="container-md">
        <div class="main-box">
            <form class="login-form" action="login.php" method="post">
                <img class="mb-4" src="resources/logo.png">
                
                <h1 class="mb-3">Make an account</h1>

                <div class="form-floating">
                    <input type="text" class="form-control floating-input-top" id="username" name="username" placeholder="Username">
                    <label>Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control floating-input-middle" id="email" name="email" placeholder="Email address">
                    <label>Email address</label>
                </div>
                <div class="form-floating mb-5">
                    <input type="password" class="form-control floating-input-bottom" id="password" name="password" placeholder="Password">
                    <label>Password</label>
                </div>

                <button type="submit" class="btn btn-lg bg-blue bg-blue-h mb-5">Register</button>
            </form>
        </div>
    </main>
</div>