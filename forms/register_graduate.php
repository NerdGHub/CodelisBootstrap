<form action="register_form.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <h1 class="text-primary text-center my-3">Graduate Registration</h1>
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
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com"
                        required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <!-- Portfolio URL -->
                <div class="mb-3">
                    <label for="portfolio" class="form-label">Portfolio URL</label>
                    <input type="url" class="form-control" id="portfolio" name="portfolio"
                        placeholder="https://yourportfolio.com">
                </div>

                <!-- CV Upload -->
                <div class="mb-3">
                    <label for="cv" class="form-label">Upload CV</label>
                    <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                </div>

                <!-- Submit -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Register as Graduate</button>
                </div>

            </div>
        </div>
    </div>
</form>