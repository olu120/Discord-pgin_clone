
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js
"></script>

<script src="qrcode.min.js"></script>
<script src="qr_code_generator.js"></script>


<script>
  // Add an event listener to the generate token button
  document.getElementById("generateTokenButton").addEventListener("click", function() {
    // Make an AJAX request to the server to generate the token
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "generate_token.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Display the generated token
        document.getElementById("tokenDisplay").innerHTML = "Generated Token: " + xhr.responseText;
      }
    };
    xhr.send();
  });
</script>
</body>
</html>