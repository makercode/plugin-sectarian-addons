<?php
class Elementor_Banner_Parallax extends \Elementor\Widget_Base {

	public function get_style_depends() {
		return [ 'widget-banner-styles' ];
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
				'title_color 1',
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
				'title_color 3',
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
				<div class="contextualizer">
					<div class="contextualizer-title">
						<h3 class="title-sector-1">
							<?php echo $settings['title_sector_1']; ?>
						</h3>
						<h2 class="title-sector-main">
							<?php echo $settings['title_sector_2']; ?>
						</h2>
						<h3 class="title-sector-3">
							<?php echo $settings['title_sector_3']; ?>
						</h3>
					</div>
					<img class="contextualizer-image" src="<?php echo $settings['image']['url']; ?>">
				</div>
			</div>
		</div>

		<?php
	}
}