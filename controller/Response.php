<?php
    class Response {
        private $status; // 1 succès; -1 echec
        private $message;
        private $showMessage = false;
        public function  __construct($v_status , $v_message) {
            $this->status = $v_status;
            $this->message = $v_message;
            if($v_status !=0)
             $this->showMessage = true;
        }

        /**
         * Get the value of status
         */ 
        public function getStatus()
        {
                return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */ 
        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }

        /**
         * Get the value of message
         */ 
        public function getMessage()
        {
                return $this->message;
        }

        /**
         * Set the value of message
         *
         * @return  self
         */ 
        public function setMessage($message)
        {
                $this->message = $message;

                return $this;
        }

        /**
         * Get the value of showMessage
         */ 
        public function getShowMessage()
        {
                return $this->showMessage;
        }

        /**
         * Set the value of showMessage
         *
         * @return  self
         */ 
        public function setShowMessage($showMessage)
        {
                $this->showMessage = $showMessage;

                return $this;
        }
    }
?>