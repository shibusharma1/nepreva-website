<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title><?php echo isset($page_title) ? $page_title : 'Nepreva | Global Finance &amp; Accounting Delivery Partner'; ?></title>
    <meta name="description" content="<?php echo isset($page_desc) ? htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8') : 'Chartered Accountant-led accounting, audit support and finance delivery for international firms and businesses. Dedicated teams, partner governance, delivered from Nepal.'; ?>">
    @include('themes.default.common.seo')
    <link rel="icon" type="image/svg+xml" href="{{ asset('themes-assets/img/favicon.svg') }}">
    <link rel="icon" type="image/webp" href="{{ asset('themes-assets/img/favicon.webp') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('themes-assets/img/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('themes-assets/css/style.css') }}">
</head>
<body>
    <a class="skip" href="#main">Skip to content</a>
    <div class="scrim" id="scrim"></div>
    @include('themes.default.common.svg-icons')
    @include('themes.default.common.navbar')
    
