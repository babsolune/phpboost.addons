<?php require_once('../documentation_begin.php'); ?>	<div id="inside-global">
		<div id="inside-menu-left">
			<a href="index.php"><span>PHPBoost A.P.I.</span></a>


			<div id="groups">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Packages</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-package" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul clas="level-0">
					<li>
						<a class="cssmenu-title" href="package-Ajax.php">
							Ajax<span></span>
						</a>

							<ul clas="level-1">
					<li>
						<a class="cssmenu-title" href="package-Ajax.Controllers.php">
							Controllers						</a>

							</li>
								</ul></li>
					<li>
						<a class="cssmenu-title" href="package-Builder.php">
							Builder<span></span>
						</a>

							<ul clas="level-1">
					<li>
						<a class="cssmenu-title" href="package-Builder.Element.php">
							Element						</a>

							</li>
								</ul></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>
			</div>


			<div id="elements">
				<div class="module-mini-container cssmenu-content">
					<div class="module-mini-top hidden-small-screens">
						<div class="sub-title">Classes</div>
					</div>
					<div class="module-mini-contents">
						<nav id="cssmenu-classes" class="cssmenu cssmenu-vertical cssmenu-left">
				<ul>
					<li><a href="class-AjaxImagePreviewController.php" class="cssmenu-title">AjaxImagePreviewController</a></li>
					<li><a href="class-AjaxRequest.php" class="cssmenu-title">AjaxRequest</a></li>
					<li><a href="class-AjaxSearchUserAutoCompleteController.php" class="cssmenu-title">AjaxSearchUserAutoCompleteController</a></li>
					<li><a href="class-AjaxUrlValidationController.php" class="cssmenu-title">AjaxUrlValidationController</a></li>
					<li><a href="class-AjaxUserAutoCompleteController.php" class="cssmenu-title">AjaxUserAutoCompleteController</a></li>
					<li><a href="class-BrHTMLElement.php" class="cssmenu-title">BrHTMLElement</a></li>
					<li><a href="class-DivHTMLElement.php" class="cssmenu-title">DivHTMLElement</a></li>
					<li><a href="class-ImgHTMLElement.php" class="cssmenu-title">ImgHTMLElement</a></li>
					<li><a href="class-LinkHTMLElement.php" class="cssmenu-title">LinkHTMLElement</a></li>
					<li><a href="class-SpanHTMLElement.php" class="cssmenu-title">SpanHTMLElement</a></li>
				</ul>
						</nav>
					</div>
					<div class="module-mini-bottom"></div>
				</div>





			</div>
		</div>
		<div id="inside-main" class="main-with-left">
			<nav id="inside-breadcrumb">
				<ol>
					<li>
						<a href="index.php"><span>PHPBoost A.P.I.</span></a>
					</li>
					<li>
<span>Package</span>					</li>
					<li>
<span>Class</span>					</li>
				</ol>
				<ol>
				</ol>
				<ol>
				</ol>
			</nav>

			<div id="inside-main-content">

<section>
	<header>
		<h1>File builder/ajax/controllers/AjaxSearchUserAutoCompleteController.class.php</h1>
	</header>
	<article>
		<header><h2>File builder/ajax/controllers/AjaxSearchUserAutoCompleteController.class.php</h2></header>
		<div class="content">
            <pre class="numbers"><code><span class="l"><a href="#1"> 1: </a></span><span class="l"><a href="#2"> 2: </a></span><span class="l"><a href="#3"> 3: </a></span></span><span class="l"><a href="#4"> 4: </a></span></span><span class="l"><a href="#5"> 5: </a></span></span><span class="l"><a href="#6"> 6: </a></span></span><span class="l"><a href="#7"> 7: </a></span></span><span class="l"><a href="#8"> 8: </a></span></span><span class="l"><a href="#9"> 9: </a></span></span><span class="l"><a href="#10">10: </a></span></span><span class="l"><a href="#11">11: </a></span></span><span class="l"><a href="#12">12: </a></span><span class="l"><a href="#13">13: </a></span><span class="l"><a href="#14">14: </a></span><span class="l"><a href="#15">15: </a></span><span class="l"><a href="#16">16: </a></span><span class="l"><a href="#17">17: </a></span><span class="l"><a href="#18">18: </a></span><span class="l"><a href="#19">19: </a></span><span class="l"><a href="#20">20: </a></span><span class="l"><a href="#21">21: </a></span><span class="l"><a href="#22">22: </a></span><span class="l"><a href="#23">23: </a></span><span class="l"><a href="#24">24: </a></span><span class="l"><a href="#25">25: </a></span><span class="l"><a href="#26">26: </a></span><span class="l"><a href="#27">27: </a></span><span class="l"><a href="#28">28: </a></span><span class="l"><a href="#29">29: </a></span><span class="l"><a href="#30">30: </a></span><span class="l"><a href="#31">31: </a></span><span class="l"><a href="#32">32: </a></span><span class="l"><a href="#33">33: </a></span><span class="l"><a href="#34">34: </a></span><span class="l"><a href="#35">35: </a></span><span class="l"><a href="#36">36: </a></span><span class="l"><a href="#37">37: </a></span><span class="l"><a href="#38">38: </a></span><span class="l"><a href="#39">39: </a></span><span class="l"><a href="#40">40: </a></span><span class="l"><a href="#41">41: </a></span><span class="l"><a href="#42">42: </a></span><span class="l"><a href="#43">43: </a></span><span class="l"><a href="#44">44: </a></span><span class="l"><a href="#45">45: </a></span><span class="l"><a href="#46">46: </a></span><span class="l"><a href="#47">47: </a></span><span class="l"><a href="#48">48: </a></span><span class="l"><a href="#49">49: </a></span><span class="l"><a href="#50">50: </a></span><span class="l"><a href="#51">51: </a></span><span class="l"><a href="#52">52: </a></span><span class="l"><a href="#53">53: </a></span><span class="l"><a href="#54">54: </a></span><span class="l"><a href="#55">55: </a></span><span class="l"><a href="#56">56: </a></span><span class="l"><a href="#57">57: </a></span><span class="l"><a href="#58">58: </a></span></code></pre>
            <pre class="code"><code><span id="1" class="l"><span class="xlang">&lt;?php</span>
