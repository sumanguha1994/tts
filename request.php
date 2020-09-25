<?php
    include_once 'IRequest.php';
    class Request implements IRequest {
        function __construct()
        {
            $this->bootself;
        }

        private function bootself()
        {
            foreach($_SERVER as $key => $value)
            {
                $this->{$this->toCamalCase($key)} = $value;
            }
        }

        private function toCamalCase($strkey)
        {
            $reskey = strtolower($strkey);
            preg_match_all("/_[a-z]/", $reskey, $matches);
            foreach($matches[0] as $mch)
            {
                $strReplace = str_replace('_', '', strtoupper($mch));
                $res = str_replace($mch, $strReplace, $reskey);
            }
            return $reskey;
        }

        public function getBody()
        {
            if($this->requestMethod === 'GET'){
                return;
            }
            if($this->requestMethod === 'POST'){
                $body = array();

                foreach($_POST as $key => $value)
                {
                    $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }

                return $body;
            }
        }
    }
?>