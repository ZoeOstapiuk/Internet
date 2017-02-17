<html>
    <head>
        <title>Photo</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
    <div class="form-card col-md-6 col-md-offset-3">
        <p>Nice photo! <?php $source = $_POST["photo"]?></p>
        <?php echo $source?>
        <img src="$source" alt="Your photo"/>
        <button class="btn btn-primary" onclick="window.history.back()">Go back to cosmos</button>
    </div>
    </body>
</html>