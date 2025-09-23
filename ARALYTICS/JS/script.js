console.log('login script loaded');
// Modal handling for login modal
document.addEventListener('DOMContentLoaded', function () {
	// Mobile hamburger toggle: show/hide #main-nav on small screens
	const burgerBtn = document.getElementById('burger-btn');
	const mainNav = document.getElementById('main-nav');
	if (burgerBtn && mainNav) {
		// ensure burger is only visible via CSS; JS only toggles state
		burgerBtn.addEventListener('click', function (e) {
			e.preventDefault();
			const isOpen = mainNav.classList.toggle('open');
			burgerBtn.setAttribute('aria-expanded', String(isOpen));
			burgerBtn.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
		});

		// close nav after link click on mobile
		mainNav.addEventListener('click', function (e) {
			const t = e.target;
			if (t && t.tagName === 'A' && mainNav.classList.contains('open')) {
				mainNav.classList.remove('open');
				burgerBtn.setAttribute('aria-expanded', 'false');
				burgerBtn.setAttribute('aria-label', 'Open navigation');
			}
		});
	}
	const loginBtn = document.getElementById('login-btn');
	const loginModal = document.getElementById('login-modal');
	const loginOverlay = document.getElementById('login-overlay');
	const loginClose = document.getElementById('login-close');
	const loginForm = document.getElementById('login-form');
	const loginEmail = document.getElementById('login-email');
	const loginPassword = document.getElementById('login-password');
	const passwordToggle = document.getElementById('password-toggle');
	const passwordEye = document.getElementById('password-eye');

	if (!loginBtn || !loginModal) return;

	function openModal() {
		loginModal.classList.remove('hidden');
		document.body.style.overflow = 'hidden';
		// blur the header so it appears behind the modal
		try {
			const hdr = document.querySelector('header');
			if (hdr) hdr.classList.add('modal-blur');
		} catch (err) { /* ignore */ }
	}

	function closeModal() {
		// Reset form fields (if any) and hide modal
		if (loginForm) {
			try { loginForm.reset(); } catch (err) { /* ignore */ }
		}
		loginModal.classList.add('hidden');
		document.body.style.overflow = '';
		// remove header blur when modal closes
		try {
			const hdr = document.querySelector('header');
			if (hdr) hdr.classList.remove('modal-blur');
		} catch (err) { /* ignore */ }
	}

	loginBtn.addEventListener('click', function (e) {
		e.preventDefault();
		openModal();
		// focus the email field when modal opens
		setTimeout(function () { if (loginEmail) loginEmail.focus(); }, 50);
	});

	loginClose && loginClose.addEventListener('click', function (e) {
		e.preventDefault();
		closeModal();
	});

	loginOverlay && loginOverlay.addEventListener('click', function () {
		closeModal();
	});

	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && !loginModal.classList.contains('hidden')) {
			closeModal();
		}
	});

	// Optional: prevent form submission in demo (remove if server-side auth will handle it)
	if (loginForm) {
		loginForm.addEventListener('submit', function (e) {
			e.preventDefault();
			const formData = new FormData(loginForm);
			console.log('Login attempt', Object.fromEntries(formData.entries()));
			closeModal();
		});
	}

	// No extra modal action handlers: modal opens directly into the form

	// Password visibility toggle
	if (passwordToggle && loginPassword && passwordEye) {
		passwordToggle.addEventListener('click', function () {
			if (loginPassword.type === 'password') {
				loginPassword.type = 'text';
				passwordToggle.setAttribute('aria-label', 'Hide password');
				// switch to eye-off icon
				passwordEye.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.967 9.967 0 012.223-3.377m3.61-2.358A9.953 9.953 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.02 10.02 0 01-4.212 5.013M15 12a3 3 0 11-6 0 3 3 0 016 0z" />';
			} else {
				loginPassword.type = 'password';
				passwordToggle.setAttribute('aria-label', 'Show password');
				// restore eye icon
				passwordEye.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />\n                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />';
			}
		});
	}

	// Register modal handling
	const createAccountBtn = document.getElementById('create-account-btn');
	const registerModal = document.getElementById('register-modal');
	const registerOverlay = document.getElementById('register-overlay');
	const registerClose = document.getElementById('register-close');
	const registerBackLogin = document.getElementById('register-back-login');
	const registerForm = document.getElementById('register-form');
	const regPassword = document.getElementById('reg-password');
	const regConfirm = document.getElementById('reg-confirm');

	function openRegister() {
		if (!registerModal) return;
		// make sure any other modal (login) is closed so register modal is visible
		if (loginModal && !loginModal.classList.contains('hidden')) {
			loginModal.classList.add('hidden');
		}
		console.log('Opening register modal');
		registerModal.classList.remove('hidden');
		document.body.style.overflow = 'hidden';
		// blur the header while register modal is open
		try {
			const hdr = document.querySelector('header');
			if (hdr) hdr.classList.add('modal-blur');
		} catch (err) { /* ignore */ }
	}

	function closeRegister() {
		if (!registerModal) return;
		if (registerForm) {
			try { registerForm.reset(); } catch (err) { /* ignore */ }
		}
		registerModal.classList.add('hidden');
		document.body.style.overflow = '';
		// remove header blur when register modal closes
		try {
			const hdr = document.querySelector('header');
			if (hdr) hdr.classList.remove('modal-blur');
		} catch (err) { /* ignore */ }
	}

	if (createAccountBtn) {
		createAccountBtn.addEventListener('click', function (e) {
			e.preventDefault();
			openRegister();
			setTimeout(function () { const el = document.getElementById('reg-first'); if (el) el.focus(); }, 50);
		});
	}

	registerClose && registerClose.addEventListener('click', function (e) { e.preventDefault(); closeRegister(); });
	registerOverlay && registerOverlay.addEventListener('click', function () { closeRegister(); });
	registerBackLogin && registerBackLogin.addEventListener('click', function (e) { e.preventDefault(); closeRegister(); });

	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && registerModal && !registerModal.classList.contains('hidden')) {
			closeRegister();
		}
	});

	if (registerForm) {
		registerForm.addEventListener('submit', function (e) {
			e.preventDefault();
			if (regPassword && regConfirm && regPassword.value !== regConfirm.value) {
				alert('Passwords do not match.');
				return;
			}
			const formData = new FormData(registerForm);
			console.log('Register attempt', Object.fromEntries(formData.entries()));
			closeRegister();
		});
	}
});
