<?php
include_once 'header.php';
?> 

<section class="contact-section" style="background: linear-gradient(to bottom right, rgba(91, 179, 214, 0.4), rgba(0, 0, 0, 0.7)); padding: 40px; border-radius: 10px; max-width: 900px; margin: 40px auto; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); font-family: 'Helvetica Neue', Arial, sans-serif;">
    <div class="contact-content" style="color: white; text-align: center;">
        <h1 style="font-size: 36px; margin-bottom: 20px; color: #f9f9f9; font-weight: bold;">-</h1>
        <h1 style="font-size: 36px; margin-bottom: 20px; color: #f9f9f9; font-weight: bold;">Contact Us</h1>
        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px; color: #e0e0e0;">
            We'd love to hear from you! Whether you have a question about our products, need support, or just want to share your feedback, feel free to reach out. Our team is here to help you with whatever you need.
        </p>
        
        <form action="contact_process.php" method="post" style="max-width: 600px; margin: 0 auto;">
            <div style="margin-bottom: 20px;">
                <label for="name" style="color: #f0f0f0; font-size: 18px;">Your Name:</label><br>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="email" style="color: #f0f0f0; font-size: 18px;">Your Email:</label><br>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="message" style="color: #f0f0f0; font-size: 18px;">Your Message:</label><br>
                <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;"></textarea>
            </div>
            <div style="text-align:center; margin-top: 20px;">
                <button type="submit" style="padding: 12px 24px; background-color: white; color: #444; text-decoration: none; border-radius: 5px; font-size: 18px; font-weight: bold;">Send Message</button>
            </div>
        </form>

        <p style="font-size: 18px; color: #e0e0e0; margin-top: 30px;">
            Alternatively, you can reach us via email at <b>support@buysmart.com</b> or call us at <b>+1 234 567 890</b>.
        </p>
    </div>
</section>

<?php
include_once 'footer.php';
?>
