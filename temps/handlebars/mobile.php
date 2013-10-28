<script id="latesttpl" type="text/x-handlebars-template">
	<div id="pulldown">
		<span class="pulldown-icon"></span>
		<span class="pulldown-label"></span>
	</div> <!-- #pulldown -->
	<ul class="story-feed">
	{{#articles}}
		<li id="{{id}}" title="{{link}}">
			<h5>{{title}}</h5>
			<span class="time">{{last_update}}</span>
		</li>
	{{/articles}}
	</ul>
</script>