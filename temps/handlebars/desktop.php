<script id="latesttpl" type="text/x-handlebars-template">
	<ul class="story-feed">
	{{#articles}}
		<li>
		<a href="{{link}}">
			<h5>{{title}}</h5>
			<span class="time">{{last_update}}</span>
		</a>
		</li>
	{{/articles}}
	</ul>
</script>
<script id="commtemp" type="text/x-handlebars-template">
	<ul class="story-feed">
	{{#articles}}
		<li>
		{{#unless_blank media}}
		  <img src="{{media}}" alt="Photo of {{title}}" width="100%" style="margin-top:20px;"/>
		{{/unless_blank}}
		<a href="{{link}}">
			<h3>{{title}}</h3>
		</a>
		<p class="meta">
		{{#unless_blank byline}}
			<strong>By {{byline}}</strong><br />
		{{/unless_blank}}
		{{property}}<br />
		<span class="pub-date">{{pub_date}}</span>
		<span class="social-stats">
			<span class="social-button">
				<span class="fc-webicon small twitter"></span>
				<span class="count">0</span>
			</span>
			<span class="social-button">
				<span class="fc-webicon small facebook"></span>
				<span class="count">0</span>
			</span>
			<span class="social-button">
				<span class="fc-webicon small googleplus"></span>
				<span class="count"><span class="arrow"></span>0</span>
			</span>
		</span>
		</p>
		</li>
	{{/articles}}
	</ul>
</script>
<script id="editortemp" type="text/x-handlebars-template">
	<ul class="story-feed">
	{{#articles}}
		<li>
		{{#unless_blank media}}
		  <img src="{{media}}" alt="Photo of {{title}}" width="100%" style="margin-top:20px;"/>
		{{/unless_blank}}
		<a href="{{link}}">
			<h2>{{title}}</h2>
		</a>
		<p class="excerpt">{{excerpt}}</p>
		<p class="meta">
		{{#unless_blank byline}}
			<strong>By {{byline}}</strong><br />
		{{/unless_blank}}
		{{property}}<br />
		<span class="pub-date">{{pub_date}}</span>
		<span class="social-stats">
			<span class="social-button">
				<span class="fc-webicon small twitter"></span>
				<span class="count">0</span>
			</span>
			<span class="social-button">
				<span class="fc-webicon small facebook"></span>
				<span class="count">0</span>
			</span>
			<span class="social-button">
				<span class="fc-webicon small googleplus"></span>
				<span class="count"><span class="arrow"></span>0</span>
			</span>
		</span>
		</p>
		</li>
	{{/articles}}
	</ul>
</script>