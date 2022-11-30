<?php
declare(strict_types=1);
namespace App\Controller\Error;

use Symfony\Component\HttpFoundation\Response;

    class ErrorController {

        public function notFound() {

            dd('Not found');
        }
    }