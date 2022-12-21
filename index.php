<?php
//Demarre la session.
session_start();

//autoload.php genere avec composer.
require_once __DIR__ . '/vendor/autoload.php';

// only report errors, warnings and compile-time parse errors and not notices.
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// displaying  specific view or catching errors.
try {
    $controllerFront = new \GRH56\Controllers\ControllerFront(); //creating object controllerFront
    $controllerUser = new \GRH56\Controllers\ControllerUser();

    if (isset($_GET['action'])) {
        $show = "";
        $message = "";
        if ($_GET['action'] == 'contact') {
            $controllerFront->contactForm();
        } elseif ($_GET['action'] == 'about') {
            $controllerFront->about();
        } elseif ($_GET['action'] == 'horeca') {
            $controllerFront->horeca();
        } elseif ($_GET['action'] == 'generalEnglish') {
            $controllerFront->generalEnglish();
        } elseif ($_GET['action'] == 'bussinesEnglish') {
            $controllerFront->bussinesEnglish();
        } elseif ($_GET['action'] == 'home') {
            $controllerFront->home();
        } elseif ($_GET['action'] == 'logout') {
            $controllerUser->logOut();
        } elseif ($_GET['action'] == 'student') {
            $controllerUser->logedIn();
        } elseif ($_GET['action'] == 'aboutcookies') {
            $controllerFront->aboutCookies();
        } elseif ($_GET['action'] == 'account') {
            $controllerUser->account();
        } elseif ($_GET['action'] == 'accountUpdate' && isset($_SESSION['name'])) {
            $controllerUser->accountUpdate();
        } elseif ($_GET['action'] == 'passwordUpdate' && isset($_SESSION['name'])) {
            $controllerUser->changePass();
        } elseif ($_GET['action'] == 'delete' && isset($_SESSION['name'])) {
            $controllerUser->deleteUser();
        } elseif ($_GET['action'] == 'send') {
            $controllerFront->sendMessage();
        } elseif ($_GET['action'] == 'sendQuestion') {
            $controllerFront->sendQuestionnaire();
        } elseif ($_GET['action'] == 'admin' && isset($_SESSION['name']) && $_SESSION['status'] == 1) {
            $controllerUser->admin();
        } elseif ($_GET['action'] == 'conditions') {
            $controllerFront->generalConditions();
        } elseif ($_GET['action'] == 'questionnaire') {
            $controllerFront->questionnaireForm();
        }
    } else {
        $controllerFront->home();
    }

    // ---TODO--- create log file to errors.
} catch (Exception $e) {
    require 'app/views/FRONT/error.php';
} catch (Error $e) {
    require 'app/views/FRONT/error.php';
}
