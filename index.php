<?php require('includes/head.php'); ?>
<p class="center">
	<img src="images/opauth-diagram.png" alt="Opauth diagram">
</p>

<div class="highlight">
	<p>Opauth enables PHP applications to do <em>user authentication</em> with ease.</p>

	<p class="buttons">
	<a href="#demo" class="button primary">Demo</a>
	<a href="#quickstart" class="button">How to use</a>
	<a href="https://github.com/uzyn/opauth/wiki" class="button" target="_blank">Documentations</a>
	</p>		
</div>

<h2>What is Opauth?</h2>

<p>Inspired by <a href="https://github.com/intridea/omniauth">OmniAuth for Ruby</a>, Opauth provides a standardized method for PHP applications to interface with authentication providers. </p>

<p>Opauth as a framework provides a set of API that allows developers to <a href="https://github.com/uzyn/opauth/wiki/Strategy-Contribution-Guide">create strategies</a> that work in a predictable manner across PHP frameworks and applications.</p>

<p>Opauth works well with other PHP applications & frameworks. It is currently supported on:
	<ul>
	<li>
	<a href="https://github.com/uzyn/opauth/tree/master/example">vanilla (plain) PHP applications</a> <small><em>(of course)</em></small>
	</li>
	<li>
	<a href="https://github.com/uzyn/cakephp-opauth">CakePHP</a> <small><em>(maintained by <a href="https://github.com/uzyn">uzyn</a>)</em></small></li>
	<li>
	<a href="https://github.com/destinomultimedia/ci_opauth">CodeIgniter</a> <small><em>(maintained by <a href="https://github.com/destinomultimedia">destinomultimedia</a>)</em></small></li>
	<li>
	<a href="https://github.com/mcatm/Opauth-Plugin-for-Codeigniter">CodeIgniter</a> <small><em>(maintained by <a href="https://github.com/mcatm">mcatm</a>)</em></small></li>
	<li><a href="https://github.com/andreoav/fuel-opauth">FuelPHP</a> <small><em>(maintained by <a href="https://github.com/andreoav/">andreoav</a>)</em></small></li>
	<li>
	<a href="https://github.com/kahwee/yii-opauth">Yii Framework</a> <small><em>(maintained by <a href="https://github.com/kahwee">kahwee</a>)</em></small></li>
	<li>and more to come.</li>
	</ul>
</p>
<p>If your PHP framework of choice is not yet listed, you can still use Opauth like you would a normal PHP component (class).</p>

<p><script async class="speakerdeck-embed" data-id="4fbb28ec15a68f001f012325" data-ratio="1.4143646408839778" src="//speakerdeck.com/assets/embed.js"></script></p>

<h2><a name="strategies"></a><a name="demo"></a>Available strategies</h2>

<p>Provider-specific:</p>

<table>
<tr>
<th>Strategy</th>
    <th>Info</th>
    <th>Download</th>
	<th>&nbsp;</th>
</tr>
<tr>
<td><img src="images/favicons/facebook.com.png"> Facebook</td>
    <td><a href="https://github.com/uzyn/opauth-facebook">uzyn/opauth-facebook</a></td>
    <td>
        <a href="https://github.com/uzyn/opauth-facebook/zipball/master">ZIP</a> / 
        <a href="https://github.com/uzyn/opauth-facebook/tarball/master">TAR</a>
    </td>
	<td><a href="auth/facebook" class="tryme">Try me!</a></td>
</tr>
<tr>
<td><img src="images/favicons/google.com.png"> Google</td>
    <td><a href="https://github.com/uzyn/opauth-google">uzyn/opauth-google</a></td>
    <td>
        <a href="https://github.com/uzyn/opauth-google/zipball/master">ZIP</a> / 
        <a href="https://github.com/uzyn/opauth-google/tarball/master">TAR</a>
    </td>
	<td><a href="auth/google" class="tryme">Try me!</a></td>
</tr>
<tr>
<td><img src="images/favicons/twitter.com.png"> Twitter</td>
    <td><a href="https://github.com/uzyn/opauth-twitter">uzyn/opauth-twitter</a></td>
    <td>
        <a href="https://github.com/uzyn/opauth-twitter/zipball/master">ZIP</a> / 
        <a href="https://github.com/uzyn/opauth-twitter/tarball/master">TAR</a>
    </td>
	<td><a href="auth/twitter" class="tryme">Try me!</a></td>
