<html>
  <body>
    
    <form action="phpfile.php" method="post">
      Field: <input type="text" name="response">
      <input type="submit">
    </form>

    <?php echo $_POST["response"]; ?>
    
  </body>
</html>
