<template>
	<div>

<heady/>
<navi/>
<verify/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navi from"@/components/inc/navigation.vue";
import verify from"@/components/inc/verify.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navi,verify,footerr
  }
};
</script>