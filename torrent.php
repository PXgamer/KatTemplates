<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="auto">

<?php
  $torrent = array();
  require_once("funcs.php");
  $db_conn = \funcs\Functions::conn();
  $sql = "SELECT * FROM torrents WHERE id = ".mysqli_real_escape_string($db_conn, $_GET['id']);

  $torrent_data = \funcs\Functions::query($db_conn, $sql);
  while ($row = mysqli_fetch_assoc($torrent_data)) {
    $torrent['title'] = $row['title'];
  }
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Download <?php echo $torrent['title']; ?> torrent or any other torrent from <?php echo $torrent['category']; ?>  category."/>
    <title><?php echo $torrent['title']; ?> Torrent - Kickass Torrents</title>
    <link rel="stylesheet" type="text/css" href="assets/css/css.css" charset="utf-8" />

    <script src="" type="text/javascript"></script>
    <script src="" type="text/javascript"></script>
    <link rel="alternate" type="application/rss+xml" title="Subscribe to RSS feed" href="/?rss=1"/>
        <meta name="verify-v1" content="YccN/iP28SifHNEFY6u92i0ou3tAegQAIk2OyOJLp1s="/>
    <meta name="y_key" content="f0b40c3f5fee758f"/>
    <meta name="google-site-verification" content="C1rNEC4fJIvFoyyccMV2PbuqX3P-SFtlD2MNZ9D2uy0" />
    <link rel="search" type="application/opensearchdescription+xml" title="KickassTorrents Torrent Search" href="/opensearch.xml"/>
    <meta property="fb:app_id" content="123694587642603"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
</head>
<body class="mainBody">
<div id="wrapper">
    <div id="wrapperInner">
<div  data-sc-slot="_60318cd4e8d28f6fb76fe34e9bd9c498"></div>


    <header>
	<nav id="menu">
		<a href="/" id="logo"></a>
		<a href="#" id="showHideSearch"><i class="ka ka-zoom"></i></a>
		<div id="torrentSearch">
			<form action="/usearch/" method="get" id="searchform" accept-charset="utf-8" onsubmit="return doSearch(this.q.value);">
				<input id="contentSearch" class="input-big" type="text" name="q" value="" autocomplete="off" placeholder="Search query" /><div id="searchTool"><a title="Advanced search" href="/advanced/" class="ajaxLink"><i class="ka ka-settings"></i></a><button title="search" type="submit" value="" onfocus="this.blur();" onclick="this.blur();"><i class="ka ka-search"></i></button></div>
			</form>
		</div>
		<ul id="navigation">
		<form name="logoutform" action="/auth/logout/" method="post" style="display:none"><input type="hidden" name="csrf_token" value="e107e6bc2ae13576ef75d4f9a380d1e0"/></form>


			<li> <a href="/browse/"> <i class="ka ka-torrent"></i><span class="menuItem">browse</span></a>
				<ul class="dropdown dp-middle dropdown-msg upper">
											<li class="topMsg"><a href="/new/"><i class="ka ka16 ka-torrent"></i>latest</a></li>
											<li class="topMsg"><a href="/movies/"><i class="ka ka16 ka-movie lower"></i>Movies</a></li>
					<li class="topMsg"><a href="/tv/"><i class="ka ka16 ka-movie lower"></i>TV</a></li>
					<li class="topMsg"><a href="/music/"><i class="ka ka16 ka-music-note"></i>Music</a></li>
					<li class="topMsg"><a href="/games/"><i class="ka ka16 ka-settings lower"></i>Games</a></li>
					<li class="topMsg"><a href="/books/"><i class="ka ka16 ka-bookmark"></i>Books</a></li>
					<li class="topMsg"><a href="/applications/"><i class="ka ka16 ka-settings lower"></i>Apps</a></li>
					<li class="topMsg"><a href="/anime/"><i class="ka ka16 ka-movie lower"></i>Anime</a></li>
					<li class="topMsg"><a href="/other/"><i class="ka ka16 ka-torrent"></i>Other</a></li>
											<li class="topMsg"><a href="/xxx/"><i class="ka ka16 ka-delete"></i>XXX</a></li>
									</ul>
			</li>


			<li> <a href="/upload/" class="ajaxLink"><i class="ka ka-arrow-up"></i><span class="menuItem">upload</span></a>
				<ul class="dropdown dp-left upper">
					<li><a href="/user/PXgamer/uploads/"><i class="ka ka16 ka-torrent"></i>My uploads</a></li>
				</ul>
			</li>


			<li class="showOnlyWide"><a href="/bookmarks/"><i class="ka ka-bookmark"></i><span class="menuItem">bookmarks</span></a>
				<ul class="dropdown dp-middle dropdown-msg upper">
					<li class="topMsg"><a href="/bookmarks/torrents/"><i class="ka ka16 ka-torrent"></i>Torrents</a></li>
					<li class="topMsg"><a href="/bookmarks/community/"><i class="ka ka16 ka-community lower"></i>Community</a></li>
					<li class="topMsg"><a href="/bookmarks/users/"><i class="ka ka16 ka-users lower"></i>Users</a></li>
					<li class="topMsg"><a href="/bookmarks/tvshows/"><i class="ka ka16 ka-movie lower"></i>TV Shows</a></li>
					<li class="topMsg"><a href="/bookmarks/movies/"><i class="ka ka16 ka-movie lower"></i>Movies</a></li>
					<li class="topMsg"><a href="/bookmarks/music/"><i class="ka ka16 ka-music-note"></i>Music</a></li>
					<li class="topMsg"><a href="/bookmarks/games/"><i class="ka ka16 ka-settings lower"></i>Games</a></li>
					<li class="topMsg"><a href="/bookmarks/books/"><i class="ka ka16 ka-bookmark"></i>Books</a></li>
					<li class="topMsg"><a href="/bookmarks/anime/"><i class="ka ka16 ka-movie lower"></i>Anime</a></li>
					<li class="topMsg"><a href="/bookmarks/ideas/"><i class="ka ka16 ka-idea"></i>Ideas</a></li>
					<li class="topMsg"><a href="/bookmarks/blogs/"><i class="ka ka16 ka-comment"></i>Blogs</a></li>
				</ul>
			</li>


			<li class="showFeedback"><a href="/feedback/" class="ajaxLink"><i class="ka ka-thumbs-up"><i class="valueBubble"><span>46</span></i></i><span class="menuItem">feedback</span></a>
				<ul class="dropdown dp-left upper">
					<li><a href="/account/history/"><i class="ka ka16 ka-torrent"></i>My history</a></li>
				</ul>
			</li>


			<li> <a href="/community/"> <i class="ka ka-community"></i><span class="menuItem">Community</span></a>
				<ul class="dropdown dp-left upper">
					<li><a href="/blog/"><i class="ka ka16 ka-rss lower"></i>blog</a></li>
					<li><a href="/community/socialgroups/"><i class="ka ka16 ka-users lower"></i>Social groups</a></li>
					<li><a href="/faq/"><i class="ka ka16 ka-faq lower"></i>FAQ</a></li>
        			<li><a href="/rules/"><i class="ka ka16 ka-text lower"></i>rules</a></li>
				</ul>
			</li>

			<li><a href="/messenger/"><i class="ka ka-message"></i><span class="menuItem">messages</span></a>
				<ul class="dp-right dropdown dropdown-msg" data-selector=".dialogboxes">
					<li class="topMsg upper"><a href="/messenger/create/" class="ajaxLink"><i class="ka ka16 ka-message lower"></i>Create new</a></li>
					<li class="topMsg upper"><a href="/messenger/"><i class="ka ka16 ka-list2 lower"></i>Dialogs</a></li>

				</ul>
			</li>


			<li><a href="/user/PXgamer/"><img src="" class="userImage"><i class="valueBubble hideFeedback valueBubbleUser"></i><span class="usernameProfile menuItem">PXgamer</span></a>
				<ul class="dp-right dropdown upper">
					<li><a href="/settings/" class="ajaxLink"><i class="ka ka16 ka-settings lower"></i>settings</a></li>
					<li class="showOnlyNarrow"> <a href="/bookmarks/"> <i class="ka ka16 ka-bookmark"></i>Bookmarks</a></li>
					<li class="hideFeedback"><a href="/feedback/" class="ajaxLink"><i class="ka ka16 ka-thumbs-up lower"></i>Feedback<i class="valueBlock">46</i></a></li>
					<li class="hideFeedback"><a href="/account/history/"><i class="ka ka16 ka-torrent"></i>My history</a></li>

					<li><a href="/auth/logout/" onclick="return doLogout();"><i class="ka ka16 ka-user-move"></i>Sign out</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</header>

<div class="pusher"></div>
<div class="mainpart">


<script type="text/javascript" charset="utf-8">
$(function() {
    $('#desc img').each(function() {
        if ($(this).attr('width') > '620')  {
            $(this).attr('width','620');
        }
        $(this).removeAttr('height');
    });
});
</script>
<table cellspacing="0" cellpadding="0" class="doublecelltable width100perc" id="mainDetailsTable">
	<tr>
		<td width="100%">
        					<div class="goodFake" itemscope itemtype="http://schema.org/AggregateRating">
    <meta itemprop="ratingValue" content="4" />
    <meta itemprop="bestRating" content="10" />
    <meta itemprop="ratingCount" content="383" />

    <div class="floatleft inlineblock">
        <a title="Good" id="thnxLink" data-hash="<?php echo $torrent['hash']; ?>" class="jslike" href="#">
            <span class="block relative"><span class="thnx"></span><span class="siteButton torrentfingers"></span></span>
            <span class="siteButton smallButton" id="thnxCount"><span>+<?php echo $torrent['upvotes']; ?></span></span>
        </a>
            </div>
    <div class="floatright inlineblock">
        <a title="Bad" id="fakeLink" data-hash="<?php echo $torrent['hash']; ?>" class="jsdislike" href="#">
            <span class="block relative"><span class="fake"></span><span class="siteButton redButton torrentfingers"></span></span>
            <span class="siteButton smallButton redButton" id="fakeCount"><span>-<?php echo $torrent['downvotes']; ?></span></span>
        </a>
            </div>

                    <span id="reported" class="block clear widthauto reportedMessage center" style="margin:0 3px 0 0">
        <span class="font11px widthauto" title="misleading title">reported</span>
                </span>
            </div>
				<h1 class="novertmarg"><a href="/t-t<?php echo $torrent['id']; ?>.html"><span itemprop="name"><?php echo $torrent['title']; ?></span></a></h1>
					<div class="seedLeachContainer">
				<div class="seedBlock"><i class="ka kaBox ka-arrow-up"></i>seeders: <strong><?php echo $torrent['seeders']; ?></strong></div>
				<div class="leechBlock"><i class="ka kaBox ka-arrow-down"></i>leechers: <strong><?php echo $torrent['leechers']; ?></strong></div>
				<div class="timeBlock"><i class="ka kaBox ka-poll"></i></span>updated: <time title="27 Jun 2016, 13:01<?php echo date("j M Y, h:m", $torrent['upload_date']); ?>" datetime="<?php echo $torrent['upload_date']; ?>"><?php echo $torrent['upload_date']; ?></time></div>
			</div>

