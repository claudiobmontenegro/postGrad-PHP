<?php

namespace Classes;

class Pokemon
{
        protected $name;
        protected $code;
        protected $power;
        protected $type;

        public function __construct($name, $code, $power, $type)
        {
                $this->name = $name;
                $this->code = $code;
                $this->power = $power;
                $this->type = $type;
        }

        public function __toString(): string
        {
                return "{$this->name}, {$this->code}, {$this->power}," . json_encode($this->type);
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of code
         */
        public function getCode()
        {
                return $this->code;
        }

        /**
         * Set the value of code
         *
         * @return  self
         */
        public function setCode($code)
        {
                $this->code = $code;

                return $this;
        }

        /**
         * Get the value of power
         */
        public function getPower()
        {
                return $this->power;
        }

        /**
         * Set the value of power
         *
         * @return  self
         */
        public function setPower($power)
        {
                $this->power = $power;

                return $this;
        }

        /**
         * Get the value of type
         */
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }
}

?>