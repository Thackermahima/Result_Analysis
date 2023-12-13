<!-- template.php -->

<html>
<head>
    <!-- Add your CSS links or styles here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Include your header content here -->
        <?php echo view('header'); ?>
    </header>

    <main>
        <!-- Content section -->
        <?php echo $content; ?>
    </main>

    <footer>
    <?php echo view('footer'); ?>

</footer>
</body>
</html>
