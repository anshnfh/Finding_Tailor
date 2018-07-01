<?php
use yii\helpers\Html;


/* @var $this \yii\web\View */
/* @var $content string */

// use frontend\assets\TemplateAsset;

// TemplateAsset::register($this);
?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    FINDING<b>TAILOR</b>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active ">
                        <a class="nav-link" href="http://localhost/advancedraw/">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="http://localhost/advancedraw/penjahit-profil">
                            <i class="material-icons">person</i>
                            <p>Profil Penjahit</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="http://localhost/advancedraw/penjahit-jahitan">
                            <i class="material-icons">content_paste</i>
                            <p>Upload Jahitan</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="http://localhost/advancedraw/notifikasi">
                            <i class="material-icons">notifications_none</i>
                            <p>Notifikasi</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="http://localhost/advancedraw/orderan-penjahit">
                            <i class="material-icons">notifications_none</i>
                            <p>Orderan Customer</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>