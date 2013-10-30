<<<<<<< HEAD
<!-- this template populates the phone part :: left rail -->
=======
>>>>>>> 57ff1aaf8c4c7618002b47daa07c1ecce90137c1
<script id="latesttpl" type="text/x-handlebars-template">
	<ul class="story-feed">
	{{#articles}}
		<li>
<<<<<<< HEAD
		<a href="{{link}}" id="{{unique}}" onclick="loadArticle(e, {{id}})" >
=======
		<a href="{{link}}">
>>>>>>> 57ff1aaf8c4c7618002b47daa07c1ecce90137c1
			<h5>{{title}}</h5>
			<span class="time">{{last_update}}</span>
		</a>
		</li>
	{{/articles}}
	</ul>
</script>
<<<<<<< HEAD

<!-- this template populates the center column -->
=======
>>>>>>> 57ff1aaf8c4c7618002b47daa07c1ecce90137c1
<script id="commtemp" type="text/x-handlebars-template">
	<ul class="story-feed">
	{{#articles}}
		<li>
<<<<<<< HEAD
		{{unique}}
		{{#unless_blank media}}
		  <img src="{{media}}" alt="Photo of {{title}}" width="100%" style="margin-top:20px;"/>
		{{/unless_blank}}
		<a href="{{link}}" id="{{unique}}" onclick="loadArticle(e, {{unique}})" >
=======
		{{#unless_blank media}}
		  <img src="{{media}}" alt="Photo of {{title}}" width="100%" style="margin-top:20px;"/>
		{{/unless_blank}}
		<a href="{{link}}">
>>>>>>> 57ff1aaf8c4c7618002b47daa07c1ecce90137c1
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
<<<<<<< HEAD

<!-- this template populates the right rail -->
=======
>>>>>>> 57ff1aaf8c4c7618002b47daa07c1ecce90137c1
<script id="editortemp" type="text/x-handlebars-template">
	<ul class="story-feed">
	{{#articles}}
		<li>
		{{#unless_blank media}}
		  <img src="{{media}}" alt="Photo of {{title}}" width="100%" style="margin-top:20px;"/>
		{{/unless_blank}}
<<<<<<< HEAD
		<a href="{{link}}" id="{{unique}}" onclick="loadArticle(e, {{unique}})" >
=======
		<a href="{{link}}">
>>>>>>> 57ff1aaf8c4c7618002b47daa07c1ecce90137c1
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
<<<<<<< HEAD
</script>

<script id="articletmp" type="text/x-handlebars-template">
    {{article}}
	   <h1>{{title}}</h1>
	   <div class="body-copy">
	     {{ bodyEncoded }}
	   </div>
	{{/article}}
=======
>>>>>>> 57ff1aaf8c4c7618002b47daa07c1ecce90137c1
</script>