<div class="buttonsline downloadButtonGroup clearleft novertpad">
    		<a class="kaGiantButton ajaxLink" href="/messenger/create/?text=Hey,%0Acheck%20out%20[torrent=12833039]" title="Send in a private message"><i class="ka ka-message"></i></a>
                <a class="kaGiantButton postLink" title="Add torrent to personal RSS" href="/bookmarks/add/rss/<?php echo $torrent['hash']; ?>/"><i class="ka ka-rss"></i></a>

            <a class="kaGiantButton ajaxLink" title="Add to bookmarks" href="/bookmarks/add/torrent/<?php echo $torrent['hash']; ?>/"><i class="ka ka-follow"></i></a>

    <a class="kaGiantButton  askFeedbackjs" data-nop title="Magnet link" href="magnet:?xt=urn:btih:<?php echo $torrent['hash']; ?>&dn=<?php echo urlencode($torrent['title']); ?>&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce"  data-id="DA33AD084304541B12F5FE039B81102EFCB82761"><i class="ka ka-magnet"></i></a>

            <a data-download rel="nofollow" class="kaGiantButton siteButton iconButton" title="Download verified torrent file" href="https://itorrents.org/torrent/<?php echo $torrent['hash']; ?>.torrent"><i class="ka ka-verify"></i><span>Download torrent</span></a>
                <div data-sc-replace data-sc-slot="_b6f619f42a2411c6688f2273fa3f628a" class="inlineblock" data-sc-params="{ 'magnet': 'magnet:?xt=urn:btih:<?php echo $torrent['hash']; ?>&dn=<?php echo urlencode($torrent['title']); ?>&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce', 'extension': 'mkv', 'stream': 'magnet:?xt=urn:btih:<?php echo $torrent['hash']; ?>&dn=<?php echo urlencode($torrent['title']); ?>&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce' }"></div>
            </div>
                            <div  data-sc-slot="_ad4d917f2e764fab63b916b5e0655d2e" class="block botmarg5px"></div>
                <div  data-sc-slot="_151f50b61bb9a7633562d3f308691182"></div>
            					<div class="font11px lightgrey line160perc">
Added on <?php echo date("h:m M j, Y", $torrent['upload_date']); ?> by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="<?php echo $torrent['uploader->acl_colour']; ?>"><a class="plain" href="/user/<?php echo $torrent['uploader']['username']; ?>/"><?php echo $torrent['uploader']['username']; ?></a></span><span title="Reputation" class="repValue positive"><?php echo $torrent['uploader->reputation']; ?></span> <a rel="nofollow" href="/messenger/create/<?php echo $torrent['uploader->username']; ?>/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> in <span id="cat_12833039"><strong><a href="/<?php echo $torrent['category']; ?>/"><?php echo $torrent['category']; ?></a></strong></span><br>
	Torrent verified.	Downloaded <?php echo $torrent['dl_count']; ?> times.
</div>

            <div class="tabs tabSwitcher">
				<ul class="tabNavigation">
					<li><a href="#main" rel="main" class="darkButton"><span>Main</span></a></li>
                                        <li><a href="#technical" rel="technical" class="darkButton"><span>Technical</span></a></li>
                                                            <li class="hideInOpera"><a href="#trailer" id="trailer_link" rel="trailer" class="darkButton"><span>Trailer</span></a></li>
                                                            <li><a href="#comment" rel="comment" class="darkButton"><span>Comments <i class="menuValue">123</i></span></a></li>
				</ul>
				<hr class="tabsSeparator" />
                <div id="tab-main" class="contentTabContainer">
                                            	    									<div class="torrentMediaInfo">
    <a class="movieCover" href="/t-i<?php echo $torrent['id']; ?>/"><img src="" /></a>
    <div class="dataList">
        <ul class="block overauto botmarg0">
            <li><strong>Movie:</strong> <a href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/"><span><?php echo $torrent['title']; ?></span></a></li>
            <li><strong>Detected quality:</strong> <span id="quality_12833039">HDRiP</span></li>
            <li><strong>IMDb link:</strong> <a class="plain" href="http://www.imdb.com/title/tt2975590/">2975590</a></li>
                        <li><strong>IMDb rating:</strong> 7.1 (290,150 votes) </li>
                                    <li><strong>RottenTomatoes:</strong> <span class="rottentomatoes positive" title="rotten!"></span>0% <span class="rottenaudience positive" title="spilled"></span>66% </li>
                                        <li><strong>Watch on <a data-nop target="_blank" href="https://www.solarmovie.ph">Solarmovie</a>:</strong> <a data-nop target="_blank" href="https://www.solarmovie.ph/watch-batman-v-superman-dawn-of-justice-2016.html"><?php echo $torrent['title']; ?></a></li>
                                    <li><strong>Genres:</strong>  <a class="plain" href="/movies/genre/action/"><span>Action</span></a>,  <a class="plain" href="/movies/genre/sci-fi/"><span>Sci Fi</span></a>,  <a class="plain" href="/movies/genre/adventure/"><span>Adventure</span></a>,  <a class="plain" href="/movies/genre/fantasy/"><span>Fantasy</span></a> </li>
                    </ul>
        <ul>
                    <li><a href="/bookmarks/add/movie/2975590/" class="postLink kaButton smallButton normalText"><i class="ka ka-bookmark"></i> add <strong><?php echo $torrent['title']; ?></strong> to bookmarks</a></li>
                                <li><strong>Release date:</strong> 25 March 2016</li>
                                <li><strong>Writers:</strong> Chris Terrio, David S. Goyer, Bob Kane (Batman created by), Bill Finger (Batman created by), Jerry Siegel (Superman created by), Joe Shuster (Superman created by)</li>

                    <li><strong>Director:</strong> <span><a href="/movies/director/zack-snyder-a0811583/">Zack Snyder</a></li>
                                <li class="data_lang"><strong>Language:</strong>
                <span id="lang_12833039_2">English
        </span>
                            </li>

                        </ul>
                <div class="floatleft width100perc botmarg10px"><strong>Cast:</strong>  <span><a href="/movies/actor/ben-affleck-a0000255/">Ben Affleck</a></span>,              <span><a href="/movies/actor/amy-adams-a0010736/">Amy Adams</a></span>,              <span><a href="/movies/actor/henry-cavill-a0147147/">Henry Cavill</a></span>,              <span><a href="/movies/actor/jason-momoa-a0597388/">Jason Momoa</a></span> and others             </div>
                        <div class="floatleft width100perc botmarg10px">
            <strong>Summary:</strong>
                <div id="summary">
<p class="accentbox botmarg10px">
    Fearing the actions of Superman are left unchecked, Batman takes on the man of steel, while the world wrestles with what kind of a hero it really needs. With Batman and Superman fighting each other, a new threat, Doomsday, is created by Lex Luthor. It's up to Superman and Batman to set aside their differences along with Wonder Woman to stop Lex Luthor and Doomsday from destroying Metropolis.<br />
    </p>
<strong><small>Written by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_2"><a class="plain" href="/user/.XORN./">.XORN.</a></span><span title="Reputation" class="repValue positive">89.48K</span> <a rel="nofollow" href="/messenger/create/.XORN./" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span></small></strong>
    <span class="font11px lightgrey italic">Last edited by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_8"><a class="plain" href="/user/Hand_of_Doom/">Hand_of_Doom</a></span> <a rel="nofollow" href="/messenger/create/Hand_of_Doom/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>, 3&nbsp;months&nbsp;ago</span>



                <a href="/summary/edit/40328/" class="ajaxLink kaButton smallButton normalText"><i class="ka ka-edit"></i> Edit</a>

    </div>

        </div>
                                <div class="pages marg0 floatleft"> <strong class="botpad5px block">Available in versions:</strong> <a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#1080p">1080p</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#720p">720p</a><a class="turnoverButton siteButton bigButton  active" href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#HDRiP">HDRiP</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#HDTC">HDTC</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#DVDRip">DVDRip</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#x264">x264</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#x265">x265</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#Screener">Screener</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#TeleSync">TeleSync</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#Telecine">Telecine</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#WEB-DL">WEB-DL</a><a class="turnoverButton siteButton bigButton " href="/batman-v-superman-dawn-of-justice-i<?php echo $torrent['id']; ?>/#Cam">Cam</a> </div>
            </div>
    <!-- div class="dataList" -->
    </div>

									<div class="torrent_files">	<span class="folderopen"><span class="foldericon"></span><a href="#" onclick="Toggle('ul_top', this);return false;" title="Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip x264 AC3-DaDDy" class="dotted">Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip x264 AC3-DaDDy</a> (Size: 1.98 <span>GB</span>)</span>
	<div id="torrent_files">
			<table id="ul_top" class="torrentFileList" cellpadding="0" cellspacing="0" width="100%" >

																					<tr >
			<td class="torTree">&nbsp;</td>
			<td class="torFileIcon"><span class="torType filmType"></span></td>
			<td class="torFileName" title="Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip AC3 X264-CoCAColA.mkv">Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip AC3 X264-CoCAColA.mkv</td>
			<td class="torFileSize">1.95 <span>GB</span></td>
		</tr>
							<tr >
			<td class="torTree">&nbsp;</td>
			<td class="torFileIcon"><span class="torType filmType"></span></td>
			<td class="torFileName" title="sample 1.mkv">sample 1.mkv</td>
			<td class="torFileSize">15.27 <span>MB</span></td>
		</tr>
							<tr >
			<td class="torTree">&nbsp;</td>
			<td class="torFileIcon"><span class="torType filmType"></span></td>
			<td class="torFileName" title="Sample 2.mkv">Sample 2.mkv</td>
			<td class="torFileSize">15.02 <span>MB</span></td>
		</tr>
							<tr  class="last">
			<td class="torTree">&nbsp;</td>
			<td class="torFileIcon"><span class="torType txtType"></span></td>
			<td class="torFileName" title="Torrent Downloaded From ExtraTorrent.cc.txt">Torrent Downloaded From ExtraTorrent.cc.txt</td>
			<td class="torFileSize">338 <span>bytes</span></td>
		</tr>

					</table>
		</div>
</div>

                					<div class="data">
                        										<h2>Description</h2>
						<div class="textcontent" id="desc"></div>
									</div>
										            	<h2>Related Torrents</h2>


	<table cellpadding="0" cellspacing="0" class="data" style="width: 100%">
		<tr class="firstr">
			<th class="width100perc nopad">torrent name</th>
        			<th class="center">size</th>
			<th class="center">files</th>
			<th class="center">age</th>
			<th class="center">seed</th>
			<th class="lasttd nobr center">leech</th>
