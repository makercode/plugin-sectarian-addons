<?php
class Elementor_Banner_Parallax extends \Elementor\Widget_Base {

	public function get_style_depends() {
		return [ 'widget-banner-styles' ];
	}

	public function get_script_depends() {
		return [ 'widget-banner-scripts' ];
	}

	public function get_name() {
		return 'banner_parallax';
	}

	public function get_title() {
		return esc_html__( 'banner parallax', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
            return [ 'banner', 'parallax', 'cute' ];
	}

	protected function register_controls() {


		/*////////////////////////////////////////////////////*/
		/*////////////////////////////////////////////////////*/
		/*////////////////////////////////////////////////////*/

		/*---------------------Content------------------------*/

		/*////////////////////////////////////////////////////*/
		/*////////////////////////////////////////////////////*/
		/*////////////////////////////////////////////////////*/

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Titulo Superior', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'title_sector_1',
				[
					'label' => esc_html__( 'Titulo Superior', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Encuentra', 'elementor-addon' ),
				]
			);
			
		$this->end_controls_section();


		$this->start_controls_section(
			'section_title2',
			[
				'label' => esc_html__( 'Titulo Central', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'title_sector_2',
				[
					'label' => esc_html__( 'Titulo Central', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Soluciones digitales', 'elementor-addon' ),
				]
			);
		$this->end_controls_section();


		$this->start_controls_section(
			'section_title3',
			[
				'label' => esc_html__( 'Titulo Base', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'title_sector_3',
				[
					'label' => esc_html__( 'Titulo Base', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Para tu negocio', 'elementor-addon' ),
				]
			);
		$this->end_controls_section();


		$this->start_controls_section(
			'section_image',
			[
				'label' => esc_html__( 'Imagen Base', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'image',
				[
					'label' => esc_html__( 'Choose Image', 'image' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
		$this->end_controls_section();



		$this->start_controls_section(
			'section_icons',
			[
				'label' => esc_html__( 'Imagen iconos', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			$this->add_control(
				'icon1',
				[
					'label' => esc_html__( 'Imagen icono 1', 'image' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'icontext1',
				[
					'label' => esc_html__( 'Titulo icono 1', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '', 'elementor-addon' ),
				]
			);
			$this->add_control(
				'iconlink1',
				[
					'label' => esc_html__( 'Link', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);

			$this->add_control(
				'icon2',
				[
					'label' => esc_html__( 'Imagen icono 2', 'image' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'icontext2',
				[
					'label' => esc_html__( 'Titulo icono 2', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '', 'elementor-addon' ),
				]
			);
			$this->add_control(
				'iconlink2',
				[
					'label' => esc_html__( 'Link', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);

			$this->add_control(
				'icon3',
				[
					'label' => esc_html__( 'Imagen icono 3', 'image' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'icontext3',
				[
					'label' => esc_html__( 'Titulo icono 3', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '', 'elementor-addon' ),
				]
			);
			$this->add_control(
				'iconlink3',
				[
					'label' => esc_html__( 'Link', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);

			$this->add_control(
				'icon4',
				[
					'label' => esc_html__( 'Imagen icono 4', 'image' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'icontext4',
				[
					'label' => esc_html__( 'Titulo icono 4', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '', 'elementor-addon' ),
				]
			);
			$this->add_control(
				'iconlink4',
				[
					'label' => esc_html__( 'Link', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);

			$this->add_control(
				'icon5',
				[
					'label' => esc_html__( 'Imagen icono 5', 'image' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'icontext5',
				[
					'label' => esc_html__( 'Titulo icono 5', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '', 'elementor-addon' ),
				]
			);
			$this->add_control(
				'iconlink5',
				[
					'label' => esc_html__( 'Link', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);

			$this->add_control(
				'icon6',
				[
					'label' => esc_html__( 'Imagen icono 6', 'image' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			$this->add_control(
				'icontext6',
				[
					'label' => esc_html__( 'Titulo icono 6', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '', 'elementor-addon' ),
				]
			);
			$this->add_control(
				'iconlink6',
				[
					'label' => esc_html__( 'Link', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::URL,
					'options' => [ 'url', 'is_external', 'nofollow' ],
					'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
						// 'custom_attributes' => '',
					],
					'label_block' => true,
				]
			);

		$this->end_controls_section();
		/*////////////////////////////////////////////////////*/
		/*////////////////////////////////////////////////////*/
		/*////////////////////////////////////////////////////*/

		/*----------------------Styles------------------------*/

		/*////////////////////////////////////////////////////*/
		/*////////////////////////////////////////////////////*/
		/*////////////////////////////////////////////////////*/


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style1',
			[
				'label' => esc_html__( 'Color Titulo Superior', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'title_color_1',
				[
					'label' => esc_html__( 'Titulo Superior', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .title-sector-1' => 'color: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();



		$this->start_controls_section(
			'section_title_style2',
			[
				'label' => esc_html__( 'Color Titulo Central', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'label' => esc_html__( 'Titulo Central', 'elementor-addon' ),
					'name' => 'background',
					'types' => [ 'classic', 'gradient' ],
					'selector' => '{{WRAPPER}} .title-sector-main',
				]
			);
		$this->end_controls_section();



		$this->start_controls_section(
			'section_title_style3',
			[
				'label' => esc_html__( 'Color Titulo Base', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			$this->add_control(
				'title_color_3',
				[
					'label' => esc_html__( 'Titulo Base', 'elementor-addon' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .title-sector-3' => 'color: {{VALUE}};',
					],
				]
			);
		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<div class="banner-parallax elementor-section elementor-top-section elementor-section-boxed">
			<div class="elementor-container elementor-column-gap-extended">
				<div class="container">
					<div class="contextualizer">
						<h3 class="title-sector-1" data-depth="0.15">
							<?php echo $settings['title_sector_1']; ?>
						</h3>
						<h2 class="title-sector-main" data-depth="0.20">
							<?php echo $settings['title_sector_2']; ?>
						</h2>
						<h3 class="title-sector-3" data-depth="0.15">
							<?php echo $settings['title_sector_3']; ?>
						</h3> 
					</div>
					<div class="contextualizer-image" id="scene">
						<img src="<?php echo $settings['image']['url']; ?>" data-depth="0.10">
					</div>
					<div class="circled-buttons">
						<ul class="services-list">
							<?php if( strlen($settings['icontext1'])>=1 ) { ?>
							<li class="service-item service-item-1">
								<?php
									$settings = $this->get_settings_for_display();
									if ( !empty( $settings['iconlink1']['url'] ) ) {
										$this->add_link_attributes( 'iconlink1', $settings['iconlink1'] );
									}
								?>
								<a <?php echo $this->get_render_attribute_string( 'iconlink1' ); ?>>
									<img src="<?php echo $settings['icon1']['url']; ?>" alt="" width="48">
									<span class="link-content">
										<span class="link-content-text">
											<?php echo $settings['icontext1']; ?>
										</span>
									</span>
								</a>
							</li>
							<?php } ?>
							<?php if( strlen($settings['icontext2'])>=1 ) { ?>
							<li class="service-item service-item-2">
								<?php
									$settings = $this->get_settings_for_display();
									if ( !empty( $settings['iconlink2']['url'] ) ) {
										$this->add_link_attributes( 'iconlink2', $settings['iconlink2'] );
									}
								?>
								<a <?php echo $this->get_render_attribute_string( 'iconlink2' ); ?>>
									<img src="<?php echo $settings['icon2']['url']; ?>" alt="" width="48">
									<span class="link-content">
										<span class="link-content-text">
											<?php echo $settings['icontext2']; ?>
										</span>
									</span>
								</a>
							</li>
							<?php } ?>
							<?php if( strlen($settings['icontext3'])>=1 ) { ?>
							<li class="service-item service-item-3">
								<?php
									$settings = $this->get_settings_for_display();
									if ( !empty( $settings['iconlink3']['url'] ) ) {
										$this->add_link_attributes( 'iconlink3', $settings['iconlink3'] );
									}
								?>
								<a <?php echo $this->get_render_attribute_string( 'iconlink3' ); ?>>
									<img src="<?php echo $settings['icon3']['url']; ?>" alt="" width="48">
									<span class="link-content">
										<span class="link-content-text">
											<?php echo $settings['icontext3']; ?>
										</span>
									</span>
								</a>
							</li>
							<?php } ?>
							<?php if( strlen($settings['icontext4'])>=1 ) { ?>
							<li class="service-item service-item-4">
								<?php
									$settings = $this->get_settings_for_display();
									if ( !empty( $settings['iconlink4']['url'] ) ) {
										$this->add_link_attributes( 'iconlink4', $settings['iconlink4'] );
									}
								?>
								<a <?php echo $this->get_render_attribute_string( 'iconlink4' ); ?>>
									<img src="<?php echo $settings['icon4']['url']; ?>" alt="" width="48">
									<span class="link-content">
										<span class="link-content-text">
											<?php echo $settings['icontext4']; ?>
										</span>
									</span>
								</a>
							</li>
							<?php } ?>
							<?php if( strlen($settings['icontext5'])>=1 ) { ?>
							<li class="service-item service-item-5">
								<?php
									$settings = $this->get_settings_for_display();
									if ( !empty( $settings['iconlink5']['url'] ) ) {
										$this->add_link_attributes( 'iconlink5', $settings['iconlink5'] );
									}
								?>
								<a <?php echo $this->get_render_attribute_string( 'iconlink5' ); ?>>
									<img src="<?php echo $settings['icon5']['url']; ?>" alt="" width="48">
									<span class="link-content">
										<span class="link-content-text">
											<?php echo $settings['icontext5']; ?>
										</span>
									</span>
								</a>
							</li>
							<?php } ?>
							<?php if( strlen($settings['icontext6'])>=1 ) { ?>
							<li class="service-item service-item-6">
								<?php
									$settings = $this->get_settings_for_display();
									if ( !empty( $settings['iconlink6']['url'] ) ) {
										$this->add_link_attributes( 'iconlink6', $settings['iconlink6'] );
									}
								?>
								<a <?php echo $this->get_render_attribute_string( 'iconlink6' ); ?>>
									<img src="<?php echo $settings['icon6']['url']; ?>" alt="" width="48">
									<span class="link-content">
										<span class="link-content-text">
											<?php echo $settings['icontext6']; ?>
										</span>
									</span>
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
					<style>
					</style>
				</div>
			</div>
		</div>
		<script>
			jQuery( document ).ready(function() {
				var scene = document.getElementById('scene');
				var parallaxInstance = new Parallax(scene);
			});
		</script>

		<?php
	}
}