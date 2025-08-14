<form action="submit_ticket.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <h1 class="text-primary text-center my-3">Create a Support Ticket</h1>
        <hr class="text-primary">

        <div class="row">
            <div class="col-md-6 offset-md-3">

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com"
                        required>
                </div>

                <!-- Subject -->
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject"
                        placeholder="Brief summary of your issue" required>
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="" disabled selected>Select a category</option>
                        <option value="technical">Technical Issue</option>
                        <option value="billing">Billing Query</option>
                        <option value="general">General Inquiry</option>
                    </select>
                </div>

                <!-- Priority -->
                <div class="mb-3">
                    <label for="priority" class="form-label">Priority</label>
                    <select class="form-select" id="priority" name="priority" required>
                        <option value="" disabled selected>Select priority</option>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>

                <!-- Message -->
                <div class="mb-3">
                    <label for="message" class="form-label">Describe Your Issue</label>
                    <textarea class="form-control" id="message" name="message" rows="5"
                        placeholder="Provide as much detail as possible" required></textarea>
                </div>

                <!-- Attachment -->
                <div class="mb-3">
                    <label for="attachment" class="form-label">Attach a File (Optional)</label>
                    <input type="file" class="form-control" id="attachment" name="attachment"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                </div>

                <!-- Submit -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Submit Ticket</button>
                </div>

            </div>
        </div>
    </div>
</form>