</span><span id="2" class="l">
</span><span id="3" class="l"><span class="php-comment">/**
</span></span><span id="4" class="l"><span class="php-comment"> * @package     Ajax
</span></span><span id="5" class="l"><span class="php-comment"> * @subpackage  Controllers
</span></span><span id="6" class="l"><span class="php-comment"> * @category    Framework PHP
</span></span><span id="7" class="l"><span class="php-comment"> * @copyright   &amp;copy; 2005-2019 PHPBoost
</span></span><span id="8" class="l"><span class="php-comment"> * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
</span></span><span id="9" class="l"><span class="php-comment"> * @author      Julien BRISWALTER &lt;j1.seth@phpboost.com&gt;
</span></span><span id="10" class="l"><span class="php-comment"> * @version     PHPBoost 5.2 - last update: 2016 04 28
</span></span><span id="11" class="l"><span class="php-comment"> * @since       PHPBoost 4.0 - 2013 06 26
</span></span><span id="12" class="l"><span class="php-comment"> */</span>
</span><span id="13" class="l">
</span><span id="14" class="l"><span class="php-keyword1">class</span> AjaxSearchUserAutoCompleteController <span class="php-keyword1">extends</span> AbstractController
</span><span id="15" class="l">{
</span><span id="16" class="l">    <span class="php-keyword1">public</span> <span class="php-keyword1">function</span> execute(HTTPRequestCustom <span class="php-var">$request</span>)
</span><span id="17" class="l">    {
</span><span id="18" class="l">        <span class="php-var">$lang</span> = LangLoader::get(<span class="php-quote">'common'</span>);
</span><span id="19" class="l">        <span class="php-var">$is_admin</span> = AppContext::<span class="php-keyword2">get_current_user</span>()-&gt;check_level(User::ADMIN_LEVEL);
</span><span id="20" class="l">        <span class="php-var">$number_admins</span> = UserService::count_admin_members();
</span><span id="21" class="l">        <span class="php-var">$suggestions</span> = <span class="php-keyword1">array</span>();
</span><span id="22" class="l">
</span><span id="23" class="l">        <span class="php-keyword1">try</span> {
</span><span id="24" class="l">            <span class="php-var">$result</span> = PersistenceContext::get_querier()-&gt;select(<span class="php-quote">&quot;SELECT user_id, display_name, level, groups FROM &quot;</span> . DB_TABLE_MEMBER . <span class="php-quote">&quot; WHERE display_name LIKE '&quot;</span> . <span class="php-keyword2">str_replace</span>(<span class="php-quote">'*'</span>, <span class="php-quote">'%'</span>, <span class="php-var">$request</span>-&gt;get_value(<span class="php-quote">'value'</span>, <span class="php-quote">''</span>)) . <span class="php-quote">&quot;%'&quot;</span>);
</span><span id="25" class="l">
</span><span id="26" class="l">            <span class="php-keyword1">while</span>(<span class="php-var">$row</span> = <span class="php-var">$result</span>-&gt;fetch())
</span><span id="27" class="l">            {
</span><span id="28" class="l">                <span class="php-var">$user_group_color</span> = User::get_group_color(<span class="php-var">$row</span>[<span class="php-quote">'groups'</span>], <span class="php-var">$row</span>[<span class="php-quote">'level'</span>]);
</span><span id="29" class="l">
</span><span id="30" class="l">                <span class="php-var">$suggestion</span> = <span class="php-quote">''</span>;
</span><span id="31" class="l">
</span><span id="32" class="l">                <span class="php-keyword1">if</span> (<span class="php-var">$is_admin</span>)
</span><span id="33" class="l">                {
</span><span id="34" class="l">                    <span class="php-var">$edit_link</span> = <span class="php-keyword1">new</span> LinkHTMLElement(UserUrlBuilder::edit_profile(<span class="php-var">$row</span>[<span class="php-quote">'user_id'</span>]), <span class="php-quote">''</span>, <span class="php-keyword1">array</span>(<span class="php-quote">'title'</span> =&gt; <span class="php-var">$lang</span>[<span class="php-quote">'edit'</span>]), <span class="php-quote">'fa fa-edit'</span>);
</span><span id="35" class="l">
</span><span id="36" class="l">                    <span class="php-keyword1">if</span> (<span class="php-var">$row</span>[<span class="php-quote">'level'</span>] != User::ADMIN_LEVEL || (<span class="php-var">$row</span>[<span class="php-quote">'level'</span>] == User::ADMIN_LEVEL &amp;&amp; <span class="php-var">$number_admins</span> &gt; <span class="php-num">1</span>))
</span><span id="37" class="l">                        <span class="php-var">$delete_link</span> = <span class="php-keyword1">new</span> LinkHTMLElement(AdminMembersUrlBuilder::<span class="php-keyword2">delete</span>(<span class="php-var">$row</span>[<span class="php-quote">'user_id'</span>]), <span class="php-quote">''</span>, <span class="php-keyword1">array</span>(<span class="php-quote">'title'</span> =&gt; <span class="php-var">$lang</span>[<span class="php-quote">'delete'</span>], <span class="php-quote">'data-confirmation'</span> =&gt; <span class="php-quote">'delete-element'</span>), <span class="php-quote">'fa fa-delete'</span>);
</span><span id="38" class="l">                    <span class="php-keyword1">else</span>
</span><span id="39" class="l">                        <span class="php-var">$delete_link</span> = <span class="php-keyword1">new</span> LinkHTMLElement(<span class="php-quote">''</span>, <span class="php-quote">''</span>, <span class="php-keyword1">array</span>(<span class="php-quote">'title'</span> =&gt; <span class="php-var">$lang</span>[<span class="php-quote">'delete'</span>], <span class="php-quote">'onclick'</span> =&gt; <span class="php-quote">'return false;'</span>), <span class="php-quote">'fa fa-delete icon-disabled'</span>);
</span><span id="40" class="l">
</span><span id="41" class="l">                    <span class="php-var">$suggestion</span> .= <span class="php-var">$edit_link</span>-&gt;display() . <span class="php-quote">'&amp;nbsp;'</span> . <span class="php-var">$delete_link</span>-&gt;display() . <span class="php-quote">'&amp;nbsp;'</span>;
</span><span id="42" class="l">                }
</span><span id="43" class="l">
</span><span id="44" class="l">                <span class="php-var">$profile_link</span> = <span class="php-keyword1">new</span> LinkHTMLElement(UserUrlBuilder::profile(<span class="php-var">$row</span>[<span class="php-quote">'user_id'</span>])-&gt;rel(), <span class="php-var">$row</span>[<span class="php-quote">'display_name'</span>], <span class="php-keyword1">array</span>(<span class="php-quote">'style'</span> =&gt; (!<span class="php-keyword1">empty</span>(<span class="php-var">$user_group_color</span>) ? <span class="php-quote">'color:'</span> . <span class="php-var">$user_group_color</span> : <span class="php-quote">''</span>)), UserService::get_level_class(<span class="php-var">$row</span>[<span class="php-quote">'level'</span>]));
</span><span id="45" class="l">
</span><span id="46" class="l">                <span class="php-var">$suggestion</span> .= <span class="php-var">$profile_link</span>-&gt;display();
</span><span id="47" class="l">
</span><span id="48" class="l">                <span class="php-var">$suggestions</span>[] = <span class="php-var">$suggestion</span>;
</span><span id="49" class="l">            }
</span><span id="50" class="l">            <span class="php-var">$result</span>-&gt;dispose();
</span><span id="51" class="l">        } <span class="php-keyword1">catch</span> (Exception <span class="php-var">$e</span>) {
</span><span id="52" class="l">        }
</span><span id="53" class="l">
</span><span id="54" class="l">        <span class="php-keyword1">return</span> <span class="php-keyword1">new</span> JSONResponse(<span class="php-keyword1">array</span>(<span class="php-quote">'suggestions'</span> =&gt; <span class="php-var">$suggestions</span>));
</span><span id="55" class="l">    }
</span><span id="56" class="l">}
</span><span id="57" class="l"><span class="xlang">?&gt;</span>
</span><span id="58" class="l"></span></code></pre>
		</div>
	</article>
	<footer></footer>
</section>

				<div id="apigen-footer">
					 API documentation generated by <a href="http://apigen.org">ApiGen</a>
				</div>
			</div>
		</div>
	</div>

	<script>jQuery("#cssmenu-package").menumaker({ title: "Packages navigation", format: "multitoggle", breakpoint: 768 }); </script>
	<script>jQuery("#cssmenu-classes").menumaker({ title: "Classes navigation", format: "multitoggle", breakpoint: 768 }); </script>
<?php require_once PATH_TO_ROOT . '/kernel/footer.php'; ?>