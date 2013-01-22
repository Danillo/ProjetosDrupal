<?php
/**
 * @file
 * Zen theme's implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   - view-mode-[mode]: The view mode, e.g. 'full', 'teaser'...
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 *   The following applies only to viewers who are registered users:
 *   - node-by-viewer: Node is authored by the user currently viewing the page.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $pubdate: Formatted date and time for when the node was published wrapped
 *   in a HTML5 time element.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content. Currently broken; see http://drupal.org/node/823380
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess_node()
 * @see template_process()
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>

        <div class="titulo-front">
			<h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
		</div>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <p class="unpublished"><?php print t('Unpublished'); ?></p>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
	
  ?>

<div id="picones">
<!--
	<div class="wrapper impar">
		<div class="july12"><div class="july121"><h3>Save The Date</h3>Dia: 12 de Julho de 2013, é o dia do nosso casamento.</div></div>
		<div class="iconjuly12"><div class="iconjuly121">Confirme:</div></div>
	</div>
-->	
	<div class="wrapper par">
		<div class="church"><div class="church1">
		<h3>Cerimônia de Casamento</h3>
		<h4>Local: Igreja da Divina Mesericordia</h4>
		<h4>Endereço: Rua Tupinambá, 862, Jardim São Luis, Imperatriz-MA.</h4>
		<h4>Horário: Às 19:00hrs.</h4>
		<h4>Nota: Logo após a cerimonia, os noivos, os pais e padrinhos</br>
		permanecerão na igreja por aproximadamente meia hora,</br>
		para fotos. Os demais convidados podem se direcionar  ao</br>
		salão de festas, lá os noivos receberão os cumprimentos.</h4>
		</div></div>
		<div class="maps"><div class="maps1">Mapa:</div></div>
	</div>
	
	<div class="wrapper impar">
		<div class="festa"><div class="festa1"><h3>Recepçao</h3>Local: Leny Eventos.<h4>Endereço: Rua Leôncio Pires Dourado, Imperatriz, MA (Próximo ao Mix Mateus Atacado).</h4></div></div>
		
		<div class="maps2"><div class="maps21">Mapa:</div></div>
	</div>
	
	<div class="wrapper par">
		<div class="lua"><div class="lua1"><h3>Lua de Mel</h3>Dia: 13 de Julho de 2013<br><br>Local: Lençois Maranhences.<br></div></div>
		<div class="maps3"><div class="maps31">Mapa:<a href='https://maps.google.com.br/maps?saddr=Hotel+S%C3%A3o+Lu%C3%ADs,+S%C3%A3o+Lu%C3%ADs+-+Maranhao&daddr=Barreirinhas+-+Maranhao&hl=en&ie=UTF8&ll=-2.718096,-43.518219&spn=1.172823,2.113495&sll=-3.453108,-43.851929&sspn=2.343905,4.22699&geocode=FRP_2f8dkPhb_SH6rjF1EfhVeSlbPTUtQYz2BzH6rjF1EfhVeQ%3BFVv31f8d15Fy_Sn_KeMjyh_yBzHOFa_UOYwVRg&oq=S%C3%A3o+luis&t=h&mra=ls&z=10' target='blank'></a></div></div>
	</div>
	
	<div class="wrapper impar">
		<div class="noiva"><div class="noiva1"><h3>Tarde da Noiva</h3>Dia: 12 de Julho de 2013 às 14hrs.<br><br>Local: À definir.<br></div></div>
		<div class="maps4"><div class="maps41">Mapa:</div></div>
	</div>

	<div class="wrapper par">
		<div class="noivo"><div class="noivo1"><h3>Reunião do Noivo</h3>Dia: 11 de Julho de 2013 às 14hrs.<br><br>Local: À definir.<br></div></div>
		<div class="maps5"><div class="maps51">Mapa:</div></div>
	</div>
</div>


</article><!-- /.node -->