</tr>
						<tr class="odd" id="torrent_related_torrents12836541">
            <td>
            <div class="iaconbox center floatright">
                <a rel="12836541,0" class="icommentjs kaButton smallButton rightButton" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-aac-loki-m2tv-t12836541.html#comment">16 <i class="ka ka-comment"></i></a>				<a class="icon16" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-aac-loki-m2tv-t12836541.html" title="Verified Torrent"><i class="ka ka16 ka-verify ka-green"></i></a>                                <div data-sc-replace data-sc-slot="_ae58c272c09a10c792c6b17d55c20208" class="none" data-sc-params="{ 'name': 'Batman%20V%20Superman%20Dawn%20of%20Jusitce%202016%20Extended%20Cut%20Ultimate%20Edition%20HDRip%20x264%20AAC%20-%20LOKI%20-%20M2Tv', 'extension': 'mkv', 'magnet': 'magnet:?xt=urn:btih:9489C85064339D7C634C2A122CD8B67B35277D86&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+hdrip+x264+aac+loki+m2tv&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce' }"></div>
                <a data-nop title="Torrent magnet link" href="magnet:?xt=urn:btih:9489C85064339D7C634C2A122CD8B67B35277D86&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+hdrip+x264+aac+loki+m2tv&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce" class="icon16 askFeedbackjs" data-id="9489C85064339D7C634C2A122CD8B67B35277D86"><i class="ka ka16 ka-magnet"></i></a>
                <a data-download title="Download torrent file" href="/torrents/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-aac-loki-m2tv-t12836541/" class="icon16 askFeedbackjs"><i class="ka ka16 ka-arrow-down"></i></a>
            </div>
            <div class="torrentname">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-aac-loki-m2tv-t12836541.html" class="torType filmType"></a>
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-aac-loki-m2tv-t12836541.html" class="normalgrey font12px plain bold"></a>
            <div class="markeredBlock torType filmType">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-aac-loki-m2tv-t12836541.html" class="cellMainLink">Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip x264 AAC - LOKI - M2Tv</a>

                                                <span class="font11px lightgrey block">
                                Posted by <i title="Verified Uploader" class="ka ka-verify" style="font-size: 16px;color:orange;"></i> <a class="plain" href="/user/LOKI-Torrents/">LOKI-Torrents</a> in <span id="cat_12836541"><strong><a href="/movies/">Movies</a></strong></span>                	 [<a class="nobr" onclick="getCategories('12836541','25');">change category</a>]<span id="cat_place_12836541"></span>                </span>
            	            </div>
            </td>
									<td class="nobr center">1.41 <span>GB</span></td>
			<td class="center">5</td>
			<td class="center" title="26 Jun 2016, 06:03">1&nbsp;day</td>
			<td class="green center">1250</td>
			<td class="red lasttd center">966</td>
			</tr>
						<tr class="even" id="torrent_related_torrents12832775">
            <td>
            <div class="iaconbox center floatright">
                <a rel="12832775,0" class="icommentjs kaButton smallButton rightButton" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-600mb-hdrip-x264-makintos13-t12832775.html#comment">8 <i class="ka ka-comment"></i></a>				<a class="icon16" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-600mb-hdrip-x264-makintos13-t12832775.html" title="Verified Torrent"><i class="ka ka16 ka-verify ka-green"></i></a>                                <div data-sc-replace data-sc-slot="_ae58c272c09a10c792c6b17d55c20208" class="none" data-sc-params="{ 'name': 'Batman%20V%20Superman%20Dawn%20of%20Jusitce%20-%202016%20-%20Extended%20Cut%20Ultimate%20Edition%20-%20600MB%20-%20HDRip%20-%20x264%20-%20Makintos13', 'extension': 'mkv', 'magnet': 'magnet:?xt=urn:btih:77C0B6D36619D59F2D830E86993816CC02982FA1&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+600mb+hdrip+x264+makintos13&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce' }"></div>
                <a data-nop title="Torrent magnet link" href="magnet:?xt=urn:btih:77C0B6D36619D59F2D830E86993816CC02982FA1&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+600mb+hdrip+x264+makintos13&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce" class="icon16 askFeedbackjs" data-id="77C0B6D36619D59F2D830E86993816CC02982FA1"><i class="ka ka16 ka-magnet"></i></a>
                <a data-download title="Download torrent file" href="/torrents/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-600mb-hdrip-x264-makintos13-t12832775/" class="icon16 askFeedbackjs"><i class="ka ka16 ka-arrow-down"></i></a>
            </div>
            <div class="torrentname">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-600mb-hdrip-x264-makintos13-t12832775.html" class="torType filmType"></a>
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-600mb-hdrip-x264-makintos13-t12832775.html" class="normalgrey font12px plain bold"></a>
            <div class="markeredBlock torType filmType">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-600mb-hdrip-x264-makintos13-t12832775.html" class="cellMainLink">Batman V Superman Dawn of Jusitce - 2016 - Extended Cut Ultimate Edition - 600MB - HDRip - x264 - Makintos13</a>

                                                <span class="font11px lightgrey block">
                                Posted by <i title="Verified Uploader" class="ka ka-verify" style="font-size: 16px;color:orange;"></i> <a class="plain" href="/user/FireofSword/">FireofSword</a> in <span id="cat_12832775"><strong><a href="/movies/">Movies</a></strong></span>                	 [<a class="nobr" onclick="getCategories('12832775','25');">change category</a>]<span id="cat_place_12832775"></span>                </span>
            	            </div>
            </td>
									<td class="nobr center">697.64 <span>MB</span></td>
			<td class="center">1</td>
			<td class="center" title="25 Jun 2016, 10:13">2&nbsp;days</td>
			<td class="green center">704</td>
			<td class="red lasttd center">185</td>
			</tr>
						<tr class="odd" id="torrent_related_torrents12831606">
            <td>
            <div class="iaconbox center floatright">
                <a rel="12831606,0" class="icommentjs kaButton smallButton rightButton" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-vr56-t12831606.html#comment">4 <i class="ka ka-comment"></i></a>				<a class="icon16" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-vr56-t12831606.html" title="Verified Torrent"><i class="ka ka16 ka-verify ka-green"></i></a>                                <div data-sc-replace data-sc-slot="_ae58c272c09a10c792c6b17d55c20208" class="none" data-sc-params="{ 'name': 'Batman%20V%20Superman%20Dawn%20of%20Jusitce%202016%20Extended%20Cut%20Ultimate%20Edition%20HDRip%20x264%20AC3-DaDDy.%5BVR56%5D', 'extension': 'mkv', 'magnet': 'magnet:?xt=urn:btih:123FCB29FBD3C7404BF6179258A9630BC6D2E277&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+hdrip+x264+ac3+daddy+vr56&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce' }"></div>
                <a data-nop title="Torrent magnet link" href="magnet:?xt=urn:btih:123FCB29FBD3C7404BF6179258A9630BC6D2E277&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+hdrip+x264+ac3+daddy+vr56&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce" class="icon16 askFeedbackjs" data-id="123FCB29FBD3C7404BF6179258A9630BC6D2E277"><i class="ka ka16 ka-magnet"></i></a>
                <a data-download title="Download torrent file" href="/torrents/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-vr56-t12831606/" class="icon16 askFeedbackjs"><i class="ka ka16 ka-arrow-down"></i></a>
            </div>
            <div class="torrentname">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-vr56-t12831606.html" class="torType filmType"></a>
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-vr56-t12831606.html" class="normalgrey font12px plain bold"></a>
            <div class="markeredBlock torType filmType">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-vr56-t12831606.html" class="cellMainLink">Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip x264 AC3-DaDDy.[VR56]</a>

                                                <span class="font11px lightgrey block">
                                Posted by <i title="Verified Uploader" class="ka ka-verify" style="font-size: 16px;color:orange;"></i> <a class="plain" href="/user/Simmoncelli/">Simmoncelli</a> in <span id="cat_12831606"><strong><a href="/movies/">Movies</a></strong></span>                	 [<a class="nobr" onclick="getCategories('12831606','25');">change category</a>]<span id="cat_place_12831606"></span>                </span>
            	            </div>
            </td>
									<td class="nobr center">1.98 <span>GB</span></td>
			<td class="center">4</td>
			<td class="center" title="25 Jun 2016, 04:24">2&nbsp;days</td>
			<td class="green center">118</td>
			<td class="red lasttd center">75</td>
			</tr>
						<tr class="even" id="torrent_related_torrents12834886">
            <td>
            <div class="iaconbox center floatright">
                <a rel="12834886,0" class="icommentjs kaButton smallButton rightButton" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-vr56-t12834886.html#comment">4 <i class="ka ka-comment"></i></a>				<a class="icon16" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-vr56-t12834886.html" title="Verified Torrent"><i class="ka ka16 ka-verify ka-green"></i></a>                                <div data-sc-replace data-sc-slot="_ae58c272c09a10c792c6b17d55c20208" class="none" data-sc-params="{ 'name': 'Batman%20V%20Superman%20Dawn%20of%20Jusitce%20-%202016%20-%20Extended%20Cut%20Ultimate%20Edition%5BVR56%5D', 'extension': 'mkv', 'magnet': 'magnet:?xt=urn:btih:FEE23D1870902B1DBBFA8FB1C63EBC1058E2C5E5&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+vr56&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce' }"></div>
                <a data-nop title="Torrent magnet link" href="magnet:?xt=urn:btih:FEE23D1870902B1DBBFA8FB1C63EBC1058E2C5E5&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+vr56&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce" class="icon16 askFeedbackjs" data-id="FEE23D1870902B1DBBFA8FB1C63EBC1058E2C5E5"><i class="ka ka16 ka-magnet"></i></a>
                <a data-download title="Download torrent file" href="/torrents/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-vr56-t12834886/" class="icon16 askFeedbackjs"><i class="ka ka16 ka-arrow-down"></i></a>
            </div>
            <div class="torrentname">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-vr56-t12834886.html" class="torType filmType"></a>
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-vr56-t12834886.html" class="normalgrey font12px plain bold"></a>
            <div class="markeredBlock torType filmType">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-vr56-t12834886.html" class="cellMainLink">Batman V Superman Dawn of Jusitce - 2016 - Extended Cut Ultimate Edition[VR56]</a>

                                                <span class="font11px lightgrey block">
                                Posted by <i title="Verified Uploader" class="ka ka-verify" style="font-size: 16px;color:orange;"></i> <a class="plain" href="/user/Simmoncelli/">Simmoncelli</a> in <span id="cat_12834886"><strong><a href="/movies/">Movies</a></strong></span>                	 [<a class="nobr" onclick="getCategories('12834886','25');">change category</a>]<span id="cat_place_12834886"></span>                </span>
            	            </div>
            </td>
									<td class="nobr center">697.64 <span>MB</span></td>
			<td class="center">2</td>
			<td class="center" title="25 Jun 2016, 20:08">1&nbsp;day</td>
			<td class="green center">62</td>
			<td class="red lasttd center">25</td>
			</tr>
						<tr class="odd" id="torrent_related_torrents12835476">
            <td>
            <div class="iaconbox center floatright">
                <a rel="12835476,0" class="icommentjs kaButton smallButton rightButton" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-ac3-x264-mkv-t12835476.html#comment">9 <i class="ka ka-comment"></i></a>				                                <div data-sc-replace data-sc-slot="_ae58c272c09a10c792c6b17d55c20208" class="none" data-sc-params="{ 'name': 'Batman%20V%20Superman%20Dawn%20of%20Jusitce%202016%20Extended%20Cut%20Ultimate%20Edition%20HDRip%20AC3%20X264.mkv', 'extension': 'mp4', 'magnet': 'magnet:?xt=urn:btih:E8A7A50671B1BA338B7A6F1E1E43D3DAB0ED8942&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+hdrip+ac3+x264+mkv&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce' }"></div>
                <a data-nop title="Torrent magnet link" href="magnet:?xt=urn:btih:E8A7A50671B1BA338B7A6F1E1E43D3DAB0ED8942&dn=batman+v+superman+dawn+of+jusitce+2016+extended+cut+ultimate+edition+hdrip+ac3+x264+mkv&tr=udp%3A%2F%2Ftracker.publicbt.com%2Fannounce&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337%2Fannounce" class="icon16 askFeedbackjs" data-id="E8A7A50671B1BA338B7A6F1E1E43D3DAB0ED8942"><i class="ka ka16 ka-magnet"></i></a>
                <a data-download title="Download torrent file" href="/torrents/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-ac3-x264-mkv-t12835476/" class="icon16 askFeedbackjs"><i class="ka ka16 ka-arrow-down"></i></a>
            </div>
            <div class="torrentname">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-ac3-x264-mkv-t12835476.html" class="torType filmType"></a>
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-ac3-x264-mkv-t12835476.html" class="normalgrey font12px plain bold"></a>
            <div class="markeredBlock torType filmType">
                <a href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-ac3-x264-mkv-t12835476.html" class="cellMainLink">Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip AC3 X264.mkv</a>

                                                <span class="font11px lightgrey block">
                                Posted by <a class="plain" href="/user/mohammad09/">mohammad09</a> in <span id="cat_12835476"><strong><a href="/movies/">Movies</a></strong></span>                	 [<a class="nobr" onclick="getCategories('12835476','25');">change category</a>]<span id="cat_place_12835476"></span>                </span>
            	            </div>
            </td>
									<td class="nobr center">925.43 <span>MB</span></td>
			<td class="center">1</td>
			<td class="center" title="25 Jun 2016, 23:10">1&nbsp;day</td>
			<td class="green center">77</td>
			<td class="red lasttd center">29</td>
			</tr>
			</table>

	            									<h2>Sharing Widget</h2>
