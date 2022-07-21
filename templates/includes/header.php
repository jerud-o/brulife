<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?= APP_ROOT . 'assets/css/output.css?' . uniqid() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>
    <style type="text/css">
        :root {
            --green: #018427;
            --red: #E00A22;
            --gray: #e0e0e0;
            --sans-uni: 'Lato', sans-serif;
        }
    </style>
    <style type="text/tailwindcss">
        /* Navbar Containers */
        .nav-menu,
        .dropdown-menu {
            @apply bg-white;
        }
        .dropdown {
            @apply relative cursor-pointer;
        }
        /* Transition and Fonts */
        .nav-menu a {
            @apply transition-all duration-100;
            font-family: var(--sans-uni);
        }
        /* Navbar Items */
        .nav-item {
            @apply w-full
                lg:w-auto;
        }
        .nav-item > a {
            @apply hidden px-4 pt-4 pb-2 border-b-[3px] border-b-transparent font-semibold text-center
                lg:inline-block;
        }
        .nav-menu.active .nav-item > a,
        .nav-menu.active .nav-item > a {
            @apply block;
        }
        .nav-item > a:hover,
        .dropdown:hover > a {
            @apply text-[color:var(--green)] border-b-[color:var(--green)];
        }
        /* Dropdown Items */
        .dropdown {
            @apply relative;
        }
        .dropdown > a::after {
            @apply inline-block ml-2 text-xs font-bold;
            content: "\f107";
            font-family: "Font Awesome 5 Free";
        }
        .dropdown-menu {
            @apply hidden border-[1px] border-slate-200
                lg:absolute lg:top-full lg:right-0 lg:w-[200%];
        }
        .dropdown.active > a {
            @apply text-[color:var(--green)] border-b-[color:var(--green)];
        }
        .dropdown.active .dropdown-menu {
            @apply block;
        }
        .dropdown:hover .dropdown-menu {
            @apply lg:block;
        }
        .dropdown-item > a {
            @apply block p-4
                hover:border-l-[4px] hover:border-l-[color:var(--green)] hover:text-[color:var(--green)] font-semibold;
        }
        .dropdown-item:not(:last-of-type) > a {
            @apply border-b-[1px] border-b-slate-200;
        }
        /* Navbar Item: Logo */
        .nav-logo {
            @apply mr-auto;
        }
        .nav-logo img {
            @apply h-[80px] m-2;
        }
        /* Navbar Item: Contact Us Button */
        .nav-button {
            @apply hidden px-6 py-4 bg-[color:var(--green)] rounded-full text-white font-bold
                sm:block lg:hidden;
        }
        .nav-item.button {
            @apply sm:hidden lg:inline-block;
        }
        /* Navbar Item: Menu Toggle */
        .nav-toggle a {
            @apply h-full flex items-center px-6 py-4 text-2xl font-semibold
                md:px-6
                lg:hidden;
        }
        footer nav > div {
            @apply p-2;
        }
        footer h6 {
            @apply px-4 py-2 text-sm font-bold uppercase;
        }
        footer nav ul a {
            @apply block px-4 py-2
                hover:bg-[color:var(--green)] hover:text-white hover:font-medium;
        }
        footer nav > div:last-of-type a {
            @apply block;
        }
        footer nav > div:last-of-type .button {
            @apply transition-colors duration-300 p-4 border-2 border-[color:var(--green)] text-[color:var(--green)] text-center font-bold tracking-widest uppercase
                hover:bg-[color:var(--green)] hover:text-white;
        }
        footer > div .links .link-item {
            @apply h-[50px] w-[50px];
        }
    </style>