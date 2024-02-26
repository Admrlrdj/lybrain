<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Lybrain - <?= isset($tabTitle) ? $tabTitle : 'New Page Title'; ?></title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/assets/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/styles/style.css" />
    <?= $this->renderSection('stylesheet'); ?>
</head>

<body class="login-page">
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="col-md-6 col-lg-5">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>
    <!-- js -->
    <script src="<?= base_url() ?>/assets/vendors/scripts/core.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/scripts/script.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/scripts/process.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/scripts/layout-settings.js"></script>
    <?= $this->renderSection('scripts'); ?>
</body>

</html>