<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Testing</title>
	<link rel="stylesheet" href="../style.css" />
	<style type="text/css" media="all">

	body {
		-webkit-user-select:none;
	    -webkit-text-size-adjust:none;
	}

	#header {
		position:absolute; z-index:2;
		top:0; left:0;
		width:100%;
		height:45px;
		line-height:45px;
		background-color:#d51875;
		background-image:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0, #fe96c9), color-stop(0.05, #d51875), color-stop(1, #7b0a2e));
		background-image:-moz-linear-gradient(top, #fe96c9, #d51875 5%, #7b0a2e);
		background-image:-o-linear-gradient(top, #fe96c9, #d51875 5%, #7b0a2e);
		padding:0;
		color:#eee;
		font-size:20px;
		text-align:center;
	}

	#header a {
		color:#f3f3f3;
		text-decoration:none;
		font-weight:bold;
		text-shadow:0 -1px 0 rgba(0,0,0,0.5);
	}

	#footer {
		position:absolute; z-index:2;
		bottom:0; left:0;
		width:100%;
		height:48px;
		background-color:#222;
		background-image:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0, #999), color-stop(0.02, #666), color-stop(1, #222));
		background-image:-moz-linear-gradient(top, #999, #666 2%, #222);
		background-image:-o-linear-gradient(top, #999, #666 2%, #222);
		padding:0;
		border-top:1px solid #444;
	}

	#content {
		position:absolute; z-index:1;
		top:45px; bottom:48px; left:0;
		width:100%;
		overflow:auto;
	}

	#scroller {
		position:absolute; z-index:1;
	}
	
	</style>
