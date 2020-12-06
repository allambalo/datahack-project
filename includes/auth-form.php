<div class="modal-login-form">
	<form id="send-code-form" class="login-form white-bg w-40">
		<div style="display: none;" class="show-error-message"></div>
		<div id="send-code-block" class="d-grid">
			<span class="green-text font-bold">Войти или зарегистрироваться</span>
			<input type="text" required="" class="login-form-login-input grey-border" id="send-addr-input" name="field1" placeholder="Телефон/e-mail">
			<input type="button" id="send-code" class="white-bg green-text green-border w-50 mx-auto font-bold mt-1 p-1" name="send" value="Отправить код">
			<button type="button" id="login_with_password_bt" class="green-bg white-text w-65 mx-auto font-bold mt-1 p-1">Войти с паролем</button>
			<div id="reset-password" class="little-text mt-1 green-text">
				Забыли пароль?
			</div>
			<span class="green-text little-text font-bold mt-3">
				Нажимая на кнопку "Отправить код", Вы соглашаетесь с услвоями политики конфиденциальности.
			</span>
		</div>
		<div id="enter-code-block" class="d-none">
			<a href="#" id="back-login" class="little-text no-text-underline green-text back-bt w-20 green-border">Назад</a>
			<span class="green-text font-bold">Введите отправленный код</span>
			<span class="little-text green-text mt-1">Код отправлен на: <span id="send-addr"></span></span>
			<input type="number" class="login-form-login-input" name="temporary_pass" placeholder="Введите полученный код">
			<button type="button" id="confirm-code" class="green-text send-code-bt"><i class="fas fa-arrow-circle-right" aria-hidden="true"></i></button>
			<a href="#" id="send-repeat" class="green-text mt-1 no-text-underline">Отправить повторно</a>
		</div>
		<div id="reset-password-block" class="d-none">
			<a href="#" id="back-login" class="little-text no-text-underline green-text back-bt w-20 green-border">Назад</a>
			<span class="green-text font-bold">Восстановление пароля</span>
			<input type="text" class="login-form-login-input" name="resend_pass" placeholder="Введите адрес электронной почты или номер телефона">
			<button id="reset-password-bt" class="green-bg white-text w-65 mx-auto font-bold mt-1 p-1">Сбросить пароль</button>
		</div>
		<div id="submit_new_password" class="d-none">
			<span class="green-text font-bold">Установка нового пароля</span>
			<span class="little-text text-left mt-2">Введите код который был вам отправлен на <span id="set_send_address"></span></span>
			<span class="little-text text-left mt-2">Введите новый пароль</span>
			<input type="password" class="login-form-login-input mt-1" name="">
			<span class="little-text text-left mt-2">Введите пароль повторно</span>
			<input type="password" class="login-form-login-input mt-1" name="">
			<button id="change-password-bt" class="green-bg white-text w-65 mx-auto font-bold mt-1 p-1">Сменить пароль</button>
		</div>
		<div id="login_with_password" class="d-none">
			<a href="#" id="back-login" class="little-text no-text-underline green-text back-bt w-20 green-border">Назад</a>
			<span class="green-text font-bold">Войти с использованием пароля</span>
			<input type="text" id="login-with-pass-login" required="" class="login-form-login-input" placeholder="Введите логин" name="user-login">
			<input type="password" id="login-with-pass-password" required="" class="login-form-login-input" placeholder="Ваш пароль" name="user-password">
			<button type="button" id="login-with-pass-submit" class="green-bg white-text w-65 mx-auto font-bold mt-1 p-1">ВОЙТИ</button>
		</div>
	</form>
</div>