<form action="register_form.php">
    <div class="container">
        <h1 class="text-primary text-center my-3">Register</h1>
        <hr style="text-primary">

        <div class="row">
            <div class="col-md-6 offset-md-3">
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="mb-3">
                    <label for="user_type" class="form-label">Register as:</label>
                    <select class="form-select" id="user_type" name="user_type" required>
                        <option value="" disabled selected>Select your option</option>
                        <option value="graduate">Graduate</option>
                        <option value="employer">Employer</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="company_name" class="form-label">Company Name (if Employer)</label>
                    <input type="text" class="form-control" id="company_name" name="company_name">
                </div>

                <div class="mb-3">
                    <label for="portfolio" class="form-label">Portfolio URL (if Graduate)</label>
                    <input type="url" class="form-control" id="portfolio" name="portfolio">
                </div>

                <div class="mb-3">
                    <label for="cv" class="form-label">Upload CV (if Graduate)</label>
                    <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </div>
            </div>
        </div>
</form>