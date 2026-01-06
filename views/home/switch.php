<?php

session_start();

switch ($_SESSION['role_login']) {
                case 'admin':
                    header('Location: ../Dashboard/admin.php');
                    break;
                case 'owner':
                    header('Location: ../Dashboard/owner.php');                 
                    break;
                case 'tester':
                    header('Location: ../Dashboard/hacker/index.php');
                    break;
                
                default:
                    header('Location: ../auth/login.php');
                    break;

                }