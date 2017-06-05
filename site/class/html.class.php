<?php 

	/**
	* 
	*/
	class html
	{
		public static function a(stdClass $data)
		{
			/*
			echo '<pre>';
			var_export($data);
			echo '</pre>';
			*/
			

			if($data->class) {
				$class = 'class="'.$data->class.'"';
			}

			if($data->href) {
				$href = $data->href;
			}else{
				$href = "#";
			}

			if($data->text) {
				$text = $data->text;
			}

			return '<a '.$class.' href="'.$href.'">'.$text.'</a>';
		}

		public static function nav(stdClass $nav, $items=NULL)
		{
			if ($nav->class) {
				$class = ' class="'.$nav->class.'"';
			}

			if ($nav->id) {
				$id = ' id="'.$nav->id.'"';
			}


			$data.='<nav'.$id.$class.'>';

			if (is_array($items)) {

				foreach ($items as $k => $item) {
					$data.=$item;
				}
			}

			$data.='</nav>';
			return $data;		
		}
	}
 ?>