<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to fakeAPIs</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

    <style>
        li.alert.alert-info,
        li.alert.alert-primary,
        li.alert.alert-warning,
        li.alert.alert-danger {
            list-style: none;
            padding: 4px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="javascript:void(0)">Your fakeAPIs</a>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="jumbotron" style="padding: 1em 1em;">
            <h1>Welcome To API Server</h1>
            <a href="https://onlinewebtutorblog.com" class="btn btn-primary float-right" target="_blank">Online Web Tutor Blog</a>
            <p class="lead">Successfully, you have created your own API server in CodeIgniter 4</p>
        </div>
        <div class="container">
            <div class="row">
                <?php if ($routes > 0) { ?>
                    <div class="col-sm-3">
                        <ul>
                            <?php foreach ($routes as $route) { ?>
                                <li class="alert alert-info">GET: <a href="<?php echo base_url('/' . $route); ?>">/<?php echo $route; ?></a></li>
                                <li class="alert alert-info">GET: <a href="<?php echo base_url('/' . $route . '/1'); ?>">/<?php echo $route; ?>/1</a></li>
                                <li class="alert alert-info">GET: <a href="<?php echo base_url('/' . $route . '?id=1'); ?>">/<?php echo $route; ?>?id=1</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <ul>
                            <?php foreach ($routes as $route) { ?>
                                <li class="alert alert-primary">POST: <a href="<?php echo base_url('/' . $route); ?>">/<?php echo $route; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <ul>
                            <?php foreach ($routes as $route) { ?>
                                <li class="alert alert-warning">PUT/PATCH: <a href="<?php echo base_url('/' . $route . '/1'); ?>">/<?php echo $route; ?>/1</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <ul>
                            <?php foreach ($routes as $route) { ?>
                                <li class="alert alert-danger">DELETE: <a href="<?php echo base_url('/' . $route . '/1'); ?>">/<?php echo $route; ?>/1</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">&copy <?php echo date('Y'); ?>. Designed & Developed by YourSite</span>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
</body>

</html>