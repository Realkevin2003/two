<?php
    $user_info = new User;
    print_r($user_info);

    class User
    {
        public $name = "Smith";
        protected $age = "19";
        private $sex = "M";
        public $occupation = "Developer";

        function print_info()
        {
            echo $name, $occupation;
        }
    }

?>