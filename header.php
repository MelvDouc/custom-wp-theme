<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= get_bloginfo("name") ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <nav>
        </nav>

        <a href="<?= get_bloginfo("wpurl") ?>" id="main-title">
            <h1><?= get_bloginfo("name") ?></h1>
            <h2><?= get_bloginfo("description") ?></h2>
        </a>
    </header>