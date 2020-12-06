<?
	function urlParser($param) {
		return htmlspecialchars($_GET[$param]);
	}

	function postChecker($param) {
		return htmlspecialchars($_POST[$param]);
	}

	function checkAuthor($param, $show_other, $show_author) {
		if($_SESSION['user_login']->id == $param):
			return $show_author;
		else:
			return $show_other;
		endif;
	}