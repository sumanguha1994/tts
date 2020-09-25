<?php
    class RouterClass {
        private $request;
        private $supportHttpMethod = array(
            "GET",
            "POST"
        );

        function ___construct(IRequest $request)
        {
            $this->request = $request;
        }

        function __call($name, $args)
        {
            list($route, $method) = $args;
            
        }
    }
?>