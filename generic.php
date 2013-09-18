<?php 
	class genericArray {
		
		public static function __construct(){
			try{
				return Request::current()->post();
			}
			catch(Exception $e){
				return $_POST;
			}
		}
		
		/* Para substituir o foreach */
		public static function foreachArray($post){
			if(!isset($post)){
				$post = self::__construct();
			}
			
			/* Serialize */
			$array['key'] 		= array_keys($post);
			$array['value'] 	= array_values($post);
			
			return $array;
		}
		
		/* Procura um valor de array e retorna sua Key ou Value */
		public static function searchArray($search, $array){
			return array_search($search, $array, true);
		}
		
		/* Para vizualizar arrays */
		public static function dumpArray($post)
		{
			if(!isset($post)){
				$post = self::__construct();
			}
			$post['count'] = count($post);
			return var_dump($post);
		}
	}
