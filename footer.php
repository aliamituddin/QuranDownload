<footer class="site-footer" style="clear: both; position:relative; display: block;">
    <p class="copyright">تمامی حقوق برای قران دانلود محفوظ میباشد</p>
</footer>
	</div><!-- #content -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
      function LiveSearch() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("QuranTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>
</body>
</html>
