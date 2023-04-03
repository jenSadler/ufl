<div class="rainbow-box"></div>
<footer>
    <div class="container footer-container">
        <div>
            <h3>Navigation</h3>
        <?php wp_nav_menu( array(
            'theme_location'    => 'footer-1',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'footer-nav',
            
        ) ); ?>
        </div>
        <div>
            <h3>About Us</h3>
        <?php wp_nav_menu( array(
            'theme_location'    => 'footer-2',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'footer-nav',
            
        ) ); ?>
        </div>
        <div>
            <h3>Contact Us </h3>
            <p><strong>Phone</strong><br/> <a href="tel:15194510424">(519) 451-0424</a></p>
            <p><strong>Email</strong><br/><a href="mailto:ufl@execulink.com">ufl@execulink.com</a></p>
            <p><strong>Address</strong> <br/>
            <a href="https://ufl.test/getting-to-ufl/">557 Clarke Rd, London Ontario, N5V 2E1</a></p>
            <p><strong>Office Hours</strong><br/>
            Mon. & Wed.10:00 am - 1:00 pm <br/>
            Thu. 10:00 a.m.- 12:00 noon</p>
        </div>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script></body>

<?php wp_footer(); ?>
</body>
</html>