</tr>
<tr>
<td><img src="images/favicons/instagram.com.png"> Instagram</td>
    <td><a href="https://github.com/muhdazrain/opauth-instagram">muhdazrain/opauth-instagram</a></td>
    <td>
        <a href="https://github.com/muhdazrain/opauth-instagram/zipball/master">ZIP</a> / 
        <a href="https://github.com/muhdazrain/opauth-instagram/tarball/master">TAR</a>
    </td>
	<td><a href="auth/instagram" class="tryme">Try me!</a></td>
</tr>
<tr>
<td><img src="images/favicons/linkedin.com.png"> LinkedIn</td>
    <td><a href="https://github.com/uzyn/opauth-linkedin">uzyn/opauth-linkedin</a></td>
    <td>
        <a href="https://github.com/uzyn/opauth-linkedin/zipball/master">ZIP</a> / 
        <a href="https://github.com/uzyn/opauth-linkedin/tarball/master">TAR</a>
    </td>
	<td><a href="auth/linkedin" class="tryme">Try me!</a></td>
</tr>
<tr>
<td><img src="images/favicons/openid.net.png"> OpenID</td>
    <td><a href="https://github.com/uzyn/opauth-openid">uzyn/opauth-openid</a></td>
    <td>
        <a href="https://github.com/uzyn/opauth-openid/zipball/master">ZIP</a> / 
        <a href="https://github.com/uzyn/opauth-openid/tarball/master">TAR</a>
    </td>
	<td><a href="auth/openid" class="tryme">Try me!</a></td>
</tr>
<tr>
<td><img src="images/favicons/mixi.co.jp.png"> mixi</td>
    <td><a href="https://github.com/ritou/opauth-mixi">ritou/opauth-mixi</a></td>
    <td>
        <a href="https://github.com/ritou/opauth-mixi/zipball/master">ZIP</a> / 
        <a href="https://github.com/ritou/opauth-mixi/tarball/master">TAR</a>
    </td>
	<td></td>
</tr>

</table>

<p>Generic strategy: <a href="https://github.com/uzyn/opauth-oauth">OAuth</a></p>

<p>See <a href="https://github.com/uzyn/opauth/wiki/List-of-strategies">wiki's list of strategies</a> for an updated list of Opauth strategies or to make requests.  Also, refer to <a href="https://github.com/uzyn/opauth/wiki/Strategy-contribution-guide">strategy contribution guide</a> if you would like to contribute a strategy.</p>

<h2><a name="quickstart"></a>Quick start</h2>

<ol>
	<li><a href="https://github.com/uzyn/opauth/zipball/master">Download</a> or <code><a href="https://github.com/uzyn/opauth">git clone</a></code> Opauth.</li>
<li><p>Set <code>DocumentRoot</code> of your web server to <code>example/</code>.<br>
(Opauth can be instantiated in your own PHP app, but we will leave that out of this quick start guide)</p></li>
<li><p>Configure Opauth<br><code>cp example/opauth.conf.php.default example/opauth.conf.php</code><br>
and make the necessary changes.</p></li>
<li><p>Install some <a href="#strategies">Opauth strategies</a>.<br>
We recommend that you start with <strong>Facebook</strong></p></li>
<li><p>Send user to <code>http://path_to_opauth/<strong>facebook</strong></code> to authenticate.</p></li>
</ol><p>Check out <a href="https://github.com/uzyn/opauth/wiki">the wiki</a> for more details &amp; documentations.</p>

<h2>Issues &amp; questions</h2>

<ul>
<li>Issues: <a href="https://github.com/uzyn/opauth/issues">Github Issues</a><br>
</li>
<li>Discussion group: <a href="https://groups.google.com/group/opauth">Google Groups</a><br>
</li>
<li>Twitter: <a href="http://twitter.com/uzyn">@uzyn</a><br>
</li>
<li>Email me: <a href="mailto:chua@uzyn.com">chua@uzyn.com</a><br>
</li>
<li>IRC: <strong>#opauth</strong> on <a href="http://webchat.freenode.net/?channels=opauth&amp;uio=d4">Freenode</a>
</li>
</ul>

<p>Used Opauth in your project? Tell us! We'll provide a link to your site.</p>

<?php require('includes/foot.php'); ?>