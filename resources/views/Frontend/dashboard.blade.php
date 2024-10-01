
<nav>
    <div class="navbar">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about us.html">About Us</a></li>
            <li><a href="contact us.html">Contact Us</a></li>
        </ul>
    </nav>
<div>
    <?php foreach ($users as $user): ?>
        Hello, <?php echo $user->username; ?> <br />
    <?php endforeach; ?>
</div>