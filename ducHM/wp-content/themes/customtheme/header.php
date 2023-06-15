<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <header class='site-header'>
        <h2><?php bloginfo('name'); ?></h2>
        <h4><?php bloginfo('description'); ?></h4>
    </header>
