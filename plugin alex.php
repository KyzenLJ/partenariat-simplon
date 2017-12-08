<?php
/*
Plugin Name: plugin alex
Description: Plugin pour intégrer short code remerciement simplon
Version: 0.1
Author: Alexandre NESIC
License: GPL2
URI : https://github.com/KyzenLJ/partenariat-simplon
*/

function ThxSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="http://simplon.co">simplon.co</a> - une entreprise de
l\'économie sociale et solidaire et un réseau de "fabriques" (écoles) qui propose
des formations GRATUITES pour devenir développeur web. </p>';
}
add_shortcode('Simplon', 'ThxSimplon');