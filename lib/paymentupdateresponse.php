<?php

namespace Payson;

class PaymentUpdateResponse {

    protected $responseEnvelope;

    public function __construct($responseData) {
        $this->responseEnvelope = new ResponseEnvelope($responseData);
    }

    public function getResponseEnvelope() {
        return $this->responseEnvelope;
    }

    public function __toString() {
        return $this->responseEnvelope->__toString();
    }

}

?>
