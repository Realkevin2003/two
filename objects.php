<?php

  $object = new User;
  print_r($object); echo "<br>";

  $object->name = "Joe";
  $object->password = "smith20";
  print_r($object); echo "<br>";

  $object->save_user();
  
  $state = new User;
  $state->password = "smith"; echo "<br>";
  echo $state->get_password();
  echo "<br>";

  Translate::lookup();

  class User
  {
      public $name, $password;

      function save_user()
      {
          echo "Save User data goes here";
      }

      function get_password()
      {
          return $this->password;
      }
  
    }

    class Translate
    {
        const ENGLISH = 0;
        const SPANISH = 1;
        const FRENCH = 2;
        const GERMAN = 4;

        static function lookup()
        {
            echo self::SPANISH;
        }
    }
?>              