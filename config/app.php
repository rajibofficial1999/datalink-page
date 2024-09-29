<?php

use App\Http\Exceptions\ExceptionHandler;

try {
    require base_path('env.php');
    require base_path('config/route.php');
    require base_path('config/validator.php');
    require base_path('config/request.php');
    require base_path('app/Http/Api.php');

//    require base_path('routes/video_calling.php');
//    require base_path('routes/mega.php');
    require base_path('routes/skip.php');

} catch (ExceptionHandler $e) {
    http_response_code($e->getStatusCode());
    echo $e->getMessage();
} catch (Exception $e) {
    http_response_code(500);
    echo $e;
}
