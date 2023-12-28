<?php
class Elementor_Timeline extends \Elementor\Widget_Base
{
    public function get_style_depends()
    {
        return ["widget-timeline-styles"];
    }

    public function get_script_depends()
    {
        return [];
    }

    public function get_name()
    {
        return "Timeline";
    }

    public function get_title()
    {
        return esc_html__("Timeline", "elementor-addon");
    }

    public function get_icon()
    {
        return "eicon-code";
    }

    public function get_categories()
    {
        return ["basic"];
    }

    public function get_keywords()
    {
        return ["timeline"];
    }

    protected function register_controls()
    {
        /*////////////////////////////////////////////////////*/
        /*////////////////////////////////////////////////////*/
        /*////////////////////////////////////////////////////*/

        /*---------------------Content------------------------*/

        /*////////////////////////////////////////////////////*/
        /*////////////////////////////////////////////////////*/
        /*////////////////////////////////////////////////////*/

        // Content Tab Start

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Timeline', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title_item', [
                'label' => esc_html__( 'Titulo', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Titulo' , 'plugin-name' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'stage_item', [
                'label' => esc_html__( 'Etapa', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Etapa' , 'plugin-name' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'content_item', [
                'label' => esc_html__( 'Contenido', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Lorem ipsum' , 'plugin-name' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__( 'Punto timeline', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title_item }}}',
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
	    // Ejemplo de datos iterables
	    $stories = [
	        ['title' => 'CREA', 'stage' => 'Etapa 1', 'content' => 'Contenido de CREA...'],
	        ['title' => 'INICIA', 'stage' => 'Etapa 2', 'content' => 'Contenido de INICIA...'],
            ['title' => 'GESTIONA', 'stage' => 'Etapa 3', 'content' => 'Contenido de INICIA...'],
            ['title' => 'ESCALA', 'stage' => 'Etapa 4', 'content' => 'Contenido de INICIA...'],
            ['title' => 'CONSOLIDA Y FORTALECE', 'stage' => 'Etapa 5', 'content' => 'Contenido de INICIA...'],
	        // Añade más elementos según sea necesario
	    ];

    	?>
	    <div class="twae-vertical twae-wrapper twae-both-sided ">   
	        <div class="twae-start"></div>

	        <div class="twae-timeline">
	        	<?php
			        $settings = $this->get_settings_for_display();
			        if ( ! empty( $settings['list'] ) ):
		        ?>

	            	<?php foreach ( $settings['list'] as $index => $item ): ?>
		                <div class="twae-story twae-repeater-item <?php echo $index % 2 === 0 ? 'twae-story-left' : 'twae-story-right'; ?> twae-story-no-icon">
		                    <div class="twae-labels">
		                        <div class="twae-label-big">
		                            <h2 class="elementor-heading-title elementor-size-default">
		                            	<strong><?php echo esc_html( $item['title_item'] ); ?></strong>
		                            </h2>
		                        </div>
		                        <div class="twae-label-small"><?php echo esc_html( $item['stage_item'] ); ?></div>
		                    </div>
							<div class="twae-icondot">
							</div>
							<div class="twae-arrow">
							</div>
		                    <div class="twae-content">
		                        <div class="twae-description">
		                        	<p><?php echo esc_html( $item['content_item'] ); ?></p>
		                        </div>
		                    </div>
		                </div>
		            <?php endforeach; ?>

	        	<?php
		        	endif
		        ?>
	        </div>

	        <div class="twae-end"></div>
	    </div>
	    <?php
	}
}
