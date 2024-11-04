<?php
include_once 'header.php';
?> 

<section class="services-section" style="background: linear-gradient(to bottom right, rgba(91, 179, 214, 0.4), rgba(0, 0, 0, 0.7)); padding: 40px; border-radius: 10px; max-width: 1000px; margin: 40px auto; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); font-family: 'Helvetica Neue', Arial, sans-serif;">
    <div class="services-content" style="color: white; text-align: center;">
        <h1 style="font-size: 36px; margin-bottom: 20px; color: #f9f9f9; font-weight: bold;">-</h1>
        <h1 style="font-size: 36px; margin-bottom: 20px; color: #f9f9f9; font-weight: bold;"><b>Our Featured Products & Services</b></h1>
        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px; color: #e0e0e0;">
            At BuySmart, we bring you the best in fashion and technology. Our carefully curated collection of high-quality products ensures that you shop with confidence, knowing that you're getting the best deals on the market. Here’s a quick overview of our featured categories.
        </p>

        <div class="product-grid" style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px;">

            <!-- Product 1: High-Quality Watches -->
            <div class="product-card" style="background-color: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 10px; width: 45%; max-width: 400px;">
                <img src="p1.png" alt="High-Quality Watches" style="width: 100%; border-radius: 10px; height: auto; margin-bottom: 20px;">
                <h2 style="font-size: 24px; color: #f9f9f9; font-weight: bold;">High-Quality Watches</h2>
                <p style="font-size: 16px; line-height: 1.6; color: #e0e0e0;">
                    Time never looked this good! Explore our collection of watches that blend style and functionality. Whether you're looking for a classic design or a modern, tech-forward timepiece, we’ve got it all.
                </p>
            </div>

            <!-- Product 2: Trendy Clothes -->
            <div class="product-card" style="background-color: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 10px; width: 45%; max-width: 400px;">
                <img src="p2.png" alt="Trendy Clothes" style="width: 100%; border-radius: 10px; height: auto; margin-bottom: 20px;">
                <h2 style="font-size: 24px; color: #f9f9f9; font-weight: bold;">Trendy Clothes</h2>
                <p style="font-size: 16px; line-height: 1.6; color: #e0e0e0;">
                    Step up your style game with our trendy clothing line. From casual wear to formal attire, our collection is designed to keep you looking sharp and feeling comfortable, no matter the occasion.
                </p>
            </div>

            <!-- Product 3: Stylish Headsets -->
            <div class="product-card" style="background-color: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 10px; width: 45%; max-width: 400px;">
                <img src="p3.png" alt="Stylish Headsets" style="width: 100%; border-radius: 10px; height: auto; margin-bottom: 20px;">
                <h2 style="font-size: 24px; color: #f9f9f9; font-weight: bold;">Stylish Headsets</h2>
                <p style="font-size: 16px; line-height: 1.6; color: #e0e0e0;">
                    Get lost in sound with our range of high-quality headsets. Whether you're into music, gaming, or taking calls on the go, our stylish headsets combine sleek design with superior audio performance.
                </p>
            </div>

            <!-- Product 4: Sleek Phone Back Covers -->
            <div class="product-card" style="background-color: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 10px; width: 45%; max-width: 400px;">
                <img src="p4.png" alt="Sleek Phone Back Covers" style="width: 100%; border-radius: 10px; height: auto; margin-bottom: 20px;">
                <h2 style="font-size: 24px; color: #f9f9f9; font-weight: bold;">Sleek Phone Back Covers</h2>
                <p style="font-size: 16px; line-height: 1.6; color: #e0e0e0;">
                    Protect your phone in style! Our collection of sleek and durable phone back covers ensures your device is not only safe from scratches and drops but also looks great.
                </p>
            </div>

        </div>

        <div style="text-align:center; margin-top:40px;">
            <a href="featured.php" class="btn" style="padding: 12px 24px; background-color: white; color: black; text-decoration: none; border-radius: 5px; font-size: 18px; font-weight: bold;">Shop Now</a>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