</head>
<body>
	<div id="header"><a href="http://cubiq.org/iscroll">iScroll</a></div>
	<div id="content" role="main">
		<div class="tab-content" id="scroller">
			<section id="latest" class="zone-one tab-pane active">
							<h6 class="page-header">Latest news <span class="pull-right"><a href="#" class="refresh hide-for-mobile"><i class="glyphicon glyphicon-refresh"></i></a></span></h6>
							<div class="feed">
				<ul class="story-feed">

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281082/split-second-choice-ended-ny-student-dead?source=rss">
						<h5>Godfather faults NY police in student death</h5>
						<span class="time">12m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23284592/dishs-ergen-offers-2-billion-lightsquared-spectrum?source=rss">
						<h5>Dish's Ergen offers $2 billion for LightSquared spectrum</h5>
						<span class="time">14m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281170/tornadoes-slam-plains-midwest-1-dead-okla?source=rss">
						<h5>Tornado churns through Oklahoma City suburbs</h5>
						<span class="time">15m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23284269/aurora-7th-grader-finalist-natl-geographic-bee?source=rss">
						<h5>Aurora 7th grader finalist in Nat'l Geographic Bee</h5>
						<span class="time">16m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281256/small-fla-city-anxious-learn-jackpot-winner?source=rss">
						<h5>Small Fla. city anxious to learn jackpot winner</h5>
						<span class="time">17m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281686/boulder-police-device-discovered-bus-at-fairview-high?source=rss">
						<h5>Science project left on bus leads to bomb scare at Boulder's Fairview High</h5>
						<span class="time">19m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23284580/aurora-police-release-photo-pleasures-gunman?source=rss">
						<h5>Aurora police release photo of Pleasures gunman</h5>
						<span class="time">19m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283150/ill-state-police-5-killed-i-70-van?source=rss">
						<h5>Illinois State Police: 5 killed in I-70 van crash</h5>
						<span class="time">23m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281521/winter-weather-forecast-northern-colorado?source=rss">
						<h5>Snow still falling in parts of Colorado, Wyoming</h5>
						<span class="time">32m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/broncos/ci_23282575/willis-mcgahee-is-only-no-show-broncos-training?source=rss">
						<h5>Willis McGahee is only no-show for Broncos' training session</h5>
						<span class="time">41m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/broncos/ci_23284261/peyton-manning-broncos-return-offseason-practices?source=rss">
						<h5>Peyton Manning, Broncos return for offseason practices</h5>
						<span class="time">41m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282353/united-restart-787-flights-monday?source=rss">
						<h5>United restarts 787 flights after grounding</h5>
						<span class="time">42m</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283379/report-sunken-wwii-ships-may-pollute-us-waters?source=rss">
						<h5>Study: Most shipwrecks a minor US pollution threat</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283992/large-funnel-cloud-touches-down-near-oklahoma-city?source=rss">
						<h5>Large funnel cloud touches down near Oklahoma City</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281639/denver-gas-prices-climb-far-above-national-average?source=rss">
						<h5>Denver gas prices climb far above national average</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283697/alaska-unveils-plan-assess-gas-oil-anwr?source=rss">
						<h5>Alaska unveils plan to assess gas, oil in ANWR</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281220/senate-committee-moves-toward-vote-immigration?source=rss">
						<h5>Senators require fingerprinting at 30 airports</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283962/small-company-stocks-take-limelight?source=rss">
						<h5>Small company stocks take the limelight</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283457/nypd-messages-muslim-informant-get-pictures?source=rss">
						<h5>NYPD messages to Muslim informant: 'Get pictures'</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283701/lottery-open-cheyenne-frontier-days-train-tickets?source=rss">
						<h5>Lottery open for Cheyenne Frontier Days Train tickets</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/lunchspecial/ci_23283276/rockies-face-healthy-do-list-stay-nl-west?source=rss">
						<h5>Rockies face healthy to-do list to stay in NL West contention</h5>
						<span class="time">1h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282732/ig-ex-us-attorney-retaliated-fast-and-furious?source=rss">
						<h5>IG: ex-US Attorney retaliated in Fast and Furious</h5>
						<span class="time">2h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283668/seth-macfarlane-wont-return-2014-oscar-host?source=rss">
						<h5>Seth MacFarlane won't return as 2014 Oscar host</h5>
						<span class="time">2h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282574/angry-mob-pelts-man-thought-be-sex-attacker?source=rss">
						<h5>Angry Pueblo mob pelts man thought to be sex attacker</h5>
						<span class="time">2h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281144/iraq-car-bombs-basra-kill-at-least-10?source=rss">
						<h5>Wave of attacks kills at least 95 in Iraq</h5>
						<span class="time">2h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281066/aid-group-syrian-refugees-face-dire-health-risks?source=rss">
						<h5>Hezbollah pulled more deeply into Syria civil war</h5>
						<span class="time">2h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283630/greeley-elementary-teacher-came-school-drunk?source=rss">
						<h5>District: Greeley elementary teacher came to school drunk</h5>
						<span class="time">2h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283474/smashburger-ceo-sees-doubling-stores-before-potential-ipo?source=rss">
						<h5>Smashburger CEO sees doubling stores before potential IPO</h5>
						<span class="time">2h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283097/colo-firefighters-use-ladder-truck-rescue-bear?source=rss">
						<h5>Colo. firefighters use ladder truck to rescue bear</h5>
						<span class="time">2h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283405/carney-senior-white-house-staff-knew-irs-probe?source=rss">
						<h5>Carney: Senior White House staff knew of IRS probe</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282710/pbs-offeres-two-ways-punking-hitler?source=rss">
						<h5>PBS offers two ways of punking Hitler</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283312/officials-identify-woman-who-died-weekend-motorcycle-crash?source=rss">
						<h5>Officials identify woman who died in weekend motorcycle crash in Aurora</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283290/official-fbi-agents-cause-death-unlikely-soon?source=rss">
						<h5>Official: FBI agents' cause of death unlikely soon</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283096/herda-appointed-head-fcc-council?source=rss">
						<h5>Herda appointed to head FCC council</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23283260/guantanamo-hack-threat-prompts-wifi-shutdown?source=rss">
						<h5>Guantanamo hack threat prompts WiFi shutdown</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282641/childhood-adhd-linked-obesity-later-life?source=rss">
						<h5>Childhood ADHD linked to obesity later in life</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/nationworld/ci_23282395/pot-farms-public-lands-draw-federal-scrutiny?source=rss">
						<h5>Pot farms on public lands draw federal scrutiny</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281539/yahoo-takes-big-leap-1-1b-deal-tumblr?source=rss">
						<h5>Yahoo takes big leap with $1.1B deal for Tumblr</h5>
						<span class="time">3h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281117/toyota-increase-lithium-ion-battery-production-hybrids?source=rss">
						<h5>Toyota to increase lithium-ion battery production for hybrids</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282875/archie-comics-gay-kiss-poke-at-real-controversy?source=rss">
						<h5>Archie Comics' gay kiss a poke at real controversy</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282183/annotated-harry-potter-1st-edition-auction?source=rss">
						<h5>Annotated 'Harry Potter' 1st edition on auction</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281928/firefighter-dies-dallas-condo-complex-blaze?source=rss">
						<h5>Firefighter dies in Dallas condo complex blaze</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281735/officials-cu-boulder-student-naked-high-mushrooms-rescued?source=rss">
						<h5>Officials: CU-Boulder student naked, high on mushrooms rescued from Flatirons</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282859/longmont-asks-court-condemn-dillards?source=rss">
						<h5>Longmont asks court to condemn Dillard's</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282273/barbra-streisand-receive-honorary-phd-israel?source=rss">
						<h5>Barbra Streisand to receive honorary PhD in Israel</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282892/home-construction-picking-up-eagle-county?source=rss">
						<h5>Home construction picking up in Eagle County</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281224/kerry-mideast-advance-struggling-syria-plan?source=rss">
						<h5>Kerry to Mideast to advance struggling Syria plan</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282683/denver-police-father-custody-after-shooting-son?source=rss">
						<h5>Denver police: Father in custody after shooting son</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281884/group-asks-blm-release-oil-and-gas-information?source=rss">
						<h5>Group asks BLM to release oil and gas information</h5>
						<span class="time">4h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282466/man-accused-killing-girl-14-commerce-city-now?source=rss">
						<h5>Man accused of killing girl, 14, in Commerce City now headed for trial</h5>
						<span class="time">5h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282396/report-says-poor-are-moving-nations-suburbs?source=rss">
						<h5>Report says poor are moving to nation's suburbs</h5>
						<span class="time">5h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281169/ap-impact-military-sex-abuse-victims-seek-va?source=rss">
						<h5>Military sex abuse has long-term impact for vets</h5>
						<span class="time">5h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281239/skorea-nkorea-fires-5th-projectile-into-waters?source=rss">
						<h5>Seoul: Day 3 of NKorea tests of short-range weapon</h5>
						<span class="time">5h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23274361/boulder-council-weighing-changes-off-leash-program?source=rss">
						<h5>Boulder weighing changes to off-leash dog program</h5>
						<span class="time">5h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282377/public-can-check-out-u-s-36-north?source=rss">
						<h5>Public can check out U.S. 36, north metro transit plans Thursday</h5>
						<span class="time">5h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281951/denver-based-anadarko-executive-become-ceo-chesapeake-energy?source=rss">
						<h5>Anadarko executive to become CEO of Chesapeake Energy</h5>
						<span class="time">5h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281889/seamless-and-grubhub-combine-no-terms-revealed?source=rss">
						<h5>Seamless and GrubHub to combine, no terms revealed</h5>
						<span class="time">6h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281090/russian-oligarchs-foot-most-2014-sochi-olympics?source=rss">
						<h5>Russian oligarchs foot most of 2014 Sochi Olympics</h5>
						<span class="time">6h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23281950/man-accused-threatening-rep-fields-court-monday?source=rss">
						<h5>Trial date set for man accused of threatening Rep. Fields</h5>
						<span class="time">6h</span>
					</a>
					</li>

					<li>
					<a href="http://www.denverpost.com/breakingnews/ci_23282180/missy-franklin-graduating-from-high-school?source=rss">
						<h5>Missy Franklin graduating from high school Monday night</h5>
						<span class="time">6h</span>
					</a>
					</li>

				</ul>
			</div>
						</section>
		</div> <!-- #scroller -->
	</div> <!-- #content -->
	<div id="footer"></div>

		
		
		
</body>
<script src="../js/plugins/iscroll.min.js"></script>
<script type="text/javascript">
var myScroll;
function loaded() {
	setTimeout(function () {
		myScroll = new iScroll('content');
	}, 100);
}
window.addEventListener('load', loaded, false);

</script>
</html>