<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{$title}</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Xplosive Studio (http://xplos1ve.info)">
      <meta name="generator" content="RokaEngine by Xplosive Studio">
      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="{$home}/style/backend/{$adminskin}/assets/images/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="{$home}/style/backend/{$adminskin}/assets/images/favicons/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="{$home}/style/backend/{$adminskin}/assets/images/favicons/favicon-16x16.png" sizes="16x16">
      <link rel="manifest" href="{$home}/style/backend/{$adminskin}/assets/images/favicons/manifest.json">
      <link rel="mask-icon" href="{$home}/style/backend/{$adminskin}/assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="theme-color" content="#ffffff">
      <!-- Stylesheet -->
      <link rel="stylesheet" href="{$home}/style/backend/{$adminskin}/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="{$home}/style/backend/{$adminskin}/assets/css/main.css">
      <script src="{$home}/style/backend/{$adminskin}/assets/js/jquery.min.js"></script>
   </head>
   <body class="page-dashboard">
      <nav class="navbar navbar-default navbar-inverse" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="{$home}{$panel}"> {$setup.namesite} {$setup.version}</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li><a href="{$home}{$panel}">{$lang.dashboard}</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$lang.content} <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="{$home}{$panel}/forums">{$lang.a_forums}</a></li>
                        <li><a href="{$home}{$panel}/pages">{$lang.pages}</a></li>
                        <li><a href="{$home}{$panel}/ads">{$lang.ads_manage}</a></li>
                        <li><a href="{$home}{$panel}/sitemap">{$lang.sitemap_manage}</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$lang.extends} <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="{$home}{$panel}/templates">{$lang.theme_editor}</a></li>
                        <li><a href="{$home}{$panel}/templates/email">{$lang.email_theme_editor}</a></li>
                        <li><a href="{$home}{$panel}/logs">{$lang.adm_logs}</a></li>
                        <li><a href="{$home}{$panel}/notice">{$lang.notifications}</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$lang.system} <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="{$home}{$panel}/setting">{$lang.settings}</a></li>
                        <li><a href="{$home}{$panel}/setting/smiles">{$lang.smiles}</a></li>
                        <li><a href="{$home}{$panel}/users">{$lang.users}</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="{$home}" target="_blank">{$lang.home}</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$user.login|esc} <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#helper_info">{$lang.help_info}</a></li>
                        <li><a href="{$home}/user/exit">{$lang.logout}</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container">
      <div>