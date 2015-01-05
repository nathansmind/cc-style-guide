<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Design Server</title>
	<link rel="stylesheet" href="css/style.css">	
	<script src="js/script.js"></script>
</head>
<body class="style-guide">
	<?php include 'inc/header.php'; ?>
	<div id="wrapper" class="wrapper">
	
	 <!-- Sample Content to Plugin to Template -->
	<h1>CSS Basic Elements</h1>
	 
	<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
	 
	<hr/>
	 
	<h2 id="headings">Headings</h2>
	 
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<h6>Heading 6</h6>
	 
	<small><a href="#wrapper">[top]</a></small>
	<hr/>
	 
	 
	<h2 id="paragraph">Paragraph</h2>
	 
	<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
	 
	<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
		 
	<small><a href="#wrapper">[top]</a></small>
	<hr/>
	 
	<h2 id="list_types">List Types</h2>
	 
	<h3>Definition List</h3>
	<dl>
		<dt>Definition List Title</dt>
		<dd>This is a definition list division.</dd>
	</dl>
	 
	<h3>Ordered List</h3>
	<ol>
		<li>List Item 1</li>
		<li>List Item 2</li>
		<li>List Item 3</li>
	</ol>
	 
	<h3>Unordered List</h3>
	<ul>
		<li>List Item 1</li>
		<li>List Item 2</li>
		<li>List Item 3</li>
	</ul>
	<small><a href="#wrapper">[top]</a></small>
	
	<hr/>
	<h2 id="list_types">Colors</h2>
	<h3 id="list_types">Primary</h3>
	<ul class="color">
		<li>
			<div class="red"></div>
			$red, #cc0000
		</li>
		<li>
			<div class="black"></div>
			$black, #222222
		</li>
		<li>
			<div class="white"></div>
			$white, #ffffff
		</li>
	</ul>
	
	<h3 id="list_types">Secondary</h3>
	<ul class="color">
		<li>
			<div class="gray-light"></div>
			$gray-light, #bfbfbf
		</li>
		<li>
			<div class="gray-lighter"></div>
			$gray-lighter, #cccccc
		</li>
		<li>
			<div class="gray-lightest"></div>
			$gray-lightest, #f2f2f2
		</li>
		<li>
			<div class="gray-dark"></div>
			$gray-dark, #999999
		</li>
		<li>
			<div class="gray-darker"></div>
			$gray-darker, #555555
		</li>
		<li>
			<div class="gray-darkest"></div>
			$gray-darkest, #333333
		</li>
	</ul>
	
	<h3 id="list_types">Subordinate</h3>
	<ul class="color">
		<li>
			<div class="blue"></div>
			$blue, #00aeef
		</li>
		<li>
			<div class="blue-light"></div>
			$blue-light, #f3f6fa
		</li>
		<li>
			<div class="yellow"></div>
			$yellow, #ff9900
		</li>
	</ul>
	
	
	<div class="clear"></div>
	<hr/>

	<h2 id="list_types">Form Fields</h2>
	<div class="flat-fields true-grid">
		<form class="field-flat light column grid-5" style="margin-right: 40px;">
			<label for="text_field">First Name</label><br/>
			<input type="text" placeholder="Placeholder"/>

			<div class="clear"></div>

			<label for="text_field">Selector</label><br/>
			<div class="selector">
				<div>Select option <span class="icon-cc-icon_drop-down"></span></div>
				<div class="select-menu">
					
				</div>
			</div>

			<div class="clear"></div>

			<label for="text_area">Message</label><br/>	
			<textarea placeholder="Placeholder"></textarea>
			
			<div class="flat-buttons">
				<a href="#" class="btn-flat dark">Submit</a>
			</div>
		</form>
		
		<form class="field-flat dark column grid-5">
			<label for="text_field">First Name</label><br/>
			<input type="text" placeholder="Placeholder"/>

			<div class="clear"></div>

			<label for="text_field">Selector</label><br/>
			<div class="selector">
				<div>Select option <span class="icon-cc-icon_drop-down"></span></div>
				<div class="select-menu">
					
				</div>
			</div>

			<div class="clear"></div>

			<label for="text_area">Message</label><br/>	
			<textarea placeholder="Placeholder"></textarea>
			
			<div class="flat-buttons">
				<a href="#" class="btn-flat dark">Submit</a>
			</div>
		</form>

	</div>

	<div class="clear"></div>
	<hr/>


	<h2 id="list_types">Buttons</h2>
	<div class="flat-buttons">
		<a href="#" class="btn-flat dark">Default Button</a>
		<a href="#" class="btn-flat secondary">Secondary Button</a>
		<div class="light-button-bg"><a href="#" class="btn-flat light">Light Button</a><a href="#" class="btn-flat light-on-dark" style="margin-left: 5px;">Secondary Button</a></div>
	</div>
	<div class="flat-buttons">
		<a href="#" class="btn-flat dark icon-left"><span class="icon-cc-icon_cart"></span>Add to Cart</a>
		<a href="#" class="btn-flat dark icon-right">Shop Now<span class="icon-cc-icon_arrow-right"></span></a>
