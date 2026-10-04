<html>
  <body>
    
    <form action="phpfile.php" method="get">
      Field: <input type="text" name="response">
      <input type="submit">
    </form>
    
    <?php echo $_GET["response"]; ?>
    
  </body>
</html>
