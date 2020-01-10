<?php

class Lang {

   private static $instance, $translations = [], $translationFile;

      private function __construct()
   {
       if (User::auth()) {
    $lang = User::$user['lang'];
} else {
    $lang = Cms::setup('lang');
}

      $this->translationFile = HOME . '/app/languages/' . $lang. '.ini';
      
      if(is_dir(dirname($this->translationFile)))
      {
         if(file_exists($this->translationFile))
         {
            self::$translations = parse_ini_file($this->translationFile);
         }
         else
         {
            if(file_exists($default = HOME . '/app/languages/'. $this->getDefaultLanguage() . '.ini'))
            {
               copy($default, $this->translationFile);
            }
         }  
      }
      else
      {
         printf('Directory <strong>%s</strong> not exists, check path setting', dirname($this->translationFile)); 
         exit;
      }  
   }
   
   public static function instance()
   {
    if  (!isset(self::$instance))     
     {
         self::$instance = new self();
      }
      
      return self::$instance;
   }

   public function getDefaultLanguage()
   {
      $languages = Cms::setup('lang');
      
      return $languages;
   }
   
  
 
   public function getTranslations($strings = [])
   {
      if(empty($strings))
      {
         return self::$translations;
      }
      
      $translations = [];
      
      foreach($strings as $string)
      {
         $translations[$string] = isset(self::$translations[$string]) ? self::$translations[$string] : $this->translate($string);            
      }
      
      return $translations;
      
   }
   
   /**
   * Get json
   * 
   * @return json
   */ 
   public function getJson($strings = [], $options = JSON_UNESCAPED_UNICODE)
   {
      return json_encode($this->getTranslations($strings), $options);   
   }
   
   /**
   * Translate string
   * 
   * @param string $string
   * @param array $args
   */
   public function translate($string, $args = null)
   {      
      if(array_key_exists($string, self::$translations))
      {
         return is_array($args) ? vsprintf(self::$translations[$string], $args) : self::$translations[$string];
      }
      
      file_put_contents(self::$translationFile, PHP_EOL . "{$string} = \"{$string}\"", FILE_APPEND | LOCK_EX);      
      
      return is_array($args) ? vsprintf($string, $args) : self::$translations[$string] = $string;    
   }
   
}