<br />
<div class="sharingWidgetBox">
	<div class="sharingWidget borderrad3px floatleft">
	<a class="siteButton giantButton askFeedbackjs" href="/torrents/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-t12833039/"><span>Download torrent</span></a>
		<div class="widgetSize"><span class="torType filmType"></span> <strong>1.98 <span>GB</span></strong></div>
		<div class="widgetSeed seedBlock"><i class="ka kaBox ka-arrow-up"></i>seeders:<strong>3171</strong></div>
		<div class="widgetLeech leechBlock"><i class="ka kaBox ka-arrow-down"></i>leechers:<strong>3055</strong></div>
	</div>
		<div class="widgetName">Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip x264 AC3-DaDDy</div>
</div><!-- div class="sharingWidgetBox" -->
<div class="floatleft">
<label class="inlineblock width50px">html</label> <input onclick="select()" value='<a href="https://kat.cr/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-t12833039.html"><img src=""></a>' type="text" class="textinput" /><br />
<label class="inlineblock width50px">bbcode</label> <input onclick="select()" value='[url="//kat.cr/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-t12833039.html"][img]//kat.cr/torrentwidget/DA33AD084304541B12F5FE039B81102EFCB82761.png[/img][/url]' type="text" class="textinput" />
</div>
<br class="clear" /><hr />
<div>
<p>To share this torrent use the code below and insert it into comments, status messages, forum posts or your signature.</p>
<a class="ka-widget vtip" href="/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-t12833039.html" rel="12833039" widget-type="torrent"><i class="ka ka-arrow-down"></i><strong>Torrent:</strong> <em class="maxwidth550px overhidden nowrap">Batman V Superman Dawn of Ju...Edition HDRip x264 AC3-DaDDy</em></a> <div class="vtipContentjs" style="display:none"> <div class="previewPopupContainer relative block"> <p class="overvisible wrap block"> <span class="torType filmType"></span> <span class="line160perc">Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip x264 AC3-DaDDy</span> <br /> <span class="block normalgrey font11px plain"> Jun 25, 2016 in <strong><a href="/movies/">Movies</a></strong>. &nbsp;Verified. &nbsp;1.98 <span>GB</span></span> <span class="hash font11px lightgrey">DA33AD084304541B12F5FE039B81102EFCB82761</span> </p> <p class="font11px darkivorybg toppad3px botpad3px"> <span class="inlineblock floatleft"> <span class="statusIcon isleech"></span><strong itemprop="seeders">3171</strong>&nbsp;&nbsp;<span class="statusIcon isseed"></span><strong itemprop="leechers">3055</strong> </span> <span class="inlineblock floatright"><span class="statusIcon isaudio"></span>2<span class="opac5 font10px">/10</span>&nbsp;&nbsp;&nbsp;<span class="statusIcon isvideo"></span>2<span class="opac5 font10px">/10</span>&nbsp;&nbsp;&nbsp;<span class="statusIcon isrategood"></span>4<span class="opac5 font10px">/10</span> </span> </p> </div> </div>
<div class="leftpad15px inlineblock">
    <label class="inlineblock width50px">bbcode</label> <input onclick="select()" value="[torrent=12833039]" type="text" class="textinput">
</div>
<a class="ajaxLink ka ka16 ka-message" title="Send in a private message" href="/messenger/create/?text=[torrent=12833039]"></a>
</div>
								</div>
				<div id="tab-technical" class="contentTabContainer">
					<div id="trackerBox">
						<h2>Trackers
<div class="buttonsline">
</div>
</h2>
<div class="botmarg10px">
	<table cellpadding="0" cellspacing="0" class="data" id="trackers_table" style="width:100%">
	<tr class="firstr">
		<th class="lasttd"><span>tracker name</span></th>

	</tr>
			<tr class="even">
		<td class="width100perc left lasttd"><div>udp://tracker.openbittorrent.com:80/announce</div></td>

	</tr>
			<tr class="odd">
		<td class="width100perc left lasttd"><div>udp://tracker.coppersurfer.tk:6969/announce</div></td>

	</tr>
			<tr class="even">
		<td class="width100perc left lasttd"><div>udp://p4p.arenabg.ch:1337/announce</div></td>

	</tr>
			<tr class="odd">
		<td class="width100perc left lasttd"><div>udp://p4p.arenabg.com:1337/announce</div></td>

	</tr>
			<tr class="even">
		<td class="width100perc left lasttd"><div>udp://explodie.org:6969/announce</div></td>

	</tr>
			<tr class="odd">
		<td class="width100perc left lasttd"><div>udp://tracker.aletorrenty.pl:2710/announce</div></td>

	</tr>
			<tr class="even">
		<td class="width100perc left lasttd"><div>udp://9.rarbg.to:2710/announce</div></td>

	</tr>
			<tr class="odd">
		<td class="width100perc left lasttd"><div>udp://torrent.gresille.org:80/announce</div></td>

	</tr>
			<tr class="even">
		<td class="width100perc left lasttd"><div>udp://tracker.opentrackr.org:1337/announce</div></td>

	</tr>
			<tr class="odd">
		<td class="width100perc left lasttd"><div>udp://tracker.piratepublic.com:1337/announce</div></td>

	</tr>
		</table>
	<a onclick="$('#utorrent_trackers').toggle();$('#utorrent_textarea').select();return false;">�Torrent compatible trackers list</a><br />
	<div id="utorrent_trackers" style="display:none">
	<br /><textarea class="botmarg5px" id="utorrent_textarea" rows="8">udp://tracker.openbittorrent.com:80/announce

udp://tracker.coppersurfer.tk:6969/announce

udp://p4p.arenabg.ch:1337/announce

udp://p4p.arenabg.com:1337/announce

udp://explodie.org:6969/announce

udp://tracker.aletorrenty.pl:2710/announce

udp://9.rarbg.to:2710/announce

udp://torrent.gresille.org:80/announce

udp://tracker.opentrackr.org:1337/announce

udp://tracker.piratepublic.com:1337/announce</textarea>
	</div>
</div>

					</div>
		            <h2>Locations</h2>
<table cellpadding="0" cellspacing="0" class="data" style="width:100%">
<tr class="firstr">
	<th colspan="2" class="width100perc lasttd"><span>name</span></th>
</tr>
<tr class="odd">
	<td class="width15perc">
		<span class="torrenticons17 thirdPartIcons"></span>
	</td>
	<td class="width50perc">KickassTorrents</td>
</tr>
</table>
		            <span class="lightgrey font10px">Torrent hash: DA33AD084304541B12F5FE039B81102EFCB82761</span>
				</div>
    			                <div id="tab-trailer" class="contentTabContainer">

<div class="center">
	<iframe width="640" height="480" src="" frameborder="0" allowfullscreen></iframe>
</div>
                </div>
    			    							<div id="tab-comment" class="contentTabContainer commentTab">
											<div class="commentsLeftModule">
<div class="comments topComments">

</div>
<div class="comments topComments">
	<h2>Top Comments</h2>
<div class="commentThread">
<div class="commentbody">
	<div class="userPic">
		<div class="height50px userPicHeight relative">
                		<a  href="/user/KolMikaelson/"><img src=""/></a>
		</div>
	</div>
	<div class="commentcontent">
		<div class="commentowner">
			<div class="rate rated" id="topratediv_29837348">
                                	<a href="javascript:rateTopMinus(29837348)" class="ka ka16 kasmall ka-thumbs-down ka-red"><span></span></a>
                	<a href="javascript:rateTopPlus(29837348)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
                                <a class="ratemark plus ajaxLink" id="topcommrate_29837348" href="/comments/votes/29837348/" title="Votes for this comment"><i class="ka ka-arrow2-up"></i>34</a>
			</div>
			<div class="commentTopControlLine">


                                                        	                       		<a id="report_comment_29837348" class="ajaxLink" href="/comments/report/29837348/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                       	                                                </div>
			<div class="commentownerLeft">
				<span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/KolMikaelson/">KolMikaelson</a></span><span title="Reputation" class="repValue positive">1592</span> <a rel="nofollow" href="/messenger/create/KolMikaelson/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>


				<span  class="lightgrey font11px">&bull; <time title="25 Jun 2016, 12:10" datetime="2016-06-25T11:10:26+00:00">2&nbsp;days&nbsp;ago</time></span>
				                			</div>
		</div>
		<div class="commentAVRate bold font11px">
			<span>audio: 4</span><span>video: 4</span>		</div>
		<div id="topctext_29837348" class="commentText botmarg5px">Terrible video lag.
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
	</div><!-- commentcontent-->
