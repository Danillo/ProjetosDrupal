/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {
		$("#edit-submitted-telefone").mask("(999) 9999-9999"); //Aqui montamos a máscara que queremos
		$("#edit-submitted-seu-cep").mask("99999-999"); 
        //$("#cpf").mask("999.999.999/99"); 
		//$("#cpfcnpj").mask("99.999.999/9999-99"); 	
// Place your code here.
})(jQuery, Drupal, this, this.document);
