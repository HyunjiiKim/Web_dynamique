<?php
$current_page = '2';
include 'includes/header.php'; ?>

<div class="container">
    <div class="contact-form">
        <h3>Get in Touch</h3>
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>