</div><!--commentbody-->


<div class="commentbody">
	<div class="userPic">
		<div class="height50px userPicHeight relative">
                		<a  href="/user/Sailenthor/"><img src=""/></a>
		</div>
	</div>
	<div class="commentcontent">
		<div class="commentowner">
			<div class="rate rated" id="topratediv_29852322">
                                	<a href="javascript:rateTopMinus(29852322)" class="ka ka16 kasmall ka-thumbs-down ka-red"><span></span></a>
                	<a href="javascript:rateTopPlus(29852322)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
                                <a class="ratemark plus ajaxLink" id="topcommrate_29852322" href="/comments/votes/29852322/" title="Votes for this comment"><i class="ka ka-arrow2-up"></i>33</a>
			</div>
			<div class="commentTopControlLine">


                                                        	                       		<a id="report_comment_29852322" class="ajaxLink" href="/comments/report/29852322/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                       	                                                </div>
			<div class="commentownerLeft">
				<span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Sailenthor/">Sailenthor</a></span><span title="Reputation" class="repValue positive">72</span> <a rel="nofollow" href="/messenger/create/Sailenthor/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>


				<span  class="lightgrey font11px">&bull; <time title="26 Jun 2016, 15:14" datetime="2016-06-26T14:14:16+00:00">21&nbsp;hours&nbsp;ago</time></span>
				                			</div>
		</div>
		<div id="topctext_29852322" class="commentText botmarg5px">Quality is not that bad, but what's wrong with the framerate? Feels like a ubisoft game.
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
	</div><!-- commentcontent-->
</div><!--commentbody-->


<div class="commentbody">
	<div class="userPic">
		<div class="height50px userPicHeight relative">
                		<a  href="/user/niazmehedi/"><img src=""/></a>
		</div>
	</div>
	<div class="commentcontent">
		<div class="commentowner">
			<div class="rate rated" id="topratediv_29850523">
                                	<a href="javascript:rateTopMinus(29850523)" class="ka ka16 kasmall ka-thumbs-down ka-red"><span></span></a>
                	<a href="javascript:rateTopPlus(29850523)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
                                <a class="ratemark plus ajaxLink" id="topcommrate_29850523" href="/comments/votes/29850523/" title="Votes for this comment"><i class="ka ka-arrow2-up"></i>25</a>
			</div>
			<div class="commentTopControlLine">


                                                        	                       		<a id="report_comment_29850523" class="ajaxLink" href="/comments/report/29850523/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                       	                                                </div>
			<div class="commentownerLeft">
				<span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/niazmehedi/">niazmehedi</a></span><span title="Reputation" class="repValue positive">369</span> <a rel="nofollow" href="/messenger/create/niazmehedi/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>


				<span  class="lightgrey font11px">&bull; <time title="26 Jun 2016, 12:12" datetime="2016-06-26T11:12:35+00:00">yesterday</time></span>
				                			</div>
		</div>
		<div class="commentAVRate bold font11px">
			<span>audio: 1</span><span>video: 1</span>		</div>
		<div id="topctext_29850523" class="commentText botmarg5px">same old crap!!!
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
	</div><!-- commentcontent-->
</div><!--commentbody-->


<div class="commentbody">
	<div class="userPic">
		<div class="height50px userPicHeight relative">
                		<a  href="/user/drok3n/"><img src=""/></a>
		</div>
	</div>
	<div class="commentcontent">
		<div class="commentowner">
			<div class="rate rated" id="topratediv_29854774">
                                	<a href="javascript:rateTopMinus(29854774)" class="ka ka16 kasmall ka-thumbs-down ka-red"><span></span></a>
                	<a href="javascript:rateTopPlus(29854774)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
                                <a class="ratemark plus ajaxLink" id="topcommrate_29854774" href="/comments/votes/29854774/" title="Votes for this comment"><i class="ka ka-arrow2-up"></i>8</a>
			</div>
			<div class="commentTopControlLine">


                                                        	                       		<a id="report_comment_29854774" class="ajaxLink" href="/comments/report/29854774/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                       	                                                </div>
			<div class="commentownerLeft">
				<span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/drok3n/">drok3n</a></span><span title="Reputation" class="repValue positive">1659</span> <a rel="nofollow" href="/messenger/create/drok3n/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>


				<span  class="lightgrey font11px">&bull; <time title="26 Jun 2016, 18:46" datetime="2016-06-26T17:46:56+00:00">18&nbsp;hours&nbsp;ago</time></span>
				                			</div>
		</div>
		<div class="commentAVRate bold font11px">
			<span>audio: 1</span><span>video: 1</span>		</div>
		<div id="topctext_29854774" class="commentText botmarg5px">You guys forgot to put on 3d Glasses, Its fine for me lol.
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
	</div><!-- commentcontent-->
</div><!--commentbody-->


</div>

</div>
	<h2>All Comments<a name="comments_start"></a></h2>
	<div class="comments">
		<div class="floatleft"><div class="commentform torrentPage" id="main">

<form action="/comments/create/torrent/" method="post" onsubmit="return addComment(this, 'torrent');">
    <input type="hidden" name="turing"/>
    <input type="hidden" name="objectId" value="12833039"/>
        <textarea name="content" class="comareajs botmarg5px quicksubmit"></textarea>
                	<div class="qrateContainer loggedCondition">
	    <div class="qrate">
	        <span><i class="statusIcon ka ka-sound"></i> audio</span>
	        <select name="audio_rate" id="audio_rate">
	            <option value="" class="vote">vote </option>
	            <option value="1">1 awful</option>
	            <option value="2">2</option>
	            <option value="3">3</option>
	            <option value="4">4</option>
	            <option value="5">5</option>
	            <option value="6">6</option>
	            <option value="7">7</option>
	            <option value="8">8</option>
	            <option value="9">9</option>
	            <option value="10">10 best</option>
	        </select>
	    </div>
		<span id="audioRating" class="torrentRating">2<span>/10</span></span>
	    <div class="qrate">
	        <span><i class="statusIcon ka ka-film"></i> video </span>
	        <select name="video_rate" id="video_rate">
	            <option value="" class="vote">vote </option>
	            <option value="1">1 awful</option>
	            <option value="2">2</option>
	            <option value="3">3</option>
	            <option value="4">4</option>
	            <option value="5">5</option>
	            <option value="6">6</option>
	            <option value="7">7</option>
	            <option value="8">8</option>
	            <option value="9">9</option>
	            <option value="10">10 best</option>
	        </select>
	    </div>
		<span id="videoRating" class="torrentRating">2<span>/10</span></span>
    </div><!-- div class="qrateContainer" -->

            <div class="textareaRecommendation font11px">please, leave only comments related to that torrent</div>
    <div class="objectAttachmentsJs overauto botmarg5px" style="clear: both;"></div>
    <div class="buttonsline">
                    <button type="submit" class="siteButton bigButton"><span>post comment</span></button>
            </div>
</form>
</div>
</div>
		<div class="tabs tabSwitcher">
					<ul class="tabNavigation">
				<li><a href="#comment_comments" rel="comment_comments" class="darkButton"><span>Comments</span></a></li>
				<li><a id="tab-votes_button" href="#comment_votes" rel="comment_votes" class="darkButton" style="display:none"><span>Votes</span></a></li>
			</ul>
					<hr class="tabsSeparator" />
		    <div id="tab-comment_comments"><div class="commentThread">
	    <div class="commentbody" id="comment_29866026">
        <div id="cpic_29866026" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/Ajbhshekjain/">
                    <img class="lazyjs" data-original="/content/images/commentlogo.png" src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29866026"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29866026">
            <a href="javascript:rateMinus(29866026)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29866026)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29866026/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29866026">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29866026" class="ajaxLink" href="/comments/report/29866026/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Ajbhshekjain/">Ajbhshekjain</a></span><span title="Reputation" class="repValue positive">14</span> <a rel="nofollow" href="/messenger/create/Ajbhshekjain/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>
                                 <span id="cdate_29866026" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29866026/"><time title="27 Jun 2016, 12:10" datetime="2016-06-27T11:10:43+00:00">55&nbsp;min.&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29866026" href="javascript:showComment(29866026)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29866026" class="commentText botmarg5px topmarg5px">
This Movie....... is a <b>DISAPPOINTMENT</b>
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29866026" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29866026');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29866026">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29866026');Show('rep_link29866026');Hide('close_link29866026')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29866026" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29865958">
        <div id="cpic_29865958" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a >
                    <img src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29865958"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29865958">
            <a href="javascript:rateMinus(29865958)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29865958)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29865958/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29865958">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29865958" class="ajaxLink" href="/comments/report/29865958/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                anonymous
                                 <span id="cdate_29865958" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29865958/"><time title="27 Jun 2016, 12:04" datetime="2016-06-27T11:04:12+00:00">1&nbsp;hour&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29865958" href="javascript:showComment(29865958)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29865958" class="commentText botmarg5px topmarg5px">
Don't bother with this release, it's crap.
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29865958" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29865958');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29865958">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29865958');Show('rep_link29865958');Hide('close_link29865958')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29865958" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29865021">
        <div id="cpic_29865021" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/SuperGodzillaJPN/">
                    <img class="lazyjs" data-original="//yuq.me/userpics/10/789/98cca1a310ec9fcf6e2721e39b2d2760.gif" src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29865021"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29865021">
            <a href="javascript:rateMinus(29865021)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29865021)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29865021/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29865021">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29865021" class="ajaxLink" href="/comments/report/29865021/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/SuperGodzillaJPN/">SuperGodzillaJPN</a></span><span title="Reputation" class="repValue positive">1543</span> <a rel="nofollow" href="/messenger/create/SuperGodzillaJPN/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>
                                 <span id="cdate_29865021" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29865021/"><time title="27 Jun 2016, 10:38" datetime="2016-06-27T09:38:36+00:00">2&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29865021" href="javascript:showComment(29865021)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29865021" class="commentText botmarg5px topmarg5px">
