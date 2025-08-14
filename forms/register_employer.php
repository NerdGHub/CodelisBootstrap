<form action="register_form.php" method="POST">
    <div class="container">
        <h1 class="text-primary text-center my-3">Employer Registration</h1>
        <hr class="text-primary">

        <div class="row">
            <div class="col-md-6 offset-md-3">

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <!-- Company Name -->
                <div class="mb-3">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Your Company Ltd." required>
                </div>

                <!-- Company Website -->
                <div class="mb-3">
                    <label for="company_website" class="form-label">Company Website</label>
                    <input type="url" class="form-control" id="company_website" name="company_website" placeholder="https://yourcompany.com">
                </div>

                <!-- Submit -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Register as Employer</button>
                </div>

            </div>
        </div>
    </div>
</form>
