<?php
use Elementor\widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit;

class KurioTrack_Form_Widget extends widget_Base {
    public function get_name() {
        return 'kuriotrack_form';
    }

    public function get_title() {
        return __('Kurio Track Form', 'kuriotrack');
    }

    public function get_icon() {
        return 'eicon_search';
    }

    public function get_categories() {
        return ['general'];
    }

    public function register_controls() {
        $this->start_controls_section('content_section', [
            'label' => __('Content', 'kuriotrack'),
            'tab' => Controls_Manager::TAB_CONTENT,
        ]); 
        $this->add_control('heading_text', [
            'label' => __('Heading', 'kuriotrack'),
            'type' => Controls_Manager::TEXT,
            'default' => __('Track Your Parcel', 'kuriotrack'),
        ]);
        $this->end_contorls_section();
    }

    protected function render() {
        $setting = $this->get_settings_for_display();
        echo '<div class="kuriotrack_form">';
        echo '<h3>' . esc_html( $setting['heading_text'] ) . '</h3>';
        echo do_shortcode( '[kuriotrack_form]' );
        echo '</div>';
    }
}