<?php

namespace Payson;

class PaysonApiException extends \Exception {

    public function __construct($message) {
        parent::__construct($message);
    }

}

?>