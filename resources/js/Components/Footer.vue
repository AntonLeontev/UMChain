<script setup>

</script>

<template>
    <footer class="footer shrink-0 basis-auto">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__logo">
					<router-link :to="{name: 'home'}">
                        <img
                            src="/resources/images/svg/logo.svg"
                            alt="logo"
                            width="116"
                        />
					</router-link>
                </div>
                <div class="footer__col"></div>
                <div class="footer__col footer__col--two">
                    <ul></ul>
                </div>
            </div>
            <div class="footer__rights">© UMChain OU, Estonia, 2024г.</div>
            <div class="mt-2 text-white underline"><a href="/Privacy_policy.pdf" target="_blank">{{ $t('footer.policy') }}</a></div>
        </div>
    </footer>
</template>
