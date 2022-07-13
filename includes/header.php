<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        .nav-menu {
            @apply flex flex-wrap items-center justify-between
                md:justify-center
                lg:items-end lg:flex-nowrap;
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
        .nav-item > a {
            @apply hidden px-4 pt-4 pb-2 border-b-[3px] border-b-transparent font-semibold
                lg:inline-block;
        }
        .nav-menu.active .nav-item > a {
            display: block!important;
        }
        .nav-item > a:hover,
        .dropdown:hover > a {
            @apply text-[color:var(--green)] border-b-[color:var(--green)];
        }
        /* Dropdown Items */
        .dropdown > a::after {
            @apply inline-block ml-2 text-xs font-bold;
            content: "\f107";
            font-family: "Font Awesome 5 Free";
        }
        .dropdown-menu {
            @apply hidden border-[1px] border-slate-200;
        }
        .dropdown.active .dropdown-menu {
            @apply block;
        }
        .dropdown-item > a {
            @apply block p-4 border-[color:var(--green)];
        }
        /* Navbar Item: Logo */
        .nav-logo {
            @apply md:flex-1;
        }
        .nav-logo > a {
            @apply block p-2;
        }
        .nav-logo img {
            @apply h-[50px]
                md:h-[75px]
                lg:h-[100px];
        }
        /* Navbar Item */
        .nav-item {
            @apply order-[3] w-full text-center
                lg:w-auto;
        }
        /* Navbar Item: Contact Us Button */
        .nav-button {
            @apply order-[3] w-full text-center
                md:order-[2] md:w-auto
                lg:order-[3];
        }
        .nav-button > a {
            @apply hidden px-4 pt-4 pb-2 border-b-[3px] border-b-transparent font-semibold
                hover:text-[color:var(--green)] hover:border-b-[color:var(--green)]
                md:inline-block md:px-6 md:p-4 md:border-0 md:bg-[color:var(--green)] md:rounded-full md:text-white md:uppercase md:font-bold
                hover:md:text-white hover:md:border-b-transparent
                lg:px-4 lg:pt-4 lg:pb-2 lg:bg-transparent lg:border-b-[3px] lg:border-b-transparent lg:rounded-none lg:text-black lg:normal-case lg:font-semibold
                lg:hover:text-[color:var(--green)] lg:hover:border-b-[color:var(--green)];
        }
        .nav-menu.active .nav-button > a {
            @apply block md:inline-block;
        }
        /* Navbar Item: Menu Toggle */
        .nav-toggle {
            @apply order-[2];
        }
        .nav-toggle a {
            @apply block px-4 py-6 font-semibold
                md:px-6
                lg:hidden;
        }
    </style>