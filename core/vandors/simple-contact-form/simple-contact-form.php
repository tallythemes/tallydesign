<?php
class sacf_simple_ajax_contact_form{
	public $settings;
	public $rand;
	
	function __construct($settings = array()){
		$default = array(
			'id' => 'contact',			
			'div_class' => '',
			'submit_text' => 'Send Now',
			'email' => 'hello@tallythemes.com',
			'subject' => 'Message From Contact form',
			'fields' => array(
				array(
					'title' => 'Name',
					'type' => 'text',
					'class' => '',
					'des' => '',
					'required' => 'on',
					'placeholder' => 'on',
					'width' => '2',
				),
				array(
					'title' => 'Email',
					'type' => 'text',
					'class' => '',
					'des' => '',
					'required' => 'off',
					'placeholder' => 'on',
					'width' => '2',
				),
				array(
					'title' => 'Phone',
					'type' => 'tel',
					'class' => '',
					'des' => '',
					'required' => 'off',
					'placeholder' => 'on',
					'width' => '2',
				),
				array(
					'title' => 'Subject',
					'type' => 'text',
					'class' => '',
					'des' => '',
					'required' => 'off',
					'placeholder' => 'on',
					'width' => '2',
				),
				array(
					'title' => 'Message',
					'type' => 'textarea',
					'class' => '',
					'des' => '',
					'required' => 'off',
					'placeholder' => 'on',
					'width' => '1',
				),
			),
		);
		$this->settings = array_merge($default, $settings);
		$this->rand = rand();
		
		add_action('wp_ajax_sacf_simple_ajax_contact_form', array($this, 'send'));
		add_action('wp_ajax_nopriv_sacf_simple_ajax_contact_form',  array($this, 'send'));
		add_action('wp_enqueue_scripts', array($this, 'script_register'));
		
		$this->form();
	}
	
	
	function ID(){
		$settings = $this->settings;
		
		return $settings['id'].'_'.$this->rand;
	}
	
	
	
	function script_register(){
		wp_localize_script( 'sacf', 'postsacf', array('ajax_url' => admin_url( 'admin-ajax.php' )));
	}
	
	
	
	function form(){
		$settings = $this->settings;
		if(is_array($settings)){
			if(is_array($settings['fields'])){
				echo '<form class="sacf_simple_ajax_contact_form" action="" method="post" name="'.$this->ID().'_form'.'" id="'.$this->ID().'_form'.'">';
					echo '<div class="cl_holder">';
						foreach($settings['fields'] as $key => $field){
							echo '<div class="cl cl_'.$field['width'].'">';
								if($field['placeholder'] == 'off'){ echo '<label for="'.$this->ID().$key.'">'.$field['title'].'</label>'; }
								$placeholder = '';
								$required = '';
								if($field['placeholder'] == 'on'){ $placeholder = ' placeholder="'.$field['title'].'" '; }
								if($field['required'] == 'on'){ $required = ' required '; }
								
								if($field['type'] == 'textarea'){
									echo '<textarea name="'.$this->ID().$key.'" class="'.$field['class'].' '.$required.'" id="'.$this->ID().$key.'" '.$placeholder.'></textarea>';
								}else{
								echo '<input type="'.$field['type'].'" name="'.$this->ID().$key.'" class="'.$field['class'].' '.$required.'" id="'.$this->ID().$key.'" value="" '.$placeholder.'>';
								}
							echo '</div>';
						}
					echo '</div>';
					echo '<input type="submit" name="'.$this->ID().'_submit'.'" id="'.$this->ID().'_submit'.'" value="'.$settings['submit_text'].'" class="submit">';
					echo '<p class="'.$this->ID().'_formOK" style="display:none;">Thank you for your attention. Your message has been sent.</p>';
					echo '<p class="'.$this->ID().'_formNOK" style="display:none;">There was an error when sending your message, please try again later.</p>';
					echo '<p class="'.$this->ID().'_sending" style="display:none;"><span>Sending...</span></p>';
				echo '</form>';
				
				?>
                <script type="text/javascript">
					jQuery(document).ready(function($) {
						jQuery("#<?php echo $this->ID(); ?>_form").validate({
							submitHandler: function(form) {
								
								
								$.ajax({
									url: ajaxurl,
									data: {
										'action':'sacf_simple_ajax_contact_form',
										'fruit' : fruit
									},
									success:function(data) {
										// This outputs the result of the ajax request
										console.log(data);
									},
									error: function(errorThrown){
										console.log(errorThrown);
									}
								});
								return false;
							}
							
						})
					});
				</script>
                <?php
			}
		}
	}
	
	
	
	function send(){
		
		die(); 
	}
	
}