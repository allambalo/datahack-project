<nav>
	<div class="row">
		<div class="navbar-logo-block">
			<a href="/main.php"><span class="orange-text navbar-logo">Stroiwill.ru</span></a>
			<span class="orange-text slogan-text">строительство и ремонт</span>				
		</div>
		<div class="navbar-user-city">
			<span class="city-text white-text">Ваш город: </span>
			<span class="city-name font-bold white-text">Москва</span>
		</div>
		<div class="user-action-block">
			<span class="user-favourites white-text"><i class="far fa-heart"></i> Избранное</span>
			<? if(isset($_SESSION['user_login'])): ?>
				<span class="orange-text">
					<a href="/profile.php" class="orange-text no-text-underline">
						<i class="far fa-user"></i> Мой профиль
					</a>
				</span>
			<? else: ?>
				<span class="orange-text"><a href="/auth.php" class="orange-text no-text-underline"><i class="far fa-user"></i> Войти в аккаунт</a></span>
			<? endif; ?>
			<a <? if(isset($_SESSION['user_login'])): echo 'href="/add.php"'; else: echo 'href="/add.php"'; endif; ?> class="white-bg font-bold green-text nav-add-deal">Подать объявление</a>
		</div>
	</div>
</nav>