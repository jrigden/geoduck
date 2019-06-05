</div>




<?php wp_footer(); ?>
<script>
            function hideMenu() {
                var element = document.getElementById("site-menu");
                element.classList.toggle("hidden");

            }
            window.onload = function () {
                var div = document.getElementById("hamburger")
                div.onclick = function() { hideMenu() }
            }

        </script>

</body>

</html>