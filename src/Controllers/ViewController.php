<?php

namespace Migue\Timetrack\Controllers;

class ViewController
{
    public static function view($view, $data = [])
    {
        self::viewHeader();
        //self::viewNavbar();
        //self::viewSidebar();
        require_once $view;
        //self::viewChat();
        self::viewFooter();

    }

    public static function viewHeader()
    {
        include_once 'Views/layout/header.php';
    }

    public static function viewFooter()
    {
        include_once 'Views/layout/footer.php';
    }

    public static function viewChat() {
        include_once 'Views/layout/chat/chat.php';
    }

    public static function viewSidebar() {
        include_once 'Views/layout/sidebar.php';
    }

    public static function viewNavbar() {
        include_once 'Views/layout/navbar.php';
    }

    public static function viewError($message)
    {
        self::viewHeader();
        echo '<p style="color: white;">' . $message. '</p>';
        self::viewFooter();
    }
}