<!-- 		<a href="#" class="btn-flat light icon"><span class="icon-cc-icon_box"></span>Secondary Button Icon</a> -->
	</div>

	<hr/>
	 
<!--
	<h2 id="form_elements">Form Elements, Fieldsets, and Legends </h2>
	 
	<fieldset>
-->
<!--
		<legend>Legend</legend>
	 
		<p>Lore	m i	psum dolor s	it amet, consectetuer adip	isc	ing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>
-->
	 
<!--
		<form>
			<h2>Form Element</h2>
	 
			<p>Lorem i	psu	m dolor s	it amet, consectetuer adi	pis	cing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>
	 
			<p>
				<label for="text_field">Text Field:</label><br/>
				<input type="text" id="text_field" />
			</p>
	 
			<p>
				<label for="text_area">Text Area:</label><br/>	
				<textarea id="text_area"></textarea>
			</p>
	 
			<p>	
				<label for="select_element">Select Element:</label><br/>
				<select name="select_element">
					<optgroup label="Option Group 1">
						<option value="1">Option 1</option>
						<option	 value="2">Option 2</option>
						<option	 value="3">Option 3</option>
					</optgroup>
					<optgroup label="Option Group 2">	
						<option value="1">Option 1</option>
						<option	 value="2">Option 2</option>
						<option	 value="3">Option 3</option>
					</optgroup>
				</select>
			</p>
	 
			<p>
				<label for="radio_buttons">Radio Buttons:</label><br/>
				<input type="radio" class="radio" name="radio_button" value="radio_1"/> Radio 1<br/>
				<input type="radio" class="radio" name="radio_button" value="radio_2"/> Radio 2<br/>
				<input type="radio" class="radio" name="radio_button" value="radio_3"/> Radio 3<br/>
			</p>
	 
			<p>
				<label for="checkboxes">Checkboxes:</label><br/>
				<input type="checkbox" class="checkbox" name="checkboxes" value="check_1"/> Radio 1<br/>
				<input type="checkbox" class="checkbox" name="checkboxes" value="check_2"/> Radio 2<br/>
				<input type="checkbox" class="checkbox" name="checkboxes" value="check_3"/> Radio 3<br/>
			</p>
	 
			<p>
				<label for="password">Password:</label><br/>
				<input type="password" class="password" name="password" />
			</p>
	 
			<div>
				<label for="file">File Input:</label><br/>
				<a href="#" class="btn dark">Default Button</a>
				<a href="#" class="btn light">Secondary Button</a>
			</div>

		</form>
	 
	</fieldset>
-->
	<h2 id="list_types">Tabs</h2>
	<ul class="tabs clear">
		<li class="active">Tab 1</li>
		<li>Tab 2</li>
		<li>Tab 3</li>		
	</ul>
	 
	<hr/>
		 
	<h2 id="tables">Tables</h2>
	 
	<table cellspacing="0" cellpadding="0">
		<caption>Caption</caption>
		<tbody>
			<tr>
				<th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
			</tr>
			<tr>
				<td>Division 1</td><td>Division 2</td><td>Division 3</td>
			</tr>
			<tr class="even">
				<td>Division 1</td><td>Division 2</td><td>Division 3</td>
			</tr>
			<tr>
				<td>Division 1</td><td>Division 2</td><td>Division 3</td>
			</tr>
		</tbody>
	</table>
	 
	<small><a href="#wrapper">[top]</a></small>
	<hr/>
		 
	<h2 id="misc">Misc Stuff - abbr, acronym,	 pre, co	de,	 sub, sup, etc.</h2>
	 
	<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>
	 	 
	<blockquote>
		"This stylesheet is going to help 	so 	freaking much.	" <br/>-Blockquote
	</blockquote>
	 
	<small><a href="#wrapper">[top]</a></small>
	<!--	 En	d of Sample Content -->
	</div> <!-- Wrapper -->
</body>
</html>