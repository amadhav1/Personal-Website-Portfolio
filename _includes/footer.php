</div>
        <div clas="block">  
            <footer class="footer is-dark">
                <div class="content has-text-white">
                    <h2 class="is-2 has-text-centered has-text-white">U.S. Marine Corps veteran</h2>

                    <p class="has-text-centered">&copy; 2019 Aaron Madhavan

                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script>
            $(document).ready(function() {
            (function() {
              var burger = document.querySelector('.burger');
              var nav = document.querySelector('#'+burger.dataset.target);
             
              burger.addEventListener('click', function(){
                burger.classList.toggle('is-active');
                nav.classList.toggle('is-active');
              });
            })();
            });
            </script>
</body>
</html>