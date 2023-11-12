<template>
	<div>

<heady/>
<navi/>
<signup/>
<footerr/>
  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import signup from"@/components/signup.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady, navi, signup, footerr
  }
};
</script>