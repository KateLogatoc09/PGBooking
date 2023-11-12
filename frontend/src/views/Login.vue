<template>
	<div>

<heady/>
<navi/>
<signin/>
<footerr/>
  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import signin from"@/components/signin.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady, navi, signin, footerr
  }
};
</script>