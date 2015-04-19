<?php
if(!class_exists('tally_masonry_html')):

class tally_masonry_html{
	public $display;
	public $uid;
	public $column;
	public $column_width;
	public $margin;
	
	function __construct($data){
		$default = array(			
			'display' => true,
			'column' => 3,
			'margin' => 3,
			'disable_js' => false,
		);
		$data = array_merge($default, $data);
		
		$this->display = $data['display'];
		$this->uid = 'tally-masonry-uid-'.rand();
		$this->column = $data['column'];
		$this->margin = $data['margin'];
		$this->disable_js = $data['disable_js'];
	}
	
	
	function start(){
		$output = '';
		$width = 100+$this->margin;
		$column_width = ( (100 - ( $this->margin * $this->column ) ) / $this->column);
		$this->column_width = $column_width;
		$css_style = 'width: '.$width.'%; margin-left:-'.$this->margin.'%;';
		
		$output .= '<div id="'.$this->uid.'" style="'.$css_style.'" class="tally_masonry_html">';
		if($this->display == false){ return $output; }else{  echo $output; }
	}
	
	
		function in_loop_start($class = NULL){
			$css_style = 'width: '.$this->column_width.'%; margin-left:'.$this->margin.'%; margin-bottom:'.$this->margin.'%;';
	
			$output = '<div class="'.$this->uid.'-item '.$class.' masonry-wp-child-item"  style="'.$css_style.'">';
				$output .= '<div class="masonry-wp-child-item-inner">';
			if($this->display == false){ return $output; }else{  echo $output; }
		}
	
	
		function in_loop_end(){
			$output = '';
				$output .= '</div>';
			$output .= '</div>';
			if($this->display == false){ return $output; }else{  echo $output; }
		}
	
	
	function end(){
		$output = "</div>\n";		
		ob_start();
		if($this->disable_js == false):
		?>
			<script type="text/javascript">
                jQuery(document).ready(function($){
                    var $tally_masonry_container = $('#<?php echo $this->uid; ?>')
                    
                    $tally_masonry_container.imagesLoaded( function() {
                        $tally_masonry_container.masonry({
                            itemSelector: '.<?php echo $this->uid; ?>-item',
                        });
                    });
                });
            </script>
        <?php
		endif;
		$output .= ob_get_contents();
		ob_end_clean();
		
		if($this->display == false){ return $output; }else{  echo $output; }
	}
	
	
}

endif;