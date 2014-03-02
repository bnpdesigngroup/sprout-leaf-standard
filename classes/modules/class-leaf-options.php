<?php

if (!class_exists('Leaf_Options')) {

	class Leaf_Options extends Sprout_Module {
		
		protected function __construct() {

		}

		public function init() {

			$this->register_hooks();

		}

		public function register_hooks() {

			add_filter('sprout_theme_options', array($this, 'insert_theme_options'), 1);
			add_filter('sprout_meta_boxes', array($this, 'insert_meta_boxes'), 1);

		}

		/**
		 * Insert theme options
		 */
		public function insert_theme_options($options) {

			return $options;

		}

		/**
		 * Insert meta boxes
		 */
		public function insert_meta_boxes($meta_boxes) {

			return $meta_boxes;

		}

	}

	Sprout::add_module('Leaf_Options');

}

?>