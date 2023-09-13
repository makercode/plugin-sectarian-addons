<?php
class Elementor_Timeline extends \Elementor\Widget_Base {

	public function get_style_depends() {
		return [ 'widget-timeline-styles' ];
	}

	public function get_script_depends() {
		// return [ 'widget-banner-scripts' ];
	}

	public function get_name() {
		return 'Timeline';
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
            return [ 'timeline' ];
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


	}

	protected function render() {
		?>
			<div id="twae-wrapper-6992863" class="twae-vertical twae-wrapper  twae-both-sided ">   
				<div class="twae-start"></div>    
				<div id="twea-timeline-6992863" class="twae-timeline"><div id="story-934c4a4" class="twae-story twae-repeater-item twae-story-right twae-story-no-icon">
							<div class="twae-labels"><div class="twae-label-big"><h2 class="elementor-heading-title elementor-size-default"><strong>CREA</strong></h2></div><div class="twae-label-small">Etapa 1</div></div><div class="twae-icondot"></div><div class="twae-arrow"></div><div class="twae-content"><div class="twae-title">De la Idea al Éxito</div><div class="twae-description"><p>Abatar acompaña tu visión empresarial desde los primeros pasos. Más allá de las ideas, haremos que las cosas se vuelvan realidad.</p></div>
							</div>
					</div><div id="story-25e36bb" class="twae-story twae-repeater-item twae-story-left twae-story-no-icon">
							<div class="twae-labels"><div class="twae-label-big"><h2 class="elementor-heading-title elementor-size-default"><strong>INICIA</strong></h2></div><div class="twae-label-small">Etapa 2</div></div><div class="twae-icondot"></div><div class="twae-arrow"></div><div class="twae-content"><div class="twae-title">Inicia Seguro y con Confianza</div><div class="twae-description"><p>Guiamos tu camino hacia el éxito. Construiremos juntos el<br>futuro empresarial con el que sueñas.</p></div>
							</div>
					</div><div id="story-cc9fe6f" class="twae-story twae-repeater-item twae-story-right twae-story-no-icon">
							<div class="twae-labels"><div class="twae-label-big"><h2 class="elementor-heading-title elementor-size-default"><strong>GESTIONA</strong></h2></div><div class="twae-label-small">Etapa 3</div></div><div class="twae-icondot"></div><div class="twae-arrow"></div><div class="twae-content"><div class="twae-title">Juntos en Cada Etapa</div><div class="twae-description"><p>Facilitamos la gestión digital de tu empresa para que avance y<br>crezca sin problemas. Aplicamos innovación y tecnología en cada uno de nuestros procesos.</p></div>
							</div>
					</div><div id="story-1c14ef0" class="twae-story twae-repeater-item twae-story-left twae-story-no-icon">
							<div class="twae-labels"><div class="twae-label-big"><h2 class="elementor-heading-title elementor-size-default"><strong>ESCALA</strong></h2></div><div class="twae-label-small">Etapa 4</div></div><div class="twae-icondot"></div><div class="twae-arrow"></div><div class="twae-content"><div class="twae-title">Amplía Tu Horizonte</div><div class="twae-description"><p>Nuestras soluciones digitales potencian tu negocio para crecer sin&nbsp;límites. Abracemos los desafíos y crezcamos con determinación.</p></div>
							</div>
					</div><div id="story-c605e36" class="twae-story twae-repeater-item twae-story-right twae-story-no-icon">
							<div class="twae-labels"><div class="twae-label-big"><h2 class="elementor-heading-title elementor-size-default"><strong>CONSOLIDA Y FORTALECE</strong></h2></div><div class="twae-label-small">Etapa 5</div></div><div class="twae-icondot"></div><div class="twae-arrow"></div><div class="twae-content"><div class="twae-title">Forjamos el Futuro Juntos</div><div class="twae-description"><p>Confiamos en nuestra relación y en lo que hemos construido<br>juntos. Nos convertiremos en tu aliado estratégico, trabajando en conjunto para consolidar y fortalecer tu marca de manera duradera.</p></div>
							</div>
					</div></div>
				<div class="twae-end"></div>
			</div>
		<?php
	}
}