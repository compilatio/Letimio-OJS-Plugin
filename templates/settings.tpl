<div
	id="letimioSettingsPanelRoot"
	data-api-url="{$letimioSettingsApiUrl|escape}"
	data-csrf-token="{$letimioCsrfToken|escape}"
></div>

<script>
	(function () {ldelim}
		function mountLetimioSettingsPanel() {ldelim}
			var target = document.getElementById('letimioSettingsPanelRoot');

			if (!target || 'true' === target.dataset.mounted) {ldelim}
				return;
			{rdelim}

			if (!window.pkp || !window.pkp.pkpCreateVueApp || !window.mountLetimioSettingsApp) {ldelim}
				window.setTimeout(mountLetimioSettingsPanel, 100);
				return;
			{rdelim}

			window.mountLetimioSettingsApp(target);
			target.dataset.mounted = 'true';
		{rdelim}

		mountLetimioSettingsPanel();
	{rdelim})();
</script>