Disaster
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29865021" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29865021');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29865021">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29865021');Show('rep_link29865021');Hide('close_link29865021')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29865021" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29864837">
        <div id="cpic_29864837" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a >
                    <img src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29864837"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29864837">
            <a href="javascript:rateMinus(29864837)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29864837)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29864837/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29864837">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29864837" class="ajaxLink" href="/comments/report/29864837/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                anonymous
                                 <span id="cdate_29864837" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29864837/"><time title="27 Jun 2016, 10:22" datetime="2016-06-27T09:22:14+00:00">2&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29864837" href="javascript:showComment(29864837)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29864837" class="commentText botmarg5px topmarg5px">
Best Quality !!! Loved it [:Qinlove<br/>[:Qinlove<br/>[:Qinlove<br/>
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29864837" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29864837');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29864837">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29864837');Show('rep_link29864837');Hide('close_link29864837')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29864837" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29864834">
        <div id="cpic_29864834" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a >
                    <img src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29864834"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29864834">
            <a href="javascript:rateMinus(29864834)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29864834)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29864834/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29864834">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29864834" class="ajaxLink" href="/comments/report/29864834/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                anonymous
                                 <span id="cdate_29864834" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29864834/"><time title="27 Jun 2016, 10:21" datetime="2016-06-27T09:21:37+00:00">2&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29864834" href="javascript:showComment(29864834)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29864834" class="commentText botmarg5px topmarg5px">
HuHU
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29864834" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29864834');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29864834">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29864834');Show('rep_link29864834');Hide('close_link29864834')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29864834" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29864770">
        <div id="cpic_29864770" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a >
                    <img src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29864770"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29864770">
            <a href="javascript:rateMinus(29864770)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29864770)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29864770/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29864770">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29864770" class="ajaxLink" href="/comments/report/29864770/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                anonymous
                                 <span id="cdate_29864770" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29864770/"><time title="27 Jun 2016, 10:14" datetime="2016-06-27T09:14:17+00:00">2&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29864770" href="javascript:showComment(29864770)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29864770" class="commentText botmarg5px topmarg5px">
The official iTunes release is 28 June, just relax until then, 1080P awaits.
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29864770" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29864770');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29864770">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29864770');Show('rep_link29864770');Hide('close_link29864770')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29864770" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29864428">
        <div id="cpic_29864428" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/Knownmark/">
                    <img class="lazyjs" data-original="/content/images/commentlogo.png" src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29864428"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29864428">
            <a href="javascript:rateMinus(29864428)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29864428)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29864428/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29864428">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29864428" class="ajaxLink" href="/comments/report/29864428/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Knownmark/">Knownmark</a></span><span title="Reputation" class="repValue positive">69</span> <a rel="nofollow" href="/messenger/create/Knownmark/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>
                                 <span id="cdate_29864428" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29864428/"><time title="27 Jun 2016, 09:41" datetime="2016-06-27T08:41:47+00:00">3&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                <div class="downloadedArrow"><i class="ka ka-arrow-down red kaDownloadedArrow" title="has downloaded this torrent"></i></div>                <a class="siteButton smallButton reject showComment" id="cshow_29864428" href="javascript:showComment(29864428)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29864428" class="commentText botmarg5px topmarg5px">
poop
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29864428" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29864428');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29864428">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29864428');Show('rep_link29864428');Hide('close_link29864428')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29864428" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29864395">
        <div id="cpic_29864395" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/ayush_sharma/">
                    <img class="lazyjs" data-original="//yuq.me/userpics/13/255/354c2e8dc9c29b56d30ca836ddad2fe6.jpg" src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29864395"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29864395">
            <a href="javascript:rateMinus(29864395)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29864395)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29864395/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29864395">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29864395" class="ajaxLink" href="/comments/report/29864395/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/ayush_sharma/">ayush_sharma</a></span><span title="Reputation" class="repValue positive">1290</span> <a rel="nofollow" href="/messenger/create/ayush_sharma/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>
                                 <span id="cdate_29864395" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29864395/"><time title="27 Jun 2016, 09:38" datetime="2016-06-27T08:38:49+00:00">3&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29864395" href="javascript:showComment(29864395)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
    <div class="commentAVRate bold font11px">
        <span>audio: 10</span><span>video: 10</span>    </div>
            <div id="ctext_29864395" class="commentText botmarg5px topmarg5px">
web-dl in 720p will be out in a day!!<br />
<br />
wait for a day, its quality is comparable to blu-ray rip
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29864395" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29864395');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29864395">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29864395');Show('rep_link29864395');Hide('close_link29864395')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29864395" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

						<div class="commentThread">
	<div class="reply">    <div class="commentbody" id="comment_29865049">
        <div id="cpic_29865049" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a  href="/user/F.J./">
                    <img class="lazyjs" data-original="//yuq.me/userpics/21/306/827068be2e69bb52db76788ce06a01f6.jpg" src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29865049"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29865049">
            <a href="javascript:rateMinus(29865049)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29865049)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29865049/" title="Votes for this comment" class="ajaxLink ratemark " id="commrate_29865049">0</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29865049" class="ajaxLink" href="/comments/report/29865049/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/F.J./">F.J.</a></span><span title="Reputation" class="repValue positive">519</span> <a rel="nofollow" href="/messenger/create/F.J./" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>
                                 <span id="cdate_29865049" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29865049/"><time title="27 Jun 2016, 10:41" datetime="2016-06-27T09:41:42+00:00">2&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29865049" href="javascript:showComment(29865049)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29865049" class="commentText botmarg5px topmarg5px">
Hum...<img class="emoticon" src="" alt="dull" />
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29865049" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29865049');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29865049">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29865049');Show('rep_link29865049');Hide('close_link29865049')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29865049" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->
</div>
		</div><!-- div class="commentThread" -->

				<hr>
	</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29864196">
        <div id="cpic_29864196" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a >
                    <img src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29864196"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29864196">
            <a href="javascript:rateMinus(29864196)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29864196)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29864196/" title="Votes for this comment" class="ajaxLink ratemark plus" id="commrate_29864196"><i class="ka ka-arrow2-up"></i>1</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29864196" class="ajaxLink" href="/comments/report/29864196/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                anonymous
                                 <span id="cdate_29864196" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29864196/"><time title="27 Jun 2016, 09:20" datetime="2016-06-27T08:20:00+00:00">3&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29864196" href="javascript:showComment(29864196)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
            <div id="ctext_29864196" class="commentText botmarg5px topmarg5px">
Thanks. Will wait for better version, though... (Note: Resolution doesn't seem to be 1080P or 720P). Video bitrate and file size are heavily compressed.
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29864196" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29864196');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29864196">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29864196');Show('rep_link29864196');Hide('close_link29864196')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29864196" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->
<div class="commentThread">
	    <div class="commentbody" id="comment_29863634">
        <div id="cpic_29863634" class="userPic">
            <div class="height50px userPicHeight relative">
                            <a >
                    <img src="">
                </a>
            </div>
        </div>
        <div class="commentcontent">
            <a name="comment_29863634"></a>
            <div class="commentowner">
                <div class="rate rated" id="ratediv_29863634">
            <a href="javascript:rateMinus(29863634)" class="ka ka16 kasmall ka-thumbs-down ka-red redButton"><span></span></a>
    	<a href="javascript:ratePlus(29863634)" class="ka ka16 kasmall ka-thumbs-up"><span></span></a>
        <a href="/comments/votes/29863634/" title="Votes for this comment" class="ajaxLink ratemark plus" id="commrate_29863634"><i class="ka ka-arrow2-up"></i>2</a>

</div><!-- div class="rate"-->

                <div class="commentTopControlLine">
                                                                                                                                                            <a id="report_comment_29863634" class="ajaxLink" href="/comments/report/29863634/" title="Report comment"><i class="ka ka16 ka-report ka-red"></i></a>
                                                                            </div>
                <div class="commentownerLeft">
                anonymous
                                 <span id="cdate_29863634" class="lightgrey font11px">
                   &bull; <a href="/comments/show/29863634/"><time title="27 Jun 2016, 08:26" datetime="2016-06-27T07:26:28+00:00">4&nbsp;hours&nbsp;ago</time></a>
                 </span>
                                                                <a class="siteButton smallButton reject showComment" id="cshow_29863634" href="javascript:showComment(29863634)"><span>Show comment</span></a>
                </div><!-- div class="commentownerLeft" -->
            </div><!--commentowner-->
    <div class="commentAVRate bold font11px">
        <span>audio: 1</span>    </div>
            <div id="ctext_29863634" class="commentText botmarg5px topmarg5px">
It's more fun watching my own shit swirl around in my toilet than this.
    <div class="objectAttachmentsJs overauto topmarg10px">


            </div>

</div>
            <div id="rep_link29863634" class="replyLink">
            <a class="kaButton normalText smallButton" href="javascript: showReply('29863634');"><i class="ka ka-reply"></i> reply</a>
        </div>
        <div style="display:none" id="close_link29863634">
            <a class="kaButton normalText smallButton" href="javascript: Hide('rep29863634');Show('rep_link29863634');Hide('close_link29863634')"><i class="ka ka-arrow2-up"></i> close</a>
        </div>
        <div class="commentform" id="rep29863634" style="display:none;"></div>
            </div><!-- div class="commentcontent" -->
    </div><!-- div class="commentbody" -->

		</div><!-- div class="commentThread" -->

    <span id="showmore_2" class="showmore folded" style="display:block">
	    <a onClick="getPage(2, '12833039', 'torrent')" style="cursor:pointer"><span class="font80perc">&#x25BC;</span> Show More</a>
	    <a onclick="getAll(2, '12833039', 'torrent')" style="cursor:pointer;float:right;padding-right:10px"><span class="font80perc">&#x25BC;</span> All</a>
	    <div class="clear"></div>
	</span>
	<div id="morecomments_2" style="display:none;"></div>
<form id="comment_form" action="/comments/create/torrent/" method="post" onsubmit="return addComment(this, 'torrent');" style="display:none">
    <input type="hidden" name="pid" value="">
    <input type="hidden" name="turing"/>
    <input type="hidden" name="objectId" value="12833039"/>
    <textarea class="botmarg5px comareajs quicksubmit" name="content" rows="10" cols="10" autofocus required></textarea>
        <div class="objectAttachmentsJs overauto" style="clear: both;"></div>
    <div class="buttonsline">
        <button type="submit" class="siteButton bigButton" name="submit"><span>reply</span></button>
    </div>
</form></div>
		    <div id="tab-comment_votes">
<form id="comment_form" action="/comments/create/torrent/" method="post" onsubmit="return addComment(this, 'torrent');" style="display:none">
    <input type="hidden" name="pid" value="">
    <input type="hidden" name="turing"/>
    <input type="hidden" name="objectId" value="12833039"/>
    <textarea class="botmarg5px comareajs quicksubmit" name="content" rows="10" cols="10" autofocus required></textarea>
        <div class="objectAttachmentsJs overauto" style="clear: both;"></div>
    <div class="buttonsline">
        <button type="submit" class="siteButton bigButton" name="submit"><span>reply</span></button>
    </div>
</form></div>
		</div>

	</div>
</div><!-- div class="commentsLeftModule" -->
<br />
	<h2>User Opinions</h2>
	<div class="userOpinionsContainer" id="useropinion">
	<i class="green ka ka-thumbs-up"></i>  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_verified"><a class="plain" href="/user/Mike4259/">Mike4259</a></span><span title="Reputation" class="repValue positive">12.1K</span> <a rel="nofollow" href="/messenger/create/Mike4259/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Viewer_55/">Viewer_55</a></span><span title="Reputation" class="repValue positive">4571</span> <a rel="nofollow" href="/messenger/create/Viewer_55/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/bosslove72/">bosslove72</a></span><span title="Reputation" class="repValue positive">3226</span> <a rel="nofollow" href="/messenger/create/bosslove72/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/sugali/">sugali</a></span><span title="Reputation" class="repValue positive">1970</span> <a rel="nofollow" href="/messenger/create/sugali/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/cyborg009/">cyborg009</a></span><span title="Reputation" class="repValue positive">1795</span> <a rel="nofollow" href="/messenger/create/cyborg009/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Redbeard77/">Redbeard77</a></span><span title="Reputation" class="repValue positive">1170</span> <a rel="nofollow" href="/messenger/create/Redbeard77/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/joeldanny/">joeldanny</a></span><span title="Reputation" class="repValue positive">946</span> <a rel="nofollow" href="/messenger/create/joeldanny/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Squeef/">Squeef</a></span><span title="Reputation" class="repValue positive">367</span> <a rel="nofollow" href="/messenger/create/Squeef/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/totojorel/">totojorel</a></span><span title="Reputation" class="repValue positive">150</span> <a rel="nofollow" href="/messenger/create/totojorel/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	  <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/AKSHAYTHEMAN/">AKSHAYTHEMAN</a></span><span title="Reputation" class="repValue positive">4</span> <a rel="nofollow" href="/messenger/create/AKSHAYTHEMAN/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>
		... And 126 more
	<br />
	<i class="ka ka-thumbs-down red"></i> <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/mirkoni/">mirkoni</a></span><span title="Reputation" class="repValue positive">7655</span> <a rel="nofollow" href="/messenger/create/mirkoni/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/neoisfreedom/">neoisfreedom</a></span><span title="Reputation" class="repValue positive">3654</span> <a rel="nofollow" href="/messenger/create/neoisfreedom/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/vouxandre/">vouxandre</a></span><span title="Reputation" class="repValue positive">2234</span> <a rel="nofollow" href="/messenger/create/vouxandre/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/drok3n/">drok3n</a></span><span title="Reputation" class="repValue positive">1659</span> <a rel="nofollow" href="/messenger/create/drok3n/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/myfanakki/">myfanakki</a></span><span title="Reputation" class="repValue positive">597</span> <a rel="nofollow" href="/messenger/create/myfanakki/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Wasala/">Wasala</a></span><span title="Reputation" class="repValue positive">507</span> <a rel="nofollow" href="/messenger/create/Wasala/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/darkbros/">darkbros</a></span><span title="Reputation" class="repValue positive">425</span> <a rel="nofollow" href="/messenger/create/darkbros/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/milicacelik/">milicacelik</a></span><span title="Reputation" class="repValue positive">279</span> <a rel="nofollow" href="/messenger/create/milicacelik/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/djkremlin/">djkremlin</a></span><span title="Reputation" class="repValue positive">154</span> <a rel="nofollow" href="/messenger/create/djkremlin/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>,
	 <span class="blank"> </span> <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/priyansh/">priyansh</a></span><span title="Reputation" class="repValue positive">114</span> <a rel="nofollow" href="/messenger/create/priyansh/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>
		... And 237 more
	</div>
<script type="text/javascript" charset="utf-8">
    new AlertWindow({
        acl: 0,
        iconUrl: '/content/images/apple-touch-icon.png',
        title: 'Your friends left feedback',
        text: '<span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Eddyghost/">Eddyghost</a></span><span title="Reputation" class="repValue positive">1006</span> <a rel="nofollow" href="/messenger/create/Eddyghost/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span>  liked this torrent<br>'+'3 of your friends did not like this torrent',
        timeout: 30000
    }).on('click', function() {
        this.close();
    }).on('mouseleave', function() {
        this.close();
    }).open();
</script>


									</div>
			</div><!-- div class="tabs" -->
            		</td>
		<td class="sidebarCell">

<a class="hideSidebar" id="hidesidebar" onclick="hideSidebar();"></a><div id="sidebar" class="sidebarLogged font11px">


        <div  data-sc-slot="_119b0a17fab5493361a252d04bf527db"></div>



    <div class="sliderbox">
	<h3><a href="/bookmarks/community/">Watched Threads</a><i id="hideWatchedThreads" class="sliderBoxToggle ka ka16 ka-arrow2-up foldClose"></i></h3>
	<ul id="watchedThreads" rel="watchedThreads" class="showBlockJS">
				<li class="showcontentonhover">
			<span class="floatright block showonhover rightmarg2px topmarg2px">
				<a class="versionsClose circleButton ajaxLink" href="/bookmarks/remove/thread/132028/" title="Remove from watchlist"><span></span>
				</a> </span>
				<a href="/community/show/pxgamer-s-scripts/?unread=17818313">
				<i class="ka ka16 ka-bookmark latest-icon"></i>
				<p class="latest-title">
					PXgamer&#039;s Scripts
				</p>
				</a>
					<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_verified"><a class="plain" href="/user/The_Ponderer/">The_Ponderer</a></span> <a rel="nofollow" href="/messenger/create/The_Ponderer/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <span title="24 Jun 2016, 06:07">3&nbsp;days&nbsp;ago</span></span>
		</li>
			</ul>
</div>
<!-- div class="sliderbox" -->
    <div class="sliderbox">
<h3><a href="/community/">Latest Forum Threads</a><i id="hideLatestThreads" class="sliderBoxToggle ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="latestForum" rel="latestForum" class="showBlockJS">
		<li>
		<a href="/community/show/im-noob-thread-134974/?unread=17830300">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				Im a NOOB!
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="online" title="online"></span> <span class="aclColor_1"><a class="plain" href="/user/Cupid.Ninja/">Cupid.Ninja</a></span> <a rel="nofollow" href="/messenger/create/Cupid.Ninja/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 13:03" datetime="2016-06-27T12:03:59+00:00">1&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/please-request-ebooks-and-audio-books-here-v15/?unread=17830299">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				Please request ebooks and audio books here. V15
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="online" title="online"></span> <span class="aclColor_1"><a class="plain" href="/user/ruandablue1/">ruandablue1</a></span> <a rel="nofollow" href="/messenger/create/ruandablue1/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 13:03" datetime="2016-06-27T12:03:30+00:00">2&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/m-kat-s-ultimate-metal-thread-daily-clips-discussions-revie/?unread=17830298">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				\m/ KAT&#039;s Ultimate Metal Thread - Daily clips, discussions, reviews, news \m/
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="online" title="online"></span> <span class="aclColor_1"><a class="plain" href="/user/5c4lLY349/">5c4lLY349</a></span> <a rel="nofollow" href="/messenger/create/5c4lLY349/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 13:02" datetime="2016-06-27T12:02:42+00:00">3&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/vip-free-speech-thread-v10/?unread=17830295">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				The VIP free speech thread v10
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_5"><a class="plain" href="/user/Pringlescan/">Pringlescan</a></span> <a rel="nofollow" href="/messenger/create/Pringlescan/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 13:01" datetime="2016-06-27T12:01:15+00:00">4&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/who-one-band-artist-you-ve-never-seen-live-always-wanted/?unread=17830293">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				Who is one band/artist you�ve never seen live but always wanted to?
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/oldernowiser/">oldernowiser</a></span> <a rel="nofollow" href="/messenger/create/oldernowiser/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 13:00" datetime="2016-06-27T12:00:22+00:00">5&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/digitally-sourced-24bit-lossless-thread/?unread=17830292">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				The Digitally Sourced 24bit Lossless Thread
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/Hubird.00/">Hubird.00</a></span> <a rel="nofollow" href="/messenger/create/Hubird.00/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:59" datetime="2016-06-27T11:59:58+00:00">5&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/nezu-quality-affordable-download-sizes-thread-92442/?unread=17830291">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				NeZu - quality, at affordable download sizes
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_verified"><a class="plain" href="/user/NeZu/">NeZu</a></span> <a rel="nofollow" href="/messenger/create/NeZu/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:59" datetime="2016-06-27T11:59:47+00:00">5&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/congrats-our-newly-elite-uploaders-amp-verified-uploaders/?unread=17830282">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				Congrats to Our Newly Elite Uploaders &amp; Verified Uploaders
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="online" title="online"></span> <span class="aclColor_1"><a class="plain" href="/user/dollybird/">dollybird</a></span> <a rel="nofollow" href="/messenger/create/dollybird/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:57" datetime="2016-06-27T11:57:30+00:00">8&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/your-favourite-guitar-brand/?unread=17830275">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				#Your Favourite Guitar Brand?
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="online" title="online"></span> <span class="aclColor_1"><a class="plain" href="/user/5c4lLY349/">5c4lLY349</a></span> <a rel="nofollow" href="/messenger/create/5c4lLY349/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:54" datetime="2016-06-27T11:54:56+00:00">10&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/i-am-new-here-it-feels-home/?unread=17830272">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				I am new here but it feels like home
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/gamefear/">gamefear</a></span> <a rel="nofollow" href="/messenger/create/gamefear/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:53" datetime="2016-06-27T11:53:43+00:00">12&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/gotta-tech-problem-post-it-here/?unread=17830256">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				Gotta tech problem? Post it here
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/TheInnocent/">TheInnocent</a></span> <a rel="nofollow" href="/messenger/create/TheInnocent/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:45" datetime="2016-06-27T11:45:25+00:00">20&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/hi-kat-thread-134917/?unread=17830255">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				Hi KAT !
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/legopirate/">legopirate</a></span> <a rel="nofollow" href="/messenger/create/legopirate/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:44" datetime="2016-06-27T11:44:51+00:00">20&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/darksiderg-uploads/?unread=17830250">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				DarkSideRG Uploads
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_verified"><a class="plain" href="/user/darksiderg/">darksiderg</a></span> <a rel="nofollow" href="/messenger/create/darksiderg/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:43" datetime="2016-06-27T11:43:50+00:00">21&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/release-archives-condoghost/?unread=17830247">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				The Release Archives of CondoGhost
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_2"><a class="plain" href="/user/Condo.Ghost/">Condo.Ghost</a></span> <a rel="nofollow" href="/messenger/create/Condo.Ghost/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:42" datetime="2016-06-27T11:42:17+00:00">23&nbsp;min.&nbsp;ago</time></span>
	</li>
		<li>
		<a href="/community/show/hi-kat-guys/?unread=17830242">
			<i class="ka ka16 ka-community latest-icon"></i>
			<p class="latest-title">
				Hi Kat Guys
			</p>
		</a>
		<span class="explanation">by <span class="badgeInline"><span class="offline" title="offline"></span> <span class="aclColor_1"><a class="plain" href="/user/gu1lh3rm3/">gu1lh3rm3</a></span> <a rel="nofollow" href="/messenger/create/gu1lh3rm3/" title="send private message" class="ajaxLink imessage"><i class="ka ka16 ka-message"></i></a></span> <time title="27 Jun 2016, 12:41" datetime="2016-06-27T11:41:41+00:00">24&nbsp;min.&nbsp;ago</time></span>
	</li>
	</ul>
</div><!-- div class="sliderbox" -->

    <div class="sliderbox">
<h3><a href="/blog/">Latest News</a><i class="sliderBoxToggle ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="latestNews" rel="latestNews" class="showBlockJS">
	<li>
		<a href="/blog/post/tor-2-factor-authentication-and-revamped-chat/">
			<i class="ka ka16 ka-rss latest-icon"></i>
			<p class="latest-title">
				TOR, 2 Factor-Authentication and revamped Chat
			</p>
		</a>
		<span class="explanation">by KickassTorrents <time title="06 Jun 2016, 20:59" datetime="2016-06-06T19:59:21+00:00">2&nbsp;weeks&nbsp;ago</time></span>
	</li>
</ul>
</div><!-- div class="sliderbox" -->
<div class="sliderbox">
<h3>Blogroll<i class="sliderBoxToggle ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="blogroll" rel="blogroll" class="showBlockJS">
	<li><a href="/blog/Bartacus/post/lies-vs-truth/"><i class="ka ka16 ka-rss latest-icon"></i><p class="latest-title"> Lies vs truth</p></a><span class="explanation">by <a class="plain aclColor_" href="/user/Bartacus/">Bartacus</a> <time title="27 Jun 2016, 12:39" datetime="2016-06-27T11:39:52+00:00">25&nbsp;min.&nbsp;ago</time></span></li>
	<li><a href="/blog/TheDels/post/ten-little-characters-episode-2-and-then-there-were-eight/"><i class="ka ka16 ka-rss latest-icon"></i><p class="latest-title"> Ten Little Characters - Episode 2: And Then There Were Eight</p></a><span class="explanation">by <a class="plain aclColor_" href="/user/TheDels/">TheDels</a> <time title="26 Jun 2016, 00:04" datetime="2016-06-25T23:04:26+00:00">yesterday</time></span></li>
	<li><a href="/blog/MoodieMimi/post/hot-to-trot-kittehkatnip/"><i class="ka ka16 ka-rss latest-icon"></i><p class="latest-title"> HOT TO TROT ^^ [KittehKatnip]</p></a><span class="explanation">by <a class="plain aclColor_" href="/user/MoodieMimi/">MoodieMimi</a> <time title="25 Jun 2016, 12:15" datetime="2016-06-25T11:15:18+00:00">2&nbsp;days&nbsp;ago</time></span></li>
	<li><a href="/blog/Bartacus/post/roses-are-red/"><i class="ka ka16 ka-rss latest-icon"></i><p class="latest-title"> Roses are red</p></a><span class="explanation">by <a class="plain aclColor_" href="/user/Bartacus/">Bartacus</a> <time title="24 Jun 2016, 19:24" datetime="2016-06-24T18:24:25+00:00">2&nbsp;days&nbsp;ago</time></span></li>
	<li><a href="/blog/SirSeedsAlot/post/there-must-always-be-war/"><i class="ka ka16 ka-rss latest-icon"></i><p class="latest-title"> There Must Always Be War</p></a><span class="explanation">by <a class="plain aclColor_" href="/user/SirSeedsAlot/">SirSeedsAlot</a> <time title="24 Jun 2016, 02:06" datetime="2016-06-24T01:06:08+00:00">3&nbsp;days&nbsp;ago</time></span></li>
</ul>
</div><!-- div class="sliderbox" -->

    <div class="sliderbox">
<h3>Goodies<i class="sliderBoxToggle ka ka16 ka-arrow2-up foldClose"></i></h3>
<ul id="goodies" rel="goodies" class="showBlockJS">

	<li>
		<a data-nop target="_blank" rel="external" href="http://addons.mozilla.org/en-US/firefox/addon/11412" target="_blank" rel="external">
			<span class="ifirefox thirdPartIcons"></span>Firefox search plugin
		</a>
	</li>

	<li>
		<a data-nop target="_blank" rel="external" href="http://twitter.com/kickasstorrents">
			<span class="ifollow thirdPartIcons"></span>Follow us on Twitter
		</a>
	</li>
	<li>
		<a data-nop target="_blank" rel="external" href="/blog/post/30/">
			<span class="ikat thirdPartIcons"></span>Kickass wallpapers
		</a>
	</li>
	<li>
		<a data-nop target="_blank" rel="external" href="http://www.facebook.com/official.KAT.fanclub">
			<span class="ifacebook thirdPartIcons"></span>Like us on Facebook
		</a>
	</li>

</ul>
</div><!-- div class="sliderbox" -->
            	<div class="sliderbox">
	<h3>Friends Links<i class="sliderBoxToggle ka ka16 ka-arrow2-up foldClose"></i></h3>
    <ul id="friendsLinks" rel="friendsLinks" class="showBlockJS">

		<li>
			<a data-nop href="http://torrents.to/" target="_blank" rel="external">
				<span class="itorrentsto thirdPartIcons"></span>Torrents.to
			</a>
		</li>
		<li>
			<a data-nop href="http://www.torrentdownloads.net/" target="_blank" rel="external">
				<span class="itorrentdownloads thirdPartIcons"></span>Torrent Downloads
			</a>
		</li>




		<li>
			<a data-nop href="http://torrent-finder.info/" target="_blank" rel="external">
				<span class="itorrentfinder thirdPartIcons"></span>Torrent Finder
			</a>
		</li>
	</ul>
</div><!-- div class="sliderbox" -->

</div>
<a class="showSidebar" id="showsidebar" onclick="showSidebar();" style="display:none;"></a>

		</td>
	</tr>
</table>
</div>
<div class="chat-bar hideBlockJS">
    <ul id="chat-bar-full">
        <li class="action-tab"><span class="ka ka16 ka-delete closeChatBar" title="Close" style="margin:3px auto;width:100%"></span></li>
        <li class="plus-tab"><a class="ajaxLink" href="/friend/get/" title="New"><i class="ka ka-user-add"></i></a></li>
        <li style="float:right;" class="action-tab"><span class="ka ka16 ka-arrow2-up ka-270 hideChatBar" style="margin:3px auto;width:100%"></span></li>
        <li style="float:right;" class="action-tab more-tab">
            <span class="ka ka16 ka-arrow2-up" style="margin:3px auto;"></span>
            <ul class="menu-more"></ul>
        </li>
    </ul>
    <ul id="chat-bar-short">
        <li><span class="ka ka16 ka-arrow2-up ka-90 showChatBar" style="margin:3px auto;width:100%"></span></li>
    </ul>
</div>
</div><!--id="main"-->
</div><!--id="wrap"-->

<footer class="lightgrey">
	<ul>
		<li><a class="plain" data-nop href="#translate_site" id="translate_link"><strong>change language</strong></a></li>
		<li><a href="/rules/" class="lower">rules</a></li>
        <li><a href="/ideabox/">idea box</a></li>
        <li><a href="/faq/">FAQ</a></li>
		<li class="lower"><a href="/achievements/">Achievements</a></li>

		<li class="lower"><a href="/latest-searches/">Latest Searches</a></li>
        <li><a href="/request/">torrent requests</a></li>        	</ul>
	<ul>
		<li><a href="/about/">about</a></li>
         		<li><a href="/welcome/">welcome</a></li>		<li><a href="/privacy/">privacy</a></li>
		<li><a href="/dmca/">dmca</a></li>
        		<li><a href="/logos/">logos</a></li>
		<li><a href="/people/">people</a></li>		<li><a href="/contacts/">contacts</a></li>
        <li><a href="/api/">api</a></li>
        <li><a href="https://kastatus.com">KAT status</a></li>

	</ul>
        </footer>
<a class="feedbackButton eventsButtons" href="/issue/create/" id="feedback"><span>Report a bug</span></a>
<a class="chatButton"><span>Open chat</span></a>
    <script>
 sc('addGlobal', 'tname', 'Batman+V+Superman+Dawn+of+Jusitce+2016+Extended+Cut+Ultimate+Edition+HDRip+x264+AC3-DaDDy');
sc('addGlobal', 'torrent_id', '12833039');
sc('addGlobal', 'tname_encoded', 'Batman V Superman Dawn of Jusitce 2016 Extended Cut Ultimate Edition HDRip x264 AC3-DaDDy');
sc('addGlobal', 'category_id', '25');
sc('addGlobal', 'category', 'Movies');
sc('addGlobal', 'tfile', 'https%3A%2F%2Ftorcache.net%2Ftorrent%2FDA33AD084304541B12F5FE039B81102EFCB82761.torrent%3Ftitle%3D%5Bkat.cr%5Dbatman.v.superman.dawn.of.jusitce.2016.extended.cut.ultimate.edition.hdrip.x264.ac3.daddy');
sc('addGlobal', 'tmagnet', 'magnet%3A%3Fxt%3Durn%3Abtih%3ADA33AD084304541B12F5FE039B81102EFCB82761%26dn%3Dbatman%2Bv%2Bsuperman%2Bdawn%2Bof%2Bjusitce%2B2016%2Bextended%2Bcut%2Bultimate%2Bedition%2Bhdrip%2Bx264%2Bac3%2Bdaddy%26tr%3Dudp%253A%252F%252Ftracker.openbittorrent.com%253A80%252Fannounce%26tr%3Dudp%253A%252F%252Fglotorrents.pw%253A6969%252Fannounce%26tr%3Dudp%253A%252F%252Ftracker.openbittorrent.com%253A80%252Fannounce%26tr%3Dudp%253A%252F%252Ftracker.opentrackr.org%253A1337%252Fannounce');
sc('addGlobal', 'hash', 'DA33AD084304541B12F5FE039B81102EFCB82761');
sc('addGlobal', 'page', 'torrent');
sc('addGlobal', 'tlink', '/batman-v-superman-dawn-of-jusitce-2016-extended-cut-ultimate-edition-hdrip-x264-ac3-daddy-t12833039.html');
sc('addGlobal', 'fileext', 'mkv');
sc('addGlobal', 'seeders', '3171');
sc('addGlobal', 'leechers', '3055');
sc('addGlobal', 'pagetype', 'torrent');
</script>

</body